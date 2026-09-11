<?php
/*
Template Name: CSIC Salesforce - Stripe Payments Integration
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
                        Stripe + Salesforce Integration
                    </span>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tighter leading-tight">
                        Get Paid Faster. <br>
                        <span class="text-blue-600">Reconcile Automatically.</span>
                    </h1>
                    <p class="text-lg text-slate-600 mt-6 mb-8 max-w-xl leading-relaxed">
                        We wire Stripe directly into your Salesforce Opportunities and Cases — instant payment links, automatic invoice status updates, and zero manual ledger reconciliation.
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
                            <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest">STRIPE LEDGER SYNC</span>
                        </div>
                        <ul class="space-y-4">
                            <li class="flex items-center justify-between p-3 bg-slate-50 rounded-lg">
                                <span class="text-xs font-bold text-slate-700"><i class="fas fa-link text-blue-600 mr-2"></i> Payment Link Generated</span>
                                <span class="text-[9px] font-black text-blue-600 bg-blue-100 px-2 py-0.5 rounded">OPPORTUNITY #4471</span>
                            </li>
                            <li class="flex items-center justify-between p-3 bg-slate-50 rounded-lg">
                                <span class="text-xs font-bold text-slate-700"><i class="fas fa-check-circle text-green-500 mr-2"></i> Payment Captured</span>
                                <span class="text-[9px] font-black text-green-600 bg-green-100 px-2 py-0.5 rounded">AUTO-SYNCED</span>
                            </li>
                            <li class="flex items-center justify-between p-3 bg-slate-50 rounded-lg">
                                <span class="text-xs font-bold text-slate-700"><i class="fas fa-file-invoice text-purple-600 mr-2"></i> Ledger Reconciled</span>
                                <span class="text-[9px] font-black text-purple-600 bg-purple-100 px-2 py-0.5 rounded">0 MANUAL STEPS</span>
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
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 tracking-tighter uppercase">Stripe, Native to Your CRM</h2>
                <p class="text-slate-500 mt-4 max-w-2xl mx-auto">No middleware dashboards, no exported CSVs. Every dollar is visible directly inside the record it belongs to.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="p-8 border border-slate-100 bg-slate-50 rounded-2xl shadow-sm hover:shadow-lg transition">
                    <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-link text-xl"></i>
                    </div>
                    <h3 class="font-extrabold text-lg text-slate-950 uppercase tracking-tight mb-2">Instant Payment Links</h3>
                    <p class="text-sm text-slate-500 leading-relaxed">Generate a Stripe checkout or deposit link from inside any Opportunity or Case with a single click — no separate login required.</p>
                </div>
                <div class="p-8 border border-slate-100 bg-slate-50 rounded-2xl shadow-sm hover:shadow-lg transition">
                    <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-rotate text-xl"></i>
                    </div>
                    <h3 class="font-extrabold text-lg text-slate-950 uppercase tracking-tight mb-2">Real-Time Reconciliation</h3>
                    <p class="text-sm text-slate-500 leading-relaxed">Webhooks push captured payments, refunds, and failed charges straight back into the record ledger the moment they happen.</p>
                </div>
                <div class="p-8 border border-slate-100 bg-slate-50 rounded-2xl shadow-sm hover:shadow-lg transition">
                    <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-shield-halved text-xl"></i>
                    </div>
                    <h3 class="font-extrabold text-lg text-slate-950 uppercase tracking-tight mb-2">PCI-Compliant by Design</h3>
                    <p class="text-sm text-slate-500 leading-relaxed">Card data never touches Salesforce storage — Stripe handles the vaulting, we handle the workflow around it.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- HOW IT WORKS -->
    <section class="py-24 bg-slate-900 text-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <span class="text-blue-400 font-bold uppercase tracking-widest text-[10px]">How It Works</span>
                <h2 class="text-white text-3xl md:text-4xl font-extrabold uppercase tracking-tighter leading-tight mt-2 mb-6">From Opportunity to Reconciled Payment</h2>
                <p class="text-slate-400 leading-relaxed mb-6">We build the connective tissue between your sales pipeline and your billing — so payment status is never a separate lookup away.</p>
                <p class="text-slate-400 leading-relaxed">Every transaction event is logged as a native Salesforce activity, giving your finance and sales teams one shared source of truth.</p>
            </div>
            <div class="bg-slate-800 p-8 rounded-3xl border border-slate-700 shadow-2xl relative">
                <h3 class="font-extrabold uppercase tracking-wider text-xs text-blue-400 mb-6">Integration Flow</h3>
                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 rounded-full bg-blue-500/20 text-blue-400 flex items-center justify-center font-bold text-xs">1</div>
                        <div>
                            <h4 class="font-bold text-white">Generate the Link</h4>
                            <p class="text-xs text-slate-500">A Stripe payment link is created directly from the Opportunity or Case record.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 rounded-full bg-blue-500/20 text-blue-400 flex items-center justify-center font-bold text-xs">2</div>
                        <div>
                            <h4 class="font-bold text-white">Customer Pays</h4>
                            <p class="text-xs text-slate-500">The customer completes checkout on Stripe's hosted, PCI-compliant page.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 rounded-full bg-blue-500/20 text-blue-400 flex items-center justify-center font-bold text-xs">3</div>
                        <div>
                            <h4 class="font-bold text-white">Salesforce Updates Itself</h4>
                            <p class="text-xs text-slate-500">A webhook marks the record paid, reconciles the ledger, and notifies the assigned rep.</p>
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
               <span class="text-white-force">Schedule Your</span> <br><span class="text-blue-500">Stripe Integration Audit</span>
            </h2>
            <p class="text-slate-sharp mb-12 max-w-lg mx-auto">We'll map your current payment workflow and show you exactly where the manual steps disappear. Absolute zero obligation.</p>

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
