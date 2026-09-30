<?php
/**
 * Template Name: Shopify SEO Audit (Isolated)
 *
 * Single-purpose Google Ads landing page. Fully isolated (no get_header()/
 * get_footer(), no theme nav, no landing-menu, no footer links) — the only
 * exit path on this page is the form submit, by design, since every click
 * away is paid traffic wasted. See CLAUDE.md "CSIC custom page templates"
 * for the isolation pattern this follows.
 *
 * REQUIRED SETUP (do this in wp-admin before pointing ads traffic here):
 *   1. Create a new WPForms form with fields (exact labels matter, the CRM
 *      webhook hook in functions.php matches on them):
 *        - Text,   label "Shopify Store URL"  (required)
 *        - Email,  label "Email"              (required)
 *        - Text,   label "First Name"
 *        - Text,   label "Phone"
 *        - Hidden, label "gclid",            CSS class csic-f-gclid
 *        - Hidden, label "utm_source",       CSS class csic-f-utm_source
 *        - Hidden, label "utm_medium",       CSS class csic-f-utm_medium
 *        - Hidden, label "utm_campaign",     CSS class csic-f-utm_campaign
 *        - Hidden, label "utm_term",         CSS class csic-f-utm_term
 *        - Hidden, label "Landing Page URL", CSS class csic-f-landing-page
 *      Settings > Spam Protection: leave Honeypot on, do NOT enable reCAPTCHA.
 *      Settings > Confirmations: type "Message" (inline) — NOT "Show Page",
 *      or the Google Ads conversion event below never fires.
 *   2. Set CSIC_SHOPIFY_AUDIT_WPFORMS_ID below to that form's ID.
 *   3. Add the real endpoint to wp-config.php:
 *        define( 'CRM_WEBHOOK_URL', 'https://your-crm.example.com/webhook' );
 *      (functions.php defines a blank fallback so the site doesn't fatal
 *      without it — the webhook post just no-ops until this is set.)
 *   4. Assign this template to a Page (e.g. slug /shopify-seo-audit/), then
 *      set that Page's Rank Math SEO Title/Description in wp-admin — Rank
 *      Math owns <title>/meta description on this site (see functions.php),
 *      the <title>/meta tags below only render as a fallback if Rank Math
 *      is ever deactivated.
 *   5. Wire a Google Ads conversion action to the GTM/gtag custom event
 *      "shopify_seo_audit_lead" pushed to window.dataLayer on submit.
 */

