<?php
/**
 * Template Name: CSIC Isolated Contact
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        :root { --primary: #066aab; }
        body { font-size: 14px !important; color: #1f2937; }
        .text-primary { color: var(--primary) !important; }
        .bg-primary { background-color: var(--primary) !important; }
    </style>
    <?php wp_head(); ?>
</head>
<body class="bg-gray-50">

    <nav class="bg-white border-b py-4">
        <div class="max-w-7xl mx-auto px-6 flex justify-between">
            <div class="text-xl font-black text-primary uppercase tracking-tighter">CSIC<span class="text-gray-700">SERVICES</span></div>
            <a href="/" class="text-gray-400 text-sm font-bold mt-1">← Home</a>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto py-20 px-6 grid md:grid-cols-2 gap-16">
        <div class="text-left">
            <h1 class="text-4xl font-black mb-6">Let's Build Your <br><span class="text-primary">Technical Moat.</span></h1>
            <p class="text-lg text-gray-500 mb-10">Whether you are a direct brand looking to scale or an agency needing high-end technical support, we are ready to deploy.</p>
            
            <div class="space-y-8">
                <div class="flex items-start gap-4">
                    <i class="fas fa-map-marker-alt text-primary mt-1"></i>
                    <div>
                        <h4 class="font-bold uppercase text-xs tracking-widest text-gray-400">Headquarters</h4>
                        <p class="font-bold">Kennesaw, Georgia, USA</p>
                        <p class="text-xs text-gray-500">Global Engineering Operations</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <i class="fas fa-envelope text-primary mt-1"></i>
                    <div>
                        <h4 class="font-bold uppercase text-xs tracking-widest text-gray-400">Email Support</h4>
                        <p class="font-bold">support@csicservices.com</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <i class="fas fa-handshake text-primary mt-1"></i>
                    <div>
                        <h4 class="font-bold uppercase text-xs tracking-widest text-gray-400">Partnerships</h4>
                        <p class="font-bold">White-label & Agency Support Available</p>
                        Agency & White-Label Support: We provide high-end technical execution for marketing agencies that lack in-house engineering depth. From custom API integrations to complex liquid architecture, we act as your invisible technical arm.
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white p-10 rounded-3xl shadow-xl border border-gray-100">
            <h3 class="text-xl font-bold mb-6">Send a Message</h3>
            <?php echo do_shortcode('[wpforms id="5477"]'); ?>
        </div>
    </main>

    <?php wp_footer(); ?>
</body>
</html>