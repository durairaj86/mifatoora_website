@extends('website.layout')
@section('web-content')
    <!-- ════════ PAGE HEADER ════════ -->
    <header class="bg-white border-bottom" style="margin-top:68px;">
        <div class="container py-5">
            <div class="row align-items-center g-4">
                <div class="col-lg-7">
        <span class="badge rounded-pill px-3 py-2 mb-3 d-inline-flex align-items-center gap-2"
              style="background:rgba(0,201,123,.1);color:var(--emerald);font-size:.72rem;font-weight:700;letter-spacing:1px;text-transform:uppercase;">
          <i class="bi bi-shield-lock-fill"></i> ZATCA Phase 2 Certified
        </span>
                    <h1 class="font-display fw-bold text-dark lh-1 mb-3"
                        style="font-size:clamp(2rem,4vw,3rem);letter-spacing:-1px;">
                        Powerful Features for<br><span style="color:var(--emerald);">Modern Saudi Business</span>
                    </h1>
                    <p class="mb-0" style="font-size:1.05rem;color:var(--ink-muted);line-height:1.7;max-width:500px;">
                        A deep dive into the modules that drive your financial growth and full ZATCA compliance.
                    </p>
                </div>
                <div class="col-lg-5">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="bg-white rounded-3 border p-3 text-center hover-lift">
                                <div class="fw-bold font-display" style="font-size:1.8rem;color:var(--emerald);">5</div>
                                <div style="font-size:.78rem;color:var(--ink-muted);">Core Modules</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bg-white rounded-3 border p-3 text-center hover-lift">
                                <div class="fw-bold font-display" style="font-size:1.8rem;color:var(--ink);">100%</div>
                                <div style="font-size:.78rem;color:var(--ink-muted);">ZATCA Compliant</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bg-white rounded-3 border p-3 text-center hover-lift">
                                <div class="fw-bold font-display" style="font-size:1.8rem;color:var(--ink);">500+</div>
                                <div style="font-size:.78rem;color:var(--ink-muted);">Saudi Businesses</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bg-white rounded-3 border p-3 text-center hover-lift">
                                <div class="fw-bold font-display" style="font-size:1.8rem;color:var(--ink);">2M+</div>
                                <div style="font-size:.78rem;color:var(--ink-muted);">Invoices Cleared</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ════════ MAIN CONTENT ════════ -->
    <div class="container py-5">
        <div class="row g-5">

            <!-- ── Sidebar nav ── -->
            <div class="col-lg-3 d-none d-lg-block">
                <nav id="featureNav" class="feature-nav nav flex-column">
                    <a class="nav-link active" href="#zatca-module">
                        <i class="bi bi-shield-check me-2"></i>ZATCA Phase 2
                    </a>
                    <a class="nav-link" href="#billing-module">
                        <i class="bi bi-receipt me-2"></i>Billing &amp; Invoicing
                    </a>
                    <a class="nav-link" href="#expense-module">
                        <i class="bi bi-wallet2 me-2"></i>Expense Management
                    </a>
                    <a class="nav-link" href="#accounting-module">
                        <i class="bi bi-journal-check me-2"></i>General Ledger
                    </a>
                    <a class="nav-link" href="#reporting-module">
                        <i class="bi bi-bar-chart-line me-2"></i>Financial Reporting
                    </a>
                    <div class="mt-4 p-3 rounded-3"
                         style="background:rgba(0,201,123,.08);border:1px solid rgba(0,201,123,.2);">
                        <div
                            style="font-size:.72rem;font-weight:700;letter-spacing:1px;text-transform:uppercase;color:var(--emerald);"
                            class="mb-2">Free Trial
                        </div>
                        <p style="font-size:.78rem;color:var(--ink-muted);" class="mb-2">Try all features for 14 days,
                            no credit card needed.</p>
                        <a href="/register" class="btn w-100 py-2 fw-semibold text-white"
                           style="background:var(--emerald);border:none;font-size:.8rem;border-radius:8px;">Start Free
                            Trial</a>
                    </div>
                </nav>
            </div>

            <!-- ── Sections ── -->
            <div class="col-lg-9">

                <!-- ═══ ZATCA MODULE ═══ -->
                <section id="zatca-module" class="feature-section pb-5 mb-5 reveal">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="rounded-3 d-flex align-items-center justify-content-center text-white flex-shrink-0"
                             style="width:52px;height:52px;background:var(--emerald);font-size:1.4rem;">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <div>
                            <h2 class="font-display fw-bold text-dark mb-0"
                                style="font-size:1.6rem;letter-spacing:-.5px;">ZATCA (Fatoora) Phase 2 Integration</h2>
                            <span
                                style="font-size:.72rem;font-weight:700;letter-spacing:1px;text-transform:uppercase;color:var(--emerald);">Phase 2 Integration Ready</span>
                        </div>
                    </div>

                    <p class="mb-4" style="color:var(--ink-muted);line-height:1.7;">LedgerOS is built to handle the
                        complexities of the Integration Phase. We automate the full handshake between your transaction
                        and the ZATCA portal — from device onboarding to real-time clearance.</p>

                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow-sm hover-lift rounded-3 p-4"
                                 style="border-left:4px solid var(--emerald) !important;">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <i class="bi bi-key-fill" style="color:var(--emerald);font-size:1.1rem;"></i>
                                    <h6 class="fw-bold mb-0">Onboarding &amp; CSID</h6>
                                </div>
                                <p class="small mb-0" style="color:var(--ink-muted);line-height:1.65;">Seamlessly
                                    generate CSR (Certificate Signing Request) to obtain your Cryptographic Stamp
                                    Identifier (CSID) directly through our portal.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow-sm hover-lift rounded-3 p-4"
                                 style="border-left:4px solid var(--emerald) !important;">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <i class="bi bi-cloud-arrow-up-fill"
                                       style="color:var(--emerald);font-size:1.1rem;"></i>
                                    <h6 class="fw-bold mb-0">Clearance &amp; Reporting</h6>
                                </div>
                                <p class="small mb-0" style="color:var(--ink-muted);line-height:1.65;">Real-time
                                    "Clearance" for Standard Invoices (B2B) and "Reporting" for Simplified Invoices
                                    (B2C) via secure Phase 2 API hooks.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow-sm hover-lift rounded-3 p-4"
                                 style="border-left:4px solid var(--emerald) !important;">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <i class="bi bi-filetype-xml" style="color:var(--emerald);font-size:1.1rem;"></i>
                                    <h6 class="fw-bold mb-0">UBL 2.1 XML Generation</h6>
                                </div>
                                <p class="small mb-0" style="color:var(--ink-muted);line-height:1.65;">Automatic UBL 2.1
                                    XML creation for every tax invoice with cryptographic signing and UUID stamping per
                                    ZATCA specifications.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow-sm hover-lift rounded-3 p-4"
                                 style="border-left:4px solid var(--emerald) !important;">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <i class="bi bi-qr-code" style="color:var(--emerald);font-size:1.1rem;"></i>
                                    <h6 class="fw-bold mb-0">QR Code &amp; Anti-tampering</h6>
                                </div>
                                <p class="small mb-0" style="color:var(--ink-muted);line-height:1.65;">Every invoice
                                    receives a ZATCA-compliant QR code. Hash-chain technology ensures no record can be
                                    altered post-submission.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Phase flow -->
                    <div class="rounded-4 p-4" style="background:var(--ink);">
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="badge rounded-pill px-3 py-2"
                                  style="background:rgba(0,201,123,.15);color:var(--emerald);font-size:.7rem;font-weight:700;letter-spacing:.8px;">INTEGRATION FLOW</span>
                        </div>
                        <div class="row g-2">
                            <div class="col">
                                <div class="rounded-3 p-3 text-center" style="background:rgba(255,255,255,.05);">
                                    <div
                                        class="rounded-circle d-flex align-items-center justify-content-center mx-auto mb-2 fw-bold"
                                        style="width:28px;height:28px;background:var(--emerald);color:var(--ink);font-size:.7rem;">
                                        1
                                    </div>
                                    <div style="font-size:.72rem;color:rgba(255,255,255,.9);font-weight:600;">Invoice
                                        Created
                                    </div>
                                    <div style="font-size:.65rem;color:rgba(255,255,255,.35);">Auto ledger entry</div>
                                </div>
                            </div>
                            <div class="col-auto d-flex align-items-center" style="color:rgba(255,255,255,.2);"><i
                                    class="bi bi-chevron-right"></i></div>
                            <div class="col">
                                <div class="rounded-3 p-3 text-center" style="background:rgba(255,255,255,.05);">
                                    <div
                                        class="rounded-circle d-flex align-items-center justify-content-center mx-auto mb-2 fw-bold"
                                        style="width:28px;height:28px;background:var(--emerald);color:var(--ink);font-size:.7rem;">
                                        2
                                    </div>
                                    <div style="font-size:.72rem;color:rgba(255,255,255,.9);font-weight:600;">XML
                                        Signed
                                    </div>
                                    <div style="font-size:.65rem;color:rgba(255,255,255,.35);">Hash applied</div>
                                </div>
                            </div>
                            <div class="col-auto d-flex align-items-center" style="color:rgba(255,255,255,.2);"><i
                                    class="bi bi-chevron-right"></i></div>
                            <div class="col">
                                <div class="rounded-3 p-3 text-center" style="background:rgba(255,255,255,.05);">
                                    <div
                                        class="rounded-circle d-flex align-items-center justify-content-center mx-auto mb-2 fw-bold"
                                        style="width:28px;height:28px;background:var(--emerald);color:var(--ink);font-size:.7rem;">
                                        3
                                    </div>
                                    <div style="font-size:.72rem;color:rgba(255,255,255,.9);font-weight:600;">ZATCA
                                        Cleared
                                    </div>
                                    <div style="font-size:.65rem;color:rgba(255,255,255,.35);">UUID stamped</div>
                                </div>
                            </div>
                            <div class="col-auto d-flex align-items-center" style="color:rgba(255,255,255,.2);"><i
                                    class="bi bi-chevron-right"></i></div>
                            <div class="col">
                                <div class="rounded-3 p-3 text-center" style="background:rgba(255,255,255,.05);">
                                    <div
                                        class="rounded-circle d-flex align-items-center justify-content-center mx-auto mb-2 fw-bold"
                                        style="width:28px;height:28px;background:var(--emerald);color:var(--ink);font-size:.7rem;">
                                        4
                                    </div>
                                    <div style="font-size:.72rem;color:rgba(255,255,255,.9);font-weight:600;">QR
                                        Delivered
                                    </div>
                                    <div style="font-size:.65rem;color:rgba(255,255,255,.35);">Sent to buyer</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ═══ BILLING MODULE ═══ -->
                <section id="billing-module" class="feature-section pb-5 mb-5 reveal">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="rounded-3 d-flex align-items-center justify-content-center text-white flex-shrink-0"
                             style="width:52px;height:52px;background:#3a6bff;font-size:1.4rem;">
                            <i class="bi bi-receipt"></i>
                        </div>
                        <div>
                            <h2 class="font-display fw-bold text-dark mb-0"
                                style="font-size:1.6rem;letter-spacing:-.5px;">Smart Billing &amp; Revenue Tracking</h2>
                            <span
                                style="font-size:.72rem;font-weight:700;letter-spacing:1px;text-transform:uppercase;color:#3a6bff;">Full Invoice Lifecycle</span>
                        </div>
                    </div>

                    <p class="mb-4" style="color:var(--ink-muted);line-height:1.7;">Beyond just PDFs. Manage the entire
                        lifecycle of a sale — from quote to cash — with bilingual compliance built in from the
                        start.</p>

                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <div class="d-flex align-items-start gap-3 p-3 rounded-3 bg-white border hover-lift">
                                <div
                                    class="rounded-2 d-flex align-items-center justify-content-center flex-shrink-0 text-white"
                                    style="width:38px;height:38px;background:#3a6bff;font-size:.9rem;">
                                    <i class="bi bi-translate"></i>
                                </div>
                                <div>
                                    <div class="fw-semibold mb-1" style="font-size:.9rem;">Bilingual Templates</div>
                                    <p class="small mb-0" style="color:var(--ink-muted);">Legally compliant
                                        Arabic/English layouts that satisfy ZATCA formatting requirements.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start gap-3 p-3 rounded-3 bg-white border hover-lift">
                                <div
                                    class="rounded-2 d-flex align-items-center justify-content-center flex-shrink-0 text-white"
                                    style="width:38px;height:38px;background:#3a6bff;font-size:.9rem;">
                                    <i class="bi bi-arrow-counterclockwise"></i>
                                </div>
                                <div>
                                    <div class="fw-semibold mb-1" style="font-size:.9rem;">Credit Notes</div>
                                    <p class="small mb-0" style="color:var(--ink-muted);">One-click adjustments that
                                        update the ledger and notify ZATCA portal instantly.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start gap-3 p-3 rounded-3 bg-white border hover-lift">
                                <div
                                    class="rounded-2 d-flex align-items-center justify-content-center flex-shrink-0 text-white"
                                    style="width:38px;height:38px;background:#3a6bff;font-size:.9rem;">
                                    <i class="bi bi-cash-coin"></i>
                                </div>
                                <div>
                                    <div class="fw-semibold mb-1" style="font-size:.9rem;">Partial Payments</div>
                                    <p class="small mb-0" style="color:var(--ink-muted);">Track balances with precision
                                        and automated overdue reminders via WhatsApp or email.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start gap-3 p-3 rounded-3 bg-white border hover-lift">
                                <div
                                    class="rounded-2 d-flex align-items-center justify-content-center flex-shrink-0 text-white"
                                    style="width:38px;height:38px;background:#3a6bff;font-size:.9rem;">
                                    <i class="bi bi-arrow-repeat"></i>
                                </div>
                                <div>
                                    <div class="fw-semibold mb-1" style="font-size:.9rem;">Recurring Billing</div>
                                    <p class="small mb-0" style="color:var(--ink-muted);">Perfect for subscription or
                                        maintenance contracts — schedules and issues automatically.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sample invoice preview -->
                    <div class="rounded-4 overflow-hidden border shadow-sm">
                        <div class="px-4 py-3 d-flex justify-content-between align-items-center"
                             style="background:var(--ink);">
                            <div>
                                <span class="fw-bold text-white font-display" style="font-size:.85rem;">TAX INVOICE / فاتورة ضريبية</span>
                                <span class="ms-3"
                                      style="font-size:.65rem;color:rgba(255,255,255,.35);">INV-2026-00841</span>
                            </div>
                            <span class="badge rounded-pill px-3"
                                  style="background:var(--emerald);font-size:.65rem;font-weight:700;">ZATCA CLEARED</span>
                        </div>
                        <div class="bg-white p-4">
                            <div class="row g-3 align-items-center">
                                <div class="col-md-8">
                                    <div class="row g-2">
                                        <div class="col-12">
                                            <div class="d-flex justify-content-between py-2 border-bottom"
                                                 style="border-color:rgba(60,80,140,.07) !important;">
                                                <span style="font-size:.8rem;color:var(--ink-muted);">Service Fee</span>
                                                <span class="fw-semibold small">3,500.00 SAR</span>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-flex justify-content-between py-2 border-bottom"
                                                 style="border-color:rgba(60,80,140,.07) !important;">
                                                <span style="font-size:.8rem;color:var(--ink-muted);">VAT 15%</span>
                                                <span class="fw-semibold small">525.00 SAR</span>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-flex justify-content-between py-2 p-2 rounded-2"
                                                 style="background:var(--surface);">
                                                <span class="fw-bold">Total Due</span>
                                                <span class="fw-bold font-display"
                                                      style="color:var(--emerald);font-size:1.1rem;">4,025.00 SAR</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 text-center">
                                    <img
                                        src="https://upload.wikimedia.org/wikipedia/commons/d/d0/QR_code_for_mobile_English_Wikipedia.svg"
                                        width="80" height="80" alt="QR" class="rounded-2 mb-2">
                                    <div style="font-size:.68rem;color:var(--ink-muted);">Scan to verify on<br>ZATCA
                                        portal
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ═══ EXPENSE MODULE ═══ -->
                <section id="expense-module" class="feature-section pb-5 mb-5 reveal">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="rounded-3 d-flex align-items-center justify-content-center text-white flex-shrink-0"
                             style="width:52px;height:52px;background:#ef4444;font-size:1.4rem;">
                            <i class="bi bi-wallet2"></i>
                        </div>
                        <div>
                            <h2 class="font-display fw-bold text-dark mb-0"
                                style="font-size:1.6rem;letter-spacing:-.5px;">Expense &amp; Vendor Management</h2>
                            <span
                                style="font-size:.72rem;font-weight:700;letter-spacing:1px;text-transform:uppercase;color:#ef4444;">Full Spend Visibility</span>
                        </div>
                    </div>

                    <p class="mb-4" style="color:var(--ink-muted);line-height:1.7;">Total visibility into where your
                        money goes. Categorize spending to maximize Zakat deductions and claim Input VAT
                        automatically.</p>

                    <div class="card border-0 shadow-sm rounded-4 p-4 mb-4 bg-white hover-lift">
                        <div class="d-flex align-items-start gap-3">
                            <div class="rounded-3 d-flex align-items-center justify-content-center flex-shrink-0"
                                 style="width:44px;height:44px;background:rgba(239,68,68,.1);color:#ef4444;font-size:1.1rem;">
                                <i class="bi bi-building"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Vendor Portal</h6>
                                <p class="small mb-0" style="color:var(--ink-muted);line-height:1.65;">Manage your
                                    supplier profiles, track outstanding payables, and record VAT-inclusive purchase
                                    invoices. View aging reports to never miss a payment deadline.</p>
                            </div>
                        </div>
                    </div>

                    <div class="row g-4 align-items-center">
                        <div class="col-md-7">
                            <h6 class="text-uppercase fw-bold mb-3"
                                style="font-size:.72rem;letter-spacing:1.2px;color:var(--ink-muted);">Direct Expense
                                Posting</h6>
                            <p class="mb-3" style="color:var(--ink-muted);font-size:.9rem;line-height:1.7;">Scan a
                                receipt and LedgerOS automatically identifies the VAT amount and posts it to your
                                <strong class="text-dark">Input VAT</strong> account, ready for your quarterly VAT
                                return filing.</p>
                            <ul class="list-unstyled d-flex flex-column gap-2 mb-0">
                                <li class="d-flex align-items-center gap-2"
                                    style="font-size:.875rem;color:var(--ink-muted);">
                                    <i class="bi bi-check2-circle" style="color:var(--emerald);"></i> Receipt OCR
                                    auto-categorization
                                </li>
                                <li class="d-flex align-items-center gap-2"
                                    style="font-size:.875rem;color:var(--ink-muted);">
                                    <i class="bi bi-check2-circle" style="color:var(--emerald);"></i> Input VAT
                                    auto-split for tax return
                                </li>
                                <li class="d-flex align-items-center gap-2"
                                    style="font-size:.875rem;color:var(--ink-muted);">
                                    <i class="bi bi-check2-circle" style="color:var(--emerald);"></i> Payables aging
                                    &amp; payment scheduling
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-5">
                            <div class="entry-box">
                                <div class="d-flex justify-content-between">
                                    <span style="color:rgba(255,255,255,.85);">Office Supplies</span>
                                    <span style="color:#4ade80;font-weight:600;">DR &nbsp;100.00</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span style="color:rgba(255,255,255,.85);">Input VAT (15%)</span>
                                    <span style="color:#4ade80;font-weight:600;">DR &nbsp;&nbsp;15.00</span>
                                </div>
                                <hr style="border-color:rgba(255,255,255,.1);" class="my-2">
                                <div class="d-flex justify-content-between">
                                    <span class="ms-3" style="color:#94a3b8;">Cash / Bank</span>
                                    <span style="color:#f87171;font-weight:600;">CR &nbsp;115.00</span>
                                </div>
                            </div>
                            <div class="mt-2 text-center" style="font-size:.7rem;color:var(--ink-muted);">Auto-generated
                                double-entry journal
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ═══ ACCOUNTING MODULE ═══ -->
                <section id="accounting-module" class="feature-section pb-5 mb-5 reveal">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="rounded-3 d-flex align-items-center justify-content-center text-white flex-shrink-0"
                             style="width:52px;height:52px;background:var(--ink);font-size:1.4rem;">
                            <i class="bi bi-journal-check"></i>
                        </div>
                        <div>
                            <h2 class="font-display fw-bold text-dark mb-0"
                                style="font-size:1.6rem;letter-spacing:-.5px;">The Double-Entry Core</h2>
                            <span
                                style="font-size:.72rem;font-weight:700;letter-spacing:1px;text-transform:uppercase;color:var(--ink-muted);">General Ledger</span>
                        </div>
                    </div>

                    <p class="mb-4" style="color:var(--ink-muted);line-height:1.7;">The heartbeat of your business.
                        Every module (Billing, Expenses, Inventory) feeds into this unified ledger — balanced
                        automatically, available instantly.</p>

                    <div class="table-responsive rounded-4 overflow-hidden border shadow-sm mb-4">
                        <table class="table table-hover mb-0 align-middle bg-white">
                            <thead style="background:var(--ink);">
                            <tr>
                                <th class="py-3 px-4 text-white fw-semibold border-0"
                                    style="font-size:.8rem;font-weight:700;letter-spacing:.5px;">Feature
                                </th>
                                <th class="py-3 px-4 text-white fw-semibold border-0"
                                    style="font-size:.8rem;font-weight:700;letter-spacing:.5px;">Functionality
                                </th>
                                <th class="py-3 px-4 text-white fw-semibold border-0 text-center"
                                    style="font-size:.8rem;font-weight:700;letter-spacing:.5px;">Status
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="px-4 py-3 fw-semibold" style="font-size:.875rem;">Chart of Accounts</td>
                                <td class="px-4 py-3" style="font-size:.84rem;color:var(--ink-muted);">Pre-configured
                                    for Saudi SME standards with Zakat &amp; VAT categories and customizable
                                    sub-accounts.
                                </td>
                                <td class="px-4 py-3 text-center"><span class="badge rounded-pill px-2 py-1"
                                                                        style="background:rgba(0,201,123,.12);color:var(--emerald);font-size:.68rem;font-weight:700;">Included</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3 fw-semibold" style="font-size:.875rem;">Journal Entries</td>
                                <td class="px-4 py-3" style="font-size:.84rem;color:var(--ink-muted);">Manual override
                                    for depreciation, accruals, and adjustments with full audit trail.
                                </td>
                                <td class="px-4 py-3 text-center"><span class="badge rounded-pill px-2 py-1"
                                                                        style="background:rgba(0,201,123,.12);color:var(--emerald);font-size:.68rem;font-weight:700;">Included</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3 fw-semibold" style="font-size:.875rem;">Bank Reconciliation</td>
                                <td class="px-4 py-3" style="font-size:.84rem;color:var(--ink-muted);">Import bank
                                    statements and match transactions with a single click — supports all major Saudi
                                    banks.
                                </td>
                                <td class="px-4 py-3 text-center"><span class="badge rounded-pill px-2 py-1"
                                                                        style="background:rgba(0,201,123,.12);color:var(--emerald);font-size:.68rem;font-weight:700;">Included</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3 fw-semibold" style="font-size:.875rem;">Multi-Currency</td>
                                <td class="px-4 py-3" style="font-size:.84rem;color:var(--ink-muted);">Automatic
                                    exchange rate updates for SAR / USD / EUR / AED with gain/loss postings.
                                </td>
                                <td class="px-4 py-3 text-center"><span class="badge rounded-pill px-2 py-1"
                                                                        style="background:rgba(58,107,255,.1);color:#3a6bff;font-size:.68rem;font-weight:700;">Pro+</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Live ledger visual -->
                    <div class="rounded-4 p-4" style="background:var(--ink);">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span
                                style="font-size:.72rem;font-weight:700;letter-spacing:.8px;text-transform:uppercase;color:rgba(255,255,255,.4);">GENERAL LEDGER — Q1 2026</span>
                            <span class="badge rounded-pill px-3"
                                  style="background:rgba(58,107,255,.2);color:#7da4ff;font-size:.65rem;font-weight:700;">BALANCED</span>
                        </div>
                        <div class="row g-0 mb-2"
                             style="border-bottom:1px solid rgba(255,255,255,.12);padding-bottom:.5rem;">
                            <div class="col-6"><span
                                    style="font-size:.65rem;font-weight:700;letter-spacing:.8px;text-transform:uppercase;color:rgba(255,255,255,.3);">Account</span>
                            </div>
                            <div class="col-3 text-end"><span
                                    style="font-size:.65rem;font-weight:700;letter-spacing:.8px;text-transform:uppercase;color:rgba(255,255,255,.3);">Debit</span>
                            </div>
                            <div class="col-3 text-end"><span
                                    style="font-size:.65rem;font-weight:700;letter-spacing:.8px;text-transform:uppercase;color:rgba(255,255,255,.3);">Credit</span>
                            </div>
                        </div>
                        <div class="row g-0 py-2" style="border-bottom:1px solid rgba(255,255,255,.05);">
                            <div class="col-6" style="font-size:.8rem;color:rgba(255,255,255,.6);">Cash &amp; Bank</div>
                            <div class="col-3 text-end" style="font-size:.8rem;font-weight:600;color:#f87171;">4,600
                            </div>
                            <div class="col-3 text-end" style="font-size:.8rem;color:rgba(255,255,255,.2);">—</div>
                        </div>
                        <div class="row g-0 py-2" style="border-bottom:1px solid rgba(255,255,255,.05);">
                            <div class="col-6" style="font-size:.8rem;color:rgba(255,255,255,.6);">Revenue</div>
                            <div class="col-3 text-end" style="font-size:.8rem;color:rgba(255,255,255,.2);">—</div>
                            <div class="col-3 text-end" style="font-size:.8rem;font-weight:600;color:var(--emerald);">
                                4,000
                            </div>
                        </div>
                        <div class="row g-0 py-2">
                            <div class="col-6" style="font-size:.8rem;color:rgba(255,255,255,.6);">VAT Payable</div>
                            <div class="col-3 text-end" style="font-size:.8rem;color:rgba(255,255,255,.2);">—</div>
                            <div class="col-3 text-end" style="font-size:.8rem;font-weight:600;color:var(--emerald);">
                                600
                            </div>
                        </div>
                        <div class="row g-0 pt-3 mt-1" style="border-top:1px solid rgba(255,255,255,.1);">
                            <div class="col-6" style="font-size:.75rem;font-weight:700;color:rgba(255,255,255,.35);">
                                TOTALS
                            </div>
                            <div class="col-3 text-end" style="font-size:.8rem;font-weight:700;color:#f87171;">4,600
                            </div>
                            <div class="col-3 text-end" style="font-size:.8rem;font-weight:700;color:var(--emerald);">
                                4,600
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ═══ REPORTING MODULE ═══ -->
                <section id="reporting-module" class="pb-5 mb-5 reveal">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="rounded-3 d-flex align-items-center justify-content-center text-dark flex-shrink-0"
                             style="width:52px;height:52px;background:#f4b942;font-size:1.4rem;">
                            <i class="bi bi-bar-chart-line"></i>
                        </div>
                        <div>
                            <h2 class="font-display fw-bold text-dark mb-0"
                                style="font-size:1.6rem;letter-spacing:-.5px;">Financial Reporting &amp; VAT Filing</h2>
                            <span
                                style="font-size:.72rem;font-weight:700;letter-spacing:1px;text-transform:uppercase;color:#f4b942;">Audit-Ready in Seconds</span>
                        </div>
                    </div>

                    <p class="mb-4" style="color:var(--ink-muted);line-height:1.7;">Audit-ready reports generated
                        instantly. No more spreadsheets at month-end. All reports are formatted to meet GAZT and ZATCA
                        submission standards.</p>

                    <div class="row g-3 mb-4">
                        <div class="col-md-4">
                            <div class="card border-0 shadow-sm rounded-4 p-4 text-center h-100 hover-lift bg-white">
                                <div class="d-flex align-items-center justify-content-center mx-auto rounded-3 mb-3"
                                     style="width:52px;height:52px;background:rgba(239,68,68,.1);font-size:1.4rem;color:#ef4444;">
                                    <i class="bi bi-file-earmark-pdf"></i>
                                </div>
                                <h6 class="fw-bold mb-2">VAT Return</h6>
                                <p class="small mb-0" style="color:var(--ink-muted);">ZATCA-ready VAT form snapshots for
                                    quarterly filing. Pre-populated from your transactions.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0 shadow-sm rounded-4 p-4 text-center h-100 hover-lift bg-white">
                                <div class="d-flex align-items-center justify-content-center mx-auto rounded-3 mb-3"
                                     style="width:52px;height:52px;background:rgba(58,107,255,.1);font-size:1.4rem;color:#3a6bff;">
                                    <i class="bi bi-pie-chart"></i>
                                </div>
                                <h6 class="fw-bold mb-2">Profit &amp; Loss</h6>
                                <p class="small mb-0" style="color:var(--ink-muted);">Real-time revenue vs. expense
                                    analysis by period, branch, or cost center.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0 shadow-sm rounded-4 p-4 text-center h-100 hover-lift bg-white">
                                <div class="d-flex align-items-center justify-content-center mx-auto rounded-3 mb-3"
                                     style="width:52px;height:52px;background:rgba(0,201,123,.1);font-size:1.4rem;color:var(--emerald);">
                                    <i class="bi bi-columns-gap"></i>
                                </div>
                                <h6 class="fw-bold mb-2">Balance Sheet</h6>
                                <p class="small mb-0" style="color:var(--ink-muted);">Instant snapshots of your Assets
                                    vs. Liabilities for any date range.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Additional reports -->
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center gap-3 p-3 rounded-3 bg-white border hover-lift">
                                <i class="bi bi-table" style="font-size:1.2rem;color:var(--emerald);"></i>
                                <div>
                                    <div class="fw-semibold" style="font-size:.875rem;">Trial Balance</div>
                                    <div style="font-size:.78rem;color:var(--ink-muted);">Instant generation for
                                        auditing and closing periods.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center gap-3 p-3 rounded-3 bg-white border hover-lift">
                                <i class="bi bi-cash-stack" style="font-size:1.2rem;color:var(--emerald);"></i>
                                <div>
                                    <div class="fw-semibold" style="font-size:.875rem;">Cash Flow Statement</div>
                                    <div style="font-size:.78rem;color:var(--ink-muted);">Track operating, investing,
                                        and financing activities.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center gap-3 p-3 rounded-3 bg-white border hover-lift">
                                <i class="bi bi-receipt-cutoff" style="font-size:1.2rem;color:var(--emerald);"></i>
                                <div>
                                    <div class="fw-semibold" style="font-size:.875rem;">Accounts Receivable Aging</div>
                                    <div style="font-size:.78rem;color:var(--ink-muted);">See overdue invoices grouped
                                        by 30/60/90-day buckets.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center gap-3 p-3 rounded-3 bg-white border hover-lift">
                                <i class="bi bi-percent" style="font-size:1.2rem;color:var(--emerald);"></i>
                                <div>
                                    <div class="fw-semibold" style="font-size:.875rem;">Zakat Computation Sheet</div>
                                    <div style="font-size:.78rem;color:var(--ink-muted);">Prepare annual Zakat base
                                        automatically from your ledger.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ═══ CTA BANNER ═══ -->
                <div class="rounded-4 p-5 text-center text-white reveal" style="background:var(--ink);">
                    <div class="d-inline-flex align-items-center gap-2 mb-3 px-3 py-2 rounded-pill"
                         style="background:rgba(0,201,123,.15);border:1px solid rgba(0,201,123,.3);">
                        <i class="bi bi-shield-fill-check" style="color:var(--emerald);"></i>
                        <span
                            style="font-size:.72rem;font-weight:700;letter-spacing:.8px;text-transform:uppercase;color:var(--emerald);">14-Day Free Trial</span>
                    </div>
                    <h3 class="font-display fw-bold mb-3" style="font-size:1.8rem;letter-spacing:-.5px;">Ready to
                        automate your<br>Saudi business finances?</h3>
                    <p class="mb-4" style="color:rgba(255,255,255,.5);max-width:420px;margin:0 auto 1.5rem;">Join 500+
                        businesses — see all these features in action. No credit card required.</p>
                    <div class="d-flex gap-3 justify-content-center flex-wrap">
                        <a href="/register" class="btn btn-lg px-5 fw-bold text-dark"
                           style="background:var(--emerald);border:none;border-radius:12px;">Sign Up Free</a>
                        <a href="/contact" class="btn btn-lg px-4 fw-semibold"
                           style="background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.15);color:#fff;border-radius:12px;">Request
                            a Demo</a>
                    </div>
                </div>

            </div><!-- /col-lg-9 -->
        </div><!-- /row -->
    </div><!-- /container -->
@endsection
