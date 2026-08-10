# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## What this repo is

This is the WordPress theme deployed at **csicservices.com**. It is the **"Hello Elementor" theme (v3.4.4) used directly as the site's live theme** — this repo is *not* a child theme. The theme directory in this repo maps 1:1 to `wp-content/themes/hello-elementor` on the production server (see Deployment below). Most PHP files (`functions.php`, `theme.php`, `includes/`, `modules/admin-home/`, `template-parts/`, `assets/`) are unmodified Hello Elementor core files; the CSIC-specific work lives in a set of custom top-level page templates (see below) and a few appended hooks at the bottom of `functions.php`.

Because this is the parent theme and not a child theme, updating "Hello Elementor" from wordpress.org would overwrite the custom templates and the appended CSIC code in `functions.php` — keep that in mind before suggesting a theme update.

There is no build step, package manager, or test suite in this repo: no `package.json`, no `composer.json`, no bundler config. `assets/css/*.css` and `assets/js/*.js` are pre-built/minified files shipped as-is from upstream Hello Elementor; `vendor/` is a committed (not composer-installed-here) copy of Elementor's `wp-notifications-package` dependency. Treat all PHP files as the source of truth — edit them directly.

## Deployment

`.github/workflows/deploy.yml` runs on every push to `main`: it SSHes into the A2 Hosting server and does `cd /home/csicser1/public_html/wp-content/themes/hello-elementor && git pull origin main`. There is no build/compile step in CI — whatever is committed on `main` is what goes live immediately.

**Branching model:** development happens on `dev` (the default working branch); changes are merged into `main` only when ready to ship, since a `main` push deploys straight to production. There is no staging environment or CI test step — treat merges to `main` as production releases.

## Architecture

### Stock Hello Elementor core (avoid editing unless necessary)
- `functions.php` — theme bootstrap, defines `HELLO_*` path/URL constants, registers nav menus, enqueues `reset.css`/`theme.css`/`header-footer.css`, requires `theme.php`.
- `theme.php` — `HelloTheme\Theme` singleton: PSR-4-ish autoloader (namespace `HelloTheme\` maps to files via a class-name-to-path convention), module registry (`init_modules()` currently loads only `AdminHome`).
- `includes/module-base.php` — abstract `Module_Base` all modules extend; modules are singletons composed of `Components\*` classes and optional Elementor `Widgets\*`.
- `modules/admin-home/` — the one active module; powers the WP-admin "Hello Theme" home dashboard (components: `Admin_Menu_Controller`, `Scripts_Controller`, `Api_Controller`, `Ajax_Handler`, `Conversion_Banner`, `Admin_Top_Bar`, `Settings_Controller`, `Notificator`; REST endpoints under `modules/admin-home/rest/`).
- `includes/elementor-functions.php` / `includes/customizer-functions.php` / `includes/settings-functions.php` — Hello Elementor's cross-site header/footer experiment, Customizer controls, and theme settings page.
- `header.php`, `footer.php`, `sidebar.php`, `comments.php`, `single.php`, `index.php`, `template-parts/*` — standard Hello Elementor template hierarchy; these dispatch to Elementor's theme-builder locations (`elementor_theme_do_location()`) when Elementor Pro locations exist, and fall back to `template-parts/*.php` otherwise.
- `theme.json` — block-editor (Gutenberg) global styles config; unrelated to the Tailwind-based custom templates below.

### CSIC custom page templates (top-level `*.php` files with `Template Name:` headers)
These are the actual site-specific work. Each is a **self-contained WordPress Page Template** selectable in the WP editor's "Template" dropdown. Two distinct patterns are used:

1. **Fully isolated documents** (`csic_legal_template.php`, `dental_growth_template.php`, `seo_growth_template.php`, `template-audit-isolated.php`, `template-contact-isolated.php`, `template-law-seo.php`, `page-csic-master.php`, `front-page.php`): output their own `<html>`/`<head>`/`<body>` from scratch, do **not** call `get_header()`/`get_footer()`, and load the **Tailwind CDN script** (`cdn.tailwindcss.com`) plus **Font Awesome CDN** and Google Fonts directly. They exist specifically to bypass Elementor's global kit CSS and the theme's `reset.css`/`theme.css` (comments in the files call this "isolation" to avoid "theme bloat"/specificity fights with the Elementor Global Kit). Each defines its own `:root` CSS variables (commonly `--primary: #066aab`) and inline `<style>` block.
2. **Header/footer-integrated templates** (`salesforce_template.php`, `template-service.php`, `archive-blog.php`, `home.php`): call `get_header()`/`get_footer()` normally and layer Tailwind (via CDN) + custom styles on top of the standard theme chrome.

When adding a new landing/service page, check whether it needs to match an existing vertical (legal, dental, SEO growth, Salesforce, general agency service) — the existing templates are close analogues to copy structure/CSS-variable conventions from rather than starting from scratch.

**Unification in progress:** these templates currently duplicate the same scaffolding (CDN `<script>`/`<link>` tags, `:root` variable names, isolation-shield CSS) with drift between them — e.g. `--primary: #066aab` vs. `--agency-primary: #2563eb`, and Font Awesome pinned to `6.0.0` in some templates vs. `6.4.2` in others. There's an active effort to bring these into a shared, consistent set of conventions (colors, CDN versions, shared partials/includes) rather than each template re-declaring its own. When editing one of these templates, prefer changes that reduce this drift (reuse an existing variable name/CSS block instead of inventing a new one) over ones that add another one-off variant.

`home.php` is the blog index (posts list) — note the file's own comment explaining it's named `home.php` (not `index.php`) specifically so it only overrides the blog view without breaking the theme's default template fallback. `archive-blog.php` is a separate "B2B Authority Blog" archive/editorial template.

Because every CDN-loading template pulls Tailwind/Font Awesome/fonts fresh on each pageview, be aware of the performance and FOUC (flash of unstyled content) tradeoffs already accepted here — this is a deliberate (if unconventional) choice made across all the custom templates, not an oversight in just one file.

### Registered nav menu locations
- `menu-1` ("Header"), `menu-2` ("Footer") — from stock Hello Elementor.
- `landing-menu` ("CSIC Landing Menu") — added at the bottom of `functions.php` via `register_csic_menus()`, used by the isolated landing-page templates.

## Working in this repo
- There's no linter/formatter/test command configured — match the surrounding code style by hand (WordPress PHP conventions in core files, Tailwind utility classes in the CSIC templates).
- Since production deploys via `git pull` on `main` with no build step, any CSS/JS you add to a custom template must be either inline `<style>`/CDN-script based (matching the existing pattern) or reference a file already present under `assets/`.
- `readme.txt` is the stock WordPress.org theme readme (changelog for upstream Hello Elementor) — not project-specific documentation; don't confuse it with a real README.
