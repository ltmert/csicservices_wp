<?php
/**
 * Template Name: Agency Service Page - CSIC
 * Description: High-conversion master template for SEO agency service pages.
 * Use this for all pages in your 404 list (SEO Services, Google Ads, etc.)
 */

get_header(); ?>

<!-- Load Tailwind & Google Fonts -->
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>
    :root {
        --agency-primary: #2563eb; 
        --agency-dark: #0f172a;
        --brand-gold: #c5a059;    
    }
    .service-page { font-family: 'Inter', sans-serif; background-color: #ffffff; color: #1e293b; line-height: 1.6; }
    
    /* Technical Authority Typography */
    .hero-title { font-size: clamp(2rem, 5vw, 3.25rem); font-weight: 800; letter-spacing: -0.03em; color: var(--agency-dark); line-height: 1.1; }
    .section-title { font-size: 1.75rem; font-weight: 800; color: var(--agency-dark); margin-bottom: 1.5rem; letter-spacing: -0.02em; }
    .content-body { font-size: 1.05rem; color: #475569; }
    .content-body h2 { font-size: 1.5rem; font-weight: 700; color: var(--agency-dark); margin-top: 2.5rem; margin-bottom: 1rem; }
    .content-body p { margin-bottom: 1.5rem; }

    /* Visual Components */
    .feature-card { border: 1px solid #f1f5f9; border-radius: 1rem; padding: 2rem; transition: all 0.3s ease; }
    .feature-card:hover { border-color: var(--agency-primary); shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1); }
</style>

<div class="service-page">
    <?php while ( have_posts() ) : the_post(); ?>
        
        <!-- Section: Service Hero -->
        <header class="pt-24 pb-20 px-6 bg-slate-50 border-b border-slate-100">
            <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-[10px] font-black bg-blue-100 text-blue-700 uppercase tracking-widest mb-6">
                        Enterprise Solutions
                    </span>
                    <h1 class="hero-title mb-6"><?php the_title(); ?></h1>
                    <div class="text-lg text-slate-500 max-w-lg mb-8">
                        Technical precision and data-driven execution to scale your <?php the_title(); ?> performance in the US market.
                    </div>
                    <div class="flex flex-wrap gap-4">
                        <a href="#audit" class="bg-blue-600 text-white px-8 py-4 rounded-xl font-bold text-sm uppercase tracking-widest hover:bg-blue-700 transition shadow-lg">Request Strategy</a>
                        <a href="tel:4040000000" class="border-2 border-slate-200 text-slate-600 px-8 py-4 rounded-xl font-bold text-sm uppercase tracking-widest hover:bg-white transition">Speak to Expert</a>
                    </div>
                </div>
                <div class="relative hidden lg:block">
                    <div class="absolute -top-10 -right-10 w-64 h-64 bg-blue-600/10 rounded-full blur-3xl"></div>
                    <div class="bg-white p-8 rounded-[2.5rem] shadow-2xl border border-slate-100 relative z-10">
                        <div class="flex items-center justify-between mb-8">
                            <div class="text-xs font-black text-slate-400 uppercase tracking-widest">Growth Metrics</div>
                            <div class="text-blue-600 font-bold text-xs uppercase">Live Data</div>
                        </div>
                        <div class="space-y-6">
                            <div class="h-2 bg-slate-100 rounded-full overflow-hidden"><div class="bg-blue-600 h-full w-[85%]"></div></div>
                            <div class="h-2 bg-slate-100 rounded-full overflow-hidden"><div class="bg-blue-400 h-full w-[92%]"></div></div>
                            <div class="h-2 bg-slate-100 rounded-full overflow-hidden"><div class="bg-blue-200 h-full w-[78%]"></div></div>
                        </div>
                        <p class="mt-8 text-xs text-slate-400 italic">Targeting Alpha benchmarks for <?php the_title(); ?>.</p>
                    </div>
                </div>
            </div>
        </header>

        <!-- Section: Main Content Area -->
        <main class="py-24 px-6">
            <div class="max-w-4xl mx-auto">
                <div class="content-body">
                    <?php the_content(); ?>
                </div>
            </div>
        </main>

        <!-- Section: Core Capabilities (Static but Professional) -->
        <section class="py-24 bg-slate-50 border-y border-slate-100 px-6">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="section-title">The CSIC Advantage</h2>
                    <p class="text-slate-500">Why leading US businesses trust us for their <?php the_title(); ?>.</p>
                </div>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="feature-card bg-white">
                        <i class="fa fa-microchip text-blue-600 text-2xl mb-6"></i>
                        <h3 class="font-bold mb-3">Technical Precision</h3>
                        <p class="text-sm text-slate-500">We don't do "vague" SEO. We provide deep technical audits and implementation roadmaps.</p>
                    </div>
                    <div class="feature-card bg-white">
                        <i class="fa fa-chart-line text-blue-600 text-2xl mb-6"></i>
                        <h3 class="font-bold mb-3">ROI-First Data</h3>
                        <p class="text-sm text-slate-500">Every strategy is measured against your bottom line, not just vanity traffic metrics.</p>
                    </div>
                    <div class="feature-card bg-white">
                        <i class="fa fa-shield-check text-blue-600 text-2xl mb-6"></i>
                        <h3 class="font-bold mb-3">US Compliance</h3>
                        <p class="text-sm text-slate-500">Full transparency and ethical "White Hat" execution tailored for North American markets.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: The Lead Magnet Audit -->
        <section id="audit" class="py-24 px-6 bg-white">
            <div class="max-w-3xl mx-auto bg-slate-900 rounded-[3rem] p-12 text-center text-white relative overflow-hidden shadow-2xl">
                <div class="absolute top-0 right-0 w-64 h-64 bg-blue-600 opacity-20 blur-[100px] rounded-full"></div>
                <div class="relative z-10">
                    <h2 class="text-3xl md:text-5xl font-extrabold mb-6 tracking-tight uppercase">Analyze Your <br><span class="text-blue-500 underline decoration-blue-800"><?php the_title(); ?></span></h2>
                    <p class="text-slate-400 mb-10 text-lg">Stop guessing. Get a professional technical audit of your <?php the_title(); ?> infrastructure today.</p>
                    
                    <div class="flex flex-col sm:flex-row justify-center gap-4 max-w-md mx-auto">
                        <input type="url" placeholder="Your Website URL" class="px-6 py-4 rounded-xl bg-slate-800 border-none text-white focus:ring-2 focus:ring-blue-600 flex-1">
                        <a href="https://csicservices.com/get-audit/" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-xl font-bold transition inline-block text-center">Get Audit</a>
                    </div>
                </div>
            </div>
        </section>

    <?php endwhile; ?>

    <!-- Footer Branding -->
    <footer class="py-12 bg-white text-center border-t border-slate-100">
        <p class="text-[9px] font-bold uppercase tracking-[0.4em] text-slate-300">CSIC Services | Growth Technical Agency</p>
    </footer>
</div>

<?php get_footer(); ?>