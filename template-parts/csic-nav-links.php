<?php
/**
 * Shared CSIC primary nav links (Services / Tech Stack / Blog / Get Audit).
 *
 * Included by front-page.php, header.php, and page-csic-master.php so the
 * link targets can't drift between templates the way they previously did
 * (page-csic-master.php was missing the Blog link, and "Get Audit" pointed
 * at different destinations in different files).
 *
 * Each label is duplicated in a top/bottom pair (.csic-flip-top /
 * .csic-flip-bottom) so the departure-board hover effect (see the
 * .csic-nav-link / .csic-flip CSS in each template's <style> block) can
 * slide the top copy out and the orange bottom copy in on hover.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$csic_nav_links = array(
	'Services'   => 'https://csicservices.com/#services',
	'Tech Stack' => 'https://csicservices.com/#tech',
	'Blog'       => 'https://csicservices.com/blog/',
	'Get Audit'  => 'https://csicservices.com/get-audit/',
);

foreach ( $csic_nav_links as $csic_label => $csic_url ) :
	?>
	<li>
		<a href="<?php echo esc_url( $csic_url ); ?>" class="csic-nav-link">
			<span class="csic-flip-mask">
				<span class="csic-flip">
					<span class="csic-flip-top"><?php echo esc_html( $csic_label ); ?></span>
					<span class="csic-flip-bottom"><?php echo esc_html( $csic_label ); ?></span>
				</span>
			</span>
		</a>
	</li>
	<?php
endforeach;
