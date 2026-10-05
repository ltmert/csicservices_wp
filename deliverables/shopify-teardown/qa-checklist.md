# QA checklist — Shopify Store Teardown landing page

## Before you publish

- [ ] **Form ID**: confirm WPForms form `6094` still exists and its fields are name, email, store URL, monthly revenue range, biggest problem — the snippet only embeds `[wpforms id="6094"]`, it doesn't style the form itself. Check the rendered form doesn't visually clash with the page (font size, button color) and adjust WPForms' own styling settings if needed, since this snippet deliberately avoids touching WPForms CSS.
- [ ] **Submit a real test entry** through the form on the live page and confirm it arrives (email notification / WPForms entries list).
- [ ] **Paste the snippet** into the WPCode HTML snippet (shortcode location) or builder HTML widget on the target page, then view the live page, not just a preview.
- [ ] **Calendar link** — click it from the live page and confirm `https://calendar.app.google/nFmbH3um2WoHUGmU6` is still the correct booking link.

## Fill-in items still marked as placeholders

- [ ] **Sample teardown** (section 5): replace the `[SAMPLE_TEARDOWN: ...]` text with a real screenshot `<img>` (include `width`, `height`, `alt`, and `loading="lazy"`) or a link to a sample PDF.
- [ ] **Proof section** (section 6, `#csic-td-proof`): currently hidden with inline `style="display:none"` because `[PROOF_1]`, `[PROOF_2]`, and `[TESTIMONIAL_1]` are unfilled placeholders. Once you have real numbers/quote, replace the placeholder text and delete the inline `display:none` so the section shows.
- [ ] **30-day credit window**: the offer box assumes the $500 teardown fee is credited toward retainer only if you sign up within 30 days. Confirm that term or edit the `[CONFIRM: 30-day credit window...]` line and the surrounding sentence.
- [ ] **3-business-day turnaround**: appears in "How it works" step 2 and in the FAQ answer. Confirm 3 business days is accurate for your actual review capacity before publishing.

## Mobile / layout

- [ ] Test at 375px, 768px, and 1280px widths — confirm no horizontal scroll at any width.
- [ ] Confirm the hero, pain cards, and offer cards stack to a single column below 700px and move to multi-column at/above 700px.
- [ ] Confirm the WPForms embed itself doesn't introduce horizontal scroll on mobile (some WPForms layouts need "Modern" or "Classic" form style set to full-width).

## Accessibility

- [ ] Tab through the page with keyboard only — every CTA button, link, and FAQ `<summary>` should get a visible focus outline (blue `#066aab` outline from `:focus-visible`).
- [ ] Confirm FAQ accordion items (native `<details>`/`<summary>`, no JS) open/close correctly on mobile Safari and Android Chrome.
- [ ] Run a contrast check on the primary button (`#2563eb` background, white text) and body text (`#4b5563` on white) — both should pass WCAG AA.
- [ ] If you add a sample-teardown image, confirm it has descriptive `alt` text (not "image" or blank).

## Schema

- [ ] Paste the contents of `schema.jsonld` into Google's Rich Results Test and Schema.org Validator — confirm no errors.
- [ ] If you change any FAQ question/answer text in the HTML, update the matching `Question`/`Answer` pair in `schema.jsonld` so they stay word-for-word identical — mismatched FAQ schema can get the rich result disabled.
- [ ] Confirm the `price` fields ($0 / $500) in `schema.jsonld` still match what's shown in the offer box if you change pricing later.
- [ ] Add the JSON-LD to the page as a `<script type="application/ld+json">` block (e.g., via WPCode, a second HTML snippet, or your SEO plugin's custom schema field) — it is **not** already embedded in `teardown-landing.html`.

## Performance / conflicts

- [ ] Confirm no Tailwind CDN, Font Awesome, or Google Fonts script/link got pulled in from elsewhere on this specific page — the snippet is deliberately self-contained and uses the system font stack, so there should be no external requests from this content block.
- [ ] Inspect the live page's computed styles on a couple of elements (e.g. the H1, the primary button) to confirm no theme/Elementor global-kit CSS is overriding `.csic-td-` styles. If it is, the `.csic-td-` classes may need higher specificity or the snippet may need to load after theme CSS.
- [ ] Run PageSpeed Insights / Lighthouse on the live URL — confirm no layout shift (CLS) from the form embed loading in, and no render-blocking resources added by this snippet (it has none by design).

## Content

- [ ] Scan the final live page for any remaining bracketed placeholder text (`[SAMPLE_TEARDOWN`, `[PROOF_1`, `[PROOF_2`, `[TESTIMONIAL_1`, `[CONFIRM`) before launch — none should be visible to visitors.
- [ ] Confirm nothing on this page links to or removes the dentist/Salesforce niche links or Impressum/AGB links elsewhere on the site — this snippet doesn't touch those, by design.
