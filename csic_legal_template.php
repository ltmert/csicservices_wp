<?php
/**
 * Template Name: CSIC Isolated Legal
 * Description: Fully isolated header/footer for Legal pages to prevent theme bloat.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        :root { --primary: #066aab; }
        
        /* THE NEAT SHIELD: Enforces the 14px scale for legal text */
        #legal-shield {
            font-family: ui-sans-serif, system-ui, -apple-system, sans-serif !important;
            font-size: 14px !important;
            line-height: 1.6 !important;
            color: #374151 !important; /* Gray 700 */
            background-color: #ffffff;
        }

        #legal-shield h1 { font-size: 32px !important; font-weight: 800 !important; color: #111827 !important; margin-bottom: 24px !important; }
        #legal-shield h2 { font-size: 20px !important; font-weight: 700 !important; color: #111827 !important; margin-top: 32px !important; margin-bottom: 12px !important; }
        #legal-shield p { margin-bottom: 16px !important; }
        
        /* Cleanup WordPress automatic spacing */
        .legal-content { max-width: 800px; margin: 0 auto; padding: 60px 20px; text-align: left; }
        
        html { margin-top: 0 !important; scroll-behavior: smooth; }
        .bg-primary { background-color: var(--primary) !important; }
    </style>
    <?php wp_head(); ?>
</head>
<body class="bg-white">

<div id="legal-shield">

    <nav class="bg-white border-b py-4">
        <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">
            <div class="text-xl font-bold text-primary tracking-tighter uppercase">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="text-decoration:none; color:inherit;">
                    CSIC<span class="text-gray-700">SERVICES</span>
                </a>
            </div>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-gray-500 hover:text-primary text-sm font-bold transition">
                ← Back to Home
            </a>
        </div>
    </nav>

    <main class="legal-content">
        <h1><?php the_title(); ?></h1>
        <div>
            <?php 
            while ( have_posts() ) : the_post(); 
                the_content(); 
            endwhile; 
            ?>
        </div>
    </main>

<footer class="bg-gray-900 text-gray-400 py-12 border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-4 gap-8">
        <!-- Column 1: Company Info -->
        <div class="col-span-2">
            <div class="text-white text-xl font-bold mb-4 uppercase tracking-tighter">CSIC SERVICES</div>
            <p class="text-sm leading-relaxed max-w-sm">
                Headquartered in Kennesaw, GA, serving high-growth brands globally. 
                We provide the technical infrastructure and performance marketing needed to 
                dominate complex digital markets.
            </p>
        </div>

        <!-- Column 2: Legal (Compliance Focus) -->
        <div>
            <h4 class="text-white font-bold mb-4">Legal & Privacy</h4>
            <ul class="text-sm space-y-2">
                <!-- EU/DE Requirements -->
                <li><a href="/impressum" class="hover:text-white transition">Impressum (Legal Notice)</a></li>
                <li><a href="/privacy" class="hover:text-white transition font-semibold">Privacy Policy (Global)</a></li>
                <li><a href="/terms" class="hover:text-white transition">Terms of Service (AGB)</a></li>
                <!-- US/Ad Platform Requirements -->
                <li><a href="https://csicservices.com/elementor-5228/" class="hover:text-white transition">Cookie Policy</a></li>
            </ul>
        </div>

        <!-- Column 3: Connect -->
        <div>
            <h4 class="text-white font-bold mb-4">Connect</h4>
            <!--
            <div class="flex space-x-4">
                <a href="https://linkedin.com/company/csicservices" class="hover:text-white transition" target="_blank">
                    <i class="fab fa-linkedin fa-lg"></i>
                </a>
                <a href="https://twitter.com/csicservices" class="hover:text-white transition" target="_blank">
                    <i class="fab fa-twitter fa-lg"></i>
                </a>
            </div>-->
            <p class="text-[10px] mt-6 uppercase tracking-widest opacity-50">
                Member of Global Growth Collective
            </p>
        </div>
    </div>
    
    <!-- Bottom Bar (Trust Trigger) -->
    <div class="max-w-7xl mx-auto px-4 mt-12 pt-8 border-t border-gray-800 text-[10px] uppercase tracking-[0.2em] flex flex-col md:flex-row justify-between items-center gap-4">
        <span>© <?php echo date('Y'); ?> CSIC Services. All Rights Reserved.</span>
        <span class="text-gray-500">Security: SSL Encrypted • GDPR Compliant • CCPA Ready</span>
    </div>
</footer>

</div>

<?php wp_footer(); ?>
</body>
</html>