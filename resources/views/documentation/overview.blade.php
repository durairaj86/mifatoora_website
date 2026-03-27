@extends('documentation.layout')
@section('doc-title', 'Overview & Architecture')
@section('doc-subtitle', 'Introduction to the LedgerOS system design, core logic, and technical stack.')

@section('doc-content')

    {{-- System Philosophy --}}
    <div class="doc-card reveal">
        <div class="doc-card-header">
            <div class="icon-wrap" style="background:rgba(58,107,255,.1);color:#3a6bff;"><i class="bi bi-speedometer2"></i></div>
            <div>
                <div class="step-num">Introduction</div>
                <h5>System Philosophy</h5>
            </div>
        </div>
        <div class="doc-card-body">
            <p class="doc-p">LedgerOS is an integrated ERP solution designed for Saudi Small and Medium Enterprises (SMEs). It bridges the gap between simple invoicing and complex accounting systems while maintaining full ZATCA Phase 2 compliance.</p>
            <div class="row g-3 mt-1">
                <div class="col-md-4">
                    <div class="info-card h-100">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <i class="bi bi-link-45deg" style="color:#3a6bff;font-size:1rem;"></i>
                            <div class="ic-title">Integrated</div>
                        </div>
                        <p class="ic-text">Every action in Sales or Purchases automatically flows into the General Ledger and Inventory — no double entry.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-card h-100">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <i class="bi bi-shield-check" style="color:var(--emerald);font-size:1rem;"></i>
                            <div class="ic-title">Compliant</div>
                        </div>
                        <p class="ic-text">Built with Saudi VAT rules and ZATCA Phase 2 requirements in mind from the ground up.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-card h-100">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <i class="bi bi-lightning-fill" style="color:#f4b942;font-size:1rem;"></i>
                            <div class="ic-title">Real-time</div>
                        </div>
                        <p class="ic-text">Dynamic dashboards and reports reflect your business health the moment a document is approved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Technical Stack --}}
    <div class="doc-card reveal">
        <div class="doc-card-header">
            <div class="icon-wrap" style="background:rgba(139,92,246,.1);color:#8b5cf6;"><i class="bi bi-cpu"></i></div>
            <div>
                <div class="step-num">Architecture</div>
                <h5>Core Technical Stack</h5>
            </div>
        </div>
        <div class="doc-card-body">
            <div class="row g-3">
                <div class="col-md-6">
                    <div class="info-card">
                        <div class="d-flex align-items-center gap-2 mb-1">
                            <i class="bi bi-server" style="color:#ef4444;"></i>
                            <div class="ic-title">Backend — Laravel (PHP)</div>
                        </div>
                        <p class="ic-text">Robust routing, security middleware, Eloquent ORM, and queued jobs for async processing.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-card">
                        <div class="d-flex align-items-center gap-2 mb-1">
                            <i class="bi bi-layout-text-window" style="color:#3a6bff;"></i>
                            <div class="ic-title">Frontend — Alpine.js &amp; Bootstrap 5</div>
                        </div>
                        <p class="ic-text">Fast, responsive, mobile-friendly interface with SPA-like interactivity in tables and forms.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-card">
                        <div class="d-flex align-items-center gap-2 mb-1">
                            <i class="bi bi-database" style="color:#f4b942;"></i>
                            <div class="ic-title">Database — MySQL</div>
                        </div>
                        <p class="ic-text">Relational data management with ACID compliance ensuring financial data integrity.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-card">
                        <div class="d-flex align-items-center gap-2 mb-1">
                            <i class="bi bi-shield-lock" style="color:var(--emerald);"></i>
                            <div class="ic-title">Compliance — ZATCA Phase 2</div>
                        </div>
                        <p class="ic-text">UBL 2.1 XML generation, cryptographic signing, CSID onboarding, and real-time clearance APIs.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Key Design Patterns --}}
    <div class="doc-card reveal">
        <div class="doc-card-header">
            <div class="icon-wrap" style="background:rgba(0,201,123,.1);color:var(--emerald);"><i class="bi bi-diagram-3"></i></div>
            <div>
                <div class="step-num">Design Patterns</div>
                <h5>Key System Patterns</h5>
            </div>
        </div>
        <div class="doc-card-body">
            <div class="row g-3 mb-3">
                <div class="col-md-6">
                    <div class="doc-subhead">Modular Table Engine</div>
                    <p class="doc-p mb-0">Most list views use a custom <code>moduleTable</code> Alpine.js component that handles AJAX filtering, pagination, and real-time refresh without full page reloads.</p>
                </div>
                <div class="col-md-6">
                    <div class="doc-subhead">Approval-Based Workflow</div>
                    <p class="doc-p mb-0">Documents (Invoices, Transfers) exist in <strong>Draft</strong> until <strong>Approved</strong>. Only approved documents impact financial accounts and inventory levels.</p>
                </div>
            </div>
            <div class="doc-tip">
                <i class="bi bi-info-circle-fill me-2" style="color:var(--emerald);"></i>
                <strong>Key Rule:</strong> A Draft document has zero financial impact. Always review carefully before approving — approvals trigger ledger entries and stock movements that require a Credit Note to reverse.
            </div>
        </div>
    </div>

@endsection
