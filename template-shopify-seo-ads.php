<?php
/**
 * Template Name: Shopify SEO & Ads Package
 *
 * Header/footer-integrated landing page (see CLAUDE.md "CSIC custom page
 * templates" pattern 2) for the bundled Shopify SEO + Paid Ads retainer
 * package, linked from the homepage "Shopify & E-commerce" service card.
 * Lead offer is a free 30-day audit (no retainer billed during that month)
 * rather than a one-off report — that's what distinguishes this from the
 * existing free-standing Shopify SEO audit page and the teardown landing
 * page (seo_growth_template.php).
 *
 * REQUIRED SETUP (do this in wp-admin before linking real traffic here):
 *   1. Create a Page with slug "shopify-seo-ads" and assign this template,
 *      so it resolves at /shopify-seo-ads/ (the URL front-page.php's
 *      service card links to). Set its Rank Math SEO title/description.
 *   2. Create a Page with slug "shopify-growth-thank-you" — the post-submit
 *      redirect target. functions.php's csic_landing_thank_you_map() already
 *      points this template's AJAX-success redirect there; see
 *      csic_landing_thank_you_ajax_script()/csic_landing_thank_you_process_complete().
 *   3. This page reuses WPForms form 6094 (same form as the Shopify teardown
 *      landing page) and the CRM webhook in functions.php
 *      (csic_shopify_audit_crm_webhook()) now forwards submissions from
 *      either template. No new WPForms form or webhook wiring needed.
 */

get_header();
?>