if ( ! defined( 'CSIC_SHOPIFY_AUDIT_WPFORMS_ID' ) ) {
	define( 'CSIC_SHOPIFY_AUDIT_WPFORMS_ID', 6094 );
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php if ( ! defined( 'RANK_MATH_VERSION' ) ) : ?>
    <title>Free Shopify SEO Audit | CSIC Services — Shopify SEO Agency</title>
    <meta name="description" content="Get a free Shopify SEO audit from CSIC Services. See exactly why your store isn't ranking or converting — technical SEO, product page fixes, and AI search visibility included. No obligation.">
    <link rel="canonical" href="<?php echo esc_url( get_permalink() ); ?>">
    <?php endif; ?>

    <script type="application/ld+json">
    <?php
    echo wp_json_encode(
        array(
            '@context' => 'https://schema.org',
            '@graph'   => array(
                array(
                    '@type'     => 'Organization',
                    'name'      => 'CSIC Services',
                    'url'       => 'https://csicservices.com',
                    'telephone' => '+14045902742',
                    'email'     => 'support@csicservices.com',
                ),
                array(
                    '@type'       => 'Service',
                    'serviceType' => 'Shopify SEO Audit',
                    'provider'    => array(
                        '@type' => 'Organization',
                        'name'  => 'CSIC Services',
                    ),
                    'areaServed'  => 'US',
                    'description' => 'Free Shopify SEO audit covering technical SEO, product page optimization, content gaps, AI search/answer-engine visibility, and competitor analysis for Shopify stores.',
                    'offers'      => array(
                        '@type'         => 'Offer',
                        'price'         => '0',
                        'priceCurrency' => 'USD',
                    ),
                ),
            ),
        )
    );
    ?>
    </script>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        :root { --primary: #2563eb; --secondary: #066aab; }

        #shopify-audit-shield {
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, sans-serif !important;
            font-size: 15px !important;
            line-height: 1.6 !important;
            color: #1f2937 !important;
            background-color: #ffffff;
        }
        #shopify-audit-shield h1 { font-size: 40px !important; font-weight: 900 !important; line-height: 1.15 !important; color: #111827 !important; }
        #shopify-audit-shield h2 { font-size: 30px !important; font-weight: 800 !important; color: #111827 !important; }
        #shopify-audit-shield h3 { font-size: 17px !important; font-weight: 700 !important; color: #111827 !important; }

        .text-primary { color: var(--primary) !important; }
        .bg-primary { background-color: var(--primary) !important; }
        .border-primary { border-color: var(--primary) !important; }
        .btn-hover { transition: all 0.2s ease; }
        .btn-hover:hover { transform: translateY(-2px); box-shadow: 0 10px 20px -6px rgba(37, 99, 235, 0.45); }

        html { scroll-behavior: smooth; margin-top: 0 !important; }

        /* WPForms field styling for the audit form card */
        .audit-form-container .wpforms-field { padding: 0 !important; margin-bottom: 18px !important; clear: both; }
        .audit-form-container .wpforms-field-label { display: block !important; font-weight: 700 !important; font-size: 12px !important; text-transform: uppercase !important; letter-spacing: 0.05em !important; color: #4a5568 !important; margin-bottom: 6px !important; }
        .audit-form-container input, .audit-form-container textarea { width: 100% !important; padding: 12px 16px !important; border-radius: 8px !important; border: 1px solid #cbd5e0 !important; background: #ffffff !important; font-size: 16px !important; color: #2d3748 !important; box-shadow: none !important; height: auto !important; }
        .audit-form-container input:focus { border-color: var(--primary) !important; outline: none !important; box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.12) !important; }
        .audit-form-container .wpforms-submit-container { text-align: center !important; padding: 0 !important; margin-top: 6px !important; }
        .audit-form-container button.wpforms-submit { width: 100% !important; background-color: var(--primary) !important; border: none !important; color: #fff !important; font-size: 14px !important; font-weight: 800 !important; text-transform: uppercase !important; letter-spacing: 0.12em !important; padding: 16px 30px !important; border-radius: 10px !important; cursor: pointer !important; transition: all 0.2s ease !important; }
        .audit-form-container button.wpforms-submit:hover { transform: translateY(-2px) !important; }
        .audit-form-container .wpforms-container { margin: 0 !important; }

        /* Hidden UTM/gclid fields never take visual space even before WPForms JS hides type=hidden inputs */
        .csic-f-gclid, .csic-f-utm_source, .csic-f-utm_medium, .csic-f-utm_campaign, .csic-f-utm_term, .csic-f-landing-page { display: none !important; }

        /* #shopify-audit-shield h2 forces a dark heading color; this section's h2 sits on the blue bg-primary band and needs to stay white */
        #shopify-audit-shield #audit-form h2 { color: #ffffff !important; }

        /* Hero icon badge: Shopify green, layered gradient + shadows for a 3D pop instead of a flat brand-colored glyph */
        .icon-3d-shopify {
            width: 84px;
            height: 84px;
            border-radius: 22px;
            margin: 0 auto 28px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(145deg, #a3d160, #5e8e3e);
            box-shadow: 0 16px 30px -10px rgba(94, 142, 62, 0.55), inset 0 2px 3px rgba(255, 255, 255, 0.45), inset 0 -8px 12px rgba(0, 0, 0, 0.18);
            transform: rotate(-4deg);
        }
        .icon-3d-shopify i {
            font-size: 40px;
            color: #ffffff;
            transform: rotate(4deg);
            filter: drop-shadow(0 3px 3px rgba(0, 0, 0, 0.25));
        }
    </style>

    <?php wp_head(); ?>
</head>
<body <?php body_class( 'bg-white' ); ?>>

<div id="shopify-audit-shield">

    <!-- Minimal brand strip — not a nav, no off-page links except tel: -->
    <div class="w-full border-b border-gray-100 py-4">
        <div class="max-w-5xl mx-auto px-6 flex justify-between items-center">
            <span class="text-primary font-black text-lg uppercase tracking-tight">CSIC <span class="text-gray-700">Services</span></span>
            <a href="tel:+14045902742" class="text-xs sm:text-sm font-bold text-gray-500 hover:text-primary transition">
                <i class="fas fa-phone-alt mr-1"></i> (404) 590-2742
            </a>
        </div>
    </div>

    <!-- HERO -->
    <section class="pt-14 pb-16 md:pt-20 md:pb-20 bg-slate-50">
        <div class="max-w-3xl mx-auto px-6 text-center">
            <div class="icon-3d-shopify"><i class="fab fa-shopify"></i></div>
            <span class="text-primary font-bold uppercase tracking-widest text-xs mb-4 block">Free Shopify SEO Audit</span>
            <h1>Get Your Free Shopify SEO Audit — Find Out Why You're Not Ranking (Or Selling)</h1>
            <p class="text-lg text-gray-500 mt-6 mb-10 leading-relaxed">
                Getting traffic but not enough sales? Our Shopify SEO experts will audit your store's technical SEO, product pages, and AI search visibility — free, with no obligation.
            </p>
            <a href="#audit-form" class="inline-block bg-primary text-white px-10 py-5 rounded-xl font-bold text-lg btn-hover">
                Get My Free Shopify SEO Audit
            </a>
        </div>
    </section>

    <!-- TRUST BAR -->
    <section class="py-8 border-b border-gray-100 bg-white">
        <div class="max-w-5xl mx-auto px-6 grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <div>
                <i class="fas fa-file-signature text-primary text-xl mb-2"></i>
                <p class="text-xs font-bold uppercase tracking-wide text-gray-600">No Long Contracts</p>
            </div>
            <div>
                <i class="fab fa-shopify text-primary text-xl mb-2"></i>
                <p class="text-xs font-bold uppercase tracking-wide text-gray-600">Shopify + SEO Specialists</p>
            </div>
            <div>
                <i class="fas fa-chart-line text-primary text-xl mb-2"></i>
                <p class="text-xs font-bold uppercase tracking-wide text-gray-600">Clear Reporting</p>
            </div>
            <div>
                <i class="fas fa-gift text-primary text-xl mb-2"></i>
                <p class="text-xs font-bold uppercase tracking-wide text-gray-600">Free, No-Obligation Audit</p>
            </div>
        </div>
    </section>

    <!-- WHAT THE AUDIT COVERS -->
    <section class="py-20 bg-white">
        <div class="max-w-5xl mx-auto px-6">
            <h2 class="text-center mb-4">What Your Shopify SEO Audit Covers</h2>
            <p class="text-center text-gray-500 max-w-2xl mx-auto mb-14">A full technical and content teardown from a Shopify SEO agency that specializes in product pages that rank — not a generic SEO checklist.</p>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <a href="<?php echo esc_url( home_url( '/shopify-audit/technical-seo-health/' ) ); ?>" target="_blank" rel="noopener" class="block p-6 rounded-2xl bg-slate-50 border border-slate-100 hover:border-primary hover:shadow-lg transition">
                    <i class="fas fa-magnifying-glass text-primary text-2xl mb-4"></i>
                    <h3 class="mb-2">Technical SEO Health</h3>
                    <p class="text-sm text-gray-500">Crawlability, indexing errors, site speed, and structured data issues holding your store back.</p>
                </a>
                <a href="<?php echo esc_url( home_url( '/shopify-audit/product-page-optimization/' ) ); ?>" target="_blank" rel="noopener" class="block p-6 rounded-2xl bg-slate-50 border border-slate-100 hover:border-primary hover:shadow-lg transition">
                    <i class="fas fa-box-open text-primary text-2xl mb-4"></i>
                    <h3 class="mb-2">Product Page Optimization</h3>
                    <p class="text-sm text-gray-500">Why your product pages aren't ranking, and what it takes to build product pages that rank and convert.</p>
                </a>
                <a href="<?php echo esc_url( home_url( '/shopify-audit/content-gap-analysis/' ) ); ?>" target="_blank" rel="noopener" class="block p-6 rounded-2xl bg-slate-50 border border-slate-100 hover:border-primary hover:shadow-lg transition">
                    <i class="fas fa-list-check text-primary text-2xl mb-4"></i>
                    <h3 class="mb-2">Content Gap Analysis</h3>
                    <p class="text-sm text-gray-500">The keywords and pages your competitors rank for that your store is missing entirely.</p>
                </a>
                <a href="<?php echo esc_url( home_url( '/shopify-audit/ai-search-visibility/' ) ); ?>" target="_blank" rel="noopener" class="block p-6 rounded-2xl bg-slate-50 border border-slate-100 hover:border-primary hover:shadow-lg transition">
                    <i class="fas fa-robot text-primary text-2xl mb-4"></i>
                    <h3 class="mb-2">AI Search Visibility</h3>
                    <p class="text-sm text-gray-500">How your store shows up in AI Overviews and answer engines — the new front door to search.</p>
                </a>
                <a href="<?php echo esc_url( home_url( '/shopify-audit/competitor-gap-report/' ) ); ?>" target="_blank" rel="noopener" class="block p-6 rounded-2xl bg-slate-50 border border-slate-100 hover:border-primary hover:shadow-lg transition">
                    <i class="fas fa-users text-primary text-2xl mb-4"></i>
                    <h3 class="mb-2">Competitor Gap Report</h3>
                    <p class="text-sm text-gray-500">Exactly where competing Shopify stores are beating you in Google, and what closes the gap.</p>
                </a>
                <a href="<?php echo esc_url( home_url( '/shopify-audit/shopify-specific-fixes/' ) ); ?>" target="_blank" rel="noopener" class="block p-6 rounded-2xl bg-slate-50 border border-slate-100 hover:border-primary hover:shadow-lg transition">
                    <i class="fas fa-wrench text-primary text-2xl mb-4"></i>
                    <h3 class="mb-2">Shopify-Specific Fixes</h3>
                    <p class="text-sm text-gray-500">Theme bloat, app conflicts, and duplicate collection URLs that are unique headaches on Shopify.</p>
                </a>
            </div>
        </div>
    </section>

    <!-- HOW IT WORKS -->
    <section class="py-20 bg-slate-50">
        <div class="max-w-4xl mx-auto px-6">
            <h2 class="text-center mb-14">How It Works</h2>
            <div class="grid md:grid-cols-3 gap-10 text-center">
                <div>
                    <div class="w-12 h-12 rounded-full bg-primary text-white flex items-center justify-center font-black text-lg mx-auto mb-4">1</div>
                    <h3 class="mb-2">Submit Your Store URL</h3>
                    <p class="text-sm text-gray-500">Fill out the short form below — takes under a minute.</p>
                </div>
                <div>
                    <div class="w-12 h-12 rounded-full bg-primary text-white flex items-center justify-center font-black text-lg mx-auto mb-4">2</div>
                    <h3 class="mb-2">We Audit It</h3>
                    <p class="text-sm text-gray-500">Our Shopify SEO experts run the full technical, product page, and competitor teardown.</p>
                </div>
                <div>
                    <div class="w-12 h-12 rounded-full bg-primary text-white flex items-center justify-center font-black text-lg mx-auto mb-4">3</div>
                    <h3 class="mb-2">Get Your Report + Call</h3>
                    <p class="text-sm text-gray-500">A plain-English report and a call to walk through what to fix first.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FORM -->
    <section id="audit-form" class="py-20 bg-primary text-white text-center">
        <div class="max-w-2xl mx-auto px-6">
            <h2 class="text-white mb-4">Get Your Free Shopify SEO Audit</h2>
            <p class="text-blue-100 text-lg mb-10">No cost, no obligation. Just tell us where to send it.</p>

            <div class="bg-white rounded-2xl shadow-2xl p-6 md:p-10 audit-form-container text-left">
                <?php
                if ( CSIC_SHOPIFY_AUDIT_WPFORMS_ID ) {
                    echo do_shortcode( '[wpforms id="' . absint( CSIC_SHOPIFY_AUDIT_WPFORMS_ID ) . '"]' );
                } elseif ( current_user_can( 'manage_options' ) ) {
                    echo '<p style="color:#b91c1c;font-weight:700;">Admin notice: set CSIC_SHOPIFY_AUDIT_WPFORMS_ID in page-shopify-seo-audit.php to your WPForms form ID.</p>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="py-20 bg-white">
        <div class="max-w-2xl mx-auto px-6">
            <h2 class="text-center mb-12">Frequently Asked Questions</h2>

            <details class="group border-b border-gray-200 py-5">
                <summary class="flex justify-between items-center gap-4 cursor-pointer font-bold text-gray-900 list-none">
                    Is the audit really free?
                    <i class="fas fa-chevron-down text-primary text-sm transition group-open:rotate-180"></i>
                </summary>
                <p class="mt-3 text-sm text-gray-500 leading-relaxed">Yes. No cost, no credit card, and no obligation to work with us afterward.</p>
            </details>

            <details class="group border-b border-gray-200 py-5">
                <summary class="flex justify-between items-center gap-4 cursor-pointer font-bold text-gray-900 list-none">
                    Do I have to sign a contract?
                    <i class="fas fa-chevron-down text-primary text-sm transition group-open:rotate-180"></i>
                </summary>
                <p class="mt-3 text-sm text-gray-500 leading-relaxed">No. The audit is a standalone deliverable. If you decide to work with us after, we don't lock clients into long contracts.</p>
            </details>

            <details class="group border-b border-gray-200 py-5">
                <summary class="flex justify-between items-center gap-4 cursor-pointer font-bold text-gray-900 list-none">
                    How long does the audit take?
                    <i class="fas fa-chevron-down text-primary text-sm transition group-open:rotate-180"></i>
                </summary>
                <p class="mt-3 text-sm text-gray-500 leading-relaxed">Most audits are completed within a few business days of submitting your store URL.</p>
            </details>

            <details class="group border-b border-gray-200 py-5">
                <summary class="flex justify-between items-center gap-4 cursor-pointer font-bold text-gray-900 list-none">
                    What happens after I get my audit?
                    <i class="fas fa-chevron-down text-primary text-sm transition group-open:rotate-180"></i>
                </summary>
                <p class="mt-3 text-sm text-gray-500 leading-relaxed">We walk you through the findings on a call in plain English, and you decide what to do with it — fix it yourself, or have our team handle it.</p>
            </details>

            <details class="group border-b border-gray-200 py-5">
                <summary class="flex justify-between items-center gap-4 cursor-pointer font-bold text-gray-900 list-none">
                    Do I need to switch off Shopify?
                    <i class="fas fa-chevron-down text-primary text-sm transition group-open:rotate-180"></i>
                </summary>
                <p class="mt-3 text-sm text-gray-500 leading-relaxed">No. We work within Shopify — the audit and any fixes are built for your existing store and theme.</p>
            </details>
        </div>
    </section>

    <!-- FOOTER: copyright only, no off-page links -->
    <footer class="bg-gray-900 text-gray-400 py-10 text-center">
        <p class="text-xs">&copy; <?php echo esc_html( date( 'Y' ) ); ?> CSIC Services. All Rights Reserved.</p>
    </footer>

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

document.addEventListener( 'wpformsAjaxSubmitSuccess', function () {
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push( { event: 'shopify_seo_audit_lead', form_location: 'shopify_seo_audit_landing_page' } );
} );
</script>

<?php wp_footer(); ?>
</body>
</html>
