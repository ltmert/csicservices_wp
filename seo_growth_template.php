<?php
/**
 * Template Name: CSIC SEO Growth Landing
 * Version: 3.0 - Rebuilt for Shopify Store Teardown offer
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        :root { --primary: #066aab; --dark: #1a1a1a; }
        .bg-primary { background-color: var(--primary) !important; }
        .text-primary { color: var(--primary) !important; }
        .btn-animate { transition: transform 0.2s; }
        .btn-animate:hover { transform: scale(1.03); }
        html { scroll-behavior: smooth; margin-top: 0 !important; }

        /* THE NEAT SHIELD: Prevents theme from blowing up text */
        #seo-page-wrapper {
            font-size: 14px !important;
            line-height: 1.5;
            color: #1a1a1a;
        }
        #seo-page-wrapper h1 { font-size: 3.5rem !important; line-height: 1.1 !important; font-weight: 900 !important; }
        #seo-page-wrapper h2 { font-size: 2.25rem !important; font-weight: 800 !important; }

        /* WPForms Fix: Ensure text is dark, not white */
        .wpforms-form input, .wpforms-form textarea {
            color: #111827 !important;
            background-color: #ffffff !important;
            border: 1px solid #e5e7eb !important;
        }

        /* Video/Hero Layout Fixes */
        .hero-mockup { background: #f9fafb; border: 1px solid #f3f4f6; border-radius: 2rem; padding: 2rem; shadow: inset 0 2px 4px 0 rgba(0,0,0,0.05); }

        /* How-it-works numbered steps */
        #seo-page-wrapper .gs-steps { counter-reset: gs-step; }
        #seo-page-wrapper .gs-step { position: relative; padding-left: 3.25rem; }
        #seo-page-wrapper .gs-step::before {
            counter-increment: gs-step;
            content: counter(gs-step);
            position: absolute;
            left: 0; top: 0;
            width: 2.5rem; height: 2.5rem;
            border-radius: 50%;
            background: var(--primary);
            color: #fff;
            font-weight: 800;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Offer cards */
        #seo-page-wrapper .gs-offer-card { border: 2px solid #e5e7eb; border-radius: 1rem; padding: 1.75rem; background: #fff; }
        #seo-page-wrapper .gs-offer-card.gs-offer-featured { border-color: var(--primary); }

        /* FAQ accordion (native details/summary, no JS needed) */
        #seo-page-wrapper .gs-faq-item { border-bottom: 1px solid #e5e7eb; padding: 1.25rem 0; }
        #seo-page-wrapper .gs-faq-item summary {
            cursor: pointer;
            list-style: none;
            font-weight: 700;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 1rem;
        }
        #seo-page-wrapper .gs-faq-item summary::-webkit-details-marker { display: none; }
        #seo-page-wrapper .gs-faq-item summary::after { content: "+"; color: var(--primary); font-size: 1.25rem; flex-shrink: 0; }
        #seo-page-wrapper .gs-faq-item[open] summary::after { content: "\2212"; }
        #seo-page-wrapper .gs-faq-item p { margin-top: 0.75rem; color: #4b5563; font-size: 0.95rem; }

        /* Sample teardown placeholder slot */
        #seo-page-wrapper .gs-sample-box { border: 2px dashed #d1d5db; border-radius: 1rem; padding: 2.5rem; text-align: center; color: #6b7280; }
    </style>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "serviceType": "Shopify SEO, PPC, and Store Management",
          "provider": { "@type": "Organization", "name": "CSIC Services", "url": "https://csicservices.com" },
          "areaServed": "Online",
          "audience": {
            "@type": "Audience",
            "audienceType": "Owner-operated Shopify store owners doing $10K-$100K per month in revenue"
          },
          "description": "A hands-on teardown of a Shopify store's SEO, conversion, and paid ad efficiency, identifying 10 fixes ranked by revenue impact plus a 90-day growth plan, followed by an ongoing SEO, PPC, and store management retainer.",
          "offers": [
            {
              "@type": "Offer",
              "name": "Free mini-teardown",
              "price": "0",
              "priceCurrency": "USD",
              "description": "Top 3 fixes ranked by revenue impact, delivered by email, no obligation."
            },
            {
              "@type": "Offer",
              "name": "Full teardown",
              "price": "500",
              "priceCurrency": "USD",
              "description": "All 10 fixes ranked by revenue impact, a 90-day growth plan, and a live walkthrough call. Credited in full toward the first month of a retainer if started within 30 days."
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Who is this for?",
              "acceptedAnswer": { "@type": "Answer", "text": "Owner-operated Shopify stores doing roughly $10K–$100K per month in revenue who want more qualified traffic and higher conversion, without hiring a full in-house team." }
            },
            {
              "@type": "Question",
              "name": "What do you need from me to start?",
              "acceptedAnswer": { "@type": "Answer", "text": "Your store URL, a rough monthly revenue range, and read-only or collaborator access to Shopify, Google Analytics (GA4), and Google Ads if you're running paid traffic. We'll ask for exactly what we need after you submit the form." }
            },
            {
              "@type": "Question",
              "name": "How long does the teardown take?",
              "acceptedAnswer": { "@type": "Answer", "text": "We review your store and send your teardown within 3 business days of receiving access." }
            },
            {
              "@type": "Question",
              "name": "What happens after I get the teardown?",
              "acceptedAnswer": { "@type": "Answer", "text": "We walk through every finding on a call. If it's a fit, you can move into an ongoing retainer covering SEO, PPC, and store management — pricing is discussed on that call. There's no obligation to continue." }
            },
            {
              "@type": "Question",
              "name": "Are there contracts or minimums?",
              "acceptedAnswer": { "@type": "Answer", "text": "No long-term contract is required to get the teardown itself. Retainer terms, if you choose to continue, are discussed and agreed on the call before anything starts." }
            },
            {
              "@type": "Question",
              "name": "What if my store is on Shopify Plus?",
              "acceptedAnswer": { "@type": "Answer", "text": "We work with Shopify Plus stores too. The review covers the same areas — SEO, conversion, analytics, and paid efficiency — adapted to Plus-specific features like scripts and wholesale channels where relevant." }
            }
          ]
        }
      ]
    }
    </script>

    <?php wp_head(); ?>
