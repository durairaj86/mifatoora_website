{{-- accounting.blade.php --}}
@extends('documentation.layout')
@section('doc-title', 'Financials & Accounting')
@section('doc-subtitle', 'Understanding the double-entry engine, Chart of Accounts, and financial analysis.')
@section('doc-content')

    <div id="accounting" class="doc-card reveal">
        <div class="doc-card-header">
            <div class="icon-wrap" style="background:rgba(58,107,255,.1);color:#3a6bff;"><i class="bi bi-bank"></i></div>
            <div><div class="step-num">Section 1</div><h5>Accounting Engine &amp; Chart of Accounts</h5></div>
        </div>
        <div class="doc-card-body">
            <p class="doc-p">The core engine handles double-entry bookkeeping automatically whenever a document is approved — no manual journal posting required.</p>
            <div class="doc-subhead">Chart of Accounts (COA) Structure</div>
            <div class="row g-3 mb-3">
                <div class="col-md-6 col-lg-3">
                    <div class="info-card text-center">
                        <i class="bi bi-building" style="color:var(--emerald);font-size:1.2rem;"></i>
                        <div class="ic-title mt-1">Assets</div>
                        <p class="ic-text">Bank, Cash, A/R, Inventory</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="info-card text-center">
                        <i class="bi bi-credit-card" style="color:#ef4444;font-size:1.2rem;"></i>
                        <div class="ic-title mt-1">Liabilities</div>
                        <p class="ic-text">A/P, Tax Payable, Loans</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="info-card text-center">
                        <i class="bi bi-graph-up" style="color:#3a6bff;font-size:1.2rem;"></i>
                        <div class="ic-title mt-1">Income</div>
                        <p class="ic-text">Sales Revenue, Other Income</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="info-card text-center">
                        <i class="bi bi-wallet2" style="color:#f4b942;font-size:1.2rem;"></i>
                        <div class="ic-title mt-1">Expenses</div>
                        <p class="ic-text">COGS, Rent, Salaries, Utilities</p>
                    </div>
                </div>
            </div>
            <div class="doc-subhead">Automatic Journal Mapping</div>
            <div class="code-block">
                <span class="code-label">Sales Invoice Approved:</span><br>
                &nbsp;&nbsp;<span class="code-dr">DEBIT &nbsp; Accounts Receivable</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-cr">CREDIT &nbsp;Sales Revenue</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-cr">CREDIT &nbsp;VAT Payable (Output Tax)</span><br><br>
                <span class="code-label">Collection (Payment Received):</span><br>
                &nbsp;&nbsp;<span class="code-dr">DEBIT &nbsp; Bank / Cash Account</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-cr">CREDIT &nbsp;Accounts Receivable</span>
            </div>
        </div>
    </div>

    <div id="reports" class="doc-card reveal">
        <div class="doc-card-header">
            <div class="icon-wrap" style="background:rgba(0,201,123,.1);color:var(--emerald);"><i class="bi bi-graph-up-arrow"></i></div>
            <div><div class="step-num">Section 2</div><h5>Reports &amp; Financial Statements</h5></div>
        </div>
        <div class="doc-card-body">
            <div class="row g-3 mb-3">
                <div class="col-md-6">
                    <div class="doc-subhead">Financial Statements</div>
                    <ul class="doc-ul">
                        <li><strong>Balance Sheet:</strong> Assets = Liabilities + Equity at a point in time.</li>
                        <li><strong>Profit &amp; Loss:</strong> Revenue − Expenses = Net Profit over a period.</li>
                        <li><strong>Trial Balance:</strong> Confirms all Debit/Credit totals match.</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="doc-subhead">Operational Reports</div>
                    <ul class="doc-ul">
                        <li><strong>Aging Report:</strong> Identifies customers late on payments.</li>
                        <li><strong>Sales by Item:</strong> Your most profitable products.</li>
                        <li><strong>Tax Summary:</strong> Essential for VAT return filing.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="treasury" class="doc-card reveal">
        <div class="doc-card-header">
            <div class="icon-wrap" style="background:rgba(244,185,66,.12);color:#f4b942;"><i class="bi bi-cash-coin"></i></div>
            <div><div class="step-num">Section 3</div><h5>Treasury &amp; Cash Flow</h5></div>
        </div>
        <div class="doc-card-body">
            <p class="doc-p">Manage physical cash movements through <strong>Payments In</strong> (Collections from customers) and <strong>Payments Out</strong> (Vouchers to suppliers).</p>
            <div class="flow-box">
                {{-- Invoice Payment Flow — Pure Bootstrap 5, zero internal CSS --}}

                <div class="d-flex align-items-start justify-content-center overflow-auto pb-2 gap-2">

                    {{-- Step 1 — Invoice Issued --}}
                    <div class="d-flex flex-column align-items-center" style="min-width:90px;">
                        <div class="rounded-circle d-flex align-items-center justify-content-center mb-2 bg-light border border-secondary border-opacity-25"
                             style="width:44px;height:44px;">
                            <i class="bi bi-receipt text-secondary"></i>
                        </div>
                        <span class="fw-semibold text-center text-secondary small">Invoice Issued</span>
                    </div>

                    {{-- Arrow --}}
                    <div class="d-flex align-items-center pb-3 text-secondary opacity-50">
                        <i class="bi bi-chevron-right"></i>
                    </div>

                    {{-- Step 2 — Pending Payment --}}
                    <div class="d-flex flex-column align-items-center" style="min-width:90px;">
                        <div class="rounded-circle d-flex align-items-center justify-content-center mb-2 bg-primary bg-opacity-10 border border-primary border-opacity-25"
                             style="width:44px;height:44px;">
                            <i class="bi bi-clock text-primary"></i>
                        </div>
                        <span class="fw-semibold text-center text-primary small">Pending Payment</span>
                    </div>

                    {{-- Arrow --}}
                    <div class="d-flex align-items-center pb-3 text-secondary opacity-50">
                        <i class="bi bi-chevron-right"></i>
                    </div>

                    {{-- Step 3 — Receipt Entry --}}
                    <div class="d-flex flex-column align-items-center" style="min-width:90px;">
                        <div class="rounded-circle d-flex align-items-center justify-content-center mb-2 bg-light border border-secondary border-opacity-25"
                             style="width:44px;height:44px;">
                            <i class="bi bi-cash-stack text-secondary"></i>
                        </div>
                        <span class="fw-semibold text-center text-secondary small">Receipt Entry</span>
                    </div>

                    {{-- Arrow --}}
                    <div class="d-flex align-items-center pb-3 text-secondary opacity-50">
                        <i class="bi bi-chevron-right"></i>
                    </div>

                    {{-- Step 4 — Paid (Active) --}}
                    <div class="d-flex flex-column align-items-center" style="min-width:90px;">
                        <div class="rounded-circle d-flex align-items-center justify-content-center mb-2 bg-success bg-opacity-10 border border-success border-opacity-50"
                             style="width:44px;height:44px;">
                            <i class="bi bi-check-circle text-success"></i>
                        </div>
                        <span class="fw-semibold text-center text-success small">Paid</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
