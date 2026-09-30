<?php
/**
 * Template Name: Shopify Audit Deliverable
 * Description: Shared template for the "What Your Shopify SEO Audit Covers" sub-pages
 * (Technical SEO Health, Product Page Optimization, Content Gap Analysis, AI Search
 * Visibility, Competitor Gap Report, Shopify-Specific Fixes). One template, six pages —
 * page title/content authored per-page in wp-admin, not hardcoded here. Reuses the
 * .content-body/.hero-title/.section-title conventions from template-service.php.
 */

get_header();

$csic_audit_page_url = home_url( '/shopify-seo-audit/' );
?>

<style>
    .deliverable-page { font-family: 'Inter', sans-serif; background-color: #ffffff; color: #1e293b; line-height: 1.6; }
    .hero-title { font-size: clamp(2rem, 5vw, 3.25rem); font-weight: 800; letter-spacing: -0.03em; color: var(--agency-dark); line-height: 1.1; }
    .content-body { font-size: 1.05rem; color: #475569; }
    .content-body h2 { font-size: 1.5rem; font-weight: 700; color: var(--agency-dark); margin-top: 2.5rem; margin-bottom: 1rem; }
    .content-body p { margin-bottom: 1.5rem; }
    .content-body ul { margin: 0 0 1.5rem 0; padding-left: 0; list-style: none; }
    .content-body ul li { position: relative; padding-left: 1.75rem; margin-bottom: 0.75rem; }
    .content-body ul li::before { content: "\f00c"; font-family: "Font Awesome 6 Free"; font-weight: 900; color: var(--agency-primary); position: absolute; left: 0; top: 0.15em; font-size: 0.85em; }
</style>

<div class="deliverable-page">
    <?php while ( have_posts() ) : the_post(); ?>

        <!-- Hero -->
        <header class="pt-24 pb-16 px-6 bg-slate-50 border-b border-slate-100">
            <div class="max-w-4xl mx-auto text-center">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-[10px] font-black bg-blue-100 text-blue-700 uppercase tracking-widest mb-6">
                    Shopify SEO Audit Deliverable
                </span>
                <h1 class="hero-title mb-6"><?php the_title(); ?></h1>
            </div>
        </header>

        <!-- Content: subhead, "What You Get", "Delivery Timeline" authored per-page in wp-admin -->
        <main class="py-20 px-6">
            <div class="max-w-3xl mx-auto content-body">
                <?php the_content(); ?>
            </div>
        </main>

        <!-- CTA back to the free audit form -->
        <section class="py-20 px-6 bg-white border-t border-slate-100">
            <div class="max-w-2xl mx-auto bg-slate-900 rounded-[2rem] p-10 md:p-12 text-center text-white">
                <h2 class="text-2xl md:text-3xl font-extrabold mb-4">Want This as Part of Your Free Audit?</h2>
                <p class="text-slate-400 mb-8">Every free Shopify SEO audit includes this deliverable, plus the other five audit categories, in one report.</p>
                <a href="<?php echo esc_url( $csic_audit_page_url ); ?>" class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-xl font-bold transition">
                    Get My Free Shopify SEO Audit
                </a>
            </div>
        </section>

    <?php endwhile; ?>

    <footer class="py-12 bg-white text-center border-t border-slate-100">
        <p class="text-[9px] font-bold uppercase tracking-[0.4em] text-slate-300">CSIC Services | Growth Technical Agency</p>
    </footer>
</div>

<?php get_footer(); ?>
