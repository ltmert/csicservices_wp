<?php
/**
 * Template Name: CSIC Law Firm SEO Growth
 * Version: 1.0 - CRO Optimized for Legal Niche
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <style>
        :root { --primary: #066aab; --legal-gold: #c5a059; }
        #legal-shield {
            font-family: 'Inter', ui-sans-serif, system-ui, sans-serif !important;
            font-size: 14px !important;
            line-height: 1.6 !important;
            color: #1f2937 !important;
            background-color: #ffffff;
            text-align: left;
        }
        #legal-shield h1 { font-size: 52px !important; font-weight: 900 !important; line-height: 1.1 !important; color: #111827 !important; }
        #legal-shield h2 { font-size: 36px !important; font-weight: 800 !important; color: #111827 !important; }
        #legal-shield h3 { font-size: 20px !important; font-weight: 700 !important; color: #111827 !important; }
        
        .bg-primary { background-color: var(--primary) !important; }
        .text-primary { color: var(--primary) !important; }
        .border-gold { border-color: var(--legal-gold) !important; }
        
        /* Timeline Styling */
        .step-circle { width: 40px; height: 40px; border-radius: 50%; background: var(--primary); color: white; display: flex; align-items: center; justify-content: center; font-weight: bold; position: relative; z-index: 10; }
        .timeline-line { position: absolute; left: 19px; top: 0; bottom: 0; width: 2px; background: #e5e7eb; z-index: 1; }

        html { scroll-behavior: smooth; margin-top: 0 !important; }
        .btn-hover { transition: all 0.3s ease; }
        .btn-hover:hover { transform: translateY(-2px); box-shadow: 0 10px 15px -3px rgba(6, 106, 171, 0.3); }
    </style>
    <?php wp_head(); ?>
</head>
<body class="bg-white">

<div id="legal-shield">

    <header class="relative py-24 bg-slate-50 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center">
            <div class="relative z-10">
                <span class="text-primary font-bold uppercase tracking-widest text-xs mb-4 block">Exclusive for Personal Injury & Criminal Defense Firms</span>
                <h1>Dominate Your <span class="text-primary">Local Market</span>. Win the High-Value Leads.</h1>
                <p class="text-xl text-gray-500 mt-8 mb-10 leading-relaxed">Most Law Firms are invisible on Page 1. We engineer the technical authority and local SEO infrastructure that puts your firm in front of clients when they need you most.</p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#gap-analysis" class="bg-primary text-white px-10 py-5 rounded-xl font-bold text-lg btn-hover text-center">Get Your Free Gap Analysis</a>
                    <div class="flex items-center gap-3 px-4 py-2">
                        <i class="fas fa-check-circle text-green-600"></i>
                        <span class="text-sm font-bold text-gray-600 uppercase tracking-tight">1 Firm Per Niche/City</span>
                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="absolute inset-0 bg-primary/5 rounded-3xl -rotate-3 scale-105"></div>
                <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?auto=format&fit=crop&w=800" alt="Legal Authority" class="rounded-3xl shadow-2xl relative z-10 border border-white">
            </div>
        </div>
    </header>

    <section class="py-24 bg-white border-b">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="mb-8">Why 90% of Law Firms Fail to Rank</h2>
            <p class="text-lg text-gray-500 mb-16 italic">"Our website looks great, but the phone isn't ringing."</p>
            <div class="grid md:grid-cols-3 gap-12 text-left">
                <div>
                    <div class="w-12 h-12 bg-red-50 text-red-600 rounded-lg flex items-center justify-center mb-6"><i class="fas fa-code-branch"></i></div>
                    <h3 class="mb-3">Technical Debt</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">Bloated WordPress themes and "slow-loading" code blocks crawl-ability, making Google ignore your site.</p>
                </div>
                <div>
                    <div class="w-12 h-12 bg-red-50 text-red-600 rounded-lg flex items-center justify-center mb-6"><i class="fas fa-file-invoice"></i></div>
                    <h3 class="mb-3">Content Decay</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">Generic "legal blog posts" written by AI don't build authority. You need expert, high-intent legal content.</p>
                </div>
                <div>
                    <div class="w-12 h-12 bg-red-50 text-red-600 rounded-lg flex items-center justify-center mb-6"><i class="fas fa-share-alt"></i></div>
                    <h3 class="mb-3">Social Invisibility</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">A dead social presence signals a "dated" firm. We bridge the gap between technical SEO and brand trust.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-gray-900 text-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">
            <div>
                <span class="text-blue-400 font-bold uppercase tracking-widest text-[10px]">Case Study: Sirins Legal</span>
                <h2 class="text-white mt-4 mb-6">300% Organic Growth in <span class="text-blue-400">90 Days</span>.</h2>
                <p class="text-gray-400 text-lg mb-8 leading-relaxed">By stripping out their legacy technical debt and deploying our <b>"Authority Engine</b>,"we took Sirins from 2,000 to 8,000 monthly visitors.</p>
                <div class="grid grid-cols-2 gap-8">
                    <div class="border-l-2 border-blue-500 pl-4">
                        <div class="text-3xl font-black text-white">4.0X</div>
                        <p class="text-xs text-gray-500 uppercase font-bold tracking-widest">Traffic Increase</p>
                    </div>
                    <div class="border-l-2 border-blue-500 pl-4">
                        <div class="text-3xl font-black text-white">+6k</div>
                        <p class="text-xs text-gray-500 uppercase font-bold tracking-widest">Monthly Sessions</p>
                    </div>
                </div>
            </div>
                <div class="relative">
                    <img src="https://csicservices.com/wp-content/uploads/2026/03/CSIC_Sirins.png" 
                         alt="Sirins Legal Traffic Growth Chart" 
                         class="rounded-xl shadow-lg border border-gray-700 w-full h-auto">
                    
                    <div class="absolute top-4 right-4 bg-blue-600 text-white text-[10px] font-bold px-3 py-1 rounded-full shadow-lg uppercase tracking-widest">
                        Verified 2026 Data
                    </div>
                </div>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="mb-16">The Growth Ecosystem</h2>
            <div class="grid md:grid-cols-3 gap-8 text-left">
                <div class="p-10 rounded-3xl bg-slate-50 border border-slate-100">
                    <i class="fas fa-microchip text-primary text-3xl mb-8"></i>
                    <h3 class="mb-4">Technical Mastery</h3>
                    <p class="text-sm text-gray-500 mb-6">We don't just "install plugins." We write custom PHP, Liquid, and WordPress code to ensure your site is faster than your rivals.</p>
                    <ul class="space-y-3 text-xs font-bold text-gray-400">
                        <li><i class="fas fa-check text-primary mr-2"></i> Custom CMS Architecture</li>
                        <li><i class="fas fa-check text-primary mr-2"></i> Core Web Vitals Fix</li>
                    </ul>
                </div>
                <div class="p-10 rounded-3xl bg-white shadow-xl border border-slate-100 scale-105 z-10">
                    <i class="fas fa-pen-nib text-primary text-3xl mb-8"></i>
                    <h3 class="mb-4">Content & Authority</h3>
                    <p class="text-sm text-gray-500 mb-6">High-intent legal articles and a manual backlink outreach strategy that builds a "moat" around your firm's name.</p>
                    <ul class="space-y-3 text-xs font-bold text-gray-400">
                        <li><i class="fas fa-check text-primary mr-2"></i> Legal Ghostwriting</li>
                        <li><i class="fas fa-check text-primary mr-2"></i> DA 50+ Manual Backlinks</li>
                    </ul>
                </div>
                <div class="p-10 rounded-3xl bg-slate-50 border border-slate-100">
                    <i class="fas fa-bullhorn text-primary text-3xl mb-8"></i>
                    <h3 class="mb-4">Brand Visibility</h3>
                    <p class="text-sm text-gray-500 mb-6">Omnichannel design. We handle your social media visuals and high-converting client newsletters.</p>
                    <ul class="space-y-3 text-xs font-bold text-gray-400">
                        <li><i class="fas fa-check text-primary mr-2"></i> Social Media Graphic Dev</li>
                        <li><i class="fas fa-check text-primary mr-2"></i> Email Automation (Klaviyo/MC)</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-slate-50">
        <div class="max-w-3xl mx-auto px-6">
            <h2 class="text-center mb-16">The 90-Day Sprint</h2>
            <div class="relative">
                <div class="timeline-line"></div>
                <div class="mb-12 flex gap-8">
                    <div class="step-circle">01</div>
                    <div>
                        <h3 class="text-primary mb-2 uppercase tracking-widest text-xs font-black">Month 1: The Repair</h3>
                        <p class="text-sm text-gray-600">Full Technical Audit. We strip away the dead code and fix the "Foundation Leaks." Google begins re-indexing your firm.</p>
                    </div>
                </div>
                <div class="mb-12 flex gap-8">
                    <div class="step-circle">02</div>
                    <div>
                        <h3 class="text-primary mb-2 uppercase tracking-widest text-xs font-black">Month 2: The Build</h3>
                        <p class="text-sm text-gray-600">Deployment of high-intent legal content and initial Authority Link acquisition. Local citation dominance begins.</p>
                    </div>
                </div>
                <div class="flex gap-8">
                    <div class="step-circle">03</div>
                    <div>
                        <h3 class="text-primary mb-2 uppercase tracking-widest text-xs font-black">Month 3: The Scale</h3>
                        <p class="text-sm text-gray-600">Keyword ranking stabilization. We optimize for conversion (CRO) to ensure traffic turns into signed cases.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white border-t">
        <div class="max-w-md mx-auto px-6">
            <div class="border-2 border-primary rounded-3xl p-10 text-center shadow-2xl">
                <span class="bg-primary text-white text-[10px] font-bold px-4 py-1 rounded-full uppercase">The Growth Tier</span>
                <div class="text-5xl font-black my-6">$2,500<span class="text-lg text-gray-400">/mo</span></div>
                <h3 class="mb-8">Professional SEO Partner</h3>
                <ul class="text-left space-y-4 mb-10 text-sm text-gray-600">
                    <li><i class="fas fa-check text-green-500 mr-2"></i> Dedicated Tech Support (4hrs/mo)</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i> 4 High-Authority Legal Articles</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i> 10 Manual Outreach Backlinks</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i> Monthly ROI & Keyword Report</li>
                </ul>
                <a href="#gap-analysis" class="block w-full bg-primary text-white py-4 rounded-xl font-bold btn-hover">Apply for Slot</a>
            </div>
        </div>
    </section>

    <section class="py-24 bg-slate-50 border-t">
        <div class="max-w-4xl mx-auto px-6">
            <h2 class="text-center mb-12">Common Inquiries</h2>
            <div class="space-y-6">
                <div class="bg-white p-6 rounded-xl border border-gray-200">
                    <h4 class="font-bold mb-3 text-primary uppercase text-xs tracking-widest">When will I see results?</h4>
                    <p class="text-sm text-gray-600">SEO is a compounding asset. You will see technical improvements in 30 days, but consistent lead volume usually matures between months 4 and 6.</p>
                </div>
                <div class="bg-white p-6 rounded-xl border border-gray-200">
                    <h4 class="font-bold mb-3 text-primary uppercase text-xs tracking-widest">Do you handle my specific CMS?</h4>
                    <p class="text-sm text-gray-600">Yes. We are platform-agnostic engineers. Whether your firm is on WordPress, Shopify, or a custom PHP framework, we handle the dev work internally.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="gap-analysis" class="py-24 bg-primary text-white text-center">
        <div class="max-w-3xl mx-auto px-6">
            <h2 class="text-white !important">Secure Your Growth Audit</h2>
            <p class="text-blue-100 text-lg mt-6 mb-12">We identify your conversion leaks and competitor keyword gaps in a 5-minute video teardown. Zero obligation.</p>
            <div class="max-w-md mx-auto">
                <?php echo do_shortcode('[wpforms id="5477"]'); ?>
            </div>
        </div>
    </section>

    <?php get_template_part( 'template-parts/csic-landing-footer', null, array(
        'blurb' => 'Engineering-led Growth for the Legal Sector. Headquartered in Kennesaw, GA.',
    ) ); ?>

</div>

<?php wp_footer(); ?>
</body>
</html>