<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'HELLO_ELEMENTOR_VERSION', '3.4.4' );
define( 'EHP_THEME_SLUG', 'hello-elementor' );

define( 'HELLO_THEME_PATH', get_template_directory() );
define( 'HELLO_THEME_URL', get_template_directory_uri() );
define( 'HELLO_THEME_ASSETS_PATH', HELLO_THEME_PATH . '/assets/' );
define( 'HELLO_THEME_ASSETS_URL', HELLO_THEME_URL . '/assets/' );
define( 'HELLO_THEME_SCRIPTS_PATH', HELLO_THEME_ASSETS_PATH . 'js/' );
define( 'HELLO_THEME_SCRIPTS_URL', HELLO_THEME_ASSETS_URL . 'js/' );
define( 'HELLO_THEME_STYLE_PATH', HELLO_THEME_ASSETS_PATH . 'css/' );
define( 'HELLO_THEME_STYLE_URL', HELLO_THEME_ASSETS_URL . 'css/' );
define( 'HELLO_THEME_IMAGES_PATH', HELLO_THEME_ASSETS_PATH . 'images/' );
define( 'HELLO_THEME_IMAGES_URL', HELLO_THEME_ASSETS_URL . 'images/' );

if ( ! isset( $content_width ) ) {
	$content_width = 800; // Pixels.
}

if ( ! function_exists( 'hello_elementor_setup' ) ) {
	/**
	 * Set up theme support.
	 *
	 * @return void
	 */
	function hello_elementor_setup() {
		if ( is_admin() ) {
			hello_maybe_update_theme_version_in_db();
		}

		if ( apply_filters( 'hello_elementor_register_menus', true ) ) {
			register_nav_menus( [ 'menu-1' => esc_html__( 'Header', 'hello-elementor' ) ] );
			register_nav_menus( [ 'menu-2' => esc_html__( 'Footer', 'hello-elementor' ) ] );
		}

		if ( apply_filters( 'hello_elementor_post_type_support', true ) ) {
			add_post_type_support( 'page', 'excerpt' );
		}

		if ( apply_filters( 'hello_elementor_add_theme_support', true ) ) {
			add_theme_support( 'post-thumbnails' );
			add_theme_support( 'automatic-feed-links' );
			add_theme_support( 'title-tag' );
			add_theme_support(
				'html5',
				[
					'search-form',
					'comment-form',
					'comment-list',
					'gallery',
					'caption',
					'script',
					'style',
					'navigation-widgets',
				]
			);
			add_theme_support(
				'custom-logo',
				[
					'height'      => 100,
					'width'       => 350,
					'flex-height' => true,
					'flex-width'  => true,
				]
			);
			add_theme_support( 'align-wide' );
			add_theme_support( 'responsive-embeds' );

			/*
			 * Editor Styles
			 */
			add_theme_support( 'editor-styles' );
			add_editor_style( 'editor-styles.css' );

			/*
			 * WooCommerce.
			 */
			if ( apply_filters( 'hello_elementor_add_woocommerce_support', true ) ) {
				// WooCommerce in general.
				add_theme_support( 'woocommerce' );
				// Enabling WooCommerce product gallery features (are off by default since WC 3.0.0).
				// zoom.
				add_theme_support( 'wc-product-gallery-zoom' );
				// lightbox.
				add_theme_support( 'wc-product-gallery-lightbox' );
				// swipe.
				add_theme_support( 'wc-product-gallery-slider' );
			}
		}
	}
}
add_action( 'after_setup_theme', 'hello_elementor_setup' );

function hello_maybe_update_theme_version_in_db() {
	$theme_version_option_name = 'hello_theme_version';
	// The theme version saved in the database.
	$hello_theme_db_version = get_option( $theme_version_option_name );

	// If the 'hello_theme_version' option does not exist in the DB, or the version needs to be updated, do the update.
	if ( ! $hello_theme_db_version || version_compare( $hello_theme_db_version, HELLO_ELEMENTOR_VERSION, '<' ) ) {
		update_option( $theme_version_option_name, HELLO_ELEMENTOR_VERSION );
	}
}

if ( ! function_exists( 'hello_elementor_display_header_footer' ) ) {
	/**
	 * Check whether to display header footer.
	 *
	 * @return bool
	 */
	function hello_elementor_display_header_footer() {
		$hello_elementor_header_footer = true;

		return apply_filters( 'hello_elementor_header_footer', $hello_elementor_header_footer );
	}
}

