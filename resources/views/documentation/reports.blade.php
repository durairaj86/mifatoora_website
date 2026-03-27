{{-- reports.blade.php --}}
@extends('documentation.layout')
@section('doc-title', 'Reports & Analytics')
@section('doc-subtitle', 'Documentation for Financial Statements, Aging, and Operational Reports.')
@section('doc-content')

    <div id="statements" class="doc-card reveal">
        <div class="doc-card-header">
            <div class="icon-wrap" style="background:rgba(58,107,255,.1);color:#3a6bff;"><i class="bi bi-file-earmark-person"></i></div>
            <div><div class="step-num">Section 1</div><h5>Account Statements</h5></div>
        </div>
        <div class="doc-card-body">
            <p class="doc-p">Detailed ledger of all transactions for a specific party — essential for debt reconciliation and supplier settlement.</p>
            <ul class="doc-ul">
                <li><strong>Customer Statement:</strong> Lists all invoices, collections, and credit notes for a client.</li>
                <li><strong>Supplier Statement:</strong> Lists all bills and payments made to a vendor.</li>
                <li><strong>Aging Reports:</strong> Categorizes outstanding debt by time — 0–30, 31–60, 61–90, 91–120, &gt;120 days — to help prioritize collection efforts.</li>
            </ul>
        </div>
    </div>

    <div id="financial-reports" class="doc-card reveal">
        <div class="doc-card-header">
            <div class="icon-wrap" style="background:rgba(0,201,123,.1);color:var(--emerald);"><i class="bi bi-bank"></i></div>
            <div><div class="step-num">Section 2</div><h5>Financial Reports</h5></div>
        </div>
        <div class="doc-card-body">
            <div class="row g-3">
                <div class="col-md-6">
                    <div class="info-card h-100">
                        <div class="d-flex align-items-center gap-2 mb-1"><i class="bi bi-columns-gap" style="color:var(--emerald);"></i><div class="ic-title">Balance Sheet</div></div>
                        <p class="ic-text">A snapshot of your company's Assets, Liabilities, and Equity at a specific point in time.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-card h-100">
                        <div class="d-flex align-items-center gap-2 mb-1"><i class="bi bi-pie-chart" style="color:#3a6bff;"></i><div class="ic-title">Profit &amp; Loss (P&amp;L)</div></div>
                        <p class="ic-text">Summarizes Revenues and Expenses over a period to show Net Profit or Loss.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-card h-100">
                        <div class="d-flex align-items-center gap-2 mb-1"><i class="bi bi-table" style="color:#f4b942;"></i><div class="ic-title">Trial Balance</div></div>
                        <p class="ic-text">Ensures that the total of all Debit balances equals the total of all Credit balances.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-card h-100">
                        <div class="d-flex align-items-center gap-2 mb-1"><i class="bi bi-journal-text" style="color:#8b5cf6;"></i><div class="ic-title">General Ledger</div></div>
                        <p class="ic-text">The detailed audit trail of every transaction recorded in a specific account.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="operational-reports" class="doc-card reveal">
        <div class="doc-card-header">
            <div class="icon-wrap" style="background:rgba(244,185,66,.12);color:#f4b942;"><i class="bi bi-graph-up"></i></div>
            <div><div class="step-num">Section 3</div><h5>Operational Reports</h5></div>
        </div>
        <div class="doc-card-body">
            <ul class="doc-ul">
                <li><strong>Sales by Item:</strong> Identify best-selling products and track revenue trends by period.</li>
                <li><strong>Stock Summary:</strong> Monitor current inventory valuation and reorder points across all warehouses.</li>
                <li><strong>Tax Summary:</strong> Consolidated view of Output Tax (Sales) and Input Tax (Purchases) for VAT return filing.</li>
                <li><strong>Income by Project:</strong> Revenue minus Expenses for each active project — see Projects module.</li>
            </ul>
        </div>
    </div>
@endsection
