<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Features | MiFatoora — Comprehensive Saudi Accounting</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@700;800&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600&display=swap" rel="stylesheet">

    <style>
        /* ── Minimal overrides only ── */
        :root {
            --bs-body-font-family: 'DM Sans', sans-serif;
            --bs-success: #00c97b;
            --bs-success-rgb: 0,201,123;
            --ink: #0a0f1e;
            --ink-muted: #4a5578;
            --emerald: #00c97b;
            --emerald-dim: #00a863;
            --surface: #f5f7fc;
        }
        body { font-family: 'DM Sans', sans-serif; color: var(--ink); background: var(--surface); }
        .font-display { font-family: 'DM Sans', sans-serif; }

        /* Sidebar nav */
        .feature-nav { position: sticky; top: 90px; }
        .feature-nav .nav-link {
            font-size: .875rem; font-weight: 500; color: #64748b;
            border-left: 2px solid #e2e8f0; padding: 10px 18px;
            border-radius: 0; transition: all .2s;
        }
        .feature-nav .nav-link:hover { color: var(--emerald); background: rgba(0,201,123,.06); }
        .feature-nav .nav-link.active {
            color: var(--emerald); border-left-color: var(--emerald);
            background: rgba(0,201,123,.07); font-weight: 600;
        }

        /* Scroll reveal */
        .reveal { opacity: 0; transform: translateY(18px); transition: opacity .5s ease, transform .5s ease; }
        .reveal.visible { opacity: 1; transform: translateY(0); }

        /* Feature section divider */
        .feature-section { border-bottom: 1px solid rgba(60,80,140,.08); }
        .feature-section:last-of-type { border-bottom: none; }

        /* Accounting code block */
        .entry-box {
            font-family: 'Courier New', monospace;
            background: var(--ink); color: #94a3b8;
            padding: 1.25rem; border-radius: 12px; font-size: .83rem; line-height: 1.8;
        }

        /* Hover lift on cards */
        .hover-lift { transition: transform .25s, box-shadow .25s; }
        .hover-lift:hover { transform: translateY(-4px); box-shadow: 0 16px 40px rgba(10,15,30,.1) !important; }

        /* Navbar brand */
        .navbar-brand { font-family: 'DM Sans', sans-serif; font-weight: 800; font-size: 1.3rem; letter-spacing: -.4px; }
        .navbar-brand span { color: var(--emerald); }
        .nav-link { font-size:.875rem; font-weight:500; border-radius:8px; transition:color .2s,background .2s; }
        .nav-link:hover { color:var(--ink)!important; background:var(--surface); }
    </style>
</head>
<body data-bs-spy="scroll" data-bs-target="#featureNav" data-bs-offset="100">

<!-- ════════ NAVBAR ════════ -->
<nav class="navbar navbar-expand-lg bg-white border-bottom fixed-top py-0" style="height:68px;">
    <div class="container">
        <a class="navbar-brand text-dark" href="/" style="color: #0d6efd">
            {{--SAUD<span>Invoice<small>.com</small></span>--}}
            <img src="{{ asset('img/logo-light.svg') }}" alt="Logo" style="width: 250px; height: auto;">
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav mx-auto gap-1">
                <li class="nav-item"><a class="nav-link px-3 py-2 @if($page == 'home') fw-semibold @endif" style="font-size:.875rem;@if($page == 'home') color:var(--emerald); @else font-weight:500;color:#64748b;  @endif" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link px-3 py-2 @if($page == 'features') fw-semibold @endif" style="font-size:.875rem;@if($page == 'features') color:var(--emerald); @else font-weight:500;color:#64748b;  @endif" href="/features">Features</a></li>
                <li class="nav-item"><a class="nav-link px-3 py-2 @if($page == 'pricing') fw-semibold @endif" style="font-size:.875rem;@if($page == 'pricing') color:var(--emerald); @else font-weight:500;color:#64748b;  @endif" href="/pricing">Pricing</a></li>
                <li class="nav-item"><a class="nav-link px-3 py-2 @if($page == 'contact') fw-semibold @endif" style="font-size:.875rem;@if($page == 'contact') color:var(--emerald); @else font-weight:500;color:#64748b;  @endif" href="/contact">Contact</a></li>
                <li class="nav-item"><a class="nav-link px-3 py-2" style="font-size:.875rem;font-weight:500;color:#64748b;" href="/documentation">Documentation</a></li>
            </ul>
            <div class="d-flex gap-2">
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-light border">Go to My Account</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger">Logout</button>
                    </form>
                @else
                    <a href="{{ url('login') }}" class="btn btn-light border px-3 py-2" style="font-size:.875rem;">Login</a>
                    <a href="/register" class="btn px-3 py-2 fw-semibold text-white" style="background:var(--emerald);border:none;font-size:.875rem;">Get Started Free</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