</head>
<body class="bg-white font-sans text-gray-900">

<div id="seo-page-wrapper">

    <nav class="bg-white border-b sticky top-0 z-50 py-3">
        <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">
            <a href="https://csicservices.com" class="text-xl font-black text-primary tracking-tighter uppercase text-decoration-none">CSIC<span class="text-gray-700">SERVICES</span></a>
            <a href="/get-audit" class="bg-primary text-white px-5 py-2 rounded-full text-sm font-bold shadow-lg btn-animate">Get Free Audit</a>
        </div>
    </nav>

    <header class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center text-left">
            <div>
                <span class="bg-blue-50 text-primary font-bold uppercase tracking-widest text-[10px] px-3 py-1 rounded-full mb-6 inline-block">For Shopify stores doing $10K&ndash;$100K/mo</span>
                <h1 class="text-gray-900 mb-6">
                    Find the <span class="text-primary">10 fixes</span> costing your Shopify store the most revenue &mdash; free
                </h1>
                <p class="text-xl text-gray-600 mb-10 leading-relaxed">
                    A hands-on teardown of your SEO, conversion, and ad spend, plus a 90-day growth plan you can act on. No agency jargon, no generic audit template.
                </p>
                <div class="flex flex-col sm:flex-row gap-5">
                    <a href="#teardown-form" class="bg-primary text-white px-8 py-4 rounded-xl font-bold text-md shadow-xl btn-animate text-center">Get My Free Teardown</a>
                    <a href="https://calendar.app.google/nFmbH3um2WoHUGmU6" target="_blank" class="border-2 border-gray-100 text-gray-700 px-8 py-4 rounded-xl font-bold text-md hover:bg-gray-50 transition text-center">Or Book a Call Instead</a>
                </div>
                <p class="text-xs text-gray-500 mt-4">Every teardown is done by hand by someone who's looked at hundreds of Shopify stores &mdash; not a generated report.</p>
            </div>
            <div class="relative">
                <div class="hero-mockup">
                    <div class="space-y-4">
                        <div class="h-4 bg-gray-200 rounded w-3/4"></div>
                        <div class="h-4 bg-gray-200 rounded w-1/2"></div>
                        <div class="h-10 bg-blue-100 rounded-lg border-2 border-primary flex items-center px-4">
                            <span class="text-primary font-bold text-xs uppercase">CSIC Teardown: 7 revenue fixes found on your PDPs ↑</span>
                        </div>
                        <div class="h-4 bg-gray-200 rounded w-5/6"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="py-20 bg-gray-50">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-gray-900 mb-8">You're Not Imagining It</h2>
            <p class="text-lg text-gray-600 mb-12 leading-relaxed">You've tried a few things and the numbers barely move. It's not always obvious whether the problem is traffic, the site, or both &mdash; here's what we hear most from store owners before they talk to us.</p>

            <div class="grid md:grid-cols-3 gap-6 text-left">
                <div class="bg-white p-6 rounded-xl border border-gray-100">
                    <i class="fas fa-chart-line text-primary mb-4 text-xl"></i>
                    <h3 class="font-bold text-lg mb-2">"Traffic's flat no matter what I try."</h3>
                    <p class="text-xs text-gray-500">You've tried an app or two, maybe an agency for a few months, and the numbers barely move.</p>
                </div>
                <div class="bg-white p-6 rounded-xl border border-gray-100">
                    <i class="fas fa-cart-arrow-down text-primary mb-4 text-xl"></i>
                    <h3 class="font-bold text-lg mb-2">"People show up, but they don't buy."</h3>
                    <p class="text-xs text-gray-500">You can see visitors in analytics. You can't see why they leave on the product page or bail at checkout.</p>
                </div>
                <div class="bg-white p-6 rounded-xl border border-gray-100">
                    <i class="fas fa-hourglass-half text-primary mb-4 text-xl"></i>
                    <h3 class="font-bold text-lg mb-2">"I don't have time to fix this myself."</h3>
                    <p class="text-xs text-gray-500">You're running the business &mdash; ordering, fulfillment, support, marketing. Auditing your own SEO isn't on the list.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-gray-900">What's Actually in the Teardown</h2>
                <p class="text-gray-600 mt-4">We go through your store the way a buyer &mdash; and Google &mdash; actually experiences it.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-blue-100">
                    <i class="fas fa-magnifying-glass text-primary text-2xl mb-4"></i>
                    <h4 class="font-bold mb-2">Search &amp; Technical SEO</h4>
                    <p class="text-xs text-gray-500">Duplicate <code>/collections/.../products/</code> URLs, thin collection page content, missing product schema, and app/theme script bloat slowing your pages down.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-blue-100">
                    <i class="fas fa-mobile-screen text-primary text-2xl mb-4"></i>
                    <h4 class="font-bold mb-2">Conversion &amp; Product Pages</h4>
                    <p class="text-xs text-gray-500">Mobile PDP friction, checkout steps that lose people, and product descriptions that describe the product but don't answer the buyer's question.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-blue-100">
                    <i class="fas fa-chart-pie text-primary text-2xl mb-4"></i>
                    <h4 class="font-bold mb-2">Analytics &amp; Product Mix</h4>
                    <p class="text-xs text-gray-500">Whether your GA4 setup can tell you which products are profitable at the margin level, not just which ones sell the most units.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-blue-100">
                    <i class="fas fa-bullseye text-primary text-2xl mb-4"></i>
                    <h4 class="font-bold mb-2">Paid Ad Efficiency</h4>
                    <p class="text-xs text-gray-500">Where ad spend goes toward traffic that was never going to convert, and where it's pulled away from what actually works.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-50 border-t border-b">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <p class="text-[10px] font-black uppercase tracking-widest text-gray-400 mb-10">Tools of the Trade</p>
            <div class="flex flex-wrap justify-center gap-10 opacity-30 grayscale hover:opacity-100 transition duration-500 items-center">
                <i class="fab fa-shopify fa-3x"></i>
                <i class="fab fa-wordpress fa-3x"></i>
                <i class="fab fa-salesforce fa-3x"></i>
                <i class="fab fa-google fa-3x"></i>
                <i class="fab fa-aws fa-2x"></i>
                <i class="fab fa-twitter fa-2x"></i>
                <i class="fab fa-tiktok fa-2x"></i>
                <i class="fab fa-pinterest fa-2x"></i>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-5xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-gray-900">How It Works</h2>
            </div>
            <div class="grid md:grid-cols-3 gap-12 gs-steps">
                <div class="gs-step">
                    <h3 class="text-xl font-bold mb-3">Request Your Teardown</h3>
                    <p class="text-sm text-gray-600">Fill out the form below with your store URL, revenue range, and biggest problem.</p>
                </div>
                <div class="gs-step">
                    <h3 class="text-xl font-bold mb-3">We Review Your Store<br>(3 Business Days)</h3>
                    <p class="text-sm text-gray-600">We go through your site, your analytics, and your ad accounts (if applicable) by hand.</p>
                </div>
                <div class="gs-step">
                    <h3 class="text-xl font-bold mb-3">Walkthrough Call</h3>
                    <p class="text-sm text-gray-600">We walk through every finding together and answer questions &mdash; no slide deck, no sales script.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-4xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-gray-900">See What a Teardown Looks Like</h2>
            </div>
            <div class="gs-sample-box">
                <i class="fas fa-file-pdf text-primary text-3xl mb-4"></i>
                <p class="text-sm mb-4">See exactly what you'll get &mdash; a real teardown, not a template.</p>
                <a href="https://csicservices.com/wp-content/uploads/2026/10/Sample-Shopify-Store-Teardown.pdf"
                   target="_blank" rel="noopener"
                   class="inline-block bg-primary text-white px-6 py-3 rounded-xl font-bold text-sm btn-animate">
                   View Sample Teardown (PDF)
                </a>
            </div>
        </div>
    </section>

    <!--
      PLACEHOLDER SECTION — hidden via display:none below because no real proof has been provided yet.
      Fill in [PROOF_1], [PROOF_2], and [TESTIMONIAL_1] with real numbers/quotes, then delete the
      inline style="display:none" to make this section visible. Do not unhide with placeholder text left in place.
    -->
    <section class="py-20 bg-white" style="display:none;">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-gray-900">Results</h2>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-xl border border-gray-100">
                    <p class="text-sm text-gray-600">[PROOF_1: e.g. "Organic traffic up 42% in 4 months for a $30K/mo apparel store"]</p>
                </div>
                <div class="bg-white p-6 rounded-xl border border-gray-100">
                    <p class="text-sm text-gray-600">[PROOF_2: e.g. "Checkout conversion rate up 1.1 points after fixing mobile PDP friction"]</p>
                </div>
                <div class="bg-white p-6 rounded-xl border border-gray-100">
                    <p class="text-sm text-gray-600">[TESTIMONIAL_1: real client quote, name, and store name]</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-blue-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-gray-900">What Happens After the Teardown</h2>
                <p class="text-gray-600 mt-4">Most stores move into an ongoing retainer &mdash; we keep fixing and building instead of handing you a report and disappearing.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-blue-100">
                    <i class="fas fa-chart-pie text-primary text-2xl mb-4"></i>
                    <h4 class="font-bold mb-2">Product Mix Strategy</h4>
                    <p class="text-xs text-gray-500">We analyze Shopify &amp; GA4 data to find your highest-margin winners, on an ongoing basis.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-blue-100">
                    <i class="fas fa-tools text-primary text-2xl mb-4"></i>
                    <h4 class="font-bold mb-2">Store Management</h4>
                    <p class="text-xs text-gray-500">Custom Liquid code, WPForms setup, and ongoing SEO/CRO fixes handled for you.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-blue-100">
                    <i class="fas fa-shield-alt text-primary text-2xl mb-4"></i>
                    <h4 class="font-bold mb-2">Platform Stability</h4>
                    <p class="text-xs text-gray-500">Ongoing maintenance to help make sure your store doesn't break during a traffic surge.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-blue-100">
                    <i class="fas fa-ad text-primary text-2xl mb-4"></i>
                    <h4 class="font-bold mb-2">Paid Add-ons</h4>
                    <p class="text-xs text-gray-500">Ready to step up? We offer managed Google &amp; Meta Ads as an optional add-on.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-5xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-gray-900">What You Get</h2>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="gs-offer-card">
                    <h3 class="text-lg font-bold mb-1">Free Mini-Teardown</h3>
                    <p class="text-3xl font-black mb-4">$0</p>
                    <ul class="text-sm space-y-2 text-gray-600">
                        <li><i class="fas fa-check text-primary mr-2"></i>Your top 3 fixes, ranked by revenue impact</li>
                        <li><i class="fas fa-check text-primary mr-2"></i>Delivered by email, no call required</li>
                        <li><i class="fas fa-check text-primary mr-2"></i>No obligation to continue</li>
                    </ul>
                </div>
                <div class="gs-offer-card gs-offer-featured">
                    <h3 class="text-lg font-bold mb-1">Full Teardown</h3>
                    <p class="text-3xl font-black mb-4 text-primary">$500</p>
                    <ul class="text-sm space-y-2 text-gray-600">
                        <li><i class="fas fa-check text-primary mr-2"></i>All 10 fixes, ranked by revenue impact</li>
                        <li><i class="fas fa-check text-primary mr-2"></i>A 90-day growth plan you can act on</li>
                        <li><i class="fas fa-check text-primary mr-2"></i>A live walkthrough call</li>
                        <li><i class="fas fa-check text-primary mr-2"></i>Credited in full toward your first month if you start a retainer within 30 days</li>
                    </ul>
                </div>
            </div>
            <p class="text-xs text-gray-400 text-center mt-8">Ongoing retainer pricing (SEO, PPC, and store management) is discussed on the walkthrough call, based on what your store actually needs.</p>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-3xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-gray-900">Questions</h2>
            </div>
            <div>
                <details class="gs-faq-item">
                    <summary>Who is this for?</summary>
                    <p>Owner-operated Shopify stores doing roughly $10K&ndash;$100K per month in revenue who want more qualified traffic and higher conversion, without hiring a full in-house team.</p>
                </details>
                <details class="gs-faq-item">
                    <summary>What do you need from me to start?</summary>
                    <p>Your store URL, a rough monthly revenue range, and read-only or collaborator access to Shopify, Google Analytics (GA4), and Google Ads if you're running paid traffic. We'll ask for exactly what we need after you submit the form.</p>
                </details>
                <details class="gs-faq-item">
                    <summary>How long does the teardown take?</summary>
                    <p>We review your store and send your teardown within 3 business days of receiving access.</p>
                </details>
                <details class="gs-faq-item">
                    <summary>What happens after I get the teardown?</summary>
                    <p>We walk through every finding on a call. If it's a fit, you can move into an ongoing retainer covering SEO, PPC, and store management &mdash; pricing is discussed on that call. There's no obligation to continue.</p>
                </details>
                <details class="gs-faq-item">
                    <summary>Are there contracts or minimums?</summary>
                    <p>No long-term contract is required to get the teardown itself. Retainer terms, if you choose to continue, are discussed and agreed on the call before anything starts.</p>
                </details>
                <details class="gs-faq-item">
                    <summary>What if my store is on Shopify Plus?</summary>
                    <p>We work with Shopify Plus stores too. The review covers the same areas &mdash; SEO, conversion, analytics, and paid efficiency &mdash; adapted to Plus-specific features like scripts and wholesale channels where relevant.</p>
                </details>
            </div>
        </div>
    </section>

    <section id="teardown-form" class="py-24 bg-primary text-white">
        <div class="max-w-4xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center text-left">
            <div>
                <h2 class="text-white font-bold mb-4">Ready to See What's Costing You Revenue?</h2>
                <p class="text-blue-100 mb-8">Tell us about your store and we'll send your free mini-teardown &mdash; your top 3 fixes, ranked by revenue impact.</p>
                <ul class="space-y-3 text-sm font-bold">
                    <li><i class="fas fa-list-check mr-2"></i> Top 3 Fixes, Free</li>
                    <li><i class="fas fa-chart-line mr-2"></i> Ranked by Revenue Impact</li>
                    <li><i class="fas fa-calendar-check mr-2"></i> No Call Required</li>
                </ul>
                <p class="mt-8">
                    <a href="https://calendar.app.google/nFmbH3um2WoHUGmU6" target="_blank" class="text-white underline font-bold">Prefer to talk first? Book a call instead &rarr;</a>
                </p>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-2xl">
                <div class="text-gray-900 font-bold mb-4 text-center">Get My Free Teardown</div>
                <?php echo do_shortcode('[wpforms id="6094"]'); ?>
            </div>
        </div>
    </section>

<?php get_template_part( 'template-parts/csic-landing-footer', null, array(
    'blurb' => 'Engineering-led growth infrastructure for global e-commerce and enterprise brands. Headquartered in Kennesaw, GA. Serving high-growth markets worldwide.',
) ); ?>

</div>

<?php wp_footer(); ?>
</body>
</html>
