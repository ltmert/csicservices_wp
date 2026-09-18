<?php
/**
 * The template for displaying all single posts (Growth Journal articles).
 */
get_header(); ?>

<main class="bg-white pt-32 pb-24">
    <?php while ( have_posts() ) : the_post(); ?>
        <article class="post-article max-w-4xl mx-auto px-6">
            <!-- ARTICLE TITLE & METADATA -->
            <header class="text-center mb-12">
                <div class="flex justify-center items-center gap-2 mb-4">
                    <span class="text-[9px] font-black uppercase tracking-[0.2em] text-blue-600">
                        <?php echo get_the_date('F d, Y'); ?>
                    </span>
                    <span class="text-slate-300">•</span>
                    <span class="text-[9px] font-black uppercase tracking-[0.2em] text-slate-400">
                        By <?php the_author(); ?>
                    </span>
                </div>
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-black text-slate-900 tracking-tight max-w-3xl mx-auto leading-tight">
                    <?php the_title(); ?>
                </h1>
            </header>

            <!-- FEATURED IMAGE -->
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="rounded-3xl overflow-hidden shadow-2xl border border-slate-100 mb-12 max-h-[500px]">
                    <?php the_post_thumbnail('large', array('class' => 'w-full h-full object-cover')); ?>
                </div>
            <?php endif; ?>

            <!-- ARTICLE CONTENT -->
            <div class="prose prose-slate max-w-3xl mx-auto leading-relaxed text-[#272727] text-lg md:text-xl">
                <style>
                    /* Post template typography, modeled on Nolo's legal-encyclopedia article style (Nunito Sans, near-black body copy) */
                    .post-article, .post-article * {
                        font-family: 'Nunito Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif !important;
                    }
                    .prose p { margin-bottom: 1.75em !important; line-height: 1.8 !important; }
                    .prose h2, .prose h3 { font-weight: 800 !important; color: #272727 !important; margin-top: 1.75em !important; margin-bottom: 0.5em !important; text-transform: uppercase !important; letter-spacing: -0.01em !important; }
                    .prose h2 { font-size: 1.5rem !important; }
                    .prose h3 { font-size: 1.25rem !important; }
                    .prose ul, .prose ol { margin-bottom: 1.5em !important; padding-left: 1.5em !important; }
                    .prose li { margin-bottom: 0.5em !important; }
                </style>
                <?php the_content(); ?>
            </div>

            <!-- SHARING / FOOTER METADATA -->
            <footer class="max-w-3xl mx-auto border-t border-slate-100 pt-8 mt-12 flex justify-between items-center text-xs text-slate-400 font-bold uppercase tracking-widest">
                <span>Categorized under: <?php the_category(', '); ?></span>
                <span class="hover:text-blue-600 transition"><a href="<?php echo home_url('/blog'); ?>"><i class="fas fa-chevron-left mr-1"></i> Back to Journal</a></span>
            </footer>
        </article>
    <?php endwhile; ?>

    <!-- INTEGRATED CALL-TO-ACTION (FREE GROWTH AUDIT FOR Informational Traffic) -->
    <section class="mt-24 py-24 bg-slate-900 text-white text-center">
        <div class="max-w-3xl mx-auto px-6">
            <span class="inline-flex items-center px-2 py-1 rounded bg-blue-500/20 text-blue-400 text-[10px] font-black uppercase tracking-widest mb-4">
                Organic Growth & Performance
            </span>
            <h2 class="text-3xl md:text-4xl font-extrabold mb-6 uppercase tracking-tighter leading-tight">
               <span class="text-white-force">Secure Your</span> <br><span class="text-blue-500">Growth Audit</span>
            </h2>
            <p class="text-slate-sharp mb-12 max-w-lg mx-auto">Convert informational reading into transactional pipeline. Secure a 5-minute technical teardown of your competitor's gaps.</p>
            
            <div class="bg-white rounded-3xl shadow-2xl p-6 md:p-10 audit-form-container text-left border border-slate-800">
                <?php echo do_shortcode('[wpforms id="5477"]'); ?>
            </div>
            <p class="mt-8 text-[10px] text-slate-500 uppercase font-black tracking-[0.3em]">Restricted to One Partnership Per City</p>
        </div>
    </section>
</main>

<?php get_footer(); ?>