if ( ! function_exists( 'hello_elementor_scripts_styles' ) ) {
	/**
	 * Theme Scripts & Styles.
	 *
	 * @return void
	 */
	function hello_elementor_scripts_styles() {
		if ( apply_filters( 'hello_elementor_enqueue_style', true ) ) {
			wp_enqueue_style(
				'hello-elementor',
				HELLO_THEME_STYLE_URL . 'reset.css',
				[],
				HELLO_ELEMENTOR_VERSION
			);
		}

		if ( apply_filters( 'hello_elementor_enqueue_theme_style', true ) ) {
			wp_enqueue_style(
				'hello-elementor-theme-style',
				HELLO_THEME_STYLE_URL . 'theme.css',
				[],
				HELLO_ELEMENTOR_VERSION
			);
		}

		if ( hello_elementor_display_header_footer() ) {
			wp_enqueue_style(
				'hello-elementor-header-footer',
				HELLO_THEME_STYLE_URL . 'header-footer.css',
				[],
				HELLO_ELEMENTOR_VERSION
			);
		}
	}
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_scripts_styles' );

if ( ! function_exists( 'hello_elementor_register_elementor_locations' ) ) {
	/**
	 * Register Elementor Locations.
	 *
	 * @param ElementorPro\Modules\ThemeBuilder\Classes\Locations_Manager $elementor_theme_manager theme manager.
	 *
	 * @return void
	 */
	function hello_elementor_register_elementor_locations( $elementor_theme_manager ) {
		if ( apply_filters( 'hello_elementor_register_elementor_locations', true ) ) {
			$elementor_theme_manager->register_all_core_location();
		}
	}
}
add_action( 'elementor/theme/register_locations', 'hello_elementor_register_elementor_locations' );

if ( ! function_exists( 'hello_elementor_content_width' ) ) {
	/**
	 * Set default content width.
	 *
	 * @return void
	 */
	function hello_elementor_content_width() {
		$GLOBALS['content_width'] = apply_filters( 'hello_elementor_content_width', 800 );
	}
}
add_action( 'after_setup_theme', 'hello_elementor_content_width', 0 );

if ( ! function_exists( 'hello_elementor_add_description_meta_tag' ) ) {
	/**
	 * Add description meta tag with excerpt text.
	 *
	 * @return void
	 */
	function hello_elementor_add_description_meta_tag() {
		if ( ! apply_filters( 'hello_elementor_description_meta_tag', true ) ) {
			return;
		}

		if ( ! is_singular() ) {
			return;
		}

		$post = get_queried_object();
		if ( empty( $post->post_excerpt ) ) {
			return;
		}

		echo '<meta name="description" content="' . esc_attr( wp_strip_all_tags( $post->post_excerpt ) ) . '">' . "\n";
	}
}
add_action( 'wp_head', 'hello_elementor_add_description_meta_tag' );

// Settings page
require get_template_directory() . '/includes/settings-functions.php';

// Header & footer styling option, inside Elementor
require get_template_directory() . '/includes/elementor-functions.php';

if ( ! function_exists( 'hello_elementor_customizer' ) ) {
	// Customizer controls
	function hello_elementor_customizer() {
		if ( ! is_customize_preview() ) {
			return;
		}

		if ( ! hello_elementor_display_header_footer() ) {
			return;
		}

		require get_template_directory() . '/includes/customizer-functions.php';
	}
}
add_action( 'init', 'hello_elementor_customizer' );

if ( ! function_exists( 'hello_elementor_check_hide_title' ) ) {
	/**
	 * Check whether to display the page title.
	 *
	 * @param bool $val default value.
	 *
	 * @return bool
	 */
	function hello_elementor_check_hide_title( $val ) {
		if ( defined( 'ELEMENTOR_VERSION' ) ) {
			$current_doc = Elementor\Plugin::instance()->documents->get( get_the_ID() );
			if ( $current_doc && 'yes' === $current_doc->get_settings( 'hide_title' ) ) {
				$val = false;
			}
		}
		return $val;
	}
}
add_filter( 'hello_elementor_page_title', 'hello_elementor_check_hide_title' );

/**
 * BC:
 * In v2.7.0 the theme removed the `hello_elementor_body_open()` from `header.php` replacing it with `wp_body_open()`.
 * The following code prevents fatal errors in child themes that still use this function.
 */
if ( ! function_exists( 'hello_elementor_body_open' ) ) {
	function hello_elementor_body_open() {
		wp_body_open();
	}
}

require HELLO_THEME_PATH . '/theme.php';

HelloTheme\Theme::instance();

// Register the Master Landing Page Menu
function register_csic_menus() {
  register_nav_menus(
    array(
      'landing-menu' => __( 'CSIC Landing Menu' ),
    )
  );
}

// Microsoft Clarity analytics
function csic_microsoft_clarity() {
  ?>
  <script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "xsspi0list");
  </script>
  <?php
}
add_action( 'wp_head', 'csic_microsoft_clarity' );
add_action( 'init', 'register_csic_menus' );

/**
 * CSIC: send landing-page lead-form submissions to a vertical-specific
 * thank-you page instead of the default inline WPForms confirmation
 * (which just scrolls the visitor back to the top of the same page).
 *
 * The same WPForms form (id 5477) is embedded across several landing
 * templates, so the destination is chosen from the *source page's* assigned
 * template — falling back to a vertical keyword in the page slug — never from
 * the form id. Pages with no mapping keep WPForms' default behaviour.
 *
 * Two submit paths are covered:
 *   - AJAX submit (templates that load the WPForms script): a listener on the
 *     `wpformsAjaxSubmitSuccess` event redirects the browser.
 *   - Native POST submit (e.g. the Dentist SEO template, which never calls
 *     wp_head()/wp_footer() so the WPForms script never loads): a server-side
 *     redirect on `wpforms_process_complete`.
 */
