<?php
/**
 * Template Name: B2B Authority Blog - CSIC Services
 * Description: Clean, organized editorial layout for SEO Agency expertise.
 *
 * IMPORTANT: This is a PAGE template. On a Page, the global query only
 * contains the Page itself — NOT your blog posts. So we run our own
 * WP_Query below to pull actual posts, and a separate query to build
 * the category nav links. Do not swap this back to have_posts()/the_post()
 * against the main query on a page — that's what caused the original
 * "no posts show up" issue.
 */

get_header(); ?>

<!-- Load Tailwind & Google Fonts -->
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>
    :root {
        --agency-primary: #2563eb; /* Professional Blue */
        --agency-dark: #0f172a;    /* Slate Dark */
    }
    .blog-container { font-family: 'Inter', sans-serif; background-color: #f8fafc; color: #1e293b; }

    /* Fixing the "Too Big" font issue - Responsive & Hierarchical */
    .hero-title { font-size: clamp(2.25rem, 6vw, 4rem); line-height: 1.1; font-weight: 800; letter-spacing: -0.03em; color: var(--agency-dark); }
    .post-title { font-size: 1.125rem; line-height: 1.4; font-weight: 700; color: var(--agency-dark); margin-bottom: 0.75rem; }
    .post-excerpt { font-size: 0.875rem; line-height: 1.6; color: #64748b; }

    /* Organization UI */
    .filter-nav::-webkit-scrollbar { display: none; }
    .post-card { transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); }
    .post-card:hover { transform: translateY(-4px); }
</style>

<?php
/* -----------------------------------------------------------------
 * 1. Figure out which category (if any) is selected via ?blog_cat=slug
 * --------------------------------------------------------------- */
$selected_cat_slug = isset( $_GET['blog_cat'] ) ? sanitize_title( wp_unslash( $_GET['blog_cat'] ) ) : '';

/* -----------------------------------------------------------------
 * 2. Build the custom posts query (this is the key fix).
 *    Because this file is a PAGE template, we cannot rely on the
 *    global have_posts()/the_post() loop — it only contains the page.
 * --------------------------------------------------------------- */
$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : ( get_query_var( 'page' ) ? get_query_var( 'page' ) : 1 );

$query_args = array(
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => 9,
    'paged'          => $paged,
);

if ( ! empty( $selected_cat_slug ) ) {
    $query_args['category_name'] = $selected_cat_slug;
}

$blog_query = new WP_Query( $query_args );

/* -----------------------------------------------------------------
 * 3. Pull real categories for the nav (replaces the hardcoded "#" links)
 *    Only categories that actually have published posts are shown.
 * --------------------------------------------------------------- */
$nav_categories = get_categories( array(
    'hide_empty' => true,
    'orderby'    => 'count',
    'order'      => 'DESC',
    'number'     => 6,
) );

// Base URL of this page (strips any existing query args so we can rebuild cleanly)
$page_base_url = get_permalink();
?>

<div class="blog-container min-h-screen">

    <!-- Section: Agency Editorial Header -->
    <header class="bg-white pt-24 pb-16 px-6 border-b border-slate-100">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-8">
                <div class="max-w-2xl">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-blue-50 text-blue-600 uppercase tracking-wider mb-6">
                        Industry Insights
                    </span>
                    <h1 class="hero-title mb-6">The Growth <span class="text-blue-600">Archive.</span></h1>
                    <p class="text-slate-500 text-lg leading-relaxed">
                        Data-driven strategies and technical SEO guides curated by the experts at CSIC Services. We turn complex search algorithms into organic growth.
                    </p>
                </div>
                <div class="hidden lg:block pb-2">
                    <div class="flex items-center space-x-4 p-4 bg-slate-50 rounded-2xl border border-slate-100">
                        <div class="w-12 h-12 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold">FF</div>
                        <div>
                            <p class="text-xs font-bold uppercase tracking-tight">Expert Contributor</p>
                            <p class="text-sm text-slate-600 font-medium">Updated Daily</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Section: Sticky Category Navigation (now driven by real WP categories) -->
    <nav class="sticky top-0 z-40 bg-white/90 backdrop-blur-md border-b border-slate-200 py-4 px-6">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <div class="filter-nav flex space-x-6 overflow-x-auto text-xs font-bold uppercase tracking-widest">
                <a href="<?php echo esc_url( $page_base_url ); ?>"
                   class="<?php echo empty( $selected_cat_slug ) ? 'text-blue-600 border-b-2 border-blue-600 pb-1' : 'text-slate-400 hover:text-slate-900 transition'; ?>">
                    All Resources
                </a>
                <?php foreach ( $nav_categories as $cat ) :
                    $is_active = ( $selected_cat_slug === $cat->slug );
                    $cat_url   = esc_url( add_query_arg( 'blog_cat', $cat->slug, $page_base_url ) );
                ?>
                    <a href="<?php echo $cat_url; ?>"
                       class="<?php echo $is_active ? 'text-blue-600 border-b-2 border-blue-600 pb-1' : 'text-slate-400 hover:text-slate-900 transition'; ?>">
                        <?php echo esc_html( $cat->name ); ?>
                    </a>
                <?php endforeach; ?>
            </div>
            <div class="hidden md:block">
                <button class="text-xs font-bold bg-slate-900 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">
                    Subscribe to Updates
                </button>
            </div>
        </div>
    </nav>

    <!-- Section: Post Grid (now pulled from custom WP_Query, not the page's own content) -->
    <main class="py-16 px-6">
        <div class="max-w-7xl mx-auto">

            <?php if ( $blog_query->have_posts() ) : ?>
                <!-- Main Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-16">

                    <?php while ( $blog_query->have_posts() ) : $blog_query->the_post(); ?>
                        <article class="post-card group flex flex-col">
                            <a href="<?php the_permalink(); ?>" class="flex-1">
                                <!-- Organized Image Container -->
                                <div class="aspect-video rounded-xl overflow-hidden bg-slate-200 mb-6 relative">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <?php the_post_thumbnail( 'large', array( 'class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-500' ) ); ?>
                                    <?php else : ?>
                                        <div class="w-full h-full flex items-center justify-center bg-slate-100 text-slate-300">
                                            <i class="fa fa-chart-line text-4xl"></i>
                                        </div>
                                    <?php endif; ?>
                                    <div class="absolute top-4 left-4">
                                        <span class="bg-white/90 backdrop-blur px-2 py-1 rounded text-[10px] font-bold uppercase text-slate-900 shadow-sm">
                                            <?php
                                            $categories = get_the_category();
                                            if ( ! empty( $categories ) ) {
                                                echo esc_html( $categories[0]->name );
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>

                                <!-- Post Content with Fixed Typography -->
                                <div class="space-y-3">
                                    <h2 class="post-title group-hover:text-blue-600 transition-colors">
                                        <?php the_title(); ?>
                                    </h2>
                                    <div class="post-excerpt line-clamp-3">
                                        <?php echo wp_trim_words( get_the_excerpt(), 25 ); ?>
                                    </div>
                                </div>
                            </a>

                            <!-- Post Footer Meta -->
                            <div class="pt-6 mt-6 border-t border-slate-100 flex items-center justify-between text-[10px] font-bold uppercase tracking-widest text-slate-400">
                                <div class="flex items-center">
                                    <i class="fa fa-calendar-alt mr-2"></i>
                                    <span><?php the_time( 'M j, Y' ); ?></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fa fa-clock mr-2"></i>
                                    <span><?php echo ceil( str_word_count( get_the_content() ) / 200 ); ?> Min Read</span>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>

                </div>

                <!-- Section: Pagination (built from $blog_query, not the global query) -->
                <div class="mt-20 pt-10 border-t border-slate-200 flex justify-between items-center text-xs font-bold uppercase tracking-widest">
                    <?php
                    $pagination_links = paginate_links( array(
                        'base'      => esc_url_raw( add_query_arg( 'paged', '%#%' ) ),
                        'format'    => '',
                        'current'   => max( 1, $paged ),
                        'total'     => $blog_query->max_num_pages,
                        'prev_text' => '← Previous',
                        'next_text' => 'Next →',
                        'type'      => 'list',
                    ) );

                    if ( $pagination_links ) {
                        echo '<div class="pagination-wrap">' . $pagination_links . '</div>';
                    } else {
                        echo '<span></span>';
                    }
                    ?>
                    <span class="text-slate-400">Knowledge Base</span>
                </div>

                <?php wp_reset_postdata(); // Always reset after a custom WP_Query loop ?>

            <?php else : ?>
                <div class="text-center py-20">
                    <p class="text-slate-400">
                        <?php echo ! empty( $selected_cat_slug ) ? 'No resources found in this category.' : 'No blog posts have been published yet.'; ?>
                    </p>
                </div>
            <?php endif; ?>

        </div>
    </main>

    <!-- Section: Conversion Lead Magnet (Essential for Agencies) -->
    <aside class="bg-slate-900 py-24 px-6 text-white text-center relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full opacity-10">
            <div class="absolute top-[-50%] left-[-10%] w-[120%] h-[200%] bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-blue-600 via-transparent to-transparent"></div>
        </div>

        <div class="max-w-3xl mx-auto relative z-10">
            <span class="text-blue-400 font-bold uppercase tracking-[0.2em] text-xs mb-4 block">SEO Performance Tool</span>
            <h2 class="text-3xl md:text-5xl font-extrabold mb-8 leading-tight">Get Your Free <br><span class="text-blue-500 underline decoration-blue-800">Organic Growth Audit</span></h2>
            <p class="text-slate-400 mb-12 text-lg">Stop guessing. Get a detailed technical report of your site's SEO performance and a clear roadmap for improvement.</p>

            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <input type="url" placeholder="Enter your website URL" class="px-6 py-4 rounded-xl bg-slate-800 border-none text-white focus:ring-2 focus:ring-blue-600 w-full sm:w-80">
                <a href="https://csicservices.com/get-audit/" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-xl font-bold transition inline-block text-center">
                    Run Audit
                </a>
            </div>
            <p class="mt-6 text-[10px] text-slate-500 uppercase tracking-widest font-bold">Used by 200+ businesses in the US</p>
        </div>
    </aside>

    <!-- Footer: Agency Trust -->
    <footer class="py-12 bg-white text-center border-t border-slate-100">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="text-[10px] font-bold uppercase tracking-[0.3em] text-slate-400">CSIC SERVICES | SEO & GROWTH AGENCY</div>
            <div class="flex space-x-6 text-[10px] font-bold text-slate-400 uppercase tracking-widest">
                <a href="#" class="hover:text-blue-600 transition">LinkedIn</a>
                <a href="#" class="hover:text-blue-600 transition">Terms</a>
                <a href="#" class="hover:text-blue-600 transition">Privacy</a>
            </div>
        </div>
    </footer>
</div>

<?php get_footer(); ?>
