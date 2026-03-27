@extends('documentation.layout')
@section('doc-title', 'Projects & Services')
@section('doc-subtitle', 'Documentation for tracking project-based billing and profitability.')
@section('doc-content')

    <div class="doc-card reveal">
        <div class="doc-card-header">
            <div class="icon-wrap" style="background:rgba(20,184,166,.1);color:#14b8a6;"><i class="bi bi-kanban"></i></div>
            <div><div class="step-num">Overview</div><h5>Project Management</h5></div>
        </div>
        <div class="doc-card-body">
            <p class="doc-p">The Projects module lets you group transactions (Invoices, Expenses, Quotations) under a single project entity. Ideal for construction, consulting, or long-term service contracts.</p>

            <div class="doc-subhead">Project Lifecycle</div>
            <div class="flow-box mb-3">
                {{-- Project Status Flow — Pure Bootstrap 5, zero internal CSS --}}

                <div class="d-flex align-items-start justify-content-center overflow-auto pb-2 mb-3 gap-2">

                    {{-- Step 1 — Pending --}}
                    <div class="d-flex flex-column align-items-center" style="min-width:100px;">
                        <div class="rounded-circle d-flex align-items-center justify-content-center mb-2 bg-light border border-secondary border-opacity-25"
                             style="width:44px;height:44px;">
                            <i class="bi bi-hourglass text-secondary"></i>
                        </div>
                        <span class="fw-semibold text-center text-secondary small">Pending</span>
                        <span class="text-center text-secondary opacity-50" style="font-size:11px;">Not started</span>
                    </div>

                    {{-- Arrow --}}
                    <div class="d-flex align-items-center pb-4 text-secondary opacity-50">
                        <i class="bi bi-chevron-right"></i>
                    </div>

                    {{-- Step 2 — Active --}}
                    <div class="d-flex flex-column align-items-center" style="min-width:100px;">
                        <div class="rounded-circle d-flex align-items-center justify-content-center mb-2 bg-primary bg-opacity-10 border border-primary border-opacity-25"
                             style="width:44px;height:44px;">
                            <i class="bi bi-play-circle text-primary"></i>
                        </div>
                        <span class="fw-semibold text-center text-primary small">Active</span>
                        <span class="text-center text-primary opacity-75" style="font-size:11px;">In progress</span>
                    </div>

                    {{-- Arrow --}}
                    <div class="d-flex align-items-center pb-4 text-secondary opacity-50">
                        <i class="bi bi-chevron-right"></i>
                    </div>

                    {{-- Step 3 — Completed --}}
                    <div class="d-flex flex-column align-items-center" style="min-width:100px;">
                        <div class="rounded-circle d-flex align-items-center justify-content-center mb-2 bg-success bg-opacity-10 border border-success border-opacity-50"
                             style="width:44px;height:44px;">
                            <i class="bi bi-check-circle text-success"></i>
                        </div>
                        <span class="fw-semibold text-center text-success small">Completed</span>
                        <span class="text-center text-success opacity-75" style="font-size:11px;">Closed &amp; settled</span>
                    </div>

                </div>
            </div>

            <div class="doc-subhead">Key Integration Points</div>
            <ul class="doc-ul">
                <li><strong>Linking:</strong> When creating a Quotation or Sales Invoice, select the Project from the dropdown. All financial impacts will be tagged to that project.</li>
                <li><strong>Expense Tracking:</strong> Record direct costs (site materials, sub-contractor fees) against the project using the Expenses module.</li>
                <li><strong>Profitability:</strong> Navigate to <strong>Reports &gt; Income by Project</strong> for a Revenue minus Expenses summary per active project.</li>
            </ul>
        </div>
    </div>

    <div class="doc-card reveal">
        <div class="doc-card-header">
            <div class="icon-wrap" style="background:rgba(58,107,255,.1);color:#3a6bff;"><i class="bi bi-link-45deg"></i></div>
            <div><div class="step-num">Configuration</div><h5>Project Details &amp; Customer Link</h5></div>
        </div>
        <div class="doc-card-body">
            <p class="doc-p">Each project is linked to a <strong>Customer</strong>. This ensures that only relevant projects appear when billing a specific client, reducing data entry errors and mis-billing.</p>
            <div class="row g-3">
                <div class="col-md-6">
                    <div class="info-card">
                        <div class="ic-title"><i class="bi bi-person me-2" style="color:#3a6bff;"></i>Customer Assignment</div>
                        <p class="ic-text">Link a customer at project creation. Only their projects appear in invoice dropdowns.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-card">
                        <div class="ic-title"><i class="bi bi-bar-chart me-2" style="color:var(--emerald);"></i>Profitability Tracking</div>
                        <p class="ic-text">All tagged invoices and expenses roll up to the project P&amp;L in the Reports module.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
