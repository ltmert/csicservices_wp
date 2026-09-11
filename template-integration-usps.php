<?php
/*
Template Name: CSIC Salesforce - USPS Mail & Tracking
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
                        USPS Mail &amp; Logistics
                    </span>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tighter leading-tight">
                        Track Every Piece of Mail <br>
                        <span class="text-blue-600">Inside Your CRM.</span>
                    </h1>
                    <p class="text-lg text-slate-600 mt-6 mb-8 max-w-xl leading-relaxed">
                        We connect USPS directly to Salesforce — real-time address validation, automated mail dispatch, and delivery tracking synced back to the record automatically.
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
                            <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest">MAIL TRACKING LOG</span>
                        </div>
                        <ul class="space-y-4">
                            <li class="flex items-center justify-between p-3 bg-slate-50 rounded-lg">
                                <span class="text-xs font-bold text-slate-700"><i class="fas fa-location-dot text-amber-600 mr-2"></i> Address Validated</span>
                                <span class="text-[9px] font-black text-amber-600 bg-amber-100 px-2 py-0.5 rounded">CONFIRMED</span>
                            </li>
                            <li class="flex items-center justify-between p-3 bg-slate-50 rounded-lg">
                                <span class="text-xs font-bold text-slate-700"><i class="fas fa-envelope-open-text text-blue-600 mr-2"></i> Letter Dispatched</span>
                                <span class="text-[9px] font-black text-blue-600 bg-blue-100 px-2 py-0.5 rounded">IN TRANSIT</span>
                            </li>
                            <li class="flex items-center justify-between p-3 bg-slate-50 rounded-lg">
                                <span class="text-xs font-bold text-slate-700"><i class="fas fa-check-circle text-green-500 mr-2"></i> Delivered</span>
                                <span class="text-[9px] font-black text-green-600 bg-green-100 px-2 py-0.5 rounded">TRACKED</span>
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
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 tracking-tighter uppercase">Physical Mail, Digitally Tracked</h2>
                <p class="text-slate-500 mt-4 max-w-2xl mx-auto">Contracts, notices, and welcome kits still go out on paper — we make sure their status never goes dark.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="p-8 border border-slate-100 bg-slate-50 rounded-2xl shadow-sm hover:shadow-lg transition">
                    <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-location-check text-xl"></i>
                    </div>
                    <h3 class="font-extrabold text-lg text-slate-950 uppercase tracking-tight mb-2">Address Validation on Entry</h3>
                    <p class="text-sm text-slate-500 leading-relaxed">Bad or incomplete addresses are caught and flagged before mail ever goes out, not after it bounces back.</p>
                </div>
                <div class="p-8 border border-slate-100 bg-slate-50 rounded-2xl shadow-sm hover:shadow-lg transition">
                    <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-paper-plane text-xl"></i>
                    </div>
                    <h3 class="font-extrabold text-lg text-slate-950 uppercase tracking-tight mb-2">Automated Dispatch</h3>
                    <p class="text-sm text-slate-500 leading-relaxed">Trigger a physical mailing from a Salesforce workflow the same way you'd trigger an email — no manual print-and-post.</p>
                </div>
                <div class="p-8 border border-slate-100 bg-slate-50 rounded-2xl shadow-sm hover:shadow-lg transition">
                    <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-truck-fast text-xl"></i>
                    </div>
                    <h3 class="font-extrabold text-lg text-slate-950 uppercase tracking-tight mb-2">Delivery Status, Synced</h3>
                    <p class="text-sm text-slate-500 leading-relaxed">USPS tracking events post back to the Contact or Case automatically, so status is never a separate lookup away.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- HOW IT WORKS -->
    <section class="py-24 bg-slate-900 text-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <span class="text-blue-400 font-bold uppercase tracking-widest text-[10px]">How It Works</span>
                <h2 class="text-white text-3xl md:text-4xl font-extrabold uppercase tracking-tighter leading-tight mt-2 mb-6">From Trigger to Tracked Delivery</h2>
                <p class="text-slate-400 leading-relaxed mb-6">We treat physical mail like any other automated channel — validated, dispatched, and tracked without anyone standing at a printer.</p>
                <p class="text-slate-400 leading-relaxed">Every mail event becomes part of the record's timeline, right alongside emails, calls, and payments.</p>
            </div>
            <div class="bg-slate-800 p-8 rounded-3xl border border-slate-700 shadow-2xl relative">
                <h3 class="font-extrabold uppercase tracking-wider text-xs text-blue-400 mb-6">Integration Flow</h3>
                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 rounded-full bg-blue-500/20 text-blue-400 flex items-center justify-center font-bold text-xs">1</div>
                        <div>
                            <h4 class="font-bold text-white">Record Triggers a Mailing</h4>
                            <p class="text-xs text-slate-500">A contract, notice, or welcome kit is queued straight from the Salesforce record.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 rounded-full bg-blue-500/20 text-blue-400 flex items-center justify-center font-bold text-xs">2</div>
                        <div>
                            <h4 class="font-bold text-white">USPS Processes and Tracks It</h4>
                            <p class="text-xs text-slate-500">The address is validated and the piece is dispatched with a tracking number attached.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 rounded-full bg-blue-500/20 text-blue-400 flex items-center justify-center font-bold text-xs">3</div>
                        <div>
                            <h4 class="font-bold text-white">Status Updates Land Automatically</h4>
                            <p class="text-xs text-slate-500">In-transit and delivered events sync back to the Contact or Case, no manual follow-up needed.</p>
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
               <span class="text-white-force">Schedule Your</span> <br><span class="text-blue-500">USPS Integration Audit</span>
            </h2>
            <p class="text-slate-sharp mb-12 max-w-lg mx-auto">We'll map your current mail workflow and show you exactly where automated tracking removes the manual follow-up. Absolute zero obligation.</p>

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
