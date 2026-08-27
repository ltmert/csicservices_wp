<?php
/*
Template Name: CSIC Thank You
*/

/*
 * Shared confirmation page for the landing-page lead forms. Create one WordPress
 * Page per vertical at the matching path and assign this template:
 *   /dental/thank-you/  /law/thank-you/  /seo/thank-you/
 *   /ppc/thank-you/     /salesforce/thank-you/
 *
 * The redirect itself lives in functions.php (csic_landing_thank_you_* hooks),
 * keyed off the source landing template. This file only renders the page.
 *
 * Isolation pattern + CDN versions match dental_growth_template.php.
 */

$csic_ty_config = array(
	'dental'     => array(
		'label' => 'dental practice',
		'title' => 'Dental SEO Audit Request Received',
	),
	'law'        => array(
		'label' => 'law firm',
		'title' => 'Law Firm SEO Audit Request Received',
	),
	'seo'        => array(
		'label' => 'SEO growth',
		'title' => 'SEO Growth Audit Request Received',
	),
	'ppc'        => array(
		'label' => 'paid search',
		'title' => 'PPC Audit Request Received',
	),
	'salesforce' => array(
		'label' => 'Salesforce',
		'title' => 'Salesforce Consultation Request Received',
	),
);

$csic_ty_slug = '';
$csic_ty_post = get_queried_object();
if ( $csic_ty_post instanceof WP_Post ) {
	$csic_ty_ancestors = get_post_ancestors( $csic_ty_post );
	$csic_ty_top       = $csic_ty_ancestors ? (int) end( $csic_ty_ancestors ) : (int) $csic_ty_post->ID;
	$csic_ty_slug      = (string) get_post_field( 'post_name', $csic_ty_top );
	if ( 'thank-you' === $csic_ty_slug ) {
		$csic_ty_slug = (string) $csic_ty_post->post_name;
	}
}

$csic_ty_label = '';
$csic_ty_title = 'Thank You — Request Received | CSIC Services';
foreach ( $csic_ty_config as $csic_ty_key => $csic_ty_data ) {
	if ( '' !== $csic_ty_slug && false !== strpos( $csic_ty_slug, $csic_ty_key ) ) {
		$csic_ty_label = $csic_ty_data['label'];
		$csic_ty_title = 'Thank You — ' . $csic_ty_data['title'] . ' | CSIC Services';
		break;
	}
}

$csic_ty_desc = 'Your request has been received. A CSIC engineer will review your details and send your teardown within one business day.';
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    // Rank Math (when active) owns the <title>, canonical, robots and social
    // tags via wp_head() — see the csic_thank_you_* filters in functions.php.
    // Only emit our own when no SEO plugin is present, to avoid duplicate tags.
    if ( ! defined( 'RANK_MATH_VERSION' ) ) :
        ?>
        <meta name="robots" content="noindex, follow">
        <title><?php echo esc_html( $csic_ty_title ); ?></title>
        <meta name="description" content="<?php echo esc_attr( $csic_ty_desc ); ?>">
        <link rel="canonical" href="<?php echo esc_url( get_permalink() ); ?>">
        <meta property="og:title" content="<?php echo esc_attr( $csic_ty_title ); ?>">
        <meta property="og:description" content="<?php echo esc_attr( $csic_ty_desc ); ?>">
        <meta property="og:type" content="website">
        <meta name="twitter:card" content="summary">
        <?php
    endif;
    ?>
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
    </style>
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'bg-white' ); ?>>

<div id="thank-you-shield">
    <header class="fixed w-full z-50 bg-white/95 backdrop-blur-md border-b border-gray-100 py-4">
        <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">
            <a href="https://csicservices.com" class="flex flex-col group transition">
                <div class="text-primary font-bold text-xl uppercase tracking-tight leading-none group-hover:opacity-80 transition">CSIC SERVICES</div>
                <span class="text-[9px] text-gray-400 font-bold uppercase tracking-[0.2em]">Engineering Growth</span>
            </a>
            <a href="https://csicservices.com" class="text-xs font-bold uppercase tracking-widest text-gray-500 hover:text-primary transition">Back to site</a>
        </div>
    </header>

    <section class="relative min-h-screen flex items-center bg-slate-50 pt-32 pb-24 overflow-hidden">
        <div class="max-w-2xl mx-auto px-6 text-center">
            <div class="w-20 h-20 mx-auto mb-8 rounded-full bg-green-100 flex items-center justify-center">
                <i class="fas fa-check text-green-600 text-3xl"></i>
            </div>

            <span class="text-primary font-bold uppercase tracking-widest text-xs mb-4 block">Request Received</span>
            <h1 class="text-4xl md:text-5xl font-black leading-tight text-gray-900">
                <?php
                if ( $csic_ty_label ) {
                    printf(
                        /* translators: %s: vertical label, e.g. "dental practice". */
                        esc_html__( 'Thank you — your %s audit request is in.', 'hello-elementor' ),
                        esc_html( $csic_ty_label )
                    );
                } else {
                    esc_html_e( 'Thank you — your request is in.', 'hello-elementor' );
                }
                ?>
            </h1>

            <p class="text-lg text-gray-500 mt-6 mb-10 leading-relaxed">
                A CSIC engineer is reviewing your details now. You'll hear back within one business day with your teardown. Want to talk sooner? Grab a time below.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="https://calendar.app.google/nFmbH3um2WoHUGmU6" target="_blank" rel="noopener" class="bg-primary text-white px-10 py-5 rounded-xl font-bold text-lg btn-hover text-center">Book a Meeting</a>
                <a href="https://csicservices.com" class="border-2 border-gray-200 text-gray-700 px-10 py-5 rounded-xl font-bold text-lg hover:bg-gray-50 transition text-center">Return Home</a>
            </div>
        </div>
    </section>

    <footer class="bg-gray-900 text-gray-400 py-16 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 justify-between items-center">
            <div>
                <div class="text-white font-bold text-xl mb-2 uppercase tracking-tight">CSIC SERVICES</div>
                <p class="text-xs">Engineering-led Growth. Kennesaw, GA.</p>
            </div>
            <div class="flex flex-wrap gap-6 text-[10px] font-bold uppercase tracking-widest justify-end mt-8 md:mt-0">
                <a href="/impressum" class="hover:text-white transition">Impressum</a>
                <a href="/terms" class="hover:text-white transition">Terms &amp; Conditions</a>
                <a href="https://csicservices.com/elementor-5228/" class="hover:text-white transition">Cookie Policy</a>
                <a href="/privacy" class="hover:text-white transition">Privacy Policy</a>
            </div>
        </div>
    </footer>
</div>

<?php wp_footer(); ?>
</body>
</html>
