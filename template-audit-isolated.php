<?php
/**
 * Template Name: CSIC Isolated Audit
 * Description: Isolated layout for the WPForms Audit page.
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
        
        #audit-shield {
            font-family: ui-sans-serif, system-ui, -apple-system, sans-serif !important;
            font-size: 14px !important;
            line-height: 1.6 !important;
            color: #1f2937 !important;
            background-color: #f9fafb;
        }

        #audit-shield h1 { font-size: 32px !important; font-weight: 800 !important; color: #111827 !important; text-align: center; margin-bottom: 10px !important; }
        #audit-shield p.lead { font-size: 18px !important; text-align: center; color: #4b5563 !important; margin-bottom: 40px !important; }
        
        /* WPFORMS NEAT OVERRIDE FOR ISOLATED PAGE */
        .wpforms-container { max-width: 600px !important; margin: 0 auto !important; background: #fff !important; padding: 40px !important; border-radius: 16px !important; shadow: 0 10px 15px -3px rgba(0,0,0,0.1); }
        .wpforms-form .wpforms-field-label { font-weight: 700 !important; color: #374151 !important; margin-bottom: 8px !important; display: block !important; }
        .wpforms-form input { border: 1px solid #d1d5db !important; padding: 12px !important; border-radius: 8px !important; width: 100% !important; }
        .wpforms-submit-container { text-align: center !important; }
        .wpforms-submit { background-color: var(--primary) !important; color: #fff !important; padding: 14px 40px !important; border-radius: 8px !important; font-weight: 700 !important; width: 100% !important; cursor: pointer !important; }
        
        html { margin-top: 0 !important; }
        .bg-primary { background-color: var(--primary) !important; }
    </style>
    <?php wp_head(); ?>
</head>
<body class="bg-gray-50">

<div id="audit-shield">

    <nav class="bg-white border-b py-4">
        <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">
            <div class="text-xl font-bold text-primary tracking-tighter uppercase">
                <a href="<?php echo home_url(); ?>" style="text-decoration:none; color:inherit;">CSIC SERVICES</a>
            </div>
            <a href="<?php echo home_url(); ?>" class="text-gray-400 hover:text-primary text-sm font-bold">← Back</a>
        </div>
    </nav>

    <main class="max-w-4xl mx-auto py-20 px-6">
        <h1>Start Your Growth Audit</h1>
        <p class="lead">Complete the details below for your technical video teardown.</p>
        
        <?php 
        while ( have_posts() ) : the_post(); 
            the_content(); 
        endwhile; 
        ?>

        <div class="mt-12 flex flex-wrap justify-center items-center gap-8 opacity-60 grayscale hover:grayscale-0 transition-all duration-500">
            <div class="flex items-center space-x-2">
                <i class="fas fa-shield-halved text-primary"></i>
                <span class="text-[10px] font-bold uppercase tracking-wider">SSL Encrypted</span>
            </div>
            <div class="flex items-center space-x-2">
                <i class="fas fa-user-lock text-primary"></i>
                <span class="text-[10px] font-bold uppercase tracking-wider">GDPR & CCPA Ready</span>
            </div>
            <div class="flex items-center space-x-2">
                <i class="fas fa-database text-primary"></i>
                <span class="text-[10px] font-bold uppercase tracking-wider">Secure Data Handling</span>
            </div>
        </div>

        <div class="mt-24 pt-16 border-t border-gray-100">
            <p class="text-center text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 mb-12">The Growth Audit Process</p>
            <div class="grid md:grid-cols-3 gap-12 text-center">
                <div>
                    <div class="text-primary font-bold text-2xl mb-3">01</div>
                    <h4 class="font-bold text-sm uppercase mb-3 tracking-tight">Data Intake</h4>
                    <p class="text-xs text-gray-500 leading-relaxed">We analyze your URL and tech stack using our proprietary audit tools to find conversion leaks.</p>
                </div>
                <div>
                    <div class="text-primary font-bold text-2xl mb-3">02</div>
                    <h4 class="font-bold text-sm uppercase mb-3 tracking-tight">Video Teardown</h4>
                    <p class="text-xs text-gray-500 leading-relaxed">Our engineers record a 5-minute Loom video walking you through your specific infrastructure gaps.</p>
                </div>
                <div>
                    <div class="text-primary font-bold text-2xl mb-3">03</div>
                    <h4 class="font-bold text-sm uppercase mb-3 tracking-tight">Growth Map</h4>
                    <p class="text-xs text-gray-500 leading-relaxed">Receive a personalized roadmap with the exact technical steps needed to scale your ROI.</p>
                </div>
            </div>
        </div>
    </main>

    <div class="bg-white border-y border-gray-100 py-10">
        <div class="max-w-4xl mx-auto px-6">
            <p class="text-center text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 mb-8">Expertise Across the Stack</p>
            <div class="flex justify-around items-center opacity-30 grayscale">
                <i class="fab fa-shopify fa-2x"></i>
                <i class="fab fa-salesforce fa-2x"></i>
                <i class="fab fa-wordpress fa-2x"></i>
                <i class="fab fa-google fa-2x"></i>
                <i class="fab fa-aws fa-2x"></i>
            </div>
        </div>
    </div>

    <footer class="bg-gray-900 text-gray-400 py-16 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-4 gap-12 text-left">
            <div class="col-span-2">
                <div class="text-white font-bold text-xl mb-4 uppercase tracking-tighter">CSIC SERVICES</div>
                <p class="text-sm leading-relaxed max-w-sm">
                    Engineering-led growth infrastructure for global e-commerce and enterprise brands. Headquartered in Kennesaw, GA.
                </p>
            </div>
            <div>
                <h4 class="text-white font-bold mb-6 text-xs uppercase tracking-widest">Legal & Privacy</h4>
                <ul class="text-xs space-y-3" style="list-style:none; padding:0;">
                    <li><a href="/impressum" class="hover:text-white transition">Impressum</a></li>
                    <li><a href="/privacy" class="hover:text-white transition">Privacy Policy</a></li>
                    <li><a href="/terms" class="hover:text-white transition">Terms of Service</a></li>
                    <li><a href="/cookie-policy" class="hover:text-white transition">Cookie Policy</a></li>
                    <li><a href="/contact" class="hover:text-white transition">Contact & Partnerships</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-bold mb-6 text-xs uppercase tracking-widest">Connect</h4>
            <!--
            <div class="flex space-x-4">
                <a href="https://linkedin.com/company/csicservices" class="hover:text-white transition" target="_blank">
                    <i class="fab fa-linkedin fa-lg"></i>
                </a>
                <a href="https://twitter.com/csicservices" class="hover:text-white transition" target="_blank">
                    <i class="fab fa-twitter fa-lg"></i>
                </a>
            </div>-->
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-6 mt-16 pt-8 border-t border-gray-800 flex flex-col md:flex-row justify-between items-center text-[10px] uppercase tracking-[0.2em]">
            <span class="mb-4 md:mb-0">© <?php echo date('Y'); ?> CSIC Services. All Rights Reserved.</span>
            <span class="opacity-40">Security: SSL Encrypted • GDPR Compliant • CCPA Ready</span>
        </div>
    </footer>

</div>

<?php wp_footer(); ?>
</body>
</html>