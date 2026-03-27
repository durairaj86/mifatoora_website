@extends('website.layout')
@section('title', 'Pricing')
@section('web-content')
    <style>
        :root {
            --bs-body-font-family: 'DM Sans', sans-serif;
            --ink: #0a0f1e;
            --ink-muted: #4a5578;
            --ink-ghost: #8896b0;
            --surface: #f5f7fc;
            --emerald: #00c97b;
            --emerald-dim: #00a863;
            --emerald-glow: rgba(0, 201, 123, .18);
            --grid-line: rgba(60, 80, 140, .07);
        }

        body {
            font-family: 'DM Sans', sans-serif;
            color: var(--ink);
            background: var(--surface);
        }

        .font-display {
            font-family: 'DM Sans', sans-serif;
        }

        .text-emerald {
            color: var(--emerald) !important;
        }

        .bg-ink {
            background-color: var(--ink) !important;
        }

        /* Navbar brand */
        .navbar-brand {
            font-family: 'DM Sans', sans-serif;
            font-weight: 800;
            font-size: 1.3rem;
            letter-spacing: -.4px;
        }

        .navbar-brand span {
            color: var(--emerald);
        }

        /* Currency toggle */
        .cur-toggle {
            background: #e2e8f0;
            padding: 4px;
            border-radius: 50px;
            display: inline-flex;
            cursor: pointer;
            user-select: none;
        }

        .cur-item {
            padding: 7px 22px;
            border-radius: 50px;
            font-size: .875rem;
            font-weight: 600;
            color: var(--ink-muted);
            transition: all .25s;
        }

        .cur-item.active {
            background: #fff;
            color: var(--ink);
            box-shadow: 0 2px 8px rgba(10, 15, 30, .1);
        }

        /* Plan cards */
        .plan-card {
            border: 1.5px solid rgba(60, 80, 140, .09);
            border-radius: 20px;
            background: #fff;
            display: flex;
            flex-direction: column;
            transition: transform .3s, box-shadow .3s, border-color .3s;
            position: relative;
        }

        .plan-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 50px rgba(10, 15, 30, .09) !important;
            border-color: rgba(60, 80, 140, .2);
        }

        .plan-card.featured {
            background: var(--ink);
            border-color: var(--ink);
            transform: translateY(-10px);
            box-shadow: 0 28px 60px rgba(10, 15, 30, .22) !important;
        }

        .plan-card.featured:hover {
            transform: translateY(-14px);
        }

        .popular-chip {
            position: absolute;
            top: -13px;
            left: 50%;
            transform: translateX(-50%);
            background: var(--emerald);
            color: var(--ink);
            font-size: .65rem;
            font-weight: 800;
            padding: 4px 14px;
            border-radius: 50px;
            letter-spacing: .5px;
            text-transform: uppercase;
            white-space: nowrap;
        }

        .plan-amount {
            font-family: 'DM Sans', sans-serif;
            font-size: 2.6rem;
            font-weight: 800;
            line-height: 1;
        }

        .plan-features {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .plan-features li {
            display: flex;
            align-items: flex-start;
            gap: .6rem;
            font-size: .85rem;
            margin-bottom: .75rem;
        }

        .plan-features li.off {
            opacity: .38;
        }

        .btn-plan {
            display: block;
            width: 100%;
            padding: .85rem;
            border-radius: 12px;
            font-size: .9rem;
            font-weight: 600;
            text-align: center;
            text-decoration: none;
            transition: all .2s;
            border: none;
            cursor: pointer;
            font-family: 'DM Sans', sans-serif;
        }

        .btn-plan-outline {
            border: 1.5px solid rgba(60, 80, 140, .15);
            color: var(--ink);
            background: transparent;
        }

        .btn-plan-outline:hover {
            border-color: var(--ink);
            background: var(--surface);
            color: var(--ink);
        }

        .btn-plan-emerald {
            background: var(--emerald);
            color: #fff;
            box-shadow: 0 4px 18px var(--emerald-glow);
        }

        .btn-plan-emerald:hover {
            background: var(--emerald-dim);
            color: #fff;
        }

        .btn-plan-white {
            background: #fff;
            color: var(--ink);
        }

        .btn-plan-white:hover {
            background: #f1f5f9;
            color: var(--ink);
        }

        .btn-plan-dark {
            background: var(--ink);
            color: #fff;
        }

        .btn-plan-dark:hover {
            background: #1e2740;
            color: #fff;
        }

        /* Comparison table */
        .comp-table {
            border-radius: 16px;
            overflow: hidden;
            border: 1.5px solid rgba(60, 80, 140, .09);
        }

        .comp-table thead th {
            background: var(--ink);
            padding: 1rem 1.1rem;
            border: none;
        }

        .comp-table tbody td {
            padding: .85rem 1.1rem;
            border-bottom: 1px solid rgba(60, 80, 140, .06);
            vertical-align: middle;
            font-size: .875rem;
        }

        .comp-table tbody tr:last-child td {
            border-bottom: none;
        }

        .comp-table .cat-row td {
            background: rgba(60, 80, 140, .04);
            font-size: .68rem;
            font-weight: 700;
            letter-spacing: 1.2px;
            text-transform: uppercase;
            color: var(--ink-ghost);
            padding: .6rem 1.1rem;
        }

        .comp-table .highlight-col {
            background: rgba(0, 201, 123, .03);
        }

        .check-icon {
            color: var(--emerald);
            font-size: 1.1rem;
        }

        .cross-icon {
            color: #cbd5e1;
            font-size: 1.1rem;
        }

        /* Hover lift */
        .hover-lift {
            transition: transform .25s, box-shadow .25s;
        }

        .hover-lift:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 30px rgba(10, 15, 30, .08) !important;
        }

        /* Scroll reveal */
        .reveal {
            opacity: 0;
            transform: translateY(18px);
            transition: opacity .5s ease, transform .5s ease;
        }

        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* FAQ */
        .faq-item {
            border: 1.5px solid rgba(60, 80, 140, .08);
            border-radius: 14px;
            background: #fff;
            overflow: hidden;
            transition: box-shadow .2s;
        }

        .faq-item:hover {
            box-shadow: 0 8px 24px rgba(10, 15, 30, .06);
        }

        .faq-btn {
            background: transparent;
            border: none;
            width: 100%;
            text-align: left;
            padding: 1.1rem 1.25rem;
            font-family: 'DM Sans', sans-serif;
            font-size: .9rem;
            font-weight: 600;
            color: var(--ink);
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
        }

        .faq-body {
            padding: 0 1.25rem 1.1rem;
            font-size: .875rem;
            color: var(--ink-muted);
            line-height: 1.7;
            display: none;
        }

        .faq-body.open {
            display: block;
        }
    </style>
    <div x-data="{ isUsd: false }">
        <!-- ════════ HEADER ════════ -->
        <header class="bg-white border-bottom text-center" style="margin-top:68px; padding: 70px 0 60px;">
            <div class="container">
    <span class="badge rounded-pill px-3 py-2 mb-3 d-inline-flex align-items-center gap-2"
          style="background:rgba(0,201,123,.1);color:var(--emerald);font-size:.72rem;font-weight:700;letter-spacing:1px;text-transform:uppercase;">
      <i class="bi bi-shield-check"></i> ZATCA Phase 2 Fully Compliant
    </span>
                <h1 class="font-display fw-bold text-dark mb-3"
                    style="font-size:clamp(2rem,4vw,3rem);letter-spacing:-1px;">
                    Plans for Every Stage of <span style="color:var(--emerald);">Growth</span>
                </h1>
                <p class="mb-4"
                   style="color:var(--ink-muted);font-size:1.05rem;max-width:460px;margin:0 auto 1.5rem;line-height:1.7;">
                    Choose a plan that fits your business. Scale up as your transactions grow.
                </p>

                <!-- Currency toggle -->
                <div class="cur-toggle mb-2" @click="isUsd = !isUsd">
                    <div class="cur-item" :class="!isUsd ? 'active' : ''">SAR</div>
                    <div class="cur-item" :class="isUsd ? 'active' : ''">USD</div>
                </div>
                <div class="small mt-1" style="color:var(--ink-ghost);" x-show="isUsd">Exchange Rate: 1 USD ≈ 3.75 SAR
                </div>
            </div>
        </header>

        <!-- ════════ PLAN CARDS ════════ -->
        <section class="py-5">
            <div class="container py-3">
                <div class="row g-4 align-items-stretch justify-content-center reveal">

                    <!-- Free -->
                    <div class="col-md-6 col-xl-3">
                        <div class="plan-card p-4 h-100 shadow-sm">
                            <div class="mb-1"
                                 style="font-size:.7rem;font-weight:700;letter-spacing:1px;text-transform:uppercase;color:var(--ink-ghost);">
                                Individual
                            </div>
                            <div class="font-display fw-bold mb-1" style="font-size:1.25rem;">Free</div>
                            <div class="d-flex align-items-baseline gap-2 mb-1">
                                <span class="plan-amount text-dark">0</span>
                                <span style="font-size:.85rem;color:var(--ink-ghost);"
                                      x-text="isUsd ? 'USD/mo' : 'SAR/mo'"></span>
                            </div>
                            <p class="mb-4" style="font-size:.82rem;color:var(--ink-ghost);line-height:1.5;">For
                                individuals
                                testing the basic modules.</p>
                            <hr class="opacity-25 mb-4">
                            <ul class="plan-features flex-grow-1 mb-4">
                                <li style="color:var(--ink-muted);"><i class="bi bi-check2 text-emerald fw-bold"></i> 10
                                    Invoices / month
                                </li>
                                <li style="color:var(--ink-muted);"><i class="bi bi-check2 text-emerald fw-bold"></i>
                                    ZATCA
                                    Phase 1 QR
                                </li>
                                <li style="color:var(--ink-muted);"><i class="bi bi-check2 text-emerald fw-bold"></i>
                                    Basic
                                    Expense Entry
                                </li>
                                <li class="off" style="color:var(--ink-muted);"><i class="bi bi-x"></i> ZATCA Phase 2
                                    Sync
                                </li>
                                <li class="off" style="color:var(--ink-muted);"><i class="bi bi-x"></i> Double-Entry
                                    Ledger
                                </li>
                            </ul>
                            <a href="/register" class="btn-plan btn-plan-outline mt-auto">Sign Up Free</a>
                        </div>
                    </div>

                    <!-- Starter -->
                    <div class="col-md-6 col-xl-3">
                        <div class="plan-card p-4 h-100 shadow-sm">
                            <div class="mb-1"
                                 style="font-size:.7rem;font-weight:700;letter-spacing:1px;text-transform:uppercase;color:#3a6bff;">
                                Small Business
                            </div>
                            <div class="font-display fw-bold mb-1" style="font-size:1.25rem;">Starter</div>
                            <div class="d-flex align-items-baseline gap-2 mb-1">
                                <span class="plan-amount text-dark" x-text="isUsd ? '26' : '99'"></span>
                                <span style="font-size:.85rem;color:var(--ink-ghost);"
                                      x-text="isUsd ? 'USD/mo' : 'SAR/mo'"></span>
                            </div>
                            <p class="mb-4" style="font-size:.82rem;color:var(--ink-ghost);line-height:1.5;">Essential
                                tools
                                for small Saudi startups and retail shops.</p>
                            <hr class="opacity-25 mb-4">
                            <ul class="plan-features flex-grow-1 mb-4">
                                <li style="color:var(--ink-muted);"><i class="bi bi-check2 text-emerald fw-bold"></i>
                                    100
                                    Invoices / month
                                </li>
                                <li style="color:var(--ink-muted);"><i class="bi bi-check2 text-emerald fw-bold"></i> 2
                                    Warehouse Hubs
                                </li>
                                <li style="color:var(--ink-muted);"><i class="bi bi-check2 text-emerald fw-bold"></i>
                                    VAT
                                    Return Reports
                                </li>
                                <li style="color:var(--ink-muted);"><i class="bi bi-check2 text-emerald fw-bold"></i>
                                    ZATCA
                                    Phase 1 Ready
                                </li>
                                <li class="off" style="color:var(--ink-muted);"><i class="bi bi-x"></i> ZATCA Phase 2
                                    Sync
                                </li>
                            </ul>
                            <a href="/register" class="btn-plan btn-plan-outline mt-auto">Choose Starter</a>
                        </div>
                    </div>

                    <!-- Professional (featured) -->
                    <div class="col-md-6 col-xl-3">
                        <div class="plan-card featured p-4 h-100">
                            <div class="popular-chip">Most Popular</div>
                            <div class="mb-1"
                                 style="font-size:.7rem;font-weight:700;letter-spacing:1px;text-transform:uppercase;color:rgba(255,255,255,.4);">
                                Growing Team
                            </div>
                            <div class="font-display fw-bold mb-1 text-white" style="font-size:1.25rem;">Professional
                            </div>
                            <div class="d-flex align-items-baseline gap-2 mb-1">
                            <span class="plan-amount" style="color:var(--emerald);"
                                  x-text="isUsd ? '66' : '249'"></span>
                                <span style="font-size:.85rem;color:rgba(255,255,255,.35);"
                                      x-text="isUsd ? 'USD/mo' : 'SAR/mo'"></span>
                            </div>
                            <p class="mb-4" style="font-size:.82rem;color:rgba(255,255,255,.4);line-height:1.5;">The
                                complete ZATCA Phase 2 solution for growing teams.</p>
                            <hr style="border-color:rgba(255,255,255,.1);" class="mb-4">
                            <ul class="plan-features flex-grow-1 mb-4">
                                <li style="color:rgba(255,255,255,.8);"><i
                                        class="bi bi-check2 text-emerald fw-bold"></i>
                                    <strong class="text-white">Unlimited Invoices</strong></li>
                                <li style="color:rgba(255,255,255,.8);"><i
                                        class="bi bi-check2 text-emerald fw-bold"></i>
                                    <strong class="text-white">ZATCA Phase 2 API Sync</strong></li>
                                <li style="color:rgba(255,255,255,.8);"><i
                                        class="bi bi-check2 text-emerald fw-bold"></i>
                                    Full Double-Entry Ledger
                                </li>
                                <li style="color:rgba(255,255,255,.8);"><i
                                        class="bi bi-check2 text-emerald fw-bold"></i>
                                    Multi-Currency Support
                                </li>
                                <li style="color:rgba(255,255,255,.8);"><i
                                        class="bi bi-check2 text-emerald fw-bold"></i> Up
                                    to 10 Users
                                </li>
                            </ul>
                            <a href="/register" class="btn-plan btn-plan-emerald mt-auto">Start 14-Day Trial</a>
                        </div>
                    </div>

                    <!-- Enterprise -->
                    <div class="col-md-6 col-xl-3">
                        <div class="plan-card p-4 h-100 shadow-sm">
                            <div class="mb-1"
                                 style="font-size:.7rem;font-weight:700;letter-spacing:1px;text-transform:uppercase;color:var(--ink-muted);">
                                Corporations
                            </div>
                            <div class="font-display fw-bold mb-1" style="font-size:1.25rem;">Enterprise</div>
                            <div class="d-flex align-items-baseline gap-2 mb-1">
                                <span class="plan-amount text-dark" x-text="isUsd ? '159' : '599'"></span>
                                <span style="font-size:.85rem;color:var(--ink-ghost);"
                                      x-text="isUsd ? 'USD/mo' : 'SAR/mo'"></span>
                            </div>
                            <p class="mb-4" style="font-size:.82rem;color:var(--ink-ghost);line-height:1.5;">For
                                large-scale
                                corporate operations and ERP integration.</p>
                            <hr class="opacity-25 mb-4">
                            <ul class="plan-features flex-grow-1 mb-4">
                                <li style="color:var(--ink-muted);"><i class="bi bi-check2 text-emerald fw-bold"></i>
                                    Custom
                                    Permissions
                                </li>
                                <li style="color:var(--ink-muted);"><i class="bi bi-check2 text-emerald fw-bold"></i>
                                    Multi-Entity Consolidation
                                </li>
                                <li style="color:var(--ink-muted);"><i class="bi bi-check2 text-emerald fw-bold"></i>
                                    Priority 24/7 Support
                                </li>
                                <li style="color:var(--ink-muted);"><i class="bi bi-check2 text-emerald fw-bold"></i>
                                    API
                                    Access for ERP
                                </li>
                                <li style="color:var(--ink-muted);"><i class="bi bi-check2 text-emerald fw-bold"></i>
                                    Dedicated Account Manager
                                </li>
                            </ul>
                            <a href="/contact" class="btn-plan btn-plan-dark mt-auto">Talk to Sales</a>
                        </div>
                    </div>

                </div>

                <p class="text-center mt-4 reveal" style="font-size:.82rem;color:var(--ink-ghost);">
                    <i class="bi bi-info-circle me-1"></i> All prices are exclusive of 15% VAT.
                    Need a custom plan? <a href="/contact"
                                           style="color:var(--emerald);font-weight:600;text-decoration:none;">Talk to
                        us.</a>
                </p>
            </div>
        </section>

        <!-- ════════ TRUST STRIP ════════ -->
        <div class="border-top border-bottom bg-white py-4 reveal">
            <div class="container">
                <div class="row g-3 text-center align-items-center">
                    <div class="col-6 col-md-3">
                        <div class="d-flex align-items-center justify-content-center gap-2"
                             style="font-size:.82rem;color:var(--ink-muted);">
                            <i class="bi bi-shield-fill-check" style="color:var(--emerald);font-size:1rem;"></i>
                            <span>ZATCA Certified</span>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="d-flex align-items-center justify-content-center gap-2"
                             style="font-size:.82rem;color:var(--ink-muted);">
                            <i class="bi bi-credit-card-2-front" style="color:var(--emerald);font-size:1rem;"></i>
                            <span>No credit card needed</span>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="d-flex align-items-center justify-content-center gap-2"
                             style="font-size:.82rem;color:var(--ink-muted);">
                            <i class="bi bi-arrow-left-right" style="color:var(--emerald);font-size:1rem;"></i>
                            <span>Cancel anytime</span>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="d-flex align-items-center justify-content-center gap-2"
                             style="font-size:.82rem;color:var(--ink-muted);">
                            <i class="bi bi-headset" style="color:var(--emerald);font-size:1rem;"></i>
                            <span>Free onboarding session</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ════════ COMPARISON TABLE ════════ -->
        <section class="py-5 bg-white">
            <div class="container py-4">
                <div class="text-center mb-5 reveal">
                <span class="d-block mb-2"
                      style="font-size:.72rem;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;color:var(--emerald);">Feature Breakdown</span>
                    <h2 class="font-display fw-bold text-dark mb-2"
                        style="font-size:clamp(1.6rem,3vw,2.2rem);letter-spacing:-.5px;">Module Comparison</h2>
                    <p style="color:var(--ink-muted);">A technical breakdown of capabilities across all plans.</p>
                </div>

                <div class="table-responsive shadow-sm rounded-4 overflow-hidden border reveal"
                     style="border-color:rgba(60,80,140,.09) !important;">
                    <table class="table comp-table bg-white mb-0">
                        <thead>
                        <tr class="text-center">
                            <th class="text-start py-4 px-4"
                                style="width:32%;color:rgba(255,255,255,.5);font-size:.78rem;font-weight:600;">Features
                                &amp; Capabilities
                            </th>
                            <th class="py-4 px-3" style="color:rgba(255,255,255,.6);font-size:.78rem;font-weight:700;">
                                Free
                            </th>
                            <th class="py-4 px-3" style="color:rgba(255,255,255,.6);font-size:.78rem;font-weight:700;">
                                Starter
                            </th>
                            <th class="py-4 px-3 highlight-col"
                                style="color:var(--emerald);font-size:.78rem;font-weight:700;">
                                Professional <span class="ms-1 badge rounded-pill"
                                                   style="background:rgba(0,201,123,.2);color:var(--emerald);font-size:.6rem;">★</span>
                            </th>
                            <th class="py-4 px-3" style="color:rgba(255,255,255,.6);font-size:.78rem;font-weight:700;">
                                Enterprise
                            </th>
                        </tr>
                        </thead>
                        <tbody>

                        <!-- ZATCA -->
                        <tr class="cat-row">
                            <td colspan="5">ZATCA &amp; Compliance</td>
                        </tr>
                        <tr class="text-center">
                            <td class="text-start fw-medium" style="font-size:.875rem;">Phase 1 QR Code Generation</td>
                            <td><i class="bi bi-check-circle-fill check-icon"></i></td>
                            <td><i class="bi bi-check-circle-fill check-icon"></i></td>
                            <td class="highlight-col"><i class="bi bi-check-circle-fill check-icon"></i></td>
                            <td><i class="bi bi-check-circle-fill check-icon"></i></td>
                        </tr>
                        <tr class="text-center">
                            <td class="text-start fw-medium" style="font-size:.875rem;">Phase 2 API Integration</td>
                            <td><i class="bi bi-dash-circle cross-icon"></i></td>
                            <td><i class="bi bi-dash-circle cross-icon"></i></td>
                            <td class="highlight-col">
                            <span class="badge rounded-pill px-2 py-1"
                                  style="background:rgba(0,201,123,.12);color:var(--emerald);font-size:.7rem;font-weight:700;">Live Sync</span>
                            </td>
                            <td>
                            <span class="badge rounded-pill px-2 py-1"
                                  style="background:rgba(0,201,123,.12);color:var(--emerald);font-size:.7rem;font-weight:700;">Live Sync</span>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <td class="text-start fw-medium" style="font-size:.875rem;">Arabic/English Templates</td>
                            <td><span style="font-size:.8rem;color:var(--ink-ghost);">Basic</span></td>
                            <td><span style="font-size:.8rem;color:var(--ink-muted);">Standard</span></td>
                            <td class="highlight-col"><span style="font-size:.8rem;color:var(--ink);font-weight:600;">Premium</span>
                            </td>
                            <td><span style="font-size:.8rem;color:var(--ink);font-weight:600;">White-label</span></td>
                        </tr>
                        <tr class="text-center">
                            <td class="text-start fw-medium" style="font-size:.875rem;">Anti-tampering Hash Chain</td>
                            <td><i class="bi bi-dash-circle cross-icon"></i></td>
                            <td><i class="bi bi-check-circle-fill check-icon"></i></td>
                            <td class="highlight-col"><i class="bi bi-check-circle-fill check-icon"></i></td>
                            <td><i class="bi bi-check-circle-fill check-icon"></i></td>
                        </tr>

                        <!-- Accounting -->
                        <tr class="cat-row">
                            <td colspan="5">Accounting &amp; Finance</td>
                        </tr>
                        <tr class="text-center">
                            <td class="text-start fw-medium" style="font-size:.875rem;">Double-Entry Ledger</td>
                            <td><i class="bi bi-dash-circle cross-icon"></i></td>
                            <td><i class="bi bi-check-circle-fill check-icon"></i></td>
                            <td class="highlight-col"><i class="bi bi-check-circle-fill check-icon"></i></td>
                            <td><i class="bi bi-check-circle-fill check-icon"></i></td>
                        </tr>
                        <tr class="text-center">
                            <td class="text-start fw-medium" style="font-size:.875rem;">Profit &amp; Loss Statements
                            </td>
                            <td><span style="font-size:.8rem;color:var(--ink-ghost);">Basic</span></td>
                            <td><span style="font-size:.8rem;color:var(--ink-muted);">Standard</span></td>
                            <td class="highlight-col"><span style="font-size:.8rem;color:var(--ink);font-weight:600;">Advanced</span>
                            </td>
                            <td><span style="font-size:.8rem;color:var(--ink);font-weight:600;">Consolidated</span></td>
                        </tr>
                        <tr class="text-center">
                            <td class="text-start fw-medium" style="font-size:.875rem;">Multi-Currency Tracking</td>
                            <td><i class="bi bi-dash-circle cross-icon"></i></td>
                            <td><i class="bi bi-dash-circle cross-icon"></i></td>
                            <td class="highlight-col"><i class="bi bi-check-circle-fill check-icon"></i></td>
                            <td><i class="bi bi-check-circle-fill check-icon"></i></td>
                        </tr>
                        <tr class="text-center">
                            <td class="text-start fw-medium" style="font-size:.875rem;">Bank Reconciliation</td>
                            <td><i class="bi bi-dash-circle cross-icon"></i></td>
                            <td><i class="bi bi-check-circle-fill check-icon"></i></td>
                            <td class="highlight-col"><i class="bi bi-check-circle-fill check-icon"></i></td>
                            <td><i class="bi bi-check-circle-fill check-icon"></i></td>
                        </tr>
                        <tr class="text-center">
                            <td class="text-start fw-medium" style="font-size:.875rem;">Zakat Computation Sheet</td>
                            <td><i class="bi bi-dash-circle cross-icon"></i></td>
                            <td><i class="bi bi-dash-circle cross-icon"></i></td>
                            <td class="highlight-col"><i class="bi bi-check-circle-fill check-icon"></i></td>
                            <td><i class="bi bi-check-circle-fill check-icon"></i></td>
                        </tr>

                        <!-- Invoicing -->
                        <tr class="cat-row">
                            <td colspan="5">Invoicing &amp; Billing</td>
                        </tr>
                        <tr class="text-center">
                            <td class="text-start fw-medium" style="font-size:.875rem;">Monthly Invoices</td>
                            <td><span style="font-size:.8rem;color:var(--ink-muted);">10</span></td>
                            <td><span style="font-size:.8rem;color:var(--ink-muted);">100</span></td>
                            <td class="highlight-col"><span style="font-size:.8rem;color:var(--ink);font-weight:700;">Unlimited</span>
                            </td>
                            <td><span style="font-size:.8rem;color:var(--ink);font-weight:700;">Unlimited</span></td>
                        </tr>
                        <tr class="text-center">
                            <td class="text-start fw-medium" style="font-size:.875rem;">Recurring Billing</td>
                            <td><i class="bi bi-dash-circle cross-icon"></i></td>
                            <td><i class="bi bi-check-circle-fill check-icon"></i></td>
                            <td class="highlight-col"><i class="bi bi-check-circle-fill check-icon"></i></td>
                            <td><i class="bi bi-check-circle-fill check-icon"></i></td>
                        </tr>
                        <tr class="text-center">
                            <td class="text-start fw-medium" style="font-size:.875rem;">Credit Notes</td>
                            <td><i class="bi bi-dash-circle cross-icon"></i></td>
                            <td><i class="bi bi-check-circle-fill check-icon"></i></td>
                            <td class="highlight-col"><i class="bi bi-check-circle-fill check-icon"></i></td>
                            <td><i class="bi bi-check-circle-fill check-icon"></i></td>
                        </tr>

                        <!-- User management -->
                        <tr class="cat-row">
                            <td colspan="5">User Management</td>
                        </tr>
                        <tr class="text-center">
                            <td class="text-start fw-medium" style="font-size:.875rem;">User Seats</td>
                            <td><span style="font-size:.8rem;color:var(--ink-muted);">1</span></td>
                            <td><span style="font-size:.8rem;color:var(--ink-muted);">2</span></td>
                            <td class="highlight-col"><span
                                    style="font-size:.8rem;color:var(--ink);font-weight:700;">10</span></td>
                            <td><span style="font-size:.8rem;color:var(--ink);font-weight:700;">Unlimited</span></td>
                        </tr>
                        <tr class="text-center">
                            <td class="text-start fw-medium" style="font-size:.875rem;">Custom Roles</td>
                            <td><i class="bi bi-dash-circle cross-icon"></i></td>
                            <td><i class="bi bi-dash-circle cross-icon"></i></td>
                            <td class="highlight-col"><i class="bi bi-check-circle-fill check-icon"></i></td>
                            <td><i class="bi bi-check-circle-fill check-icon"></i></td>
                        </tr>
                        <tr class="text-center">
                            <td class="text-start fw-medium" style="font-size:.875rem;">Multi-Entity Consolidation</td>
                            <td><i class="bi bi-dash-circle cross-icon"></i></td>
                            <td><i class="bi bi-dash-circle cross-icon"></i></td>
                            <td class="highlight-col"><i class="bi bi-dash-circle cross-icon"></i></td>
                            <td><i class="bi bi-check-circle-fill check-icon"></i></td>
                        </tr>

                        <!-- Support -->
                        <tr class="cat-row">
                            <td colspan="5">Support &amp; Onboarding</td>
                        </tr>
                        <tr class="text-center">
                            <td class="text-start fw-medium" style="font-size:.875rem;">Support Channel</td>
                            <td><span style="font-size:.78rem;color:var(--ink-ghost);">Email</span></td>
                            <td><span style="font-size:.78rem;color:var(--ink-muted);">Email + Chat</span></td>
                            <td class="highlight-col"><span style="font-size:.78rem;color:var(--ink);font-weight:600;">Priority</span>
                            </td>
                            <td><span style="font-size:.78rem;color:var(--ink);font-weight:600;">24/7 Dedicated</span>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <td class="text-start fw-medium" style="font-size:.875rem;">Free Onboarding Session</td>
                            <td><i class="bi bi-dash-circle cross-icon"></i></td>
                            <td><i class="bi bi-dash-circle cross-icon"></i></td>
                            <td class="highlight-col"><i class="bi bi-check-circle-fill check-icon"></i></td>
                            <td><i class="bi bi-check-circle-fill check-icon"></i></td>
                        </tr>

                        <!-- CTA row -->
                        <tr class="text-center" style="background:rgba(245,247,252,.6);">
                            <td class="text-start py-4">
                                <span class="fw-semibold" style="font-size:.875rem;">Get started today</span>
                            </td>
                            <td class="py-4">
                                <a href="/register" class="btn btn-sm px-3 py-2 rounded-3 fw-semibold"
                                   style="border:1.5px solid rgba(60,80,140,.15);font-size:.78rem;color:var(--ink);">Sign
                                    Up
                                    Free</a>
                            </td>
                            <td class="py-4">
                                <a href="/register" class="btn btn-sm px-3 py-2 rounded-3 fw-semibold"
                                   style="border:1.5px solid rgba(60,80,140,.15);font-size:.78rem;color:var(--ink);">Choose
                                    Starter</a>
                            </td>
                            <td class="py-4 highlight-col">
                                <a href="/register" class="btn btn-sm px-4 py-2 rounded-3 fw-bold text-white"
                                   style="background:var(--emerald);border:none;font-size:.78rem;">Start Trial</a>
                            </td>
                            <td class="py-4">
                                <a href="/contact" class="btn btn-sm px-3 py-2 rounded-3 fw-semibold text-white"
                                   style="background:var(--ink);border:none;font-size:.78rem;">Contact Sales</a>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- ════════ FAQ ════════ -->
        <section class="py-5" style="background:var(--surface);">
            <div class="container py-3">
                <div class="text-center mb-5 reveal">
                <span class="d-block mb-2"
                      style="font-size:.72rem;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;color:var(--emerald);">Got Questions?</span>
                    <h2 class="font-display fw-bold text-dark"
                        style="font-size:clamp(1.6rem,3vw,2.2rem);letter-spacing:-.5px;">Frequently Asked Questions</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="d-flex flex-column gap-3 reveal">

                            <div class="faq-item">
                                <button class="faq-btn" onclick="toggleFaq(this)">
                                    <span>Do I need a credit card to start the free trial?</span>
                                    <i class="bi bi-plus-circle"
                                       style="color:var(--emerald);font-size:1.1rem;flex-shrink:0;"></i>
                                </button>
                                <div class="faq-body">No credit card is required. Sign up and get full access to the
                                    Professional plan for 14 days completely free.
                                </div>
                            </div>

                            <div class="faq-item">
                                <button class="faq-btn" onclick="toggleFaq(this)">
                                    <span>Is LedgerOS really ZATCA Phase 2 certified?</span>
                                    <i class="bi bi-plus-circle"
                                       style="color:var(--emerald);font-size:1.1rem;flex-shrink:0;"></i>
                                </button>
                                <div class="faq-body">Yes. LedgerOS is a fully certified ZATCA provider. We handle
                                    device
                                    onboarding, CSID generation, cryptographic signing, and real-time clearance API
                                    calls to
                                    zatca.gov.sa on your behalf.
                                </div>
                            </div>

                            <div class="faq-item">
                                <button class="faq-btn" onclick="toggleFaq(this)">
                                    <span>Can I switch plans later?</span>
                                    <i class="bi bi-plus-circle"
                                       style="color:var(--emerald);font-size:1.1rem;flex-shrink:0;"></i>
                                </button>
                                <div class="faq-body">Absolutely. You can upgrade or downgrade your plan at any time
                                    from
                                    your account settings. Upgrades take effect immediately; downgrades at the next
                                    billing
                                    cycle.
                                </div>
                            </div>

                            <div class="faq-item">
                                <button class="faq-btn" onclick="toggleFaq(this)">
                                    <span>Are the prices inclusive of VAT?</span>
                                    <i class="bi bi-plus-circle"
                                       style="color:var(--emerald);font-size:1.1rem;flex-shrink:0;"></i>
                                </button>
                                <div class="faq-body">All displayed prices are exclusive of 15% Saudi VAT. The VAT
                                    amount
                                    will be added at checkout and clearly shown on your tax invoice, which is also
                                    ZATCA-compliant.
                                </div>
                            </div>

                            <div class="faq-item">
                                <button class="faq-btn" onclick="toggleFaq(this)">
                                    <span>What happens to my data if I cancel?</span>
                                    <i class="bi bi-plus-circle"
                                       style="color:var(--emerald);font-size:1.1rem;flex-shrink:0;"></i>
                                </button>
                                <div class="faq-body">Your data is retained for 90 days after cancellation, during which
                                    you
                                    can export everything. After that it is permanently deleted from our servers.
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ════════ CTA BANNER ════════ -->
        <section class="py-5 bg-white border-top reveal">
            <div class="container py-3">
                <div class="rounded-4 p-5 text-center text-white" style="background:var(--ink);">
                    <div class="d-inline-flex align-items-center gap-2 mb-3 px-3 py-2 rounded-pill"
                         style="background:rgba(0,201,123,.15);border:1px solid rgba(0,201,123,.3);">
                        <i class="bi bi-shield-fill-check" style="color:var(--emerald);"></i>
                        <span
                            style="font-size:.72rem;font-weight:700;letter-spacing:.8px;text-transform:uppercase;color:var(--emerald);">14-Day Free Trial</span>
                    </div>
                    <h3 class="font-display fw-bold mb-3"
                        style="font-size:clamp(1.5rem,3vw,2rem);letter-spacing:-.5px;">
                        Need a custom solution?</h3>
                    <p class="mb-4"
                       style="color:rgba(255,255,255,.5);max-width:420px;margin:0 auto 1.5rem;line-height:1.7;">Contact
                        our
                        team for a demo tailored to your specific business needs and Saudi compliance requirements.</p>
                    <div class="d-flex gap-3 justify-content-center flex-wrap">
                        <a href="/contact" class="btn btn-lg px-5 fw-bold text-dark"
                           style="background:var(--emerald);border:none;border-radius:12px;">Talk to a Specialist</a>
                        <a href="/register" class="btn btn-lg px-4 fw-semibold"
                           style="background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.15);color:#fff;border-radius:12px;">Start
                            Free Trial</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>

        // FAQ toggle
        function toggleFaq(btn) {
            const body = btn.nextElementSibling;
            const icon = btn.querySelector('i');
            const isOpen = body.classList.contains('open');
            // close all
            document.querySelectorAll('.faq-body').forEach(b => b.classList.remove('open'));
            document.querySelectorAll('.faq-btn i').forEach(i => {
                i.className = 'bi bi-plus-circle';
                i.style.color = 'var(--emerald)';
            });
            if (!isOpen) {
                body.classList.add('open');
                icon.className = 'bi bi-dash-circle';
                icon.style.color = 'var(--ink-muted)';
            }
        }
    </script>
@endsection
