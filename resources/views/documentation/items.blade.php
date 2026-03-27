@extends('documentation.layout')
@section('doc-title', 'Items & Products')
@section('doc-subtitle', 'Documentation for managing Goods, Services, and Units of Measure.')
@section('doc-content')

    <div id="item-master" class="doc-card reveal">
        <div class="doc-card-header">
            <div class="icon-wrap" style="background:rgba(244,185,66,.12);color:#f4b942;"><i class="bi bi-box-seam"></i></div>
            <div><div class="step-num">Section 1</div><h5>Item Master</h5></div>
        </div>
        <div class="doc-card-body">
            <p class="doc-p">Every product or service you sell is defined in the Item Master. Items are categorized into two types:</p>
            <div class="row g-3 mb-3">
                <div class="col-md-6">
                    <div class="info-card h-100">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <i class="bi bi-box" style="color:#3a6bff;font-size:1.1rem;"></i>
                            <div class="ic-title">Goods (Stockable)</div>
                        </div>
                        <p class="ic-text">Physical products requiring inventory tracking. The system monitors <strong>Quantity on Hand</strong> and average cost for these items.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-card h-100">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <i class="bi bi-lightning-charge" style="color:#f4b942;font-size:1.1rem;"></i>
                            <div class="ic-title">Service (Non-Stockable)</div>
                        </div>
                        <p class="ic-text">Labor, consulting, or digital products. No physical quantity — stock movements are ignored entirely.</p>
                    </div>
                </div>
            </div>

            <div class="doc-subhead">Key Item Attributes</div>
            <ul class="doc-ul">
                <li><strong>SKU:</strong> A unique identifier for every item — auto-generated or manually entered.</li>
                <li><strong>Pricing:</strong> Separate fields for <strong>Purchase Price</strong> (Cost) and <strong>Selling Price</strong>.</li>
                <li><strong>Taxation:</strong> Select VAT rate (15%, 0%, Exempt). Ensures correct tax calculation on all documents.</li>
                <li><strong>Warehouse:</strong> Items are assigned to a primary warehouse, but can be moved via Stock Transfers.</li>
                <li><strong>Opening Stock:</strong> (Goods only) Initial quantity when starting with the system.</li>
            </ul>
            <div class="doc-danger mt-2">
                <i class="bi bi-exclamation-triangle-fill me-2" style="color:#ef4444;"></i>
                Items used in any transactions <strong>cannot be deleted</strong>. Mark unused items as <strong>Inactive</strong> instead to hide them from selection lists.
            </div>
        </div>
    </div>

    <div id="units" class="doc-card reveal">
        <div class="doc-card-header">
            <div class="icon-wrap" style="background:rgba(58,107,255,.1);color:#3a6bff;"><i class="bi bi-rulers"></i></div>
            <div><div class="step-num">Section 2</div><h5>Units of Measure (UoM)</h5></div>
        </div>
        <div class="doc-card-body">
            <p class="doc-p">Define how you count your items. Units are selected during item creation and appear on all printouts for clarity.</p>
            <div class="row g-2">
                @foreach(['Nos', 'Box', 'Kg', 'Liter', 'Hour', 'Meter'] as $unit)
                    <div class="col-auto">
                        <span class="badge rounded-pill px-3 py-2 fw-semibold" style="background:rgba(58,107,255,.08);color:#3a6bff;font-size:.8rem;">{{ $unit }}</span>
                    </div>
                @endforeach
            </div>
            <p class="doc-p mt-3 mb-0">Custom units can be added under <strong>Settings &gt; Units of Measure</strong>.</p>
        </div>
    </div>
@endsection
