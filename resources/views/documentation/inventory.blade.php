@extends('documentation.layout')
@section('doc-title', 'Inventory & Warehouse')
@section('doc-subtitle', 'Detailed guide to tracking stock, multi-warehouse management, and product lifecycle.')
@section('doc-content')

    <div id="items" class="doc-card reveal">
        <div class="doc-card-header">
            <div class="icon-wrap" style="background:rgba(244,185,66,.12);color:#f4b942;"><i class="bi bi-box-seam"></i></div>
            <div><div class="step-num">Section 1</div><h5>Managing Items (Master Data)</h5></div>
        </div>
        <div class="doc-card-body">
            <div class="doc-subhead">How to Create an Item</div>
            <ol class="doc-ol">
                <li>Go to <strong>Inventory &gt; Items</strong>.</li>
                <li>Click <strong>New Item</strong>.</li>
                <li><strong>Item Type:</strong> Choose <em>Goods</em> for physical/stockable items or <em>Service</em> for non-stockable labor.</li>
                <li><strong>Unit:</strong> Select the Unit of Measure (e.g., Pcs, Kg, Box).</li>
                <li><strong>Pricing &amp; Tax:</strong> Enter both Purchase and Selling prices. Assign the appropriate VAT rate (15%, 0%, or Exempt).</li>
                <li><strong>Opening Stock:</strong> (Goods only) Enter the initial quantity when first starting with the system.</li>
                <li>Click <strong>Save</strong>.</li>
            </ol>
            <div class="doc-danger mt-2">
                <i class="bi bi-exclamation-triangle-fill me-2" style="color:#ef4444;"></i>
                <strong>Deletion Rules:</strong> Items <strong>cannot be deleted</strong> if they've been used in any transactions (Invoices, POs, Stock Transfers). Mark unused items as <strong>Inactive</strong> to hide from selection lists.
            </div>
        </div>
    </div>

    <div id="warehouses" class="doc-card reveal">
        <div class="doc-card-header">
            <div class="icon-wrap" style="background:rgba(58,107,255,.1);color:#3a6bff;"><i class="bi bi-house-door"></i></div>
            <div><div class="step-num">Section 2</div><h5>Multi-Warehouse Management</h5></div>
        </div>
        <div class="doc-card-body">
            <p class="doc-p">Track stock independently at different physical locations. Every transaction (Sale/Purchase) must specify a warehouse.</p>
            <div class="doc-subhead">Stock Transfers</div>
            <p class="doc-p">Use <strong>Inventory &gt; Stock Transfers</strong> to move goods between locations.</p>
            <div class="flow-box">
                {{-- Warehouse Transfer Flow — Pure Bootstrap 5, zero internal CSS --}}

                <div class="d-flex align-items-start justify-content-center overflow-auto pb-2 gap-2">

                    {{-- Step 1 — Source Warehouse --}}
                    <div class="d-flex flex-column align-items-center" style="min-width:100px;">
                        <div class="rounded-circle d-flex align-items-center justify-content-center mb-2 bg-danger bg-opacity-10 border border-danger border-opacity-25"
                             style="width:44px;height:44px;">
                            <i class="bi bi-building text-danger"></i>
                        </div>
                        <span class="fw-semibold text-center text-danger small">Source Warehouse</span>
                        <span class="text-center text-danger opacity-75" style="font-size:11px;">Stock deducted</span>
                    </div>

                    {{-- Arrow --}}
                    <div class="d-flex align-items-center pb-4 text-secondary opacity-50">
                        <i class="bi bi-chevron-right"></i>
                    </div>

                    {{-- Step 2 — In Transit --}}
                    <div class="d-flex flex-column align-items-center" style="min-width:100px;">
                        <div class="rounded-circle d-flex align-items-center justify-content-center mb-2 bg-light border border-secondary border-opacity-25"
                             style="width:44px;height:44px;">
                            <i class="bi bi-truck text-secondary"></i>
                        </div>
                        <span class="fw-semibold text-center text-secondary small">In Transit</span>
                        <span class="text-center text-secondary opacity-50" style="font-size:11px;">Draft status</span>
                    </div>

                    {{-- Arrow --}}
                    <div class="d-flex align-items-center pb-4 text-secondary opacity-50">
                        <i class="bi bi-chevron-right"></i>
                    </div>

                    {{-- Step 3 — Destination (Active) --}}
                    <div class="d-flex flex-column align-items-center" style="min-width:100px;">
                        <div class="rounded-circle d-flex align-items-center justify-content-center mb-2 bg-success bg-opacity-10 border border-success border-opacity-50"
                             style="width:44px;height:44px;">
                            <i class="bi bi-building-check text-success"></i>
                        </div>
                        <span class="fw-semibold text-center text-success small">Destination</span>
                        <span class="text-center text-success opacity-75" style="font-size:11px;">Stock added on Completed</span>
                    </div>

                </div>
            </div>
            <p class="doc-p mt-2 mb-0">Stock is only deducted from source and added to destination after the transfer is marked <span class="badge badge-approved px-2 py-1">Completed</span>.</p>
        </div>
    </div>

    <div id="stock-logic" class="doc-card reveal">
        <div class="doc-card-header">
            <div class="icon-wrap" style="background:rgba(0,201,123,.1);color:var(--emerald);"><i class="bi bi-graph-up-arrow"></i></div>
            <div><div class="step-num">Section 3</div><h5>Inventory Logic &amp; Auditing</h5></div>
        </div>
        <div class="doc-card-body">
            <div class="doc-subhead">Stock Movement Workflow</div>
            <div class="table-responsive mb-3">
                <table class="table doc-table rounded-3 overflow-hidden">
                    <thead>
                    <tr><th>Action</th><th class="text-center">Direction</th><th>Effect on Stock</th></tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Purchase Invoice Approved</td>
                        <td class="text-center"><i class="bi bi-plus-circle-fill" style="color:var(--emerald);font-size:1.1rem;"></i></td>
                        <td>Stock <strong>Increases</strong></td>
                    </tr>
                    <tr>
                        <td>Sales Invoice Approved</td>
                        <td class="text-center"><i class="bi bi-dash-circle-fill" style="color:#ef4444;font-size:1.1rem;"></i></td>
                        <td>Stock <strong>Decreases</strong></td>
                    </tr>
                    <tr>
                        <td>Delivery Order Completed</td>
                        <td class="text-center"><i class="bi bi-truck" style="color:#3a6bff;font-size:1.1rem;"></i></td>
                        <td>Logs dispatch event</td>
                    </tr>
                    <tr>
                        <td>Assembly / Production</td>
                        <td class="text-center"><i class="bi bi-tools" style="color:#f4b942;font-size:1.1rem;"></i></td>
                        <td>Components Out, Finished Goods In</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="doc-subhead">Stock Summary Report</div>
            <p class="doc-p mb-0">The <strong>Stock Summary Report</strong> shows exactly how many units are in each warehouse, their average cost (AVCO), and total inventory value at any point in time.</p>
        </div>
    </div>

@endsection
