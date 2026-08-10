<?php
/**
 * The Header for our theme.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?> CSIC SERVICES</title>
    
    <!-- Load Tailwind & Google Fonts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style id="csic-header-core-css">
        :root {
            --agency-primary: #2563eb !important; 
            --agency-dark: #111827 !important;    
            --csic-accent: #afaaf9 !important;
        }
        
        body, h1, h2, h3, h4, h5, h6, p, a, span, li, input, button, textarea { 
            font-family: 'Inter', sans-serif !important; 
            -webkit-font-smoothing: antialiased;
        }

        /* Ensure header clicks are never blocked */
        header.fixed {
            z-index: 999999 !important;
            pointer-events: auto !important;
        }

        .btn-main {
            background-color: #2563eb !important;
            color: #ffffff !important;
            font-weight: 800 !important;
            text-transform: uppercase !important;
            letter-spacing: 0.1em !important;
            display: inline-block !important;
            transition: all 0.3s ease !important;
            border: none !important;
            text-decoration: none !important;
        }
        .btn-main:hover {
            opacity: 0.9 !important;
            transform: translateY(-2px) !important;
            color: #ffffff !important;
        }

        .csic-nav ul { 
            display: flex !important; 
            gap: 2rem !important; 
            list-style: none !important; 
            padding: 0 !important; 
            margin: 0 !important; 
            font-weight: 700 !important; 
            font-size: 0.7rem !important; 
            text-transform: uppercase !important; 
            letter-spacing: 0.15em !important; 
        }
        .csic-nav ul li { position: relative !important; }
        .csic-nav ul li a { transition: color 0.3s !important; display: block !important; padding: 10px 0 !important; color: #64748b !important; text-decoration: none !important; }
        .csic-nav ul li a:hover { color: var(--agency-primary) !important; }

        /* WPForms Reset */
        .audit-form-container input { 
            width: 100% !important; 
            padding: 14px 18px !important; 
            border-radius: 10px !important; 
            border: 1px solid #e2e8f0 !important; 
            background: #ffffff !important; 
            font-size: 16px !important;
            color: var(--agency-dark) !important;
        }
        .audit-form-container button.wpforms-submit { 
            width: 100% !important; 
            background-color: var(--agency-primary) !important; 
            color: #ffffff !important; 
            font-size: 12px !important; 
            font-weight: 900 !important; 
            text-transform: uppercase !important; 
            letter-spacing: 0.2em !important; 
            padding: 20px !important; 
            border-radius: 10px !important; 
            border: none !important;
        }
        .text-white-force { color: #ffffff !important; }
        .text-slate-sharp { color: #94a3b8 !important; font-size: 0.95rem !important; line-height: 1.6 !important; }
    </style>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <!-- UNIFIED HEADER (HARDCODED CORE NAVIGATION WITH BLOG ADDED) -->
    <header class="fixed w-full z-50 bg-white/95 backdrop-blur-md border-b border-slate-200 py-4" style="z-index: 999999 !important; pointer-events: auto !important;">
        <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">
            <a href="https://csicservices.com" class="flex flex-col group transition text-decoration-none" style="pointer-events: auto !important; position: relative; z-index: 9999999 !important;">
                <div class="text-slate-900 font-extrabold text-xl uppercase tracking-tighter leading-none group-hover:text-blue-600 transition">CSIC SERVICES</div>
                <span class="text-[9px] text-slate-400 font-bold uppercase tracking-[0.4em]">Growth Technical Agency</span>
            </a>
            
            <nav class="hidden md:block csic-nav">
                <!-- Hardcoded Core Nav with Blog -->
                <ul>
                    <li><a href="https://csicservices.com/#services">Services</a></li>
                    <li><a href="https://csicservices.com/#tech">Tech Stack</a></li>
                    <li><a href="https://csicservices.com/blog/">Blog</a></li>
                    <li><a href="https://csicservices.com/get-audit/">Get Audit</a></li>
                </ul>
            </nav>

            <a href="https://csicservices.com/get-audit/" class="btn-main px-6 py-3 rounded-lg text-[10px] uppercase tracking-widest text-center">
                Growth Audit
            </a>
        </div>
    </header>