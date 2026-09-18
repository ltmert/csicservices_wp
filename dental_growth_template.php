<?php
/*
Template Name: Dentist SEO Landing
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style id="wp-custom-css">
        :root {
            --csic-primary: #066aab;
            --csic-accent: #afaaf9;
            --csic-purple: #7756ff;
        }
        body { font-family: 'Inter', sans-serif; margin: 0; padding: 0; }
        .text-primary { color: var(--csic-primary); }
        .bg-primary { background-color: var(--csic-primary); }
        .btn-hover:hover { opacity: 0.9; transform: translateY(-2px); transition: all 0.3s ease; }
        
        span.color { color: #7756FF; }
        span.primary-text { display: block; color: #afaaf9; }
        
        .step-circle {
            width: 48px; height: 48px; border-radius: 50%; background: #066aab; color: white;
            display: flex; align-items: center; justify-content: center; font-weight: 800; flex-shrink: 0;
        }
        .timeline-line { position: absolute; left: 24px; top: 0; bottom: 0; width: 2px; background: #e2e8f0; z-index: -1; }

        /* WPForms Engineering Reset & Fixes */
        .audit-form-container {
            width: 100%;
            max-width: 450px;
            margin: 0 auto;
            text-align: left;
        }

        /* Fix field overlapping and spacing */
        .audit-form-container .wpforms-field {
            padding: 0 !important;
            margin-bottom: 20px !important;
            clear: both;
        }

        .audit-form-container .wpforms-field-label {
            display: block !important;
            font-weight: 700 !important;
            font-size: 13px !important;
            text-transform: uppercase !important;
            letter-spacing: 0.05em !important;
            color: #4a5568 !important;
            margin-bottom: 8px !important;
        }

        .audit-form-container input, 
        .audit-form-container textarea, 
        .audit-form-container select {
            width: 100% !important;
            padding: 12px 16px !important;
            border-radius: 8px !important;
            border: 1px solid #cbd5e0 !important;
            background: #ffffff !important;
            font-size: 16px !important;
            color: #2d3748 !important;
            box-shadow: none !important;
            height: auto !important; /* Prevents overlapping caused by fixed heights */
        }

        .audit-form-container input:focus {
            border-color: var(--csic-primary) !important;
            outline: none !important;
            box-shadow: 0 0 0 3px rgba(6, 106, 171, 0.1) !important;
        }

        /* Centering the Submit Button */
        .audit-form-container .wpforms-submit-container {
            text-align: center !important;
            padding: 0 !important;
            margin-top: 10px !important;
        }

        .audit-form-container button.wpforms-submit { 
            width: 100% !important; 
            background-color: var(--csic-primary) !important; 
            border: none !important; 
            color: white !important; 
            font-size: 14px !important;
            font-weight: 800 !important; 
            text-transform: uppercase !important; 
            letter-spacing: 0.15em !important;
            padding: 18px 30px !important;
            border-radius: 12px !important;
            cursor: pointer !important;
            transition: all 0.3s ease !important;
            box-shadow: 0 4px 14px 0 rgba(6, 106, 171, 0.39) !important;
        }

        .audit-form-container button.wpforms-submit:hover {
            transform: translateY(-2px) !important;
            background-color: #055a91 !important;
            box-shadow: 0 6px 20px rgba(6, 106, 171, 0.23) !important;
        }

        /* Remove default WPForms branding/padding */
        .audit-form-container .wpforms-container {
            margin: 0 !important;
        }
    </style>
    <script type="text/javascript">
        (function(c,l,a,r,i,t,y){
            c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
            t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
            y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
        })(window, document, "clarity", "script", "xsspi0list");
    </script>
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-white'); ?>>

