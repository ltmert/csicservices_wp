<?php
/**
 * Template Name: CSIC SEO Growth Landing
 * Version: 2.1 - Restored & Link-Fixed
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEO Growth Sprint | Is Your Business Visible? | CSIC Services</title>
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
    </style>
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
                <span class="bg-blue-50 text-primary font-bold uppercase tracking-widest text-[10px] px-3 py-1 rounded-full mb-6 inline-block">The 3-6 Month SEO Sprint</span>
                <h1 class="text-gray-900 mb-6">
                    Are You <span class="text-primary">Visible?</span> <br>Or Are You Invisible to 90% of Your Customers?
                </h1>
                <p class="text-xl text-gray-600 mb-10 leading-relaxed">
                    If you aren't on Page 1, you don't exist. We align your technical code, content engine, and authority backlinks to force Google to notice you. 
                </p>
                <div class="flex flex-col sm:flex-row gap-5">
                    <a href="#audit" class="bg-primary text-white px-8 py-4 rounded-xl font-bold text-md shadow-xl btn-animate text-center">Free Competition Analysis</a>
                    <a href="https://calendar.app.google/nFmbH3um2WoHUGmU6" target="_blank" class="border-2 border-gray-100 text-gray-700 px-8 py-4 rounded-xl font-bold text-md hover:bg-gray-50 transition text-center">Book 15-Min Meeting</a>
                </div>
            </div>
            <div class="relative">
                <div class="hero-mockup">
                    <div class="space-y-4">
                        <div class="h-4 bg-gray-200 rounded w-3/4"></div>
                        <div class="h-4 bg-gray-200 rounded w-1/2"></div>
                        <div class="h-10 bg-blue-100 rounded-lg border-2 border-primary flex items-center px-4">
                            <span class="text-primary font-bold text-xs uppercase">CSIC Analysis: Your competitors are here ↑</span>
                        </div>
                        <div class="h-4 bg-gray-200 rounded w-5/6"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="py-20 bg-gray-50">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-gray-900 mb-8">The Hard Truth About Google</h2>
            <p class="text-lg text-gray-600 mb-12 leading-relaxed">91% of content gets ZERO traffic from Google. Most agencies sell you "rankings," but we sell you a **Foundational Asset**. Without a technical baseline and authority links, your site is just a digital brochure gathering dust.</p>
            
            <div class="grid md:grid-cols-3 gap-6 text-left">
                <div class="bg-white p-6 rounded-xl border border-gray-100">
                    <i class="fas fa-eye-slash text-red-500 mb-4 text-xl"></i>
                    <h3 class="font-bold text-lg mb-2">Hidden Potential</h3>
                    <p class="text-xs text-gray-500">Your products are hidden behind technical code errors that block Google's crawlers.</p>
                </div>
                <div class="bg-white p-6 rounded-xl border border-gray-100">
                    <i class="fas fa-users-slash text-red-500 mb-4 text-xl"></i>
                    <h3 class="font-bold text-lg mb-2">Lost Revenue</h3>
                    <p class="text-xs text-gray-500">Every day you aren't visible is a day your competitors steal your highest-intent leads.</p>
                </div>
                <div class="bg-white p-6 rounded-xl border border-gray-100">
                    <i class="fas fa-chart-area text-red-500 mb-4 text-xl"></i>
                    <h3 class="font-bold text-lg mb-2">Ad Dependency</h3>
                    <p class="text-xs text-gray-500">Stop paying $5.00/click. Organic growth builds a moat that pays for itself over time.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-gray-900">Our 3-Phase Scaling Protocol</h2>
                <div class="w-16 h-1 bg-primary mx-auto mt-4"></div>
            </div>
            
            <div class="grid md:grid-cols-3 gap-12 text-left">
                <div class="relative">
                    <div class="text-6xl font-black text-blue-50 absolute -top-10 left-0">01</div>
                    <h3 class="text-xl font-bold mb-4 relative z-10">Foundational Alignment</h3>
                    <p class="text-sm text-gray-600 mb-6">We strip out code bloat and fix technical SEO errors. This is where your visibility begins.</p>
                    <ul class="text-xs space-y-2 font-bold text-gray-400">
                        <li><i class="fas fa-check text-primary mr-2"></i>Technical Site Audit</li>
                        <li><i class="fas fa-check text-primary mr-2"></i>Core Web Vitals Fix</li>
                    </ul>
                </div>
                <div class="relative">
                    <div class="text-6xl font-black text-blue-50 absolute -top-10 left-0">02</div>
                    <h3 class="text-xl font-bold mb-4 relative z-10">The Content Engine</h3>
                    <p class="text-sm text-gray-600 mb-6">High-frequency blog loops targeting "Buyer Intent" keywords. We write to convert.</p>
                    <ul class="text-xs space-y-2 font-bold text-gray-400">
                        <li><i class="fas fa-check text-primary mr-2"></i>Authority Blog Writing</li>
                        <li><i class="fas fa-check text-primary mr-2"></i>On-Page Optimization</li>
                    </ul>
                </div>
                <div class="relative">
                    <div class="text-6xl font-black text-blue-50 absolute -top-10 left-0">03</div>
                    <h3 class="text-xl font-bold mb-4 relative z-10">Authority Moat</h3>
                    <p class="text-sm text-gray-600 mb-6">High-DA Backlink acquisition to skyrocket your domain trust score.</p>
                    <ul class="text-xs space-y-2 font-bold text-gray-400">
                        <li><i class="fas fa-check text-primary mr-2"></i>Guest Post Outreach</li>
                        <li><i class="fas fa-check text-primary mr-2"></i>Niche Edit Backlinks</li>
                    </ul>
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

    <section id="audit" class="py-24 bg-primary text-white">
        <div class="max-w-4xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center text-left">
            <div>
                <h2 class="text-white font-bold mb-4">Get Your Competition Analysis</h2>
                <p class="text-blue-100 mb-8">We will pull the data on your top 3 competitors and show you the exact keyword gaps they are stealing from you.</p>
                <ul class="space-y-3 text-sm font-bold">
                    <li><i class="fas fa-search-plus mr-2"></i> Keyword Gap Report</li>
                    <li><i class="fas fa-chart-line mr-2"></i> Traffic Leak Audit</li>
                    <li><i class="fas fa-video mr-2"></i> 5-Min Video Strategy</li>
                </ul>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-2xl">
                <div class="text-gray-900 font-bold mb-4 text-center">Know your Competition</div>
                <?php echo do_shortcode('[wpforms id="5508"]'); ?>
            </div>
        </div>
    </section>

    <section id="meeting" class="py-20 bg-white text-center">
        <div class="max-w-2xl mx-auto px-6">
            <i class="fas fa-calendar-check text-primary text-4xl mb-6"></i>
            <h2 class="font-black text-gray-900 mb-4">Let's Discuss Your Growth</h2>
            <p class="text-gray-600 mb-10">Schedule a 15-minute growth check-in to align your website's tech with your sales goals.</p>
            <a href="https://calendar.app.google/nFmbH3um2WoHUGmU6" target="_blank" class="inline-block bg-primary text-white px-10 py-4 rounded-xl font-bold text-lg shadow-xl btn-animate">View Calendar Availability</a>
        </div>
    </section>
    <section class="py-20 bg-blue-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-gray-900">Included in Every Growth Sprint</h2>
            <p class="text-gray-600 mt-4">We don't just "rank" you; we partner with you to scale.</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-blue-100">
                <i class="fas fa-chart-pie text-primary text-2xl mb-4"></i>
                <h4 class="font-bold mb-2">Product Mix Strategy</h4>
                <p class="text-xs text-gray-500">We analyze Shopify & GA4 data to find your highest-margin winners.</p>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-blue-100">
                <i class="fas fa-tools text-primary text-2xl mb-4"></i>
                <h4 class="font-bold mb-2">Technical Support</h4>
                <p class="text-xs text-gray-500">Custom Liquid code, WordPress forms, and banner design included.</p>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-blue-100">
                <i class="fas fa-shield-alt text-primary text-2xl mb-4"></i>
                <h4 class="font-bold mb-2">Platform Stability</h4>
                <p class="text-xs text-gray-500">Ongoing maintenance to ensure your store never breaks during a surge.</p>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-blue-100">
                <i class="fas fa-ad text-primary text-2xl mb-4"></i>
                <h4 class="font-bold mb-2">Paid Add-ons</h4>
                <p class="text-xs text-gray-500">Ready to step up? We offer managed Google & Meta Ads as an extra gear.</p>
            </div>
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