@yield('web-content')
<footer class="py-5 mt-5" style="background:var(--ink);color:#fff;">
    <div class="container pt-3">
        <div class="row g-4 pb-4" style="border-bottom:1px solid rgba(255,255,255,.07);">
            <div class="col-lg-4">
                <a class="text-white text-decoration-none font-display fw-bold d-block mb-3" style="font-size:1.4rem;" href="/">SAUD<span style="color:var(--emerald);">Invoice</span></a>
                <p style="font-size:.85rem;color:rgba(255,255,255,.35);max-width:260px;line-height:1.65;">The next generation of financial management for Saudi enterprises. ZATCA Phase 2 certified.</p>
            </div>
            <div class="col-6 col-lg-2">
                <div class="mb-3" style="font-size:.7rem;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;color:rgba(255,255,255,.3);">Solutions</div>
                <div class="d-flex flex-column gap-2">
                    <a href="#" style="font-size:.85rem;color:rgba(255,255,255,.45);text-decoration:none;">Billing &amp; E-Invoicing</a>
                    <a href="#" style="font-size:.85rem;color:rgba(255,255,255,.45);text-decoration:none;">General Ledger</a>
                    <a href="#" style="font-size:.85rem;color:rgba(255,255,255,.45);text-decoration:none;">ZATCA Integration</a>
                </div>
            </div>
            <div class="col-6 col-lg-2">
                <div class="mb-3" style="font-size:.7rem;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;color:rgba(255,255,255,.3);">Support</div>
                <div class="d-flex flex-column gap-2">
                    <a href="#" style="font-size:.85rem;color:rgba(255,255,255,.45);text-decoration:none;">Help Center</a>
                    <a href="#" style="font-size:.85rem;color:rgba(255,255,255,.45);text-decoration:none;">API Docs</a>
                    <a href="#" style="font-size:.85rem;color:rgba(255,255,255,.45);text-decoration:none;">Pricing</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="mb-3" style="font-size:.7rem;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;color:rgba(255,255,255,.3);">Compliance</div>
                <div class="p-3 rounded-3" style="background:rgba(255,255,255,.04);border:1px solid rgba(255,255,255,.08);">
                    <div class="d-flex align-items-center gap-2 mb-2" style="font-size:.78rem;color:rgba(255,255,255,.5);"><i class="bi bi-shield-fill-check" style="color:var(--emerald);"></i> <strong style="color:rgba(255,255,255,.85);">ZATCA Certified Provider</strong></div>
                    <div class="d-flex align-items-center gap-2" style="font-size:.78rem;color:rgba(255,255,255,.5);"><i class="bi bi-building" style="color:var(--emerald);"></i> CR: 1010XXXXXX · VAT: 3000XXXXXXXXXXX</div>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center pt-4 gap-2">
            <span style="font-size:.8rem;color:rgba(255,255,255,.25);">&copy; 2026 BillKSA SaaS Inc. All rights reserved.</span>
            <div class="d-flex gap-3">
                <a href="#" style="font-size:.8rem;color:rgba(255,255,255,.3);text-decoration:none;">Privacy</a>
                <a href="#" style="font-size:.8rem;color:rgba(255,255,255,.3);text-decoration:none;">Terms</a>
                <a href="#" style="font-size:.8rem;color:rgba(255,255,255,.3);text-decoration:none;">Cookies</a>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Scroll reveal
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((e, i) => {
            if (e.isIntersecting) {
                setTimeout(() => e.target.classList.add('visible'), i * 80);
                observer.unobserve(e.target);
            }
        });
    }, { threshold: 0.08 });
    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

    // Active sidebar nav on scroll
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('#featureNav .nav-link');
    window.addEventListener('scroll', () => {
        let current = '';
        sections.forEach(s => { if (window.scrollY >= s.offsetTop - 120) current = s.id; });
        navLinks.forEach(l => {
            l.classList.remove('active');
            if (l.getAttribute('href') === '#' + current) l.classList.add('active');
        });
    });
</script>
