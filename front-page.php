<?php
/**
 * The Front Page template.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSIC Services | Full-Stack Growth & Tech Agency</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style id="csic-home-core-css">
        :root { 
            --primary: #2563eb; 
            --dark: #111827; 
        }
        body {
            font-family: 'Inter', sans-serif !important;
            -webkit-font-smoothing: antialiased;
        }
        .bg-primary { background-color: var(--primary); }
        .text-primary { color: var(--primary); }
        .btn-animate { transition: transform 0.2s; }
        .btn-animate:hover { transform: scale(1.05); }

        /* Ensure header clicks are never blocked */
        nav.sticky {
            z-index: 999999 !important;
            pointer-events: auto !important;
        }
        
        /* WPFORMS CLEAN-LOOK OVERRIDES */
        .wpforms-container { margin: 0 !important; }
        .wpforms-form .wpforms-field-label { display: none !important; }
        
        .wpforms-form input[type=text], 
        .wpforms-form input[type=email], 
        .wpforms-form input[type=url],
        .wpforms-form input[type=tel] {
            background-color: #ffffff !important;
            padding: 16px !important;
            border-radius: 8px !important;
            border: 1px solid #e2e8f0 !important;
            color: #111827 !important;
            width: 100% !important;
            font-size: 1rem !important;
        }
        
        .wpforms-form .wpforms-submit-container { text-align: center !important; margin-top: 10px !important; }
        
        .wpforms-form button[type=submit] {
            background-color: var(--primary) !important;
            color: #ffffff !important;
            font-weight: 700 !important;
            padding: 16px 40px !important;
            border-radius: 8px !important;
            border: none !important;
            font-size: 1.125rem !important;
            cursor: pointer !important;
            width: 100% !important;
            transition: background-color 0.2s, transform 0.2s !important;
        }
        
        .wpforms-form button[type=submit]:hover {
            opacity: 0.9 !important;
            transform: scale(1.02) !important;
        }
        
        .wpforms-form .wpforms-field {
            padding: 10px 0 !important;
            clear: both !important;
        }

        .csic-nav ul {
            display: flex !important;
            flex-direction: row !important;
            gap: 2rem !important;
            list-style: none !important;
            padding: 0 !important;
            margin: 0 !important;
            font-weight: 700 !important;
            font-size: 0.7rem !important;
            text-transform: uppercase !important;
            letter-spacing: 0.15em !important;
            align-items: center !important;
        }
        .csic-nav ul li {
            position: relative !important;
        }
        .csic-nav ul li a {
            transition: color 0.2s !important;
            color: #64748b !important;
            text-decoration: none !important;
        }
        .csic-nav ul li a:hover {
            color: var(--primary) !important;
        }
    </style>
    <?php wp_head(); ?>