<div id="legal-shield">
    <!-- HEADER -->
    <header class="fixed w-full z-50 bg-white/95 backdrop-blur-md border-b border-gray-100 py-4">
        <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">
            <a href="https://csicservices.com" class="flex flex-col group transition">
                <div class="text-primary font-bold text-xl uppercase tracking-tight leading-none group-hover:opacity-80 transition">CSIC SERVICES</div>
                <span class="text-[9px] text-gray-400 font-bold uppercase tracking-[0.2em]">Engineering Growth</span>
            </a>
            <nav class="hidden md:flex space-x-8 font-bold text-xs uppercase tracking-widest text-gray-500">
                <a href="#growth-benchmark" class="hover:text-primary transition">Benchmark</a>
                <a href="#ecosystem" class="hover:text-primary transition">Ecosystem</a>
                <a href="#pricing" class="hover:text-primary transition">Pricing</a>
            </nav>
            <a href="#gap-analysis" class="bg-primary text-white px-6 py-2.5 rounded-lg text-xs font-bold btn-hover uppercase tracking-widest">Growth Audit</a>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="relative pt-48 pb-24 bg-slate-50 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center">
            <div class="relative z-10">
                <span class="text-primary font-bold uppercase tracking-widest text-xs mb-4 block">Medical Marketing Engineering</span>
                <h1 class="text-5xl md:text-6xl font-black leading-tight text-gray-900">Dominate Local Search. Secure High-Value <span class="text-primary">Patient Leads</span>.</h1>
                <p class="text-xl text-gray-500 mt-8 mb-10 leading-relaxed">We don't just "do SEO." We engineer the technical authority and local Map Pack infrastructure that puts your dental clinic in front of patients when they search for high-value procedures.</p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#gap-analysis" class="bg-primary text-white px-10 py-5 rounded-xl font-bold text-lg btn-hover text-center">Get Your Free Gap Analysis</a>
                    <div class="flex items-center gap-3 px-4 py-2">
                        <i class="fas fa-check-circle text-green-600"></i>
                        <span class="text-sm font-bold text-gray-600 uppercase tracking-tight">One Practice Per Radius</span>
                    </div>
                </div>
            </div>
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1629909613654-28e377c37b09?auto=format&fit=crop&w=800" alt="Dental Authority" class="rounded-3xl shadow-2xl relative z-10 border border-white">
            </div>
        </div>
    </section>

    <!-- THE GROWTH BENCHMARK -->
    <section id="growth-benchmark" class="py-24 bg-gray-900 text-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">
            <div>
                <span class="text-blue-400 font-bold uppercase tracking-widest text-[10px]">The Visibility Lifecycle</span>
                <h2 class="text-white text-4xl font-black mt-4 mb-6">Sustainable Growth. <br><span class="text-blue-400">Predictable Results.</span></h2>
                <p class="text-gray-400 text-lg mb-8 leading-relaxed">Unlike agencies that promise "instant rankings," we focus on the compounding value of engineering. Our protocol moves your practice from market-invisible to city-dominant over a structured timeline.</p>
                
                <div class="space-y-8">
                    <div class="flex items-start gap-4">
                        <div class="w-2 h-2 mt-2 bg-blue-500 rounded-full"></div>
                        <div>
                            <h4 class="font-bold text-white">Stage 1: Technical Stabilization</h4>
                            <p class="text-sm text-gray-500">Eliminating "Legacy Debt" from old site builders and fixing silent indexing errors that block your practice from appearing.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-2 h-2 mt-2 bg-blue-400 rounded-full"></div>
                        <div>
                            <h4 class="font-bold text-white">Stage 2: Authority Acquisition</h4>
                            <p class="text-sm text-gray-500">Establishing digital credentials through manual high-authority backlink building and specialized clinical content.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-2 h-2 mt-2 bg-teal-400 rounded-full"></div>
                        <div>
                            <h4 class="font-bold text-white">Stage 3: Market Dominance</h4>
                            <p class="text-sm text-gray-500">Achieving consistent Top 3 Map Pack visibility for Implants, Invisalign, and high-ROI procedures.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="bg-gray-800 p-8 rounded-3xl border border-gray-700 shadow-2xl">
                    <div class="flex justify-between items-center mb-10">
                        <div class="text-xs font-bold text-gray-500 uppercase tracking-widest">Projected Visibility Curve</div>
                        <div class="text-[10px] bg-blue-500/20 text-blue-400 px-2 py-1 rounded">Engineering Model</div>
                    </div>
                    <div class="h-48 flex items-end justify-between space-x-3">
                        <div class="w-full bg-blue-900/40 rounded-t h-[15%]"></div>
                        <div class="w-full bg-blue-800/40 rounded-t h-[25%]"></div>
                        <div class="w-full bg-blue-700/40 rounded-t h-[45%]"></div>
                        <div class="w-full bg-blue-600/60 rounded-t h-[70%]"></div>
                        <div class="w-full bg-blue-500 rounded-t h-full"></div>
                    </div>
                    <div class="flex justify-between mt-4 text-[9px] font-bold text-gray-600 uppercase tracking-widest">
                        <span>Foundation</span>
                        <span>Build</span>
                        <span>Scale</span>
                        <span>Dominance</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ECOSYSTEM -->
    <section id="ecosystem" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-black mb-16 text-gray-900">The Growth Ecosystem</h2>
            <div class="grid md:grid-cols-3 gap-8 text-left">
                <div class="p-10 rounded-3xl bg-slate-50 border border-slate-100">
                    <i class="fas fa-laptop-medical text-primary text-3xl mb-8"></i>
                    <h3 class="font-bold mb-4">HIPAA-Ready Tech</h3>
                    <p class="text-sm text-gray-500 mb-6">Custom engineering for medical practices. Faster load times directly correlate with higher ranking in local dental search.</p>
                    <ul class="space-y-3 text-xs font-bold text-gray-400">
                        <li><i class="fas fa-check text-primary mr-2"></i> Custom CMS Architecture</li>
                        <li><i class="fas fa-check text-primary mr-2"></i> LCP & Performance Fixes</li>
                    </ul>
                </div>
                <div class="p-10 rounded-3xl bg-white shadow-xl border border-slate-100 scale-105 z-10">
                    <i class="fas fa-vial text-primary text-3xl mb-8"></i>
                    <h3 class="font-bold mb-4">Patient Trust Loop</h3>
                    <p class="text-sm text-gray-500 mb-6">We don't just write articles. We create clinical authority assets that signal expertise to both Google and your local patients.</p>
                    <ul class="space-y-3 text-xs font-bold text-gray-400">
                        <li><i class="fas fa-check text-primary mr-2"></i> High-Intent Procedure Copy</li>
                        <li><i class="fas fa-check text-primary mr-2"></i> High-Authority Link Sourcing</li>
                    </ul>
                </div>
                <div class="p-10 rounded-3xl bg-slate-50 border border-slate-100">
                    <i class="fas fa-chart-line text-primary text-3xl mb-8"></i>
                    <h3 class="font-bold mb-4">Conversion Engineering</h3>
                    <p class="text-sm text-gray-500 mb-6">Optimizing the "Click to Call" and "Online Booking" funnel. We ensure traffic converts into actual chair time.</p>
                    <ul class="space-y-3 text-xs font-bold text-gray-400">
                        <li><i class="fas fa-check text-primary mr-2"></i> Booking Flow CRO</li>
                        <li><i class="fas fa-check text-primary mr-2"></i> Lead Attribution Reporting</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- PRICING TIER -->
    <section id="pricing" class="py-24 bg-white border-t">
        <div class="max-w-xl mx-auto px-6">
            <div class="border-2 border-primary rounded-3xl p-10 text-center shadow-2xl bg-white relative">
                <span class="absolute -top-4 left-1/2 -translate-x-1/2 bg-primary text-white text-[10px] font-bold px-6 py-2 rounded-full uppercase tracking-widest">Authority Tier</span>
                
                <div class="text-5xl font-black mt-8 mb-2 text-gray-900">$2,500<span class="text-lg text-gray-400 font-medium">/mo</span></div>
                <p class="text-xs font-bold text-primary uppercase tracking-widest mb-8 italic">Get your special pricing for your practice</p>
                
                <h3 class="font-bold mb-8 text-xl">Complete Growth Partnership</h3>
                <ul class="text-left space-y-4 mb-10 text-sm text-gray-600">
                    <li><i class="fas fa-check text-green-500 mr-2"></i> Dedicated Tech Support</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i> 4 High-Authority Dental Articles / mo</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i> 10 Manual Outreach Backlinks / mo</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i> Monthly ROI & Booking Analytics</li>
                </ul>
                
                <div class="flex flex-col gap-4">
                    <a href="#gap-analysis" class="block w-full bg-primary text-white py-4 rounded-xl font-bold btn-hover text-center uppercase tracking-widest text-sm">Apply for Practice Slot</a>
                    <a href="https://calendar.app.google/nFmbH3um2WoHUGmU6" target="_blank" rel="noopener" class="block w-full border-2 border-primary text-primary py-4 rounded-xl font-bold hover:bg-primary hover:text-white transition uppercase tracking-widest text-sm">Schedule a meeting for full details</a>
                </div>
            </div>
        </div>
    </section>

    <!-- GAP ANALYSIS FORM (FIXED CSS) -->
    <section id="gap-analysis" class="py-24 bg-primary text-white text-center">
        <div class="max-w-3xl mx-auto px-6">
            <h2 class="text-4xl font-black text-white mb-6">Secure Your Growth Audit</h2>
            <p class="text-blue-100 text-lg mb-12">Identify your conversion leaks and competitor gaps in a technical teardown. Exclusive for one practice per city.</p>
            
            <div class="bg-white rounded-2xl shadow-2xl p-4 md:p-8 audit-form-container">
                <?php echo do_shortcode('[wpforms id="5477"]'); ?>
            </div>
            
            <p class="mt-8 text-xs text-blue-200 uppercase font-bold tracking-widest">Engineering-led Growth for Dental Clinics</p>
        </div>
    </section>

    <!-- FOOTER -->
    <?php get_template_part( 'template-parts/csic-landing-footer', null, array(
        'blurb' => 'Engineering-led Growth for the Dental Sector. Headquartered in Kennesaw, GA.',
    ) ); ?>
</div>

</body>
</html>