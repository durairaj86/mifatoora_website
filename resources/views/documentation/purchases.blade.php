{{-- ═══════════════════════════════════════════════════
    purchases.blade.php
═══════════════════════════════════════════════════ --}}
@extends('documentation.layout')
@section('doc-title', 'Purchasing & Vendors')
@section('doc-subtitle', 'Comprehensive guide to Supplier management, Purchase Orders, and Business Expenses.')
@section('doc-content')

    <div class="doc-card reveal">
        <div class="doc-card-header">
            <div class="icon-wrap" style="background:rgba(0,201,123,.1);color:var(--emerald);"><i
                    class="bi bi-diagram-3"></i></div>
            <div>
                <div class="step-num">Purchasing Workflow</div>
                <h5>End-to-End Purchasing Flow</h5></div>
        </div>
        <div class="doc-card-body">
            <div class="flow-box mb-3">
                {{-- Purchase Flow Diagram — Bootstrap 5 only --}}

                <div class="d-flex align-items-start overflow-auto pb-2">

                    {{-- Step 1 — Supplier --}}
                    <div class="d-flex flex-column align-items-center" style="min-width:110px; flex:1;">
                        <div class="rounded-circle d-flex align-items-center justify-content-center mb-2 flex-shrink-0"
                             style="width:44px; height:44px; background:rgba(0,201,123,.12);">
                            <i class="bi bi-building" style="font-size:18px; color:var(--emerald);"></i>
                        </div>
                        <span class="fw-semibold text-center" style="font-size:12px; color:#1a1a1a; line-height:1.3;">Supplier</span>
                        <span class="text-center" style="font-size:11px; color:#888; margin-top:2px;">Onboarding</span>
                    </div>

                    {{-- Arrow --}}
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0"
                         style="margin-bottom:24px; padding:0 2px; color:#ccc; font-size:18px;">›
                    </div>

                    {{-- Step 2 — Purchase Order (Optional) --}}
                    <div class="d-flex flex-column align-items-center" style="min-width:110px; flex:1;">
                        <div class="rounded-circle d-flex align-items-center justify-content-center mb-2 flex-shrink-0"
                             style="width:44px; height:44px; background:#f5f7fc; border:1.5px dashed #ccc;">
                            <i class="bi bi-cart-check" style="font-size:18px; color:#94a3b8;"></i>
                        </div>
                        <span class="fw-semibold text-center" style="font-size:12px; color:#94a3b8; line-height:1.3;">Purchase Order</span>
                        <span class="text-center" style="font-size:11px; color:#bbb; margin-top:2px;">Optional</span>
                    </div>

                    {{-- Arrow --}}
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0"
                         style="margin-bottom:24px; padding:0 2px; color:#ccc; font-size:18px;">›
                    </div>

                    {{-- Step 3 — Purchase Invoice (Active) --}}
                    <div class="d-flex flex-column align-items-center" style="min-width:110px; flex:1;">
                        <div class="rounded-circle d-flex align-items-center justify-content-center mb-2 flex-shrink-0"
                             style="width:44px; height:44px; background:#E1F5EE; border:1.5px solid var(--emerald);">
                            <i class="bi bi-receipt" style="font-size:18px; color:var(--emerald-dim);"></i>
                        </div>
                        <span class="fw-semibold text-center"
                              style="font-size:12px; color:var(--emerald-dim); line-height:1.3;">Purchase Invoice</span>
                        <span class="text-center" style="font-size:11px; color:var(--emerald); margin-top:2px;">Liability &amp; Stock In</span>
                    </div>

                    {{-- Arrow --}}
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0"
                         style="margin-bottom:24px; padding:0 2px; color:#ccc; font-size:18px;">›
                    </div>

                    {{-- Step 4 — Payment --}}
                    <div class="d-flex flex-column align-items-center" style="min-width:110px; flex:1;">
                        <div class="rounded-circle d-flex align-items-center justify-content-center mb-2 flex-shrink-0"
                             style="width:44px; height:44px; background:#fef2f2;">
                            <i class="bi bi-credit-card" style="font-size:18px; color:#ef4444;"></i>
                        </div>
                        <span class="fw-semibold text-center" style="font-size:12px; color:#1a1a1a; line-height:1.3;">Payment</span>
                        <span class="text-center" style="font-size:11px; color:#888; margin-top:2px;">Settlement</span>
                    </div>

                </div>

                {{-- Optional note --}}
                <div class="text-center mt-3">
    <span class="px-3 py-1 rounded-pill"
          style="font-size:11px; color:#888; border:1px dashed #ddd; display:inline-block;">
        Step 2 is optional — create a Purchase Invoice directly from a supplier
    </span>
                </div>
            </div>
        </div>
    </div>

    <div id="suppliers" class="doc-card reveal">
        <div class="doc-card-header">
            <div class="icon-wrap" style="background:rgba(0,201,123,.1);color:var(--emerald);"><i
                    class="bi bi-truck"></i></div>
            <div>
                <div class="step-num">Section 1</div>
                <h5>Managing Suppliers</h5></div>
        </div>
        <div class="doc-card-body">
            <div class="doc-subhead">Creating a Supplier Profile</div>
            <ol class="doc-ol">
                <li>Go to <strong>Directory &gt; Suppliers</strong>.</li>
                <li>Click <strong>Add Supplier</strong>.</li>
                <li>Fill in the vendor's legal name and contact information.</li>
                <li><strong>Tax Setup:</strong> Enter the correct Tax/VAT Number — this is crucial for accurate Input
                    Tax reports and VAT filing.
                </li>
                <li>Click <strong>Save</strong>.</li>
            </ol>
            <div class="doc-danger mt-2">
                <i class="bi bi-exclamation-triangle-fill me-2" style="color:#ef4444;"></i>
                <strong>Deletion Constraint:</strong> A supplier cannot be deleted if there are any recorded Purchase
                Orders or Invoices linked to them — this protects the integrity of your financial history.
            </div>
        </div>
    </div>

    <div id="purchase-orders" class="doc-card reveal">
        <div class="doc-card-header">
            <div class="icon-wrap" style="background:rgba(244,185,66,.12);color:#f4b942;"><i
                    class="bi bi-cart-check"></i></div>
            <div>
                <div class="step-num">Section 2</div>
                <h5>Purchase Orders (PO)</h5></div>
        </div>
        <div class="doc-card-body">
            <p class="doc-p">A PO is your internal record of an order placed with a vendor before goods arrive.</p>
            <ul class="doc-ul">
                <li><strong>Issuance:</strong> Create a PO with expected delivery dates and item quantities.</li>
                <li><strong>Conversion:</strong> When goods arrive and you receive the physical bill, convert the PO
                    into a <strong>Purchase Invoice</strong> with one click.
                </li>
            </ul>
            <div class="doc-tip mt-2">
                <i class="bi bi-info-circle-fill me-2" style="color:var(--emerald);"></i>
                <strong>Note:</strong> POs do <em>not</em> affect your accounts or stock levels. Only the approved
                Purchase Invoice does.
            </div>
        </div>
    </div>

    <div id="supplier-invoices" class="doc-card reveal">
        <div class="doc-card-header">
            <div class="icon-wrap" style="background:rgba(0,201,123,.1);color:var(--emerald);"><i
                    class="bi bi-receipt"></i></div>
            <div>
                <div class="step-num">Section 3</div>
                <h5>Purchase Invoices (Bills)</h5></div>
        </div>
        <div class="doc-card-body">
            <p class="doc-p">Records what you owe the supplier and adds items to your inventory.</p>
            <div class="doc-subhead">Impact of Approval</div>
            <div class="row g-3">
                <div class="col-md-6">
                    <div class="info-card">
                        <div class="ic-title"><i class="bi bi-journal-check me-2" style="color:#3a6bff;"></i>Financial
                            Impact
                        </div>
                        <p class="ic-text">Creates a <strong>Credit in Accounts Payable</strong> and a <strong>Debit in
                                Purchases/Inventory</strong> and Input VAT accounts.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-card">
                        <div class="ic-title"><i class="bi bi-boxes me-2" style="color:var(--emerald);"></i>Stock Impact
                        </div>
                        <p class="ic-text">Increases the <strong>Quantity on Hand</strong> for all Goods-type items
                            included in the invoice at the specified warehouse.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="expenses" class="doc-card reveal">
        <div class="doc-card-header">
            <div class="icon-wrap" style="background:rgba(239,68,68,.1);color:#ef4444;"><i class="bi bi-wallet2"></i>
            </div>
            <div>
                <div class="step-num">Section 4</div>
                <h5>Recording Expenses</h5></div>
        </div>
        <div class="doc-card-body">
            <p class="doc-p">Use Expenses for overheads that don't involve inventory — e.g., Office Rent, Petrol,
                Internet, Utilities.</p>
            <ul class="doc-ul">
                <li><strong>Category:</strong> Assign each expense to a GL account (e.g., Electricity Expense) for
                    proper P&amp;L categorization.
                </li>
                <li><strong>Payment:</strong> Mark as <strong>Paid</strong> to immediately deduct from your Cash/Bank
                    account.
                </li>
                <li><strong>VAT:</strong> Input VAT on expenses is automatically calculated and posted to the Input VAT
                    account for your tax return.
                </li>
            </ul>
        </div>
    </div>

@endsection
