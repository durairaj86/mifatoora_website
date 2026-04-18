@extends('website.layout')
@section('web-content')
    <style>
        :root {
            --bs-body-font-family: 'DM Sans', sans-serif;
            --ink: #0a0f1e;
            --ink-soft: #1e2740;
            --ink-muted: #4a5578;
            --ink-ghost: #8896b0;
            --surface: #f5f7fc;
            --emerald: #00c97b;
            --emerald-dim: #00a863;
            --emerald-glow: rgba(0, 201, 123, .18);
            --grid-line: rgba(60, 80, 140, .07);
        }

        html { scroll-behavior: smooth; }
        body { font-family: 'DM Sans', sans-serif; color: var(--ink); background: var(--surface); overflow-x: hidden; }

        .bg-ink { background-color: var(--ink) !important; }
        .bg-surface { background-color: var(--surface) !important; }
        .text-ink-muted { color: var(--ink-muted) !important; }
        .text-ink-ghost { color: var(--ink-ghost) !important; }
        .text-emerald { color: var(--emerald) !important; }
        .border-grid { border-color: var(--grid-line) !important; }

        .section-label {
            font-size: .72rem;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: var(--emerald);
        }

        /* Hero & Visuals */
        #hero { min-height: 100vh; padding-top: 110px; position: relative; overflow: hidden; background: #fff; }
        .hero-bg-grid {
            position: absolute; inset: 0; z-index: 0;
            background-image: linear-gradient(var(--grid-line) 1px, transparent 1px), linear-gradient(90deg, var(--grid-line) 1px, transparent 1px);
            background-size: 48px 48px;
            mask-image: radial-gradient(ellipse 80% 70% at 50% 50%, black 40%, transparent 100%);
        }
        .hero-orb { position: absolute; border-radius: 50%; filter: blur(80px); pointer-events: none; z-index: 0; }
        .hero-orb-1 { width: 560px; height: 560px; background: radial-gradient(circle, rgba(0, 201, 123, .13) 0%, transparent 70%); top: -80px; right: -120px; }
        .hero-orb-2 { width: 380px; height: 380px; background: radial-gradient(circle, rgba(58, 107, 255, .08) 0%, transparent 70%); bottom: 0; left: -80px; }

        .hero-title { font-size: clamp(2.4rem, 5vw, 3.8rem); font-weight: 800; line-height: 1.1; letter-spacing: -1.5px; }
        .underline-gold { position: relative; display: inline-block; }
        .underline-gold::after { content: ''; position: absolute; left: 0; bottom: 3px; right: 0; height: 4px; background: #f4b942; border-radius: 2px; opacity: .7; }

        .zatca-badge {
            display: inline-flex; align-items: center; gap: .5rem; background: rgba(0, 201, 123, .1);
            border: 1px solid rgba(0, 201, 123, .3); color: var(--emerald-dim);
            font-size: .72rem; font-weight: 700; letter-spacing: .8px; text-transform: uppercase;
            padding: .4rem .9rem; border-radius: 50px;
        }

        .btn-hero-primary {
            background: var(--emerald); color: #fff; border-radius: 12px; padding: .85rem 2rem;
            font-weight: 600; box-shadow: 0 6px 20px var(--emerald-glow); transition: all .2s; text-decoration: none;
            display: inline-flex; align-items: center; gap: .5rem;
        }
        .btn-hero-primary:hover { background: var(--emerald-dim); color: #fff; transform: translateY(-2px); }

        .btn-hero-outline {
            background: transparent; border: 1.5px solid rgba(10, 15, 30, .15); color: var(--ink);
            border-radius: 12px; padding: .85rem 1.75rem; font-weight: 500; text-decoration: none;
            display: inline-flex; align-items: center; gap: .5rem; transition: all .2s;
        }

        .trust-avatar {
            width: 32px; height: 32px; border-radius: 50%; border: 2px solid #fff;
            background: var(--surface); display: inline-flex; align-items: center; justify-content: center;
            font-size: .65rem; font-weight: 700; color: var(--ink-soft); margin-left: -8px;
        }
        .trust-avatar:first-child { margin-left: 0; }

        /* Invoice Mockup */
        .invoice-mock { border-radius: 20px; box-shadow: 0 30px 70px rgba(10, 15, 30, .13); overflow: hidden; border: 1px solid rgba(60, 80, 140, .08); animation: floatY 5s ease-in-out infinite; }
        .mock-topbar { background: var(--ink); padding: 1rem 1.5rem; }
        .float-badge { position: absolute; background: #fff; border-radius: 14px; padding: .7rem 1rem; box-shadow: 0 16px 40px rgba(10, 15, 30, .1); border: 1px solid rgba(60, 80, 140, .08); z-index: 2; }
        .float-badge-1 { bottom: -16px; left: -24px; display: flex; align-items: center; gap: .6rem; }
        .float-badge-2 { top: -16px; right: -16px; min-width: 128px; }
        .float-dot { width: 36px; height: 36px; border-radius: 10px; background: var(--emerald-glow); display: flex; align-items: center; justify-content: center; color: var(--emerald); }
        .pulse-dot { width: 8px; height: 8px; border-radius: 50%; background: var(--emerald); display: inline-block; animation: pulse 1.5s ease-in-out infinite; }

        /* Stats */
        .stats-bar { background: var(--ink); }
        .stat-val { font-size: 2rem; font-weight: 800; color: #fff; line-height: 1.1; }
        .stat-val span { color: var(--emerald); }

        /* Feature Cards */
        .feat-card { border: 1.5px solid rgba(60, 80, 140, .08); border-radius: 18px; background: #fff; height: 100%; transition: all .25s; }
        .feat-card:hover { box-shadow: 0 20px 50px rgba(10, 15, 30, .07); transform: translateY(-4px); }
        .feat-icon-box { width: 48px; height: 48px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.25rem; }
        .feat-title { font-weight: 700; }

        /* Ledger & Flow Visuals */
        .ledger-visual-card { background: var(--ink); border-radius: 14px; padding: 1.25rem; }
        .ledger-header-row, .ledger-data-row { display: grid; grid-template-columns: 2fr 1fr 1fr; gap: .5rem; padding: .4rem 0; border-bottom: 1px solid rgba(255, 255, 255, .05); }
        .ledger-header-row { border-bottom: 1px solid rgba(255, 255, 255, .15); }
        .flow-num { width: 24px; height: 24px; border-radius: 50%; flex-shrink: 0; background: var(--emerald); color: var(--ink); font-size: .65rem; font-weight: 800; display: flex; align-items: center; justify-content: center; }
        .phase-pill { display: inline-flex; align-items: center; gap: .5rem; background: rgba(0, 201, 123, .15); border: 1px solid rgba(0, 201, 123, .3); color: var(--emerald); font-size: .75rem; font-weight: 700; padding: .35rem .9rem; border-radius: 50px; }

        /* Animations */
        @keyframes floatY { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-10px); } }
        @keyframes pulse { 0%, 100% { opacity: 1; transform: scale(1); } 50% { opacity: .4; transform: scale(.8); } }
        @keyframes fadeUp { from { opacity: 0; transform: translateY(24px); } to { opacity: 1; transform: translateY(0); } }
        .anim-hero { animation: fadeUp .65s ease both; }
        .delay-1 { animation-delay: .1s; } .delay-2 { animation-delay: .2s; } .delay-3 { animation-delay: .3s; } .delay-4 { animation-delay: .4s; }
        .reveal { opacity: 0; transform: translateY(22px); transition: all .55s ease; }
        .reveal.visible { opacity: 1; transform: translateY(0); }
    </style>
    <style>
        .compliance-check li {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            margin-bottom: 1.25rem;
            color: rgba(255, 255, 255, .7);
            font-size: .95rem;
        }
        .compliance-check i {
            color: var(--emerald);
            font-size: 1.1rem;
            margin-top: 2px;
        }
        .flow-step-item {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            position: relative;
        }
        .flow-step-item:not(:last-child)::after {
            content: '';
            position: absolute;
            left: 12px;
            top: 28px;
            bottom: -15px;
            width: 1px;
            background: rgba(255, 255, 255, .1);
        }
        .flow-num.done {
            background: var(--emerald);
            color: var(--ink);
        }
    </style>
    <!-- ════════════════ HERO ════════════════ -->
    <header id="hero">
        <div class="hero-bg-grid"></div>
        <div class="hero-orb hero-orb-1"></div>
        <div class="hero-orb hero-orb-2"></div>

        <div class="container position-relative py-5 mt-2" style="z-index:1;">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="zatca-badge mb-4 anim-hero">
                        <i class="bi bi-shield-lock-fill"></i> ZATCA Phase 2 Integration Certified
                    </div>
                    <h1 class="hero-title text-dark mb-4 anim-hero delay-1">
                        The Complete <span class="text-emerald">Financial OS</span><br>
                        for <span class="underline-gold">Saudi Vision 2030</span>
                    </h1>
                    <p class="anim-hero delay-2 mb-5" style="font-size:1.05rem;line-height:1.7;color:var(--ink-muted);max-width:470px;">
                        Seamlessly bridge your shop, warehouse, and accounting ledger with 100% automated Fatoora compliance. Built for the Saudi regulatory landscape.
                    </p>
                    <div class="d-flex flex-wrap gap-3 mb-4 anim-hero delay-3">
                        <a href="#" class="btn-hero-primary">Start 14-Day Free Trial <i class="bi bi-arrow-right"></i></a>
                        <a href="#" class="btn-hero-outline">View ZATCA Docs <i class="bi bi-box-arrow-up-right"></i></a>
                    </div>
                    <div class="d-flex align-items-center gap-2 anim-hero delay-4">
                        <div class="d-flex">
                            <span class="trust-avatar">RS</span><span class="trust-avatar">AH</span>
                            <span class="trust-avatar">MK</span><span class="trust-avatar">YF</span>
                        </div>
                        <small class="text-ink-ghost">Trusted by <strong class="text-dark">500+</strong> Saudi businesses</small>
                    </div>
                </div>

                <div class="col-lg-6 d-none d-lg-block">
                    <div class="position-relative px-4 pb-4 pt-2">
                        <div class="float-badge float-badge-2">
                            <div style="font-size:.68rem;color:var(--ink-ghost);margin-bottom:2px;">VAT Cleared</div>
                            <div class="d-flex align-items-center gap-2">
                                <span class="pulse-dot"></span>
                                <span class="fw-bold" style="font-size:.95rem;">Live Sync</span>
                            </div>
                        </div>

                        <div class="invoice-mock bg-white">
                            <div class="mock-topbar d-flex justify-content-between align-items-start">
                                <div>
                                    <div class="fw-bold text-white" style="font-size:.8rem;">TAX INVOICE / فاتورة ضريبية</div>
                                    <div class="mt-1" style="font-size:.65rem;color:rgba(255,255,255,.35);">INV-2026-00841 · ZATCA Cleared</div>
                                </div>
                                <div class="text-end">
                                    <span class="badge rounded-pill fw-bold bg-emerald text-white" style="font-size:.63rem;">PHASE 2</span>
                                    <div class="mt-1 text-white-50" style="font-size:.62rem;">UUID: 8f2c…a91b</div>
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="d-flex justify-content-between align-items-start mb-4">
                                    <div>
                                        <div style="font-size:.7rem;color:var(--ink-ghost);" class="mb-1">Bill To</div>
                                        <div class="fw-semibold" style="font-size:.85rem;">Riyadh Tech Supplies LLC</div>
                                        <div style="font-size:.72rem;color:var(--ink-ghost);">VAT: 310012345600003</div>
                                    </div>
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/d/d0/QR_code_for_mobile_English_Wikipedia.svg" width="52" height="52" alt="QR" class="rounded-2">
                                </div>
                                <div class="d-flex justify-content-between py-2 border-bottom border-grid"><span class="small text-ink-ghost">Service Fee</span><span class="fw-semibold small">3,500.00 SAR</span></div>
                                <div class="d-flex justify-content-between py-2 border-bottom border-grid"><span class="small text-ink-ghost">Consulting</span><span class="fw-semibold small">1,200.00 SAR</span></div>
                                <div class="d-flex justify-content-between py-2 border-bottom border-grid"><span class="small text-ink-ghost">Discount</span><span class="fw-semibold small text-danger">−700.00 SAR</span></div>
                                <div class="d-flex justify-content-between py-2 border-bottom border-grid"><span class="small text-ink-ghost">Subtotal</span><span class="fw-semibold small">4,000.00 SAR</span></div>
                                <div class="d-flex justify-content-between py-2 border-bottom border-grid"><span class="small text-ink-ghost">VAT 15%</span><span class="fw-semibold small">600.00 SAR</span></div>
                                <div class="d-flex justify-content-between align-items-center mt-3 p-3 rounded-3 bg-surface">
                                    <span class="fw-bold small">Total Due</span>
                                    <span class="fw-bold text-emerald fs-4">4,600.00 SAR</span>
                                </div>
                            </div>
                        </div>

                        <div class="float-badge float-badge-1">
                            <div class="float-dot"><i class="bi bi-graph-up-arrow"></i></div>
                            <div>
                                <div class="fw-bold" style="font-size:.95rem;line-height:1.1;">+23.4%</div>
                                <div style="font-size:.7rem;color:var(--ink-ghost);">Revenue this month</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ════════════════ STATS BAR ════════════════ -->
    <div class="stats-bar py-5">
        <div class="container">
            <div class="row g-0 text-center reveal">
                <div class="col-6 col-md-3 py-3 border-end border-white border-opacity-10">
                    <div class="stat-val">500<span>+</span></div>
                    <div class="mt-1 small text-white-50">Saudi businesses trust BillKSA</div>
                </div>
                <div class="col-6 col-md-3 py-3 border-md-end border-white border-opacity-10">
                    <div class="stat-val">2M<span>+</span></div>
                    <div class="mt-1 small text-white-50">Invoices cleared via ZATCA</div>
                </div>
                <div class="col-6 col-md-3 py-3 border-end border-white border-opacity-10">
                    <div class="stat-val">100<span>%</span></div>
                    <div class="mt-1 small text-white-50">Phase 2 compliance rate</div>
                </div>
                <div class="col-6 col-md-3 py-3">
                    <div class="stat-val">99<span>.9%</span></div>
                    <div class="mt-1 small text-white-50">Platform uptime guarantee</div>
                </div>
            </div>
        </div>
    </div>

    <!-- ════════════════ FEATURES ════════════════ -->
    <section id="features" class="py-5 bg-white">
        <div class="container py-5">
            <div class="text-center mb-5 reveal">
                <span class="section-label d-block mb-2">Platform Features</span>
                <h2 class="fw-bold text-dark display-6">Everything your finance team<br>needs in one place</h2>
                <p class="text-ink-muted mt-3 mx-auto" style="max-width:520px; font-size:1.05rem;">A unified ledger built for the Saudi regulatory landscape — from the first invoice to annual Zakat filing.</p>
            </div>

            <div class="row g-4 mb-4 reveal">
                <div class="col-lg-6">
                    <div class="feat-card p-4">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="feat-icon-box bg-emerald bg-opacity-10 text-emerald"><i class="bi bi-qr-code"></i></div>
                            <div>
                                <h5 class="feat-title mb-0">Automated Fatoora Workflow</h5>
                                <span class="section-label" style="font-size:.65rem;">Phase 2 Integration Ready</span>
                            </div>
                        </div>
                        <p class="text-ink-muted mb-3 small">Issue standard and simplified tax invoices cleared in real-time. Bilingual Arabic/English templates and cryptographic signing per ZATCA specs.</p>
                        <ul class="list-unstyled mb-4 small">
                            <li class="d-flex align-items-center gap-2 mb-2 text-ink-muted"><i class="bi bi-check2-circle text-emerald"></i> UBL 2.1 XML Auto-generation</li>
                            <li class="d-flex align-items-center gap-2 mb-2 text-ink-muted"><i class="bi bi-check2-circle text-emerald"></i> Real-time Clearance via Phase 2 APIs</li>
                            <li class="d-flex align-items-center gap-2 text-ink-muted"><i class="bi bi-check2-circle text-emerald"></i> Cryptographic stamps & UUID per invoice</li>
                        </ul>
                        <div class="rounded-3 p-3 bg-ink">
                            <div class="phase-pill mb-3"><i class="bi bi-shield-fill-check"></i> ZATCA Workflow</div>
                            <div class="d-flex flex-column gap-3">
                                <div class="d-flex align-items-start gap-2">
                                    <div class="flow-num">1</div>
                                    <div><strong class="d-block text-white small">Invoice Created</strong><span class="text-white-50" style="font-size:.7rem;">Ledger entry auto-generated</span></div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <div class="flow-num">2</div>
                                    <div><strong class="d-block text-white small">XML Signed</strong><span class="text-white-50" style="font-size:.7rem;">Cryptographic hash applied</span></div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <div class="flow-num">3</div>
                                    <div><strong class="d-block text-white small">ZATCA Cleared</strong><span class="text-white-50" style="font-size:.7rem;">UUID stamped & reported instantly</span></div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <div class="flow-num">4</div>
                                    <div><strong class="d-block text-white small">QR Generated & Delivered</strong><span class="text-white-50" style="font-size:.7rem;">Stamped invoice sent to buyer</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="feat-card p-4">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="feat-icon-box bg-primary bg-opacity-10 text-primary"><i class="bi bi-journal-check"></i></div>
                            <div>
                                <h5 class="feat-title mb-0">General LedgerOS</h5>
                                <span class="section-label text-primary" style="font-size:.65rem;">Automated Double-Entry</span>
                            </div>
                        </div>
                        <p class="text-ink-muted mb-3 small">Every sales invoice triggers an immediate debit/credit entry. Localized for Saudi businesses with Zakat, VAT, and Equity categories.</p>
                        <ul class="list-unstyled mb-4 small">
                            <li class="d-flex align-items-center gap-2 mb-2 text-ink-muted"><i class="bi bi-check2-circle text-primary"></i> Chart of Accounts — Saudi-localized</li>
                            <li class="d-flex align-items-center gap-2 mb-2 text-ink-muted"><i class="bi bi-check2-circle text-primary"></i> Instant Trial Balance & P&L Reports</li>
                            <li class="d-flex align-items-center gap-2 text-ink-muted"><i class="bi bi-check2-circle text-primary"></i> Accounts Payable with aging tracker</li>
                        </ul>
                        <div class="ledger-visual-card">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="text-white-50 fw-bold" style="font-size:.65rem;">GENERAL LEDGER · Q1 2026</span>
                                <span class="badge rounded-pill bg-primary bg-opacity-20 text-primary small">BALANCED</span>
                            </div>
                            <div class="ledger-header-row text-white-50 small fw-bold">
                                <span>Account</span><span>Debit</span><span>Credit</span>
                            </div>
                            <div class="ledger-data-row text-white small">
                                <span>Cash & Bank</span><span class="text-danger">4,600</span><span>—</span>
                            </div>
                            <div class="ledger-data-row text-white small">
                                <span>Revenue</span><span>—</span><span class="text-emerald">4,000</span>
                            </div>
                            <div class="ledger-data-row text-white small">
                                <span>VAT Payable</span><span>—</span><span class="text-emerald">600</span>
                            </div>
                            <div class="d-flex justify-content-between mt-3 pt-2 border-top border-white border-opacity-10 fw-bold text-white small">
                                <span class="text-white-50">TOTALS</span>
                                <span class="text-danger">4,600</span>
                                <span class="text-emerald">4,600</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4 reveal">
                <div class="col-md-6 col-lg-3">
                    <div class="feat-card p-4">
                        <div class="feat-icon-box mb-3 bg-warning bg-opacity-10 text-warning"><i class="bi bi-boxes"></i></div>
                        <h6 class="feat-title mb-2">Warehouse</h6>
                        <p class="text-ink-muted mb-0 small">Multi-hub inventory tracking with real-time stock levels and automated COGS journaling.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feat-card p-4">
                        <div class="feat-icon-box mb-3 bg-danger bg-opacity-10 text-danger"><i class="bi bi-receipt-cutoff"></i></div>
                        <h6 class="feat-title mb-2">Expenses</h6>
                        <p class="text-ink-muted mb-0 small">Capture receipts, categorize expenses, and reconcile against bank statements automatically.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feat-card p-4">
                        <div class="feat-icon-box mb-3 bg-info bg-opacity-10 text-info"><i class="bi bi-currency-exchange"></i></div>
                        <h6 class="feat-title mb-2">Multi-Currency</h6>
                        <p class="text-ink-muted mb-0 small">Issue invoices in any currency with automatic SAR conversion for regulatory reporting.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feat-card p-4">
                        <div class="feat-icon-box mb-3 bg-success bg-opacity-10 text-success"><i class="bi bi-file-earmark-bar-graph"></i></div>
                        <h6 class="feat-title mb-2">Reports</h6>
                        <p class="text-ink-muted mb-0 small">Balance Sheet, P&L, and VAT Return reports generated instantly — ready for Zakat filing.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ════════════════ COMPLIANCE ════════════════ -->
    <section id="compliance" class="py-5 bg-ink">
        <div class="container py-5">
            <div class="row g-5 align-items-center">

                <div class="col-lg-6 reveal">
                    <span class="section-label d-block mb-3">ZATCA Phase 2 Ready</span>
                    <h2 class="fw-bold text-white mb-3" style="font-size:clamp(1.8rem,3.5vw,2.6rem); letter-spacing:-1px; line-height:1.2;">
                        Full Integration<br>Compliance — not<br>just generation.
                    </h2>
                    <p class="mb-4" style="color:rgba(255,255,255,.5); line-height:1.7;">
                        We go beyond simple PDF invoices. BillKSA is a certified ZATCA provider, handling the complete integration API lifecycle for your business.
                    </p>
                    <ul class="list-unstyled compliance-check">
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <span><strong>Onboarding & CSID Generation</strong> — Cryptographic Stamp Identifier issued per device</span>
                        </li>
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <span><strong>Real-time Clearance</strong> — Standard invoices cleared before delivery</span>
                        </li>
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <span><strong>Simplified Invoice Reporting</strong> — B2C invoices reported within 24 hours</span>
                        </li>
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <span><strong>Anti-tampering Technology</strong> — Hash chain prevents any invoice modification</span>
                        </li>
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <span><strong>Bilingual Templates</strong> — Arabic/English per ZATCA formatting rules</span>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-6 reveal">
                    <div class="p-4 rounded-4" style="background:rgba(255,255,255,.05); border:1px solid rgba(255,255,255,.1);">
                        <div class="phase-pill mb-4"><i class="bi bi-shield-fill-check"></i> Phase 2 Integration Flow</div>
                        <div class="d-flex flex-column gap-4">
                            <div class="flow-step-item">
                                <div class="flow-num done"><i class="bi bi-check2"></i></div>
                                <div><strong class="d-block text-white small">Device Onboarding & CSID</strong><span class="text-white-50" style="font-size:.72rem;">Cryptographic ID registered with ZATCA</span></div>
                            </div>
                            <div class="flow-step-item">
                                <div class="flow-num done"><i class="bi bi-check2"></i></div>
                                <div><strong class="d-block text-white small">UBL 2.1 XML Generation</strong><span class="text-white-50" style="font-size:.72rem;">Structured e-invoice created automatically</span></div>
                            </div>
                            <div class="flow-step-item">
                                <div class="flow-num done"><i class="bi bi-check2"></i></div>
                                <div><strong class="d-block text-white small">Cryptographic Signing</strong><span class="text-white-50" style="font-size:.72rem;">Digital signature & hash applied</span></div>
                            </div>
                            <div class="flow-step-item">
                                <div class="flow-num">4</div>
                                <div><strong class="d-block text-white small">ZATCA Portal Clearance</strong><span class="text-white-50" style="font-size:.72rem;">API call to zatca.gov.sa · < 1 second</span></div>
                            </div>
                            <div class="flow-step-item">
                                <div class="flow-num">5</div>
                                <div><strong class="d-block text-white small">QR Code & PDF Delivery</strong><span class="text-white-50" style="font-size:.72rem;">Stamped invoice sent to buyer instantly</span></div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3 mt-4 pt-3 border-top border-white border-opacity-10">
                            <div style="width:36px; height:36px; border-radius:8px; background:rgba(0,201,123,.15); display:flex; align-items:center; justify-content:center;">
                                <i class="bi bi-award-fill text-emerald"></i>
                            </div>
                            <div>
                                <div class="fw-semibold text-white small">ZATCA Certified Provider</div>
                                <div class="text-white-50" style="font-size:.7rem;">CR: 1010XXXXXX · VAT: 3000XXXXXXXXXXX</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ════════════════ PRICING ════════════════ -->
    <section id="pricing" class="py-5 bg-surface">
        <style>
            .pricing-card {
                background: #fff;
                border: 1.5px solid rgba(60, 80, 140, .08);
                border-radius: 20px;
                height: 100%;
                transition: all .3s ease;
                display: flex;
                flex-direction: column;
            }
            .pricing-card.featured {
                background: var(--ink);
                border-color: var(--ink);
                transform: scale(1.03);
                box-shadow: 0 30px 60px rgba(10, 15, 30, .15);
                z-index: 2;
            }
            .plan-amount { font-size: 2.4rem; font-weight: 800; }
            .plan-features { list-style: none; padding: 0; margin: 0; }
            .plan-features li { font-size: .85rem; margin-bottom: 12px; display: flex; align-items: center; gap: .75rem; }
            .plan-features li.off { color: var(--ink-ghost); opacity: .5; }
            .btn-plan {
                width: 100%;
                padding: .85rem;
                border-radius: 12px;
                font-weight: 700;
                text-decoration: none;
                text-align: center;
                transition: all .2s;
                margin-top: auto;
            }
            .btn-plan-outline { border: 1.5px solid rgba(10, 15, 30, .1); color: var(--ink); }
            .btn-plan-outline:hover { background: var(--surface); }
            .btn-plan-emerald { background: var(--emerald); color: #fff; }
            .btn-plan-emerald:hover { background: var(--emerald-dim); }
            .popular-chip {
                background: var(--emerald);
                color: #fff;
                font-size: .6rem;
                font-weight: 800;
                text-transform: uppercase;
                padding: .25rem .6rem;
                border-radius: 50px;
            }
        </style>
        <div class="container py-5">
            <div class="text-center mb-5 reveal">
                <span class="section-label d-block mb-2">Pricing Plans</span>
                <h2 class="fw-bold text-dark display-6">Ready to scale your financials?</h2>
                <p class="text-ink-muted mt-2">All plans include ZATCA Phase 1 compliance. No credit card required to start.</p>
            </div>

            <div class="row g-4 align-items-stretch reveal">
                <div class="col-md-6 col-xl-3">
                    <div class="pricing-card p-4">
                        <span class="section-label text-ink-ghost mb-1" style="font-size:.65rem;">Individual</span>
                        <h4 class="fw-bold mb-3">Free</h4>
                        <div class="d-flex align-items-baseline gap-2 mb-2">
                            <span class="plan-amount text-dark">0</span>
                            <span class="text-ink-ghost small">SAR / month</span>
                        </div>
                        <p class="text-ink-ghost mb-4 small">Explore the basics for personal bookkeeping and freelancers.</p>
                        <hr class="opacity-10 mb-4">
                        <ul class="plan-features mb-4">
                            <li class="text-ink-muted"><i class="bi bi-check2 text-emerald fw-bold"></i> 10 Invoices per month</li>
                            <li class="text-ink-muted"><i class="bi bi-check2 text-emerald fw-bold"></i> Basic Expense Entry</li>
                            <li class="text-ink-muted"><i class="bi bi-check2 text-emerald fw-bold"></i> Single User</li>
                            <li class="off"><i class="bi bi-x"></i> ZATCA Phase 2 Sync</li>
                            <li class="off"><i class="bi bi-x"></i> Double-Entry Ledger</li>
                        </ul>
                        <a href="#" class="btn-plan btn-plan-outline">Get Started Free</a>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="pricing-card p-4">
                        <span class="section-label mb-1" style="font-size:.65rem; color:#3a6bff;">Small Business</span>
                        <h4 class="fw-bold mb-3">Starter</h4>
                        <div class="d-flex align-items-baseline gap-2 mb-2">
                            <span class="plan-amount text-dark">99</span>
                            <span class="text-ink-ghost small">SAR / month</span>
                        </div>
                        <p class="text-ink-ghost mb-4 small">Essential tools for retail shops and early-stage startups.</p>
                        <hr class="opacity-10 mb-4">
                        <ul class="plan-features mb-4">
                            <li class="text-ink-muted"><i class="bi bi-check2 text-emerald fw-bold"></i> 100 Invoices per month</li>
                            <li class="text-ink-muted"><i class="bi bi-check2 text-emerald fw-bold"></i> VAT Report Generation</li>
                            <li class="text-ink-muted"><i class="bi bi-check2 text-emerald fw-bold"></i> ZATCA Phase 1 Ready</li>
                            <li class="text-ink-muted"><i class="bi bi-check2 text-emerald fw-bold"></i> 2 Warehouse Hubs</li>
                            <li class="off"><i class="bi bi-x"></i> ZATCA Phase 2 Sync</li>
                        </ul>
                        <a href="#" class="btn-plan btn-plan-outline">Choose Starter</a>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="pricing-card featured p-4">
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <span class="section-label text-white-50" style="font-size:.65rem;">Growing Team</span>
                            <span class="popular-chip">Most Popular</span>
                        </div>
                        <h4 class="fw-bold mb-3 text-white">Professional</h4>
                        <div class="d-flex align-items-baseline gap-2 mb-2">
                            <span class="plan-amount text-emerald">249</span>
                            <span class="text-white-50 small">SAR / month</span>
                        </div>
                        <p class="text-white-50 mb-4 small">Advanced features for power users and growing finance teams.</p>
                        <hr class="border-white border-opacity-10 mb-4">
                        <ul class="plan-features mb-4">
                            <li class="text-white-50"><i class="bi bi-check2 text-emerald fw-bold"></i> <strong class="text-white">Unlimited Invoices</strong></li>
                            <li class="text-white-50"><i class="bi bi-check2 text-emerald fw-bold"></i> <strong class="text-white">ZATCA Phase 2 Integration</strong></li>
                            <li class="text-white-50"><i class="bi bi-check2 text-emerald fw-bold"></i> Full Double-Entry Ledger</li>
                            <li class="text-white-50"><i class="bi bi-check2 text-emerald fw-bold"></i> Multi-Currency Support</li>
                            <li class="text-white-50"><i class="bi bi-check2 text-emerald fw-bold"></i> Priority Support</li>
                        </ul>
                        <a href="#" class="btn-plan btn-plan-emerald">Start Free Trial</a>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="pricing-card p-4">
                        <span class="section-label text-dark mb-1" style="font-size:.65rem;">Corporations</span>
                        <h4 class="fw-bold mb-3">Enterprise</h4>
                        <div class="d-flex align-items-baseline gap-2 mb-2">
                            <span class="plan-amount text-dark">599</span>
                            <span class="text-ink-ghost small">SAR / month</span>
                        </div>
                        <p class="text-ink-ghost mb-4 small">Full-scale solutions for large organizations and ERP integration.</p>
                        <hr class="opacity-10 mb-4">
                        <ul class="plan-features mb-4">
                            <li class="text-ink-muted"><i class="bi bi-check2 text-emerald fw-bold"></i> Custom User Permissions</li>
                            <li class="text-ink-muted"><i class="bi bi-check2 text-emerald fw-bold"></i> API Access for ERP</li>
                            <li class="text-ink-muted"><i class="bi bi-check2 text-emerald fw-bold"></i> Dedicated Account Manager</li>
                            <li class="text-ink-muted"><i class="bi bi-check2 text-emerald fw-bold"></i> Priority ZATCA Support</li>
                            <li class="text-ink-muted"><i class="bi bi-check2 text-emerald fw-bold"></i> SLA & Uptime Guarantee</li>
                        </ul>
                        <a href="#" class="btn-plan btn-plan-outline">Contact Sales</a>
                    </div>
                </div>
            </div>
            <p class="text-center mt-4 text-ink-ghost reveal small">
                <i class="bi bi-info-circle me-1"></i> All prices are exclusive of 15% VAT.
                Need a custom plan? <a href="#" class="text-emerald fw-semibold text-decoration-none">Talk to us.</a>
            </p>
        </div>
    </section>

    <!-- ════════════════ CTA / CONTACT ════════════════ -->
    <section id="contact" class="py-5 bg-white">
        <style>
            .attr-icon-box {
                width: 38px; height: 38px; border-radius: 10px;
                background: var(--surface); color: var(--emerald);
                display: flex; align-items: center; justify-content: center; flex-shrink: 0;
            }
            .contact-card {
                border-radius: 24px;
                background: #fff;
                box-shadow: 0 40px 100px rgba(10, 15, 30, .08);
                border: 1px solid rgba(60, 80, 140, .05);
            }
            .btn-cta-main {
                background: var(--ink); color: #fff; width: 100%; padding: 1rem;
                border-radius: 14px; font-weight: 700; text-decoration: none;
                display: flex; align-items: center; justify-content: center; gap: .75rem;
                transition: all .2s;
            }
            .btn-cta-main:hover { background: #000; color: #fff; transform: translateY(-2px); }
            .or-divider {
                display: flex; align-items: center; text-align: center;
                color: var(--ink-ghost); font-size: .65rem; font-weight: 800; letter-spacing: 1px;
            }
            .or-divider::before, .or-divider::after {
                content: ''; flex: 1; border-bottom: 1px solid rgba(10, 15, 30, .05);
            }
            .or-divider::before { margin-right: 1rem; }
            .or-divider::after { margin-left: 1rem; }
            .form-ctrl {
                width: 100%; background: var(--surface); border: 1.5px solid transparent;
                padding: .75rem 1rem; border-radius: 10px; font-size: .9rem; transition: all .2s;
            }
            .form-ctrl:focus { background: #fff; border-color: var(--emerald); outline: none; box-shadow: 0 0 0 4px var(--emerald-glow); }
            .btn-form-submit {
                background: var(--surface); color: var(--ink); width: 100%; border: none;
                padding: .85rem; border-radius: 10px; font-weight: 700; transition: all .2s;
            }
            .btn-form-submit:hover { background: var(--ink); color: #fff; }
        </style>
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 reveal">
                    <span class="section-label d-block mb-3">Get Started in 2 Minutes</span>
                    <h2 class="fw-bold text-dark mb-3" style="font-size:clamp(1.9rem,3.5vw,2.8rem); letter-spacing:-1px; line-height:1.2;">Take Control of Your Business Finances</h2>
                    <p class="text-ink-muted mb-4" style="line-height:1.7;">Join 500+ Saudi businesses automating their ZATCA compliance and accounting with BillKSA. No credit card required.</p>

                    <div class="d-flex flex-column gap-4 mb-4">
                        <div class="d-flex align-items-start gap-3">
                            <div class="attr-icon-box"><i class="bi bi-gift-fill"></i></div>
                            <div><strong class="d-block small">14-Day Full Access Trial</strong><small class="text-ink-ghost">Explore every Pro feature completely free.</small></div>
                        </div>
                        <div class="d-flex align-items-start gap-3">
                            <div class="attr-icon-box"><i class="bi bi-headset"></i></div>
                            <div><strong class="d-block small">Free Onboarding Session</strong><small class="text-ink-ghost">Our experts help you set up your Chart of Accounts.</small></div>
                        </div>
                        <div class="d-flex align-items-start gap-3">
                            <div class="attr-icon-box"><i class="bi bi-shield-check"></i></div>
                            <div><strong class="d-block small">ZATCA Readiness Check</strong><small class="text-ink-ghost">We ensure your CR and VAT details are Phase 2 ready.</small></div>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap gap-4 pt-4 border-top border-grid">
                        <div class="d-flex align-items-center gap-2 text-ink-muted small"><i class="bi bi-envelope-fill text-emerald"></i> support@billksa.com</div>
                        <div class="d-flex align-items-center gap-2 text-ink-muted small"><i class="bi bi-whatsapp text-emerald"></i> +966 5XX XXX XXX</div>
                    </div>
                </div>

                <div class="col-lg-6 offset-lg-1 reveal">
                    <div class="contact-card p-4 p-md-5">
                        <h4 class="fw-bold text-dark mb-1">Ready to Start?</h4>
                        <p class="text-ink-ghost mb-4 small">Create your account and issue your first invoice today.</p>

                        <a href="#" class="btn-cta-main mb-2">Create My Free Account <i class="bi bi-arrow-right"></i></a>
                        <p class="text-center text-ink-ghost small mb-4">No credit card &nbsp;·&nbsp; Cancel anytime</p>

                        <div class="or-divider mb-4">OR REQUEST A DEMO</div>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="fw-bold text-dark mb-1" style="font-size:.75rem;">Full Name</label>
                                <input type="text" class="form-ctrl" placeholder="Ahmed Al-Rashidi">
                            </div>
                            <div class="col-md-6">
                                <label class="fw-bold text-dark mb-1" style="font-size:.75rem;">Work Email</label>
                                <input type="email" class="form-ctrl" placeholder="ahmed@company.sa">
                            </div>
                            <div class="col-12">
                                <label class="fw-bold text-dark mb-1" style="font-size:.75rem;">How can we help?</label>
                                <textarea class="form-ctrl" rows="3" placeholder="I'm interested in the Enterprise plan..."></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn-form-submit">Talk to a Specialist <i class="bi bi-arrow-right ms-1"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