<style>
    /* .hero-title/.section-title/.content-body/.feature-card copied verbatim
       from template-service.php's conventions rather than inventing a new
       variant — see CLAUDE.md's note on reducing drift between templates. */
    .shopify-package-page { font-family: 'Inter', sans-serif; background-color: #ffffff; color: #1e293b; line-height: 1.6; }
    .hero-title { font-size: clamp(2rem, 5vw, 3.25rem); font-weight: 800; letter-spacing: -0.03em; color: var(--agency-dark); line-height: 1.1; }
    .section-title { font-size: 1.75rem; font-weight: 800; color: var(--agency-dark); letter-spacing: -0.02em; }
    .content-body { font-size: 1.05rem; color: #475569; }
    .feature-card { border: 1px solid #f1f5f9; border-radius: 1rem; padding: 2rem; transition: all 0.3s ease; }
    .feature-card:hover { border-color: var(--agency-primary); box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1); }

    /* Hero icon badge — same gradient/shadow treatment as the Shopify audit
       landing page's icon-3d-shopify, reused here instead of a new variant. */
    .icon-3d-shopify {
        width: 84px; height: 84px; border-radius: 22px; margin: 0 auto 28px;
        display: flex; align-items: center; justify-content: center;
        background: linear-gradient(145deg, #a3d160, #5e8e3e);
        box-shadow: 0 16px 30px -10px rgba(94, 142, 62, 0.55), inset 0 2px 3px rgba(255, 255, 255, 0.45), inset 0 -8px 12px rgba(0, 0, 0, 0.18);
        transform: rotate(-4deg);
    }
    .icon-3d-shopify i { font-size: 40px; color: #ffffff; transform: rotate(4deg); filter: drop-shadow(0 3px 3px rgba(0, 0, 0, 0.25)); }

    /* Hidden UTM/gclid fields on the shared WPForms 6094 embed never take
       visual space, same as page-shopify-seo-audit.php. */
    .csic-f-gclid, .csic-f-utm_source, .csic-f-utm_medium, .csic-f-utm_campaign, .csic-f-utm_term, .csic-f-landing-page { display: none !important; }
</style>

<div class="shopify-package-page">

    <!-- HERO -->
    <header class="pt-32 pb-20 px-6 bg-slate-50 border-b border-slate-100">
        <div class="max-w-3xl mx-auto text-center">
            <div class="icon-3d-shopify"><i class="fab fa-shopify"></i></div>
            <span class="inline-flex items-center px-3 py-1 rounded-full text-[10px] font-black bg-blue-100 text-blue-700 uppercase tracking-widest mb-6">
                Shopify Growth Package
            </span>
            <h1 class="hero-title mb-6">Shopify SEO &amp; Ads, Run By One Team</h1>
            <p class="text-lg text-slate-500 mt-6 mb-10 leading-relaxed">
                Stop splitting your organic search and paid ads between agencies that don't talk to each other. We run both under one roadmap for your store — and your first 30 days are a full audit, on us.
            </p>
            <a href="#audit-form" class="btn-main px-10 py-5 rounded-xl font-black text-xs text-center shadow-xl shadow-blue-200 inline-block">
                Start My Free 30-Day Audit
            </a>
            <p class="text-xs text-slate-400 mt-4 uppercase tracking-widest font-bold">No long contracts &bull; No retainer billed during the audit month</p>
        </div>
    </header>

    <!-- TRUST BAR -->
    <section class="py-8 border-b border-slate-100 bg-white">
        <div class="max-w-5xl mx-auto px-6 grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <div>
                <i class="fas fa-file-signature text-blue-600 text-xl mb-2"></i>
                <p class="text-xs font-bold uppercase tracking-wide text-slate-600">No Long Contracts</p>
            </div>
            <div>
                <i class="fas fa-link text-blue-600 text-xl mb-2"></i>
                <p class="text-xs font-bold uppercase tracking-wide text-slate-600">SEO + Ads, One Team</p>
            </div>
            <div>
                <i class="fab fa-shopify text-blue-600 text-xl mb-2"></i>
                <p class="text-xs font-bold uppercase tracking-wide text-slate-600">Built For Shopify</p>
            </div>
            <div>
                <i class="fas fa-gift text-blue-600 text-xl mb-2"></i>
                <p class="text-xs font-bold uppercase tracking-wide text-slate-600">Free 30-Day Audit</p>
            </div>
        </div>
    </section>

    <!-- THE PACKAGE -->
    <section class="py-24 bg-white px-6">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="section-title">What's In the Package</h2>
                <p class="text-slate-500 mt-4 max-w-2xl mx-auto">Two disciplines, coordinated against the same growth roadmap instead of competing for budget.</p>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="feature-card bg-slate-50">
                    <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-magnifying-glass text-xl"></i>
                    </div>
                    <h3 class="font-extrabold text-lg text-slate-950 mb-4">Shopify SEO</h3>
                    <ul class="content-body text-sm space-y-3">
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Technical SEO: site speed, crawlability, duplicate collection URLs</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Product &amp; collection page optimization that ranks and converts</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Content &amp; blog strategy to close competitor keyword gaps</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>AI search / answer-engine visibility for your store</li>
                    </ul>
                </div>
                <div class="feature-card bg-slate-50">
                    <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-bullseye text-xl"></i>
                    </div>
                    <h3 class="font-extrabold text-lg text-slate-950 mb-4">Paid Ads</h3>
                    <ul class="content-body text-sm space-y-3">
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Google Shopping &amp; Performance Max campaign management</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Meta &amp; Instagram ads built around your product catalog</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Retargeting &amp; abandoned-cart ad flows</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Conversion tracking tied to GA4 &amp; Shopify analytics</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- HOW THE FREE AUDIT WORKS -->
    <section class="py-24 bg-slate-50 border-y border-slate-100 px-6">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-14">
                <h2 class="section-title">How the Free 30-Day Audit Works</h2>
                <p class="text-slate-500 mt-4">No cost, no obligation — you decide whether to continue once you've seen the roadmap.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-10 text-center">
                <div>
                    <div class="w-12 h-12 rounded-full bg-blue-600 text-white flex items-center justify-center font-black text-lg mx-auto mb-4">1</div>
                    <h3 class="font-bold text-slate-950 mb-2">Submit Your Store</h3>
                    <p class="text-sm text-slate-500">Tell us your Shopify URL and whether you're already running ads — takes under a minute.</p>
                </div>
                <div>
                    <div class="w-12 h-12 rounded-full bg-blue-600 text-white flex items-center justify-center font-black text-lg mx-auto mb-4">2</div>
                    <h3 class="font-bold text-slate-950 mb-2">We Audit SEO &amp; Ads</h3>
                    <p class="text-sm text-slate-500">Technical SEO, product pages, and your existing ad accounts (or a recommended ad strategy if you don't have any yet).</p>
                </div>
                <div>
                    <div class="w-12 h-12 rounded-full bg-blue-600 text-white flex items-center justify-center font-black text-lg mx-auto mb-4">3</div>
                    <h3 class="font-bold text-slate-950 mb-2">Get Your Roadmap</h3>
                    <p class="text-sm text-slate-500">A plain-English report and a call to walk through it. Move into the package, or walk away — either way it's yours.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FORM -->
    <section id="audit-form" class="py-24 bg-slate-900 text-white text-center px-6">
        <div class="max-w-2xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-extrabold mb-4 tracking-tight">Start My Free 30-Day Audit</h2>
            <p class="text-slate-sharp mb-10">No cost, no obligation. Just tell us where to send it.</p>
            <div class="bg-white rounded-3xl shadow-2xl p-6 md:p-10 audit-form-container text-left">
                <?php echo do_shortcode( '[wpforms id="6094"]' ); ?>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="py-24 bg-white px-6">
        <div class="max-w-2xl mx-auto">
            <h2 class="section-title text-center mb-12">Frequently Asked Questions</h2>

            <details class="group border-b border-slate-200 py-5">
                <summary class="flex justify-between items-center gap-4 cursor-pointer font-bold text-slate-900 list-none">
                    Is the 30-day audit really free?
                    <i class="fas fa-chevron-down text-blue-600 text-sm transition group-open:rotate-180"></i>
                </summary>
                <p class="mt-3 text-sm text-slate-500 leading-relaxed">Yes. We don't bill a retainer during your first 30 days — that month is the audit and roadmap, on us.</p>
            </details>

            <details class="group border-b border-slate-200 py-5">
                <summary class="flex justify-between items-center gap-4 cursor-pointer font-bold text-slate-900 list-none">
                    Do I need to already be running ads?
                    <i class="fas fa-chevron-down text-blue-600 text-sm transition group-open:rotate-180"></i>
                </summary>
                <p class="mt-3 text-sm text-slate-500 leading-relaxed">No. If you're not running ads yet, the audit includes a recommended paid strategy instead of reviewing an existing account.</p>
            </details>

            <details class="group border-b border-slate-200 py-5">
                <summary class="flex justify-between items-center gap-4 cursor-pointer font-bold text-slate-900 list-none">
                    Do I have to sign a long contract?
                    <i class="fas fa-chevron-down text-blue-600 text-sm transition group-open:rotate-180"></i>
                </summary>
                <p class="mt-3 text-sm text-slate-500 leading-relaxed">No. After the free audit month, the package runs month-to-month — no long-term lock-in.</p>
            </details>

            <details class="group border-b border-slate-200 py-5">
                <summary class="flex justify-between items-center gap-4 cursor-pointer font-bold text-slate-900 list-none">
                    Why bundle SEO and Ads instead of hiring separately?
                    <i class="fas fa-chevron-down text-blue-600 text-sm transition group-open:rotate-180"></i>
                </summary>
                <p class="mt-3 text-sm text-slate-500 leading-relaxed">One team means your ad spend and your organic strategy point at the same keywords and the same product pages, instead of two agencies working from different playbooks.</p>
            </details>
        </div>
    </section>

</div>

<script>
document.addEventListener( 'DOMContentLoaded', function () {
    var params = new URLSearchParams( window.location.search );
    var hidden = {
        'csic-f-gclid':        params.get( 'gclid' ) || '',
        'csic-f-utm_source':   params.get( 'utm_source' ) || '',
        'csic-f-utm_medium':   params.get( 'utm_medium' ) || '',
        'csic-f-utm_campaign': params.get( 'utm_campaign' ) || '',
        'csic-f-utm_term':     params.get( 'utm_term' ) || '',
        'csic-f-landing-page': window.location.href
    };
    Object.keys( hidden ).forEach( function ( cls ) {
        var field = document.querySelector( '.' + cls + ' input' );
        if ( field && hidden[ cls ] ) {
            field.value = hidden[ cls ];
        }
    } );
} );
</script>

<?php
get_template_part(
    'template-parts/csic-landing-footer',
    null,
    array(
        'blurb' => 'Shopify SEO and paid ads, run by one team against one growth roadmap. Headquartered in Kennesaw, GA.',
    )
);

get_footer();
