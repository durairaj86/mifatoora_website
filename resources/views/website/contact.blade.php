@extends('website.layout')
@section('title', 'Contact')
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

        /* Navbar */
        .navbar-brand {
            font-family: 'DM Sans', sans-serif;
            font-weight: 800;
            font-size: 1.3rem;
            letter-spacing: -.4px;
        }

        .navbar-brand span {
            color: var(--emerald);
        }

        /* Form controls */
        .form-ctrl {
            border: 1.5px solid rgba(60, 80, 140, .12);
            border-radius: 10px;
            font-family: 'DM Sans', sans-serif;
            font-size: .875rem;
            color: var(--ink);
            padding: .75rem 1rem;
            width: 100%;
            background: #fff;
            outline: none;
            transition: border-color .2s;
        }

        .form-ctrl:focus {
            border-color: var(--emerald);
            box-shadow: 0 0 0 3px rgba(0, 201, 123, .1);
        }

        .form-ctrl::placeholder {
            color: rgba(74, 85, 120, .4);
        }

        select.form-ctrl {
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%238896b0' d='M6 8L1 3h10z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 1rem center;
        }

        /* Cards */
        .contact-card {
            border-radius: 20px;
            border: 1.5px solid rgba(60, 80, 140, .08);
            background: #fff;
            box-shadow: 0 20px 50px rgba(10, 15, 30, .07);
        }

        .promo-card {
            border-radius: 20px;
            border: 1.5px solid rgba(0, 201, 123, .2);
            background: linear-gradient(160deg, #fff 0%, #f0fdf9 100%);
            box-shadow: 0 20px 50px rgba(10, 15, 30, .06);
        }

        /* Attr icon */
        .attr-icon {
            width: 40px;
            height: 40px;
            border-radius: 12px;
            background: rgba(0, 201, 123, .1);
            color: var(--emerald);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            font-size: .95rem;
        }

        /* Submit btn */
        .btn-submit {
            background: var(--emerald);
            color: #fff;
            border: none;
            border-radius: 12px;
            padding: .9rem;
            font-size: .95rem;
            font-weight: 700;
            width: 100%;
            font-family: 'DM Sans', sans-serif;
            cursor: pointer;
            transition: all .2s;
            box-shadow: 0 4px 18px var(--emerald-glow);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: .5rem;
        }

        .btn-submit:hover {
            background: var(--emerald-dim);
            transform: translateY(-1px);
        }

        /* Or divider */
        .or-line {
            display: flex;
            align-items: center;
            gap: .75rem;
            color: var(--ink-ghost);
            font-size: .75rem;
            letter-spacing: .5px;
        }

        .or-line::before, .or-line::after {
            content: '';
            flex: 1;
            height: 1px;
            background: rgba(60, 80, 140, .1);
        }

        /* Contact info items */
        .info-item {
            display: flex;
            align-items: flex-start;
            gap: .9rem;
        }

        .info-icon {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: .95rem;
            flex-shrink: 0;
        }

        /* Hover lift */
        .hover-lift {
            transition: transform .25s, box-shadow .25s;
        }

        .hover-lift:hover {
            transform: translateY(-3px);
            box-shadow: 0 16px 40px rgba(10, 15, 30, .1) !important;
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

        /* Stats */
        .stat-chip {
            border: 1.5px solid rgba(60, 80, 140, .08);
            border-radius: 14px;
            background: #fff;
        }
    </style>

    <!-- ════════ HEADER ════════ -->
    <header class="bg-white border-bottom" style="margin-top:68px; padding: 64px 0 52px;">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
        <span class="badge rounded-pill px-3 py-2 mb-3 d-inline-flex align-items-center gap-2"
              style="background:rgba(0,201,123,.1);color:var(--emerald);font-size:.72rem;font-weight:700;letter-spacing:1px;text-transform:uppercase;">
          <i class="bi bi-headset"></i> We're Here to Help
        </span>
                    <h1 class="font-display fw-bold text-dark mb-3"
                        style="font-size:clamp(2rem,4vw,3rem);letter-spacing:-1px;line-height:1.1;">
                        How can we help<br>your <span style="color:var(--emerald);">Business?</span>
                    </h1>
                    <p style="font-size:1.05rem;color:var(--ink-muted);line-height:1.7;max-width:440px;" class="mb-0">
                        Whether you need a custom demo or want to jump straight in — our team is ready within 24 hours.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="stat-chip p-3 text-center hover-lift">
                                <div class="font-display fw-bold" style="font-size:1.7rem;color:var(--emerald);">500+
                                </div>
                                <div style="font-size:.78rem;color:var(--ink-muted);">Saudi businesses</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-chip p-3 text-center hover-lift">
                                <div class="font-display fw-bold" style="font-size:1.7rem;color:var(--ink);">&lt; 24h
                                </div>
                                <div style="font-size:.78rem;color:var(--ink-muted);">Response time</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-chip p-3 text-center hover-lift">
                                <div class="font-display fw-bold" style="font-size:1.7rem;color:var(--ink);">14</div>
                                <div style="font-size:.78rem;color:var(--ink-muted);">Day free trial</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-chip p-3 text-center hover-lift">
                                <div class="font-display fw-bold" style="font-size:1.7rem;color:var(--ink);">100%</div>
                                <div style="font-size:.78rem;color:var(--ink-muted);">ZATCA compliant</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ════════ MAIN FORM SECTION ════════ -->
    <section class="py-5">
        <div class="container py-3">
            <div class="row g-4 align-items-start">

                <!-- ── Left: Contact Form ── -->
                <div class="col-lg-7 reveal">
                    <div class="contact-card p-4 p-md-5">

                        <h3 class="font-display fw-bold text-dark mb-1" style="font-size:1.4rem;letter-spacing:-.3px;">
                            Send us a Message</h3>
                        <p style="font-size:.875rem;color:var(--ink-ghost);" class="mb-4">Our team typically responds
                            within one business day.</p>

                        <form action="#" method="POST">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="d-block mb-1 fw-semibold"
                                           style="font-size:.8rem;color:var(--ink-soft);">Full Name</label>
                                    <input type="text" class="form-ctrl" placeholder="Ahmed Al-Rashidi">
                                </div>
                                <div class="col-md-6">
                                    <label class="d-block mb-1 fw-semibold"
                                           style="font-size:.8rem;color:var(--ink-soft);">Company Email</label>
                                    <input type="email" class="form-ctrl" placeholder="ahmed@company.sa">
                                </div>
                                <div class="col-md-6">
                                    <label class="d-block mb-1 fw-semibold"
                                           style="font-size:.8rem;color:var(--ink-soft);">Phone Number</label>
                                    <input type="tel" class="form-ctrl" placeholder="+966 5X XXX XXXX">
                                </div>
                                <div class="col-md-6">
                                    <label class="d-block mb-1 fw-semibold"
                                           style="font-size:.8rem;color:var(--ink-soft);">Subject</label>
                                    <select class="form-ctrl">
                                        <option>General Inquiry</option>
                                        <option>Enterprise Demo</option>
                                        <option>ZATCA Integration Help</option>
                                        <option>Billing Question</option>
                                        <option>Technical Support</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="d-block mb-1 fw-semibold"
                                           style="font-size:.8rem;color:var(--ink-soft);">Message</label>
                                    <textarea class="form-ctrl" rows="4"
                                              placeholder="How can our experts help you? The more detail, the better."></textarea>
                                </div>
                                <div class="col-12 mt-2">
                                    <button type="submit" class="btn-submit">
                                        Send Message <i class="bi bi-send"></i>
                                    </button>
                                    <p class="text-center mt-2" style="font-size:.72rem;color:var(--ink-ghost);">We'll
                                        reply to your email within one business day.</p>
                                </div>
                            </div>
                        </form>

                        <!-- Contact info strip -->
                        <div class="row g-3 mt-4 pt-4" style="border-top:1px solid rgba(60,80,140,.08);">
                            <div class="col-md-4">
                                <div class="info-item">
                                    <div class="info-icon" style="background:rgba(239,68,68,.08);color:#ef4444;">
                                        <i class="bi bi-geo-alt-fill"></i>
                                    </div>
                                    <div>
                                        <div class="fw-semibold" style="font-size:.82rem;">Location</div>
                                        <div style="font-size:.78rem;color:var(--ink-ghost);">King Fahd Road,<br>Riyadh,
                                            KSA
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info-item">
                                    <div class="info-icon" style="background:rgba(0,201,123,.1);color:var(--emerald);">
                                        <i class="bi bi-envelope-fill"></i>
                                    </div>
                                    <div>
                                        <div class="fw-semibold" style="font-size:.82rem;">Email Support</div>
                                        <div style="font-size:.78rem;color:var(--ink-ghost);">support@ledgeros.com<br>Reply
                                            within 24h
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info-item">
                                    <div class="info-icon" style="background:rgba(37,211,102,.1);color:#25d366;">
                                        <i class="bi bi-whatsapp"></i>
                                    </div>
                                    <div>
                                        <div class="fw-semibold" style="font-size:.82rem;">WhatsApp</div>
                                        <div style="font-size:.78rem;color:var(--ink-ghost);">+966 5XX XXX XXX<br>Quick
                                            chat available
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- ── Right: CTA + Quick links ── -->
                <div class="col-lg-5 reveal">

                    <!-- Free trial promo card -->
                    <div class="promo-card p-4 p-md-5 mb-4">
                        <div class="text-center mb-4">
            <span class="badge rounded-pill px-3 py-2 mb-3 d-inline-block"
                  style="background:rgba(0,201,123,.12);color:var(--emerald);font-size:.7rem;font-weight:700;letter-spacing:1px;text-transform:uppercase;">
              14-Day Free Trial
            </span>
                            <h4 class="font-display fw-bold text-dark mb-1"
                                style="font-size:1.3rem;letter-spacing:-.3px;">Ready to automate?</h4>
                            <p style="font-size:.85rem;color:var(--ink-muted);" class="mb-0">No credit card required.
                                Full Professional access.</p>
                        </div>

                        <div class="d-flex flex-column gap-3 mb-4">
                            <div class="d-flex align-items-start gap-3">
                                <div class="attr-icon"><i class="bi bi-lightning-fill"></i></div>
                                <div>
                                    <div class="fw-semibold" style="font-size:.88rem;">Instant Setup</div>
                                    <div style="font-size:.78rem;color:var(--ink-muted);">Be ZATCA Phase 2 ready in
                                        minutes.
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-start gap-3">
                                <div class="attr-icon"><i class="bi bi-receipt-cutoff"></i></div>
                                <div>
                                    <div class="fw-semibold" style="font-size:.88rem;">Unlimited Invoicing</div>
                                    <div style="font-size:.78rem;color:var(--ink-muted);">Full Professional plan for 14
                                        days.
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-start gap-3">
                                <div class="attr-icon"><i class="bi bi-headset"></i></div>
                                <div>
                                    <div class="fw-semibold" style="font-size:.88rem;">Free Onboarding Session</div>
                                    <div style="font-size:.78rem;color:var(--ink-muted);">One-on-one setup with our
                                        accountants.
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-start gap-3">
                                <div class="attr-icon"><i class="bi bi-shield-fill-check"></i></div>
                                <div>
                                    <div class="fw-semibold" style="font-size:.88rem;">ZATCA Readiness Check</div>
                                    <div style="font-size:.78rem;color:var(--ink-muted);">We verify your CR &amp; VAT
                                        details.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="/register" class="btn-submit mb-2 text-decoration-none" style="display:flex;">
                            Create Free Account <i class="bi bi-arrow-right"></i>
                        </a>
                        <p class="text-center mt-2 mb-0" style="font-size:.72rem;color:var(--ink-ghost);">
                            Already 500+ businesses using LedgerOS ·
                            <a href="/pricing" style="color:var(--emerald);text-decoration:none;font-weight:600;">View
                                all plans</a>
                        </p>
                    </div>

                    <!-- WhatsApp quick chat -->
                    <div class="bg-white rounded-4 border p-4 d-flex align-items-center gap-3 hover-lift mb-4"
                         style="border-color:rgba(60,80,140,.08) !important;">
                        <div
                            style="width:44px;height:44px;border-radius:12px;background:rgba(37,211,102,.12);color:#25d366;display:flex;align-items:center;justify-content:center;font-size:1.3rem;flex-shrink:0;">
                            <i class="bi bi-whatsapp"></i>
                        </div>
                        <div>
                            <div class="fw-semibold" style="font-size:.88rem;">Quick Chat on WhatsApp</div>
                            <div style="font-size:.78rem;color:var(--ink-muted);">+966 5XX XXX XXX — usually responds in
                                minutes
                            </div>
                        </div>
                        <i class="bi bi-chevron-right ms-auto" style="color:var(--ink-ghost);font-size:.8rem;"></i>
                    </div>

                    <!-- Support hours -->
                    <div class="bg-white rounded-4 border p-4" style="border-color:rgba(60,80,140,.08) !important;">
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <i class="bi bi-clock" style="color:var(--emerald);font-size:1rem;"></i>
                            <span class="fw-semibold" style="font-size:.88rem;">Support Hours</span>
                        </div>
                        <div class="d-flex flex-column gap-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <span style="font-size:.82rem;color:var(--ink-muted);">Sunday – Thursday</span>
                                <span class="badge rounded-pill px-2 py-1"
                                      style="background:rgba(0,201,123,.1);color:var(--emerald);font-size:.7rem;font-weight:600;">9 AM – 6 PM AST</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span style="font-size:.82rem;color:var(--ink-muted);">Friday – Saturday</span>
                                <span class="badge rounded-pill px-2 py-1"
                                      style="background:rgba(239,68,68,.08);color:#ef4444;font-size:.7rem;font-weight:600;">Closed</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span style="font-size:.82rem;color:var(--ink-muted);">Enterprise clients</span>
                                <span class="badge rounded-pill px-2 py-1"
                                      style="background:rgba(58,107,255,.1);color:#3a6bff;font-size:.7rem;font-weight:600;">24/7 Priority</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ════════ TRUST STRIP ════════ -->
    <div class="bg-white border-top border-bottom py-4 reveal">
        <div class="container">
            <div class="row g-3 text-center align-items-center">
                <div class="col-6 col-md-3">
                    <div class="d-flex align-items-center justify-content-center gap-2"
                         style="font-size:.82rem;color:var(--ink-muted);">
                        <i class="bi bi-shield-fill-check" style="color:var(--emerald);"></i>
                        <span>ZATCA Phase 2 Certified</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="d-flex align-items-center justify-content-center gap-2"
                         style="font-size:.82rem;color:var(--ink-muted);">
                        <i class="bi bi-flag-fill" style="color:var(--emerald);"></i>
                        <span>Saudi Vision 2030</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="d-flex align-items-center justify-content-center gap-2"
                         style="font-size:.82rem;color:var(--ink-muted);">
                        <i class="bi bi-cloud-check-fill" style="color:var(--emerald);"></i>
                        <span>Cloud Secure · 99.9% Uptime</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="d-flex align-items-center justify-content-center gap-2"
                         style="font-size:.82rem;color:var(--ink-muted);">
                        <i class="bi bi-percent" style="color:var(--emerald);"></i>
                        <span>VAT &amp; Zakat Ready</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ════════ MAP / OFFICE ════════ -->
    <section class="py-5 bg-white reveal">
        <div class="container py-3">
            <div class="row g-4 align-items-center">
                <div class="col-lg-5">
                    <span class="d-block mb-2"
                          style="font-size:.72rem;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;color:var(--emerald);">Our Office</span>
                    <h2 class="font-display fw-bold text-dark mb-3"
                        style="font-size:clamp(1.5rem,3vw,2rem);letter-spacing:-.5px;">Visit Us in Riyadh</h2>
                    <p style="color:var(--ink-muted);line-height:1.7;font-size:.9rem;" class="mb-4">
                        We're based in the heart of Riyadh, right on King Fahd Road — Saudi Arabia's business corridor.
                        Walk in for a demo or book a slot with our team.
                    </p>
                    <div class="d-flex flex-column gap-3">
                        <div class="d-flex align-items-start gap-3">
                            <div class="info-icon" style="background:rgba(239,68,68,.08);color:#ef4444;">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div>
                                <div class="fw-semibold" style="font-size:.875rem;">LedgerOS HQ</div>
                                <div style="font-size:.82rem;color:var(--ink-muted);">King Fahd Road, Al Olaya
                                    District<br>Riyadh 12611, Saudi Arabia
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-start gap-3">
                            <div class="info-icon" style="background:rgba(0,201,123,.1);color:var(--emerald);">
                                <i class="bi bi-building"></i>
                            </div>
                            <div>
                                <div class="fw-semibold" style="font-size:.875rem;">CR &amp; VAT Registered</div>
                                <div style="font-size:.82rem;color:var(--ink-muted);">CR: 1010XXXXXX · VAT:
                                    3000XXXXXXXXXXX
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <!-- Map placeholder styled to match design -->
                    <div class="rounded-4 overflow-hidden border"
                         style="height:280px;background:var(--surface);border-color:rgba(60,80,140,.08) !important;position:relative;">
                        <!-- Subtle grid pattern -->
                        <div
                            style="position:absolute;inset:0;background-image:linear-gradient(rgba(60,80,140,.06) 1px,transparent 1px),linear-gradient(90deg,rgba(60,80,140,.06) 1px,transparent 1px);background-size:32px 32px;"></div>
                        <div
                            style="position:absolute;inset:0;display:flex;flex-direction:column;align-items:center;justify-content:center;gap:.75rem;">
                            <div
                                style="width:48px;height:48px;border-radius:50%;background:var(--emerald);display:flex;align-items:center;justify-content:center;box-shadow:0 0 0 12px rgba(0,201,123,.15),0 0 0 24px rgba(0,201,123,.06);">
                                <i class="bi bi-geo-alt-fill text-white" style="font-size:1.25rem;"></i>
                            </div>
                            <div class="bg-white rounded-3 px-3 py-2 text-center shadow-sm">
                                <div class="fw-semibold" style="font-size:.82rem;">LedgerOS — King Fahd Road</div>
                                <div style="font-size:.72rem;color:var(--ink-muted);">Riyadh, Saudi Arabia</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ════════ CTA BANNER ════════ -->
    <section class="py-5 bg-white border-top reveal">
        <div class="container py-2">
            <div class="rounded-4 p-5 text-center text-white" style="background:var(--ink);">
                <div class="d-inline-flex align-items-center gap-2 mb-3 px-3 py-2 rounded-pill"
                     style="background:rgba(0,201,123,.15);border:1px solid rgba(0,201,123,.3);">
                    <i class="bi bi-shield-fill-check" style="color:var(--emerald);"></i>
                    <span
                        style="font-size:.72rem;font-weight:700;letter-spacing:.8px;text-transform:uppercase;color:var(--emerald);">Supporting Saudi Vision 2030</span>
                </div>
                <h3 class="font-display fw-bold mb-3" style="font-size:clamp(1.5rem,3vw,2rem);letter-spacing:-.5px;">
                    Ready to modernize your finances?
                </h3>
                <p class="mb-4"
                   style="color:rgba(255,255,255,.5);max-width:400px;margin:0 auto 1.5rem;line-height:1.7;">
                    Join 500+ Saudi businesses running ZATCA-compliant accounting on LedgerOS.
                </p>
                <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <a href="/register" class="btn btn-lg px-5 fw-bold text-dark"
                       style="background:var(--emerald);border:none;border-radius:12px;">Start Free Trial</a>
                    <a href="/pricing" class="btn btn-lg px-4 fw-semibold"
                       style="background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.15);color:#fff;border-radius:12px;">View
                        Pricing</a>
                </div>
            </div>
        </div>
    </section>
@endsection