function csic_landing_thank_you_map() {
  return array(
    'dental_growth_template.php' => '/dental-thank-you/',
    'template-law-seo.php'       => '/law-thank-you/',
    'seo_growth_template.php'    => '/seo-thank-you/',
    'salesforce_template.php'    => '/salesforce-thank-you/',
  );
}

function csic_landing_thank_you_url_for_post( $post_id ) {
  $post_id = absint( $post_id );
  if ( ! $post_id ) {
    return '';
  }

  $map      = csic_landing_thank_you_map();
  $template = get_page_template_slug( $post_id );
  if ( $template && isset( $map[ $template ] ) ) {
    return home_url( $map[ $template ] );
  }

  $slug = (string) get_post_field( 'post_name', $post_id );
  foreach ( array( 'dental', 'salesforce', 'ppc', 'law', 'seo' ) as $vertical ) {
    if ( '' !== $slug && false !== strpos( $slug, $vertical ) ) {
      return home_url( "/{$vertical}-thank-you/" );
    }
  }

  return '';
}

// Native (non-AJAX) submissions: redirect server-side once processing is done.
function csic_landing_thank_you_process_complete( $fields, $entry, $form_data, $entry_id ) {
  if ( wp_doing_ajax() ) {
    return;
  }
  $post_id = ! empty( $_POST['wpforms']['post_id'] ) ? absint( wp_unslash( $_POST['wpforms']['post_id'] ) ) : 0;
  $url     = csic_landing_thank_you_url_for_post( $post_id );
  if ( $url ) {
    wp_safe_redirect( $url );
    exit;
  }
}
add_action( 'wpforms_process_complete', 'csic_landing_thank_you_process_complete', 20, 4 );

// AJAX submissions: redirect from the browser when WPForms reports success.
function csic_landing_thank_you_ajax_script() {
  if ( ! is_page() ) {
    return;
  }
  $url = csic_landing_thank_you_url_for_post( get_queried_object_id() );
  if ( ! $url ) {
    return;
  }
  ?>
  <script>
  document.addEventListener( 'wpformsAjaxSubmitSuccess', function () {
    window.location.assign( <?php echo wp_json_encode( esc_url_raw( $url ) ); ?> );
  } );
  </script>
  <?php
}
add_action( 'wp_footer', 'csic_landing_thank_you_ajax_script' );

/**
 * CSIC: Rank Math is the source of truth for <head> SEO tags. On the vertical
 * thank-you pages (template-thank-you.php) force noindex plus a per-vertical
 * title/description, so the pages stay out of search without anyone touching
 * the Rank Math meta box on each one. noindex also drops them from the sitemap.
 */
function csic_is_thank_you_page() {
  return is_page() && is_page_template( 'template-thank-you.php' );
}

function csic_thank_you_seo_meta() {
  $slug = (string) get_post_field( 'post_name', get_queried_object_id() );
  $map  = array(
    'dental'     => 'Dental SEO Audit Request Received',
    'law'        => 'Law Firm SEO Audit Request Received',
    'seo'        => 'SEO Growth Audit Request Received',
    'ppc'        => 'PPC Audit Request Received',
    'salesforce' => 'Salesforce Consultation Request Received',
  );

  $phrase = 'Request Received';
  foreach ( $map as $key => $text ) {
    if ( '' !== $slug && false !== strpos( $slug, $key ) ) {
      $phrase = $text;
      break;
    }
  }

  return array(
    'title' => 'Thank You — ' . $phrase . ' | CSIC Services',
    'desc'  => 'Your request has been received. A CSIC engineer will review your details and send your teardown within one business day.',
  );
}

function csic_thank_you_rank_math_robots( $robots ) {
  if ( csic_is_thank_you_page() ) {
    $robots['index']  = 'noindex';
    $robots['follow'] = 'follow';
  }
  return $robots;
}
add_filter( 'rank_math/frontend/robots', 'csic_thank_you_rank_math_robots' );

function csic_thank_you_rank_math_title( $title ) {
  if ( csic_is_thank_you_page() ) {
    $meta = csic_thank_you_seo_meta();
    return $meta['title'];
  }
  return $title;
}
add_filter( 'rank_math/frontend/title', 'csic_thank_you_rank_math_title' );

function csic_thank_you_rank_math_description( $description ) {
  if ( csic_is_thank_you_page() ) {
    $meta = csic_thank_you_seo_meta();
    return $meta['desc'];
  }
  return $description;
}
add_filter( 'rank_math/frontend/description', 'csic_thank_you_rank_math_description' );
