<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Documentation — LedgerOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@700;800&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600&display=swap" rel="stylesheet">
    <style>
        :root {
            --ink:#0a0f1e; --ink-muted:#4a5578; --ink-ghost:#8896b0;
            --surface:#f5f7fc; --emerald:#00c97b; --grid-line:rgba(60,80,140,.07);
            --emerald: #00c97b;
            --emerald-dim: #00a863;
        }
        body { font-family:'DM Sans',sans-serif; color:var(--ink); background:var(--surface); }
        #mainNav { height:68px; background:rgba(255,255,255,.92); backdrop-filter:blur(18px); border-bottom:1px solid var(--grid-line); }
        /* Navbar brand */
        .navbar-brand { font-family: 'DM Sans', sans-serif; font-weight: 800; font-size: 1.3rem; letter-spacing: -.4px; }
        .navbar-brand span { color: var(--emerald); }
        .nav-link { font-size:.875rem; font-weight:500; border-radius:8px; transition:color .2s,background .2s; }
        .nav-link:hover { color:var(--ink)!important; background:var(--surface); }
        .nav-link.active-page { color:var(--emerald)!important; font-weight:600; }

        .doc-sidebar { position:sticky; top:84px; max-height:calc(100vh - 100px); overflow-y:auto; background:#fff; border-radius:16px; border:1.5px solid rgba(60,80,140,.08); box-shadow:0 4px 20px rgba(10,15,30,.05); }
        .doc-sidebar::-webkit-scrollbar { width:4px; }
        .doc-sidebar::-webkit-scrollbar-thumb { background:rgba(60,80,140,.15); border-radius:4px; }
        .sidebar-header { padding:.9rem 1.1rem; border-bottom:1px solid var(--grid-line); }
        .sidebar-group-label { font-size:.62rem; font-weight:700; letter-spacing:1.3px; text-transform:uppercase; color:var(--ink-ghost); padding:.7rem 1.1rem .3rem; }
        .sidebar-link { display:flex; align-items:center; gap:.6rem; padding:.5rem 1.1rem; font-size:.84rem; font-weight:500; color:var(--ink-muted); text-decoration:none; transition:color .15s,background .15s,border-color .15s; border-left:2px solid transparent; }
        .sidebar-link:hover { color:var(--ink); background:rgba(60,80,140,.04); }
        .sidebar-link.active { color:var(--emerald); font-weight:600; border-left-color:var(--emerald); background:rgba(0,201,123,.06); }
        .sidebar-link i { font-size:.85rem; width:16px; text-align:center; flex-shrink:0; }

        .doc-page-header { background:#fff; border-radius:16px; border:1.5px solid rgba(60,80,140,.08); padding:1.75rem 2rem; margin-bottom:1.5rem; box-shadow:0 4px 20px rgba(10,15,30,.04); }
        .doc-page-title { font-family:'DM Sans', sans-serif; font-size:1.5rem; font-weight:800; letter-spacing:-.5px; color:var(--ink); }
        .doc-page-sub { font-size:.9rem; color:var(--ink-muted); margin-bottom:0; }
        .doc-breadcrumb { font-size:.75rem; color:var(--ink-ghost); margin-bottom:.5rem; }
        .doc-breadcrumb span { color:var(--emerald); font-weight:600; }

        .doc-card { background:#fff; border-radius:16px; border:1.5px solid rgba(60,80,140,.07); box-shadow:0 4px 16px rgba(10,15,30,.04); margin-bottom:1.5rem; overflow:hidden; }
        .doc-card-header { display:flex; align-items:center; gap:.75rem; padding:1.1rem 1.5rem; border-bottom:1px solid rgba(60,80,140,.07); }
        .doc-card-header .icon-wrap { width:36px; height:36px; border-radius:10px; display:flex; align-items:center; justify-content:center; font-size:.95rem; flex-shrink:0; }
        .doc-card-header h5 { font-family:'DM Sans', sans-serif; font-size:.95rem; font-weight:700; color:var(--ink); margin:0; }
        .doc-card-header .step-num { font-size:.65rem; font-weight:700; color:var(--ink-ghost); }
        .doc-card-body { padding:1.5rem; }
        .doc-subhead { font-size:.72rem; font-weight:700; letter-spacing:1px; text-transform:uppercase; color:var(--ink-ghost); margin-bottom:.6rem; margin-top:1.25rem; }
        .doc-p { font-size:.875rem; color:var(--ink-muted); line-height:1.7; }
        .doc-tip { background:rgba(0,201,123,.07); border-left:3px solid var(--emerald); border-radius:0 10px 10px 0; padding:.85rem 1rem; font-size:.84rem; color:var(--ink-muted); }
        .info-card { background:var(--surface); border:1.5px solid rgba(60,80,140,.08); border-radius:12px; padding:1rem 1.1rem; }
        .info-card .ic-title { font-size:.82rem; font-weight:700; color:var(--ink); margin-bottom:.3rem; }
        .info-card .ic-text { font-size:.79rem; color:var(--ink-muted); margin-bottom:0; line-height:1.55; }
        .badge-draft { background:rgba(60,80,140,.1); color:var(--ink-muted); }
        .badge-approved { background:rgba(0,201,123,.12); color:var(--emerald); }
        .doc-search { border:1.5px solid rgba(60,80,140,.12); border-radius:10px; font-size:.84rem; padding:.55rem .9rem; font-family:'DM Sans',sans-serif; color:var(--ink); width:100%; outline:none; background:var(--surface); }
        .doc-search:focus { border-color:var(--emerald); background:#fff; }
        .doc-search::placeholder { color:rgba(74,85,120,.4); }
        .reveal { opacity:0; transform:translateY(14px); transition:opacity .45s ease,transform .45s ease; }
        .reveal.visible { opacity:1; transform:translateY(0); }
    </style>
</head>
<body >

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-white border-bottom fixed-top py-0" style="height:68px;">
    <div class="container">
        <a class="navbar-brand text-dark" href="/">Ledger<span>OS</span></a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav mx-auto gap-1">
                <li class="nav-item"><a class="nav-link px-3 py-2" style="font-size:.875rem;font-weight:500;color:#64748b;" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link px-3 py-2" style="font-size:.875rem;font-weight:500;color:#64748b;" href="/features">Features</a></li>
                <li class="nav-item"><a class="nav-link px-3 py-2" style="font-size:.875rem;font-weight:500;color:#64748b;" href="/pricing">Pricing</a></li>
                <li class="nav-item"><a class="nav-link px-3 py-2" style="font-size:.875rem;font-weight:500;color:#64748b;" href="/contact">Contact</a></li>
                <li class="nav-item"><a class="nav-link px-3 py-2 fw-semibold" style="font-size:.875rem;color:var(--emerald);" href="/documentation">Documentation</a></li>
            </ul>
            <div class="d-flex gap-2">
                @auth
                    <a href="{{ url('https://app.fastfatoora.com/dashboard') }}" class="btn btn-light border">Go to My Account</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger">Logout</button>
                    </form>
                @else
                    <a href="{{ url('https://app.fastfatoora.com/login') }}" class="btn btn-light border px-3 py-2" style="font-size:.875rem;">Login</a>
                    <a href="{{ url('https://app.fastfatoora.com/register') }}" class="btn px-3 py-2 fw-semibold text-white" style="background:var(--emerald);border:none;font-size:.875rem;">Get Started Free</a>
                @endauth
            </div>
        </div>
    </div>
</nav>

<!-- LAYOUT -->
<div class="container-fluid px-3 px-lg-4" style="margin-top:84px;max-width:1400px;">
    <div class="row g-4">

        <!-- SIDEBAR -->
        <div class="col-lg-3 col-xl-2 d-none d-lg-block">
            <div class="doc-sidebar">
                <div class="sidebar-header">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <i class="bi bi-book-fill" style="color:var(--emerald);font-size:.9rem;"></i>
                        <span class="fw-bold" style="font-family:'DM Sans', sans-serif;font-size:.9rem;">Documentation</span>
                    </div>
                    <input class="doc-search" type="text" placeholder="Search docs…" oninput="filterDocs(this.value)">
                </div>

                <div id="sidebarLinks">
                    <!-- active class set per page via ($currentModule ?? '') check in blade -->
                    <a href="/documentation/overview"         class="sidebar-link active"><i class="bi bi-speedometer2"></i> System Overview</a>

                    <div class="sidebar-group-label">1. Directory &amp; CRM</div>
                    <a href="/documentation/customers"        class="sidebar-link"><i class="bi bi-people"></i> Customers</a>
                    <a href="/documentation/suppliers"        class="sidebar-link"><i class="bi bi-truck"></i> Suppliers</a>
                    <a href="/documentation/projects"         class="sidebar-link"><i class="bi bi-kanban"></i> Projects</a>

                    <div class="sidebar-group-label">2. Inventory &amp; Warehouse</div>
                    <a href="/documentation/items"            class="sidebar-link"><i class="bi bi-box-seam"></i> Items (Master)</a>
                    <a href="/documentation/inventory"        class="sidebar-link"><i class="bi bi-house-door"></i> Warehouse &amp; Stock</a>

                    <div class="sidebar-group-label">3. Sales Module</div>
                    <a href="/documentation/quotations"       class="sidebar-link"><i class="bi bi-file-text"></i> Quotations</a>
                    <a href="/documentation/sales-orders"     class="sidebar-link"><i class="bi bi-card-checklist"></i> Sales Orders</a>
                    <a href="/documentation/invoices"         class="sidebar-link"><i class="bi bi-file-earmark-spreadsheet"></i> Sales Invoices</a>

                    <div class="sidebar-group-label">4. Purchasing Module</div>
                    <a href="/documentation/purchases"        class="sidebar-link"><i class="bi bi-cart-check"></i> Purchase Orders</a>
                    <a href="/documentation/supplier-invoices" class="sidebar-link"><i class="bi bi-receipt"></i> Supplier Invoices</a>
                    <a href="/documentation/expenses"         class="sidebar-link"><i class="bi bi-wallet2"></i> Expenses</a>

                    <div class="sidebar-group-label">5. Treasury &amp; Finance</div>
                    <a href="/documentation/treasury"         class="sidebar-link"><i class="bi bi-cash-stack"></i> Payments &amp; Collections</a>
                    <a href="/documentation/accounting"       class="sidebar-link"><i class="bi bi-bank"></i> Accounting &amp; COA</a>
                    <a href="/documentation/reports"          class="sidebar-link"><i class="bi bi-graph-up-arrow"></i> Reports &amp; Statements</a>

                    <div class="sidebar-group-label">Settings &amp; Admin</div>
                    <a href="/documentation/master-data"      class="sidebar-link"><i class="bi bi-hdd-network"></i> Master Data</a>
                    <a href="/documentation/hr"               class="sidebar-link"><i class="bi bi-person-badge"></i> HR &amp; Commissions</a>
                    <div style="height:.75rem;"></div>
                </div>
            </div>
        </div>

        <!-- MAIN CONTENT -->
        <div class="col-lg-9 col-xl-10">

            @yield('doc-content')

            <!-- Bottom nav -->
            <div class="d-flex justify-content-between align-items-center pt-4 pb-5 mt-2" style="border-top:1px solid rgba(60,80,140,.08);">
                <span style="font-size:.84rem;color:var(--ink-ghost);">← Previous</span>
                <a href="/documentation/customers" class="d-flex align-items-center gap-2 text-decoration-none" style="font-size:.84rem;color:var(--emerald);font-weight:600;">
                    Next: Customers <i class="bi bi-arrow-right"></i>
                </a>
            </div>

        </div>
    </div>
</div>

<!-- MOBILE OFFCANVAS -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="docMobileNav" style="width:280px;">
    <div class="offcanvas-header border-bottom">
        <div class="d-flex align-items-center gap-2">
            <i class="bi bi-book-fill" style="color:var(--emerald);"></i>
            <span class="fw-bold" style="font-family:'DM Sans', sans-serif;">Documentation</span>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body p-0">
        <a href="/documentation/overview"          class="sidebar-link active"><i class="bi bi-speedometer2"></i> System Overview</a>
        <div class="sidebar-group-label">1. Directory &amp; CRM</div>
        <a href="/documentation/customers"         class="sidebar-link"><i class="bi bi-people"></i> Customers</a>
        <a href="/documentation/suppliers"         class="sidebar-link"><i class="bi bi-truck"></i> Suppliers</a>
        <a href="/documentation/projects"          class="sidebar-link"><i class="bi bi-kanban"></i> Projects</a>
        <div class="sidebar-group-label">2. Inventory &amp; Warehouse</div>
        <a href="/documentation/items"             class="sidebar-link"><i class="bi bi-box-seam"></i> Items (Master)</a>
        <a href="/documentation/inventory"         class="sidebar-link"><i class="bi bi-house-door"></i> Warehouse &amp; Stock</a>
        <div class="sidebar-group-label">3. Sales Module</div>
        <a href="/documentation/quotations"        class="sidebar-link"><i class="bi bi-file-text"></i> Quotations</a>
        <a href="/documentation/sales-orders"      class="sidebar-link"><i class="bi bi-card-checklist"></i> Sales Orders</a>
        <a href="/documentation/invoices"          class="sidebar-link"><i class="bi bi-file-earmark-spreadsheet"></i> Sales Invoices</a>
        <div class="sidebar-group-label">4. Purchasing Module</div>
        <a href="/documentation/purchases"         class="sidebar-link"><i class="bi bi-cart-check"></i> Purchase Orders</a>
        <a href="/documentation/supplier-invoices" class="sidebar-link"><i class="bi bi-receipt"></i> Supplier Invoices</a>
        <a href="/documentation/expenses"          class="sidebar-link"><i class="bi bi-wallet2"></i> Expenses</a>
        <div class="sidebar-group-label">5. Treasury &amp; Finance</div>
        <a href="/documentation/treasury"          class="sidebar-link"><i class="bi bi-cash-stack"></i> Payments &amp; Collections</a>
        <a href="/documentation/accounting"        class="sidebar-link"><i class="bi bi-bank"></i> Accounting &amp; COA</a>
        <a href="/documentation/reports"           class="sidebar-link"><i class="bi bi-graph-up-arrow"></i> Reports &amp; Statements</a>
        <div class="sidebar-group-label">Settings &amp; Admin</div>
        <a href="/documentation/master-data"       class="sidebar-link"><i class="bi bi-hdd-network"></i> Master Data</a>
        <a href="/documentation/hr"                class="sidebar-link"><i class="bi bi-person-badge"></i> HR &amp; Commissions</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const ro = new IntersectionObserver((e) => {
        e.forEach((el, i) => {
            if (el.isIntersecting) { setTimeout(() => el.target.classList.add('visible'), i * 70); ro.unobserve(el.target); }
        });
    }, { threshold: .07 });
    document.querySelectorAll('.reveal').forEach(el => ro.observe(el));

    function filterDocs(q) {
        q = q.toLowerCase();
        document.querySelectorAll('#sidebarLinks .sidebar-link').forEach(a => {
            a.style.display = a.textContent.toLowerCase().includes(q) ? '' : 'none';
        });
        document.querySelectorAll('#sidebarLinks .sidebar-group-label').forEach(d => {
            d.style.display = q ? 'none' : '';
        });
    }
</script>
</body>
</html>
