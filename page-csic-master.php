<?php
/*
Template Name: CSIC Master Service Template
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?> CSIC SERVICES</title>
    
    <!-- Load Tailwind & Google Fonts from Home Template -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style id="csic-master-core-css">
        /* OVERRIDING ELEMENTOR GLOBAL KIT SPECIFICITY */
        :root {
            --agency-primary: #2563eb !important; 
            --agency-dark: #111827 !important;    
            --csic-accent: #afaaf9 !important;
        }
        
        /* Force Inter on everything to kill "Darker Grotesque" override from elementor-kit-8 */
        html body, html body p, html body h1, html body h2, html body h3, html body h4, html body h5, html body h6, html body span, html body a, html body li, html body input, html body pointer { 
            font-family: 'Inter', sans-serif !important; 
            -webkit-font-smoothing: antialiased;
        }

        body { 
            background-color: #ffffff !important; 
            color: #1e293b !important; 
            margin: 0; 
            padding: 0; 
        }

        /* Prevent dead Elementor boxes from blocking click inputs */
        header.fixed {
            z-index: 999999 !important;
            pointer-events: auto !important;
        }

        /* Hero Title - Exact Specs from user provided computed styles */
        .hero-title { 
            font-size: 60px !important; 
            line-height: 75px !important; 
            font-weight: 800 !important; 
            letter-spacing: -0.03em !important; 
            color: var(--agency-dark) !important; 
            margin-top: 20px !important;
            margin-bottom: 0px !important;
        }
        
        /* Support for Two-Tone Titles (Black/Blue Logic) */
        .hero-title span {
            color: var(--agency-primary) !important;
        }

        /* Sharper, refined body text for services (Sharp Look Fix) */
        .hero-description {
            font-size: 1rem !important;
            line-height: 1.6 !important;
            color: #4b5563 !important;
            letter-spacing: -0.01em !important;
            font-weight: 400 !important;
        }

        .text-primary { color: var(--agency-primary) !important; }
        .bg-primary { background-color: var(--agency-primary) !important; }

        /* BUTTON FIX: Force white text, no black text on blue buttons */
        .btn-main {
            background-color: #2563eb !important;
            color: #ffffff !important;
            font-weight: 800 !important;
            text-transform: uppercase !important;
            letter-spacing: 0.1em !important;
            display: inline-block !important;
            transition: all 0.3s ease !important;
            border: none !important;
            text-decoration: none !important;
        }
        .btn-main:hover {
            opacity: 0.9 !important;
            transform: translateY(-2px) !important;
            color: #ffffff !important;
        }

        /* Master Menu Styling (Clean Fallback Links) */
        .csic-nav ul { 
            display: flex !important; 
            gap: 2rem !important; 
            list-style: none !important; 
            padding: 0 !important; 
            margin: 0 !important; 
            font-weight: 700 !important; 
            font-size: 0.7rem !important; 
            text-transform: uppercase !important; 
            letter-spacing: 0.15em !important; 
        }
        .csic-nav ul li { position: relative !important; }
        .csic-nav ul li a { transition: color 0.3s !important; display: block !important; padding: 10px 0 !important; color: #64748b !important; text-decoration: none !important; }
        .csic-nav ul li a:hover { color: var(--agency-primary) !important; }

        /* WPForms Styling Fix */
        .audit-form-container input { 
            width: 100% !important; 
            padding: 14px 18px !important; 
            border-radius: 10px !important; 
            border: 1px solid #e2e8f0 !important; 
            background: #ffffff !important; 
            font-size: 16px !important;
            color: var(--agency-dark) !important;
        }
        .audit-form-container button.wpforms-submit { 
            width: 100% !important; 
            background-color: var(--agency-primary) !important; 
            color: #ffffff !important; 
            font-size: 12px !important; 
            font-weight: 900 !important; 
            text-transform: uppercase !important; 
            letter-spacing: 0.2em !important; 
            padding: 20px !important; 
            border-radius: 10px !important; 
            border: none !important;
        }

        /* Specific text force for Dark Sections */
        .text-white-force { color: #ffffff !important; }
        .text-slate-sharp { color: #94a3b8 !important; font-size: 0.95rem !important; line-height: 1.6 !important; }
    </style>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <!-- SHARED HEADER (CLEAN HARCODED ABSOLUTE NAVIGATION) -->
    <header class="fixed w-full z-50 bg-white/95 backdrop-blur-md border-b border-slate-200 py-4" style="z-index: 999999 !important; pointer-events: auto !important;">
        <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">
            <a href="https://csicservices.com" class="flex flex-col group transition text-decoration-none" style="pointer-events: auto !important; position: relative; z-index: 9999999 !important;">
                <div class="text-slate-900 font-extrabold text-xl uppercase tracking-tighter leading-none group-hover:text-blue-600 transition">CSIC SERVICES</div>
                <span class="text-[9px] text-slate-400 font-bold uppercase tracking-[0.4em]">Growth Technical Agency</span>
            </a>
            
            <nav class="hidden md:block csic-nav">
                <ul>
                    <?php get_template_part( 'template-parts/csic-nav-links' ); ?>
                </ul>
            </nav>

            <a href="https://csicservices.com/get-audit/" class="btn-main px-6 py-3 rounded-lg text-[10px] uppercase tracking-widest text-center">
                Growth Audit
            </a>
        </div>
    </header>

    <main>
        <?php while ( have_posts() ) : the_post(); ?>
            
            <!-- Hero Structure (pt-24 to fix the gap issue) -->
            <section class="relative pt-24 pb-24 bg-slate-50 overflow-hidden border-b border-slate-200">
                <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <span class="inline-flex items-center px-2 py-1 rounded bg-blue-100 text-blue-700 text-[10px] font-black uppercase tracking-widest mb-2">
                            Authority Engineering
                        </span>
                        <h1 class="hero-title"><?php the_title(); ?></h1>
                        <div class="hero-description mt-8 mb-10 max-w-xl">
                            <?php the_content(); ?>
                        </div>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="#gap-analysis" class="btn-main px-10 py-5 rounded-xl font-black text-xs text-center shadow-xl shadow-blue-200">
                                Get Your Free Gap Analysis
                            </a>
                        </div>
                    </div>
                    <div class="relative mt-12 lg:mt-0">
                        <div class="absolute inset-0 bg-blue-600/5 rounded-3xl -rotate-2 scale-105"></div>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail('large', array('class' => 'rounded-3xl shadow-2xl relative z-10 border border-white w-full h-auto object-cover max-h-[500px]')); ?>
                        <?php else : ?>
                            <div class="w-full h-[400px] bg-slate-100 rounded-3xl animate-pulse flex items-center justify-center border border-slate-200">
                                <i class="fas fa-image text-slate-200 text-6xl"></i>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>

        <?php endwhile; ?>

        <!-- PRICING TIER (SHARED) -->
        <section id="pricing" class="py-24 bg-white border-t border-slate-100">
            <div class="max-w-xl mx-auto px-6 text-center">
                <div class="border border-slate-200 rounded-3xl p-12 shadow-sm hover:shadow-xl transition-shadow relative bg-white">
                    <span class="absolute -top-4 left-1/2 -translate-x-1/2 bg-slate-900 text-white text-[10px] font-black px-6 py-2 rounded-full uppercase tracking-widest">Authority Tier</span>
                    
                    <div class="text-3xl font-black mt-10 mb-2 text-slate-900 tracking-tighter uppercase">Growth Partnership</div>
                    <p class="text-[11px] font-bold text-blue-600 uppercase tracking-widest mb-10 italic">Custom engineering for your infrastructure</p>
                    
                    <h3 class="font-extrabold mb-8 text-xl text-slate-900 uppercase tracking-tight">Included Services</h3>
                    <ul class="text-left space-y-5 mb-12 text-sm text-slate-500">
                        <li class="flex items-center"><i class="fas fa-check text-blue-600 mr-3"></i> Dedicated Tech Support</li>
                        <li class="flex items-center"><i class="fas fa-check text-blue-600 mr-3"></i> High-Authority Articles / mo</li>
                        <li class="flex items-center"><i class="fas fa-check text-blue-600 mr-3"></i> Manual Outreach Backlinks / mo</li>
                        <li class="flex items-center"><i class="fas fa-check text-blue-600 mr-3"></i> Monthly ROI & Keyword Report</li>
                    </ul>
                    
                    <div class="flex flex-col gap-4">
                        <a href="#gap-analysis" class="btn-main py-5 rounded-xl font-black text-xs text-center">Apply for Partnership</a>
                        <a href="#" class="block w-full border border-slate-200 text-slate-500 py-5 rounded-xl font-bold hover:bg-slate-50 transition uppercase tracking-widest text-[10px] text-decoration-none">Schedule a meeting for full details</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- SHARED FORM SECTION -->
        <section id="gap-analysis" class="py-24 bg-slate-900 text-white text-center">
            <div class="max-w-3xl mx-auto px-6">
                <h2 class="text-3xl md:text-4xl font-extrabold mb-6 uppercase tracking-tighter leading-tight">
                   <span class="text-white-force">Secure Your</span> <br><span class="text-blue-500">Growth Audit</span>
                </h2>
                <p class="text-slate-sharp mb-12 max-w-lg mx-auto">Identify your conversion leaks and competitor keyword gaps in a 5-minute technical teardown.</p>
                
                <div class="bg-white rounded-3xl shadow-2xl p-6 md:p-10 audit-form-container border border-slate-800">
                    <?php echo do_shortcode('[wpforms id="5477"]'); ?>
                </div>
                <p class="mt-8 text-[10px] text-slate-500 uppercase font-black tracking-[0.3em]">Restricted to One Partnership Per City</p>
            </div>
        </section>
    </main>

    <!-- SHARED FOOTER -->
    <footer class="py-16 bg-white border-t border-slate-100">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 items-center justify-between gap-8">
            <div class="text-center md:text-left">
                <div class="text-slate-900 font-black text-xl mb-2 uppercase tracking-tighter">CSIC SERVICES</div>
                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Growth Technical Agency | Kennesaw, GA</p>
            </div>
            <div class="flex flex-wrap gap-8 text-[10px] font-black uppercase tracking-widest justify-center md:justify-end text-slate-400">
                <a href="/impressum" class="hover:text-blue-600 transition text-decoration-none">Impressum</a>
                <a href="/terms" class="hover:text-blue-600 transition text-decoration-none">Terms & Conditions</a>
                <a href="https://csicservices.com/elementor-5228/" class="hover:text-blue-600 transition text-decoration-none">Cookie Policy</a>
                <a href="/privacy" class="hover:text-blue-600 transition text-decoration-none">Privacy Policy</a>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-6 mt-12 text-center text-[9px] text-slate-300 uppercase tracking-[0.5em] font-bold">
            &copy; <?php echo date('Y'); ?> CSIC Services. Engineering Growth for B2B Partners.
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>