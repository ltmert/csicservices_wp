<?php
/**
 * The template for displaying footer.
 * Optimized for CSIC Services - Neat Scale & Global Compliance
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

$footer_nav_menu = wp_nav_menu( [
    'theme_location' => 'menu-2',
    'fallback_cb'   => false,
    'container'     => false,
    'echo'          => false,
    'menu_class'    => 'csic-footer-links', // Custom class for styling
] );
?>

<style>
    /* 1. Global Scale Correction for non-front pages */
    :root { 
        --wp--preset--font-size--normal: 14px !important;
        --wp--preset--font-size--medium: 16px !important;
    }
    
    /* 2. CSIC Custom Footer Styles */
    .csic-footer-wrap {
        background-color: #111827 !important; /* Tailwind Gray-900 */
        color: #9ca3af !important; /* Tailwind Gray-400 */
        padding: 60px 20px !important;
        font-family: ui-sans-serif, system-ui, -apple-system, sans-serif !important;
        line-height: 1.5 !important;
        border-top: 1px solid #1f2937 !important;
    }

    .csic-footer-grid {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr;
        gap: 40px;
    }
    @media (min-width: 768px) {
        .csic-footer-grid { grid-template-columns: 2fr 1fr 1fr; }
    }

    .csic-footer-heading {
        color: #ffffff !important;
        font-weight: 700 !important;
        margin-bottom: 20px !important;
        text-transform: uppercase;
        font-size: 14px !important;
        letter-spacing: 0.05em;
    }

    /* 3. Handling the WordPress Menu Output */
    .csic-footer-links {
        list-style: none !important;
        padding: 0 !important;
        margin: 0 !important;
    }
    .csic-footer-links li { margin-bottom: 10px !important; }
    .csic-footer-links a {
        color: #9ca3af !important;
        text-decoration: none !important;
        font-size: 14px !important;
        transition: color 0.2s;
    }
    .csic-footer-links a:hover { color: #ffffff !important; }

    .csic-bottom-bar {
        max-width: 1200px;
        margin: 40px auto 0;
        padding-top: 30px;
        border-top: 1px solid #1f2937;
        font-size: 11px !important;
        display: flex;
        justify-content: space-between;
        text-transform: uppercase;
        letter-spacing: 0.1em;
    }
</style>

<footer class="csic-footer-wrap">
    <div class="csic-footer-grid text-left">
        <div>
            <div class="csic-footer-heading" style="font-size: 20px !important;">CSIC Services</div>
            <p style="font-size: 14px !important; max-width: 300px;">
                Headquartered in Kennesaw, GA. <br>
                Engineering-led growth and performance infrastructure for global brands.
            </p>
        </div>

        <div>
            <div class="csic-footer-heading">Legal & Privacy</div>
            <?php if ( $footer_nav_menu ) : 
                echo $footer_nav_menu; 
            endif; ?>
        </div>

        <div>
            <div class="csic-footer-heading">Connect</div>
            <div style="display: flex; gap: 20px; font-size: 20px;">
                <a href="#" style="color: inherit;"><i class="fab fa-linkedin"></i></a>
                <a href="#" style="color: inherit;"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </div>

    <div class="csic-bottom-bar">
        <div>© <?php echo date('Y'); ?> CSIC Services</div>
        <div style="opacity: 0.5;">GDPR Compliant • CCPA Ready</div>
    </div>
</footer>

<?php wp_footer(); ?>