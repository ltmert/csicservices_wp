<?php
/*
Template Name: CSIC Salesforce - WhatsApp & SMS Notifications
*/
get_header(); ?>

<main class="bg-white">
    <!-- HERO SECTION -->
    <section class="relative pt-32 pb-24 bg-slate-50 overflow-hidden border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-6">
            <a href="/salesforce-engineering-on-shore-admin-custom-ui/" class="inline-flex items-center gap-2 text-[11px] font-black uppercase tracking-widest text-blue-600 hover:text-blue-700 transition mb-8">
                <i class="fas fa-arrow-left"></i> All Salesforce Integrations
            </a>
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <span class="inline-flex items-center px-2.5 py-1 rounded bg-blue-100 text-blue-700 text-[10px] font-black uppercase tracking-widest mb-4">
                        WhatsApp &amp; SMS Automation
                    </span>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tighter leading-tight">
                        Reach Every Customer. <br>
                        <span class="text-blue-600">Instantly, Automatically.</span>
                    </h1>
                    <p class="text-lg text-slate-600 mt-6 mb-8 max-w-xl leading-relaxed">
                        We connect WhatsApp and SMS directly to your Salesforce workflows — automated reminders, transactional alerts, and two-way conversations logged straight to the Contact timeline.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#gap-analysis" class="btn-main px-10 py-5 rounded-xl font-black text-xs text-center shadow-xl shadow-blue-200">
                            Request a Technical Teardown
                        </a>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute inset-0 bg-blue-600/5 rounded-3xl -rotate-2 scale-105"></div>
                    <div class="bg-white p-8 rounded-3xl shadow-2xl relative z-10 border border-slate-100">
                        <div class="flex items-center justify-between border-b border-slate-100 pb-4 mb-6">
                            <div class="flex items-center space-x-2">
                                <span class="w-3 h-3 rounded-full bg-red-400"></span>
                                <span class="w-3 h-3 rounded-full bg-yellow-400"></span>
                                <span class="w-3 h-3 rounded-full bg-green-400"></span>
                            </div>
                            <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest">MESSAGE DELIVERY LOG</span>
                        </div>
                        <ul class="space-y-4">
                            <li class="flex items-center justify-between p-3 bg-slate-50 rounded-lg">
                                <span class="text-xs font-bold text-slate-700"><i class="fab fa-whatsapp text-green-500 mr-2"></i> Appointment Reminder Sent</span>
                                <span class="text-[9px] font-black text-green-600 bg-green-100 px-2 py-0.5 rounded">DELIVERED</span>
                            </li>
                            <li class="flex items-center justify-between p-3 bg-slate-50 rounded-lg">
                                <span class="text-xs font-bold text-slate-700"><i class="fas fa-comment-dots text-blue-600 mr-2"></i> Invoice Notification</span>
                                <span class="text-[9px] font-black text-blue-600 bg-blue-100 px-2 py-0.5 rounded">READ</span>
                            </li>
                            <li class="flex items-center justify-between p-3 bg-slate-50 rounded-lg">
                                <span class="text-xs font-bold text-slate-700"><i class="fas fa-headset text-purple-600 mr-2"></i> Live Chat Handoff</span>
                                <span class="text-[9px] font-black text-purple-600 bg-purple-100 px-2 py-0.5 rounded">AGENT NOTIFIED</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BENEFITS GRID -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 tracking-tighter uppercase">Messaging Built Into the Workflow</h2>
                <p class="text-slate-500 mt-4 max-w-2xl mx-auto">No separate messaging app to check. Every conversation lives on the Contact or Case record it belongs to.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="p-8 border border-slate-100 bg-slate-50 rounded-2xl shadow-sm hover:shadow-lg transition">
                    <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-bolt text-xl"></i>
                    </div>
                    <h3 class="font-extrabold text-lg text-slate-950 uppercase tracking-tight mb-2">Automated Triggers</h3>
                    <p class="text-sm text-slate-500 leading-relaxed">Appointment reminders, payment alerts, and status updates fire automatically from your existing Salesforce flows — no extra clicks for your team.</p>
                </div>
                <div class="p-8 border border-slate-100 bg-slate-50 rounded-2xl shadow-sm hover:shadow-lg transition">
                    <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-comments text-xl"></i>
                    </div>
                    <h3 class="font-extrabold text-lg text-slate-950 uppercase tracking-tight mb-2">Two-Way Conversations</h3>
                    <p class="text-sm text-slate-500 leading-relaxed">Inbound replies are logged to the Contact timeline in real time, so any rep can pick up a conversation with full context.</p>
                </div>
                <div class="p-8 border border-slate-100 bg-slate-50 rounded-2xl shadow-sm hover:shadow-lg transition">
                    <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-shield-halved text-xl"></i>
                    </div>
                    <h3 class="font-extrabold text-lg text-slate-950 uppercase tracking-tight mb-2">Compliance-Ready Messaging</h3>
                    <p class="text-sm text-slate-500 leading-relaxed">Opt-in and opt-out status is tracked per contact, keeping every outbound message aligned with consent requirements.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- HOW IT WORKS -->
    <section class="py-24 bg-slate-900 text-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <span class="text-blue-400 font-bold uppercase tracking-widest text-[10px]">How It Works</span>
                <h2 class="text-white text-3xl md:text-4xl font-extrabold uppercase tracking-tighter leading-tight mt-2 mb-6">From Trigger to Two-Way Conversation</h2>
                <p class="text-slate-400 leading-relaxed mb-6">We build the messaging layer directly on top of your existing Salesforce flows and automation — nothing new for your team to learn.</p>
                <p class="text-slate-400 leading-relaxed">Every message sent and received becomes part of the permanent record, visible to whoever picks up the account next.</p>
            </div>
            <div class="bg-slate-800 p-8 rounded-3xl border border-slate-700 shadow-2xl relative">
                <h3 class="font-extrabold uppercase tracking-wider text-xs text-blue-400 mb-6">Integration Flow</h3>
                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 rounded-full bg-blue-500/20 text-blue-400 flex items-center justify-center font-bold text-xs">1</div>
                        <div>
                            <h4 class="font-bold text-white">A Flow Fires the Trigger</h4>
                            <p class="text-xs text-slate-500">An appointment, invoice, or status change in Salesforce kicks off the message.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 rounded-full bg-blue-500/20 text-blue-400 flex items-center justify-center font-bold text-xs">2</div>
                        <div>
                            <h4 class="font-bold text-white">Message Sent via WhatsApp or SMS</h4>
                            <p class="text-xs text-slate-500">The customer receives it on the channel they actually check.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 rounded-full bg-blue-500/20 text-blue-400 flex items-center justify-center font-bold text-xs">3</div>
                        <div>
                            <h4 class="font-bold text-white">Reply Logged Automatically</h4>
                            <p class="text-xs text-slate-500">Any response is attached to the Contact or Case timeline, no manual copy-paste.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FORM SECTION -->
    <section id="gap-analysis" class="py-24 bg-slate-900 border-t border-slate-800 text-white text-center">
        <div class="max-w-3xl mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-extrabold mb-6 uppercase tracking-tighter leading-tight">
               <span class="text-white-force">Schedule Your</span> <br><span class="text-blue-500">Messaging Integration Audit</span>
            </h2>
            <p class="text-slate-sharp mb-12 max-w-lg mx-auto">We'll map your current notification and messaging workflow and show you where automation removes the manual steps. Absolute zero obligation.</p>

            <div class="bg-white rounded-3xl shadow-2xl p-6 md:p-10 audit-form-container text-left border border-slate-800">
                <?php echo do_shortcode('[wpforms id="5477"]'); ?>
            </div>
            <p class="mt-8 text-[10px] text-slate-500 uppercase font-black tracking-[0.3em]">Direct On-Shore Architecture Specialist Consultation</p>
        </div>
    </section>
</main>

<?php
get_template_part( 'template-parts/csic-landing-footer', null, array(
	'blurb' => 'Engineering-led Salesforce architecture, admin, and integration. Headquartered in Kennesaw, GA.',
) );
?>

<?php wp_footer(); ?>
</body>
</html>