</head>
<body class="bg-gray-50 text-gray-900">

    <!-- Header with Clickable Logo & Locked Core Navigation (with Blog link) -->
    <nav class="bg-white border-b sticky top-0 z-50 py-4">
        <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">
            <!-- Functional Link to Domain Root -->
            <a href="https://csicservices.com" class="flex flex-col group transition text-decoration-none">
                <div class="text-slate-900 font-extrabold text-xl uppercase tracking-tighter leading-none group-hover:text-blue-600 transition">CSIC SERVICES</div>
                <span class="text-[9px] text-slate-400 font-bold uppercase tracking-[0.4em]">Growth Technical Agency</span>
            </a>
            
            <div class="hidden md:flex space-x-8 font-medium">
                <div class="csic-nav">
                    <ul>
                        <li><a href="https://csicservices.com/#services">Services</a></li>
                        <li><a href="https://csicservices.com/#tech">Tech Stack</a></li>
                        <li><a href="https://csicservices.com/blog/">Blog</a></li>
                        <li><a href="https://csicservices.com/get-audit/">Get Audit</a></li>
                    </ul>
                </div>
            </div>
            <a href="https://csicservices.com/get-audit/" class="bg-primary text-white px-6 py-3 rounded-lg text-[10px] font-black uppercase tracking-widest text-center btn-animate text-decoration-none">
                Start Growing
            </a>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="relative bg-white py-20 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
            <div>
                <span class="text-primary font-bold uppercase tracking-wider text-xs">Organic Growth & Performance Specialists</span>
                <h1 class="text-5xl font-extrabold leading-tight mt-4 text-gray-900">
                    The Tech <span class="text-primary">Infrastructure</span> <br>That Drives Your Digital Sales.
                </h1>
                <p class="text-xl text-gray-600 mt-6 leading-relaxed">
                    We fix the technical barriers holding your business back. Whether you’re scaling on <strong>Shopify</strong>, <strong>WordPress</strong>, or integrating <strong>Salesforce</strong>, we build the fast, secure foundation your brand needs to dominate search results.
                </p>
                <div class="mt-10 flex flex-col sm:flex-row gap-4 items-center">
                    <a href="https://csicservices.com/get-audit/"
                       class="inline-block bg-primary text-white px-8 py-4 rounded-xl text-lg font-bold shadow-lg btn-animate w-full sm:w-auto text-center">
                        Book Your Free Growth Strategy Call
                    </a>
                </div>
            </div>
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=800" alt="Dashboard" class="rounded-xl shadow-2xl">
                <!-- Floating Trust Card -->
                <div class="absolute -bottom-6 -left-6 bg-white p-4 rounded-lg shadow-xl border border-gray-100 hidden md:block">
                    <p class="text-xs font-bold text-gray-400 uppercase">Tech Accuracy</p>
                    <p class="text-lg font-bold">100% GDPR Compliant</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Logo Cloud -->
    <section class="bg-gray-100 py-10">
        <div class="max-w-7xl mx-auto px-6 flex flex-wrap justify-center gap-12 opacity-50 grayscale">
            <i class="fab fa-shopify fa-3x"></i>
            <i class="fab fa-wordpress fa-3x"></i>
            <i class="fab fa-salesforce fa-3x"></i>
            <i class="fab fa-google fa-3x"></i>
            <i class="fab fa-facebook fa-3x"></i>
            <i class="fab fa-aws fa-3x"></i>
            <i class="fab fa-twitter fa-3x"></i>
            <i class="fab fa-tiktok fa-3x"></i>
            <i class="fab fa-pinterest fa-3x"></i>
        </div>
    </section>
    
    <section class="py-12 bg-gray-900 overflow-hidden relative">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-8">
            <div class="z-10 text-left">
                <span class="text-blue-400 font-bold uppercase tracking-widest text-[10px]">New: 2026 Growth Protocol</span>
                <h2 class="text-white text-3xl font-black mt-2">Is your business <span class="text-blue-400">Invisible</span> to Google?</h2>
                <p class="text-gray-400 mt-4 max-w-xl text-sm">
                    Most agencies sell "rankings." We build a technical moat. See our 3-6 month SEO Sprint and how we force Page 1 visibility for Shopify & WordPress brands.
                </p>
            </div>
            <div class="z-10 flex-shrink-0">
                <a href="https://csicservices.com/seo-growth-sprint/" class="inline-block bg-blue-600 text-white px-8 py-4 rounded-xl font-bold text-lg hover:bg-blue-500 transition shadow-2xl">
                    Explore the SEO Sprint →
                </a>
            </div>
            <div class="absolute right-0 top-0 opacity-10 pointer-events-none">
                <i class="fas fa-chart-line text-[200px] text-white -rotate-12 translate-x-20"></i>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section id="services" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold">Our Conversion Ecosystem</h2>
                <p class="text-gray-500 mt-4 max-w-2xl mx-auto">We bridge the gap between complex engineering and aggressive performance marketing.</p>
            </div>
            <div id="tech" class="grid md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="p-8 border border-gray-100 rounded-2xl hover:shadow-xl transition group bg-gray-50">
                    <div class="w-14 h-14 bg-blue-100 text-primary flex items-center justify-center rounded-xl mb-6 group-hover:bg-primary group-hover:text-white transition">
                        <i class="fas fa-shopping-cart text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Shopify & E-commerce</h3>
                    <ul class="text-gray-600 space-y-2 text-sm">
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Custom Liquid Templates</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Email Flow Automation (Klaviyo)</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Inventory/Product Mix Advice</li>
                    </ul>
                </div>
                <!-- Service 2 -->
                <div class="p-8 border border-gray-100 rounded-2xl hover:shadow-xl transition group bg-gray-50">
                    <div class="w-14 h-14 bg-blue-100 text-primary flex items-center justify-center rounded-xl mb-6 group-hover:bg-primary group-hover:text-white transition">
                        <i class="fas fa-code text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Tech & CRM Integration</h3>
                    <ul class="text-gray-600 space-y-2 text-sm">
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Salesforce Full Integration</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Custom PHP/WordPress Dev</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>API & Marketing Connectors</li>
                    </ul>
                </div>
                <!-- Service 3 -->
                <div class="p-8 border border-gray-100 rounded-2xl hover:shadow-xl transition group bg-gray-50">
                    <div class="w-14 h-14 bg-blue-100 text-primary flex items-center justify-center rounded-xl mb-6 group-hover:bg-primary group-hover:text-white transition">
                        <i class="fas fa-chart-line text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Organic & Paid Growth</h3>
                    <ul class="text-gray-600 space-y-2 text-sm">
                        <li><i class="fas fa-check text-green-500 mr-2"></i>SEO (Backlinks & Content)</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Google/FB/IG Paid Ads</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Pinterest & GBP Management</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section id="gap-analysis" class="py-20 bg-primary text-white">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-4 text-white">Ready for Your Growth Audit?</h2>
            <p class="mb-10 text-blue-100 text-lg">We identify your conversion leaks and competitor gaps in a 5-minute video teardown.</p>
            <a href="https://csicservices.com/get-audit/" class="inline-block bg-white text-primary font-bold px-10 py-5 rounded-xl text-xl shadow-2xl btn-animate text-decoration-none">
                Get My Free Audit & Analysis →
            </a>
        </div>
    </section>

    <section class="py-20 bg-blue-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-gray-900 text-4xl font-bold">Included in Every Growth Sprint</h2>
                <p class="text-gray-600 mt-4 text-lg">We don't just "rank" you; we partner with you to scale.</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-blue-100">
                    <i class="fas fa-chart-pie text-primary text-2xl mb-4"></i>
                    <h4 class="font-bold mb-2">Product Mix Strategy</h4>
                    <p class="text-xs text-gray-500">We analyze Shopify & GA4 data to find your highest-margin winners.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-blue-100">
                    <i class="fas fa-tools text-primary text-2xl mb-4"></i>
                    <h4 class="font-bold mb-2">Technical Support</h4>
                    <p class="text-xs text-gray-500">Custom Liquid code, WordPress forms, and banner design included.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-blue-100">
                    <i class="fas fa-shield-alt text-primary text-2xl mb-4"></i>
                    <h4 class="font-bold mb-2">Platform Stability</h4>
                    <p class="text-xs text-gray-500">Ongoing maintenance to ensure your store never breaks during a surge.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-blue-100">
                    <i class="fas fa-ad text-primary text-2xl mb-4"></i>
                    <h4 class="font-bold mb-2">Paid Add-ons</h4>
                    <p class="text-xs text-gray-500">Ready to step up? We offer managed Google & Meta Ads as an extra gear.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-400 py-12 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-4 gap-8">
            <!-- Column 1: Company Info -->
            <div class="col-span-2">
                <div class="text-white text-xl font-bold mb-4 uppercase tracking-tighter">CSIC SERVICES</div>
                <p class="text-sm leading-relaxed max-w-sm">
                    Headquartered in Kennesaw, GA, serving high-growth brands globally. 
                    We provide the technical infrastructure and performance marketing needed to 
                    dominate complex digital markets.
                </p>
            </div>

            <!-- Column 2: Legal -->
            <div>
                <h4 class="text-white font-bold mb-4">Legal & Privacy</h4>
                <ul class="text-sm space-y-2">
                    <li><a href="/impressum" class="hover:text-white transition text-decoration-none">Impressum (Legal Notice)</a></li>
                    <li><a href="/privacy" class="hover:text-white transition font-semibold text-decoration-none">Privacy Policy (Global)</a></li>
                    <li><a href="/terms" class="hover:text-white transition text-decoration-none">Terms of Service (AGB)</a></li>
                    <li><a href="/cookie-policy" class="hover:text-white transition text-decoration-none">Cookie Policy</a></li>
                    <li><a href="/contact" class="hover:text-white transition text-decoration-none">Contact & Partnerships</a></li>
                </ul>
            </div>

            <!-- Column 3: Landing Pages Dropdown Directory (As requested for campaign isolation) -->
            <div>
                <h4 class="text-white font-bold mb-4">Niche Campaigns</h4>
                <div class="relative inline-block text-left w-full">
                    <select onchange="if (this.value) window.location.href=this.value;" class="bg-gray-800 text-gray-200 text-xs rounded border border-gray-700 p-2.5 w-full focus:outline-none focus:ring-1 focus:ring-blue-500">
                        <option value="">Select Target Radius...</option>
                        <option value="/csic-dental-firm-seo-growth/">Dentist SEO Campaign</option>
                        <option value="/csic-law-firm-seo-growth/">Law Firm SEO Campaign</option>
                        <option value="/csic-salesforce-admin-and-integration/">Salesforce Admin Integration</option>
                    </select>
                </div>
                <p class="text-[10px] mt-6 uppercase tracking-widest opacity-50">
                    Member of Global Growth Collective
                </p>
            </div>
        </div>
        
        <!-- Bottom Bar -->
        <div class="max-w-7xl mx-auto px-6 mt-12 pt-8 border-t border-gray-800 text-[10px] uppercase tracking-[0.2em] flex flex-col md:flex-row justify-between items-center gap-4">
            <span>© <?php echo date('Y'); ?> CSIC Services. All Rights Reserved.</span>
            <span class="text-gray-500">Security: SSL Encrypted • GDPR Compliant • CCPA Ready</span>
        </div>
    </footer>

</body>
</html>