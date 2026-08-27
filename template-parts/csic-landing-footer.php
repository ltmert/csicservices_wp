<?php
/**
 * Shared footer for the CSIC isolated landing-page templates.
 *
 * Included via get_template_part( 'template-parts/csic-landing-footer', null, [ 'blurb' => '...' ] ).
 * Keeps the 4-column layout, Legal & Privacy list, "Niche Campaigns" directory
 * dropdown, and the SSL/GDPR bottom bar consistent across every landing page.
 *
 * @param array $args {
 *     @type string $blurb Company description paragraph. Optional; falls back to
 *                         the generic agency blurb used on the front page.
 * }
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$csic_footer_blurb = ! empty( $args['blurb'] )
	? $args['blurb']
	: 'Headquartered in Kennesaw, GA, serving high-growth brands globally. We provide the technical infrastructure and performance marketing needed to dominate complex digital markets.';
?>
<!-- Footer -->
<footer class="bg-gray-900 text-gray-400 py-12 border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-4 gap-8">
        <!-- Column 1: Company Info -->
        <div class="col-span-2">
            <div class="text-white text-xl font-bold mb-4 uppercase tracking-tighter">CSIC SERVICES</div>
            <p class="text-sm leading-relaxed max-w-sm"><?php echo esc_html( $csic_footer_blurb ); ?></p>
        </div>

        <!-- Column 2: Legal -->
        <div>
            <h4 class="text-white font-bold mb-4">Legal &amp; Privacy</h4>
            <ul class="text-sm space-y-2">
                <li><a href="/impressum" class="hover:text-white transition text-decoration-none">Impressum (Legal Notice)</a></li>
                <li><a href="/privacy" class="hover:text-white transition font-semibold text-decoration-none">Privacy Policy (Global)</a></li>
                <li><a href="/terms" class="hover:text-white transition text-decoration-none">Terms of Service (AGB)</a></li>
                <li><a href="https://csicservices.com/elementor-5228/" class="hover:text-white transition text-decoration-none">Cookie Policy</a></li>
                <li><a href="/contact" class="hover:text-white transition text-decoration-none">Contact &amp; Partnerships</a></li>
            </ul>
        </div>

        <!-- Column 3: Landing Pages Dropdown Directory (campaign isolation) -->
        <div>
            <h4 class="text-white font-bold mb-4">Niche Campaigns</h4>
            <div class="relative inline-block text-left w-full">
                <select onchange="if (this.value) window.location.href=this.value;" class="bg-gray-800 text-gray-200 text-xs rounded border border-gray-700 p-2.5 w-full focus:outline-none focus:ring-1 focus:ring-blue-500">
                    <option value="">Select Target Radius...</option>
                    <option value="/csic-dental-firm-seo-growth/">Dentist SEO Campaign</option>
                    <option value="/csic-law-firm-seo-growth/">Law Firm SEO Campaign</option>
                    <option value="/salesforce-engineering-on-shore-admin-custom-ui/">Salesforce Admin Integration</option>
                </select>
            </div>
            <p class="text-[10px] mt-6 uppercase tracking-widest opacity-50">
                Member of Global Growth Collective
            </p>
        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="max-w-7xl mx-auto px-6 mt-12 pt-8 border-t border-gray-800 text-[10px] uppercase tracking-[0.2em] flex flex-col md:flex-row justify-between items-center gap-4">
        <span>&copy; <?php echo esc_html( date( 'Y' ) ); ?> CSIC Services. All Rights Reserved.</span>
        <span class="text-gray-500">Security: SSL Encrypted &bull; GDPR Compliant &bull; CCPA Ready</span>
    </div>
</footer>
