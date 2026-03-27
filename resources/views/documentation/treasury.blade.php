@extends('documentation.layout')
@section('doc-title', 'Treasury & Cash Flow')
@section('doc-subtitle', 'Documentation for Collections (Customer Receipts) and Payments (Supplier Settlements).')
@section('doc-content')

    <div id="collections" class="doc-card reveal">
        <div class="doc-card-header">
            <div class="icon-wrap" style="background:rgba(0,201,123,.1);color:var(--emerald);"><i class="bi bi-cash-stack"></i></div>
            <div><div class="step-num">Section 1</div><h5>Collections (Payments In)</h5></div>
        </div>
        <div class="doc-card-body">
            <p class="doc-p">Collections record the physical receipt of money from customers, reducing the Customer's Balance Due.</p>
            <div class="doc-subhead">Key Logic</div>
            <ul class="doc-ul mb-3">
                <li><strong>Invoice Linking:</strong> Each collection entry should be linked to one or more Sales Invoices.</li>
                <li><strong>Payment Methods:</strong> Specify if the payment was Cash, Bank Transfer, or Cheque.</li>
                <li><strong>Status:</strong> Collections directly update the "Paid" status of linked invoices.</li>
            </ul>
            <div class="doc-subhead">Journal Impact</div>
            <div class="code-block">
                <span class="code-dr">DEBIT &nbsp; Bank / Cash Account &nbsp;&nbsp;&nbsp;&nbsp;(+ Money in)</span><br>
                <span class="code-cr">&nbsp;&nbsp;CREDIT &nbsp;Accounts Receivable &nbsp;&nbsp;&nbsp;(- Customer Debt)</span>
            </div>
        </div>
    </div>

    <div id="payments" class="doc-card reveal">
        <div class="doc-card-header">
            <div class="icon-wrap" style="background:rgba(239,68,68,.1);color:#ef4444;"><i class="bi bi-credit-card"></i></div>
            <div><div class="step-num">Section 2</div><h5>Payments (Payments Out)</h5></div>
        </div>
        <div class="doc-card-body">
            <p class="doc-p">Payments record the settlement of debt to your Suppliers, reducing Accounts Payable.</p>
            <ul class="doc-ul mb-3">
                <li><strong>Bill Settlement:</strong> Apply payments against specific Supplier Invoices.</li>
                <li><strong>Bulk Payments:</strong> Record a single bank transfer covering multiple bills from the same vendor.</li>
                <li><strong>Vouchers:</strong> Generate and print Payment Vouchers for physical signatures and filing.</li>
            </ul>
            <div class="code-block">
                <span class="code-dr">DEBIT &nbsp; Accounts Payable &nbsp;&nbsp;&nbsp;&nbsp;(- Supplier Debt)</span><br>
                <span class="code-cr">&nbsp;&nbsp;CREDIT &nbsp;Bank / Cash Account &nbsp;(- Money out)</span>
            </div>
        </div>
    </div>

    <div id="bank-accounts" class="doc-card reveal">
        <div class="doc-card-header">
            <div class="icon-wrap" style="background:rgba(58,107,255,.1);color:#3a6bff;"><i class="bi bi-bank"></i></div>
            <div><div class="step-num">Section 3</div><h5>Bank Accounts Master</h5></div>
        </div>
        <div class="doc-card-body">
            <p class="doc-p">Define your corporate bank accounts here. Every Collection and Payment must specify a source/destination bank account to ensure your Trial Balance remains accurate.</p>
            <div class="doc-tip">
                <i class="bi bi-info-circle-fill me-2" style="color:var(--emerald);"></i>
                Always reconcile your bank accounts monthly using <strong>Reports &gt; Bank Reconciliation</strong> to catch discrepancies early.
            </div>
        </div>
    </div>
@endsection
