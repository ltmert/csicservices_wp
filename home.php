<?php
/**
 * The template file for the blog index (Posts).
 * Use this as home.php in your theme folder.
 * CSIC Services - B2B Editorial Layout
 * * Note: Renaming this to home.php ensures it only affects the blog 
 * and doesn't overwrite your theme's default index.php fallback.
 */

get_header(); ?>

<!-- Load Tailwind & Google Fonts -->
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>
    :root {
        --agency-primary: #2563eb; 
        --agency-dark: #0f172a;    
    }
    .blog-container { font-family: 'Inter', sans-serif; background-color: #ffffff; color: #1e293b; }
    
    /* Optimized Typography - Fixed "Too Big" issue */
    .hero-title { font-size: clamp(2rem, 5vw, 3.5rem); line-height: 1.1; font-weight: 800; letter-spacing: -0.03em; color: var(--agency-dark); }
    .post-title { font-size: 1.125rem; line-height: 1.3; font-weight: 700; color: var(--agency-dark); }
    .post-excerpt { font-size: 0.875rem; line-height: 1.6; color: #64748b; }
    
    /* Clean Organization Logic */
    .post-card { border-bottom: 1px solid #f1f5f9; padding-bottom: 2rem; transition: opacity 0.3s ease; }
    .post-card:last-child { border-bottom: none; }
    .post-card:hover { opacity: 0.8; }
    
    .filter-nav::-webkit-scrollbar { display: none; }
</style>

<div class="blog-container min-h-screen">
    
    <!-- Section: Agency Editorial Header -->
    <header class="bg-slate-50 pt-20 pb-16 px-6 border-b border-slate-200">
        <div class="max-w-6xl mx-auto">
            <div class="max-w-2xl">
                <span class="inline-flex items-center px-2 py-1 rounded bg-blue-100 text-blue-700 text-[10px] font-black uppercase tracking-widest mb-4">
                    SEO & Growth Insights
                </span>
                <h1 class="hero-title mb-4">The CSIC <span class="text-blue-600">Growth Journal.</span></h1>
                <p class="text-slate-500 text-base leading-relaxed max-w-lg">
                    Data-backed technical SEO strategies and market analysis for US-based businesses looking to scale their organic footprint.
                </p>
            </div>
        </div>
    </header>

    <!-- Section: Sticky Category Navigation (Organization) -->
    <nav class="sticky top-0 z-40 bg-white/95 backdrop-blur-md border-b border-slate-200 py-3 px-6">
        <div class="max-w-6xl mx-auto flex items-center justify-between">
            <div class="filter-nav flex space-x-6 overflow-x-auto text-[11px] font-bold uppercase tracking-widest">
                <a href="#" class="text-blue-600 border-b-2 border-blue-600 pb-1">All Articles</a>
                <a href="#" class="text-slate-400 hover:text-slate-900 transition">Technical SEO</a>
                <a href="#" class="text-slate-400 hover:text-slate-900 transition">Content</a>
                <a href="#" class="text-slate-400 hover:text-slate-900 transition">Local Search</a>
                <a href="#" class="text-slate-400 hover:text-slate-900 transition">Case Studies</a>
            </div>
        </div>
    </nav>

    <!-- Section: Main Blog Feed -->
    <main class="py-16 px-6">
        <div class="max-w-6xl mx-auto">
            
            <?php if ( have_posts() ) : ?>
                <!-- Clean, Organized List-Grid Hybrid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-10 gap-y-12">
                    
                    <?php while ( have_posts() ) : the_post(); ?>
                        <article class="post-card group flex flex-col">
                            <a href="<?php the_permalink(); ?>" class="flex-1">
                                <!-- Organized Image Container (Fixed Ratio) -->
                                <div class="aspect-video rounded-lg overflow-hidden bg-slate-100 mb-5 relative border border-slate-100">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <?php the_post_thumbnail('medium_large', ['class' => 'w-full h-full object-cover']); ?>
                                    <?php else : ?>
                                        <div class="w-full h-full flex items-center justify-center bg-slate-50 text-slate-200">
                                            <i class="fa fa-file-alt text-3xl"></i>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <!-- Metadata (Small & Organized) -->
                                <div class="flex items-center space-x-3 text-[10px] font-bold uppercase tracking-widest text-blue-600 mb-2">
                                    <span><?php the_time('M j, Y'); ?></span>
                                    <span class="text-slate-300">•</span>
                                    <span class="text-slate-500"><?php echo ceil(str_word_count(strip_tags(get_the_content())) / 200); ?> Min Read</span>
                                </div>

                                <!-- Typography Fix: Clean Titles -->
                                <h2 class="post-title mb-3 group-hover:text-blue-600 transition-colors">
                                    <?php the_title(); ?>
                                </h2>
                                
                                <div class="post-excerpt line-clamp-2">
                                    <?php echo wp_trim_words( get_the_excerpt(), 18 ); ?>
                                </div>
                            </a>
                        </article>
                    <?php endwhile; ?>

                </div>

                <!-- Section: Clean Pagination -->
                <nav class="mt-20 pt-8 border-t border-slate-100 flex justify-between items-center text-[11px] font-black uppercase tracking-widest text-slate-400">
                    <div><?php previous_posts_link('← Newer'); ?></div>
                    <div class="hidden sm:block tracking-[0.3em] opacity-50">Page <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?></div>
                    <div><?php next_posts_link('Older →'); ?></div>
                </nav>

            <?php else : ?>
                <div class="text-center py-20">
                    <p class="text-slate-400">Waiting for the next technical insight...</p>
                </div>
            <?php endif; ?>

        </div>
    </main>

    <!-- Section: Lead Magnet -->
    <aside class="bg-blue-600 py-16 px-6 text-white text-center">
        <div class="max-w-2xl mx-auto">
            <h2 class="text-2xl md:text-3xl font-extrabold mb-4 uppercase tracking-tighter">Ready for better rankings?</h2>
            <p class="text-blue-100 mb-8 text-sm opacity-90">Our technical audits uncover the hidden issues holding your organic growth back.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-3">
                <input type="url" placeholder="Your Website URL" class="px-5 py-3 rounded-lg bg-white/10 border border-white/20 text-white placeholder:text-white/50 text-sm focus:outline-none focus:ring-2 focus:ring-white/50 w-full sm:w-64">
                <button class="bg-white text-blue-600 px-8 py-3 rounded-lg font-black text-xs uppercase tracking-widest hover:bg-slate-100 transition">
                    Get Free Audit
                </button>
            </div>
        </div>
    </aside>

    <!-- Footer: Agency Branding -->
    <footer class="py-10 bg-white border-t border-slate-100">
        <div class="max-w-6xl mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="text-[9px] font-bold uppercase tracking-[0.4em] text-slate-400">CSIC Services | Growth Technical Agency</div>
            <div class="flex space-x-6 text-[9px] font-bold text-slate-300 uppercase tracking-widest">
                <a href="#" class="hover:text-blue-600">LinkedIn</a>
                <a href="#" class="hover:text-blue-600">Privacy</a>
                <a href="#" class="hover:text-blue-600">Terms</a>
            </div>
        </div>
    </footer>
</div>

<?php get_footer(); ?>