@extends('documentation.layout')
@section('doc-title', 'System Administration')
@section('doc-subtitle', 'Detailed guide to HR management, Access Control, and Global Settings.')
@section('doc-content')

    <div id="hr" class="doc-card reveal">
        <div class="doc-card-header">
            <div class="icon-wrap" style="background:rgba(58,107,255,.1);color:#3a6bff;"><i class="bi bi-people"></i></div>
            <div><div class="step-num">Section 1</div><h5>Human Resources (HR)</h5></div>
        </div>
        <div class="doc-card-body">
            <p class="doc-p">Manage your workforce and link employees to system access roles.</p>
            <div class="doc-subhead">Employee Lifecycle</div>
            <ol class="doc-ol">
                <li><strong>Profile Creation:</strong> Record joining dates, departments, and designations.</li>
                <li><strong>Login Access:</strong> Enable the <strong>"Can Login?"</strong> toggle to allow an employee to use the system. You must specify their <strong>User Role</strong> (e.g., Accountant).</li>
                <li><strong>Commission Slabs:</strong> For the "Salesperson" designation, add tiered commission rates based on sales volume. See <a href="{{ url('documentation/hr') }}" style="color:var(--emerald);">HR &amp; Commissions</a> for details.</li>
            </ol>
        </div>
    </div>

    <div id="rbac" class="doc-card reveal">
        <div class="doc-card-header">
            <div class="icon-wrap" style="background:rgba(239,68,68,.1);color:#ef4444;"><i class="bi bi-shield-lock"></i></div>
            <div><div class="step-num">Section 2</div><h5>Security &amp; RBAC</h5></div>
        </div>
        <div class="doc-card-body">
            <p class="doc-p">Control exactly what each user can see and do using Role-Based Access Control (RBAC).</p>
            <div class="row g-3">
                <div class="col-md-6">
                    <div class="info-card">
                        <div class="d-flex align-items-center gap-2 mb-1">
                            <i class="bi bi-people-fill" style="color:#3a6bff;"></i>
                            <div class="ic-title">Roles</div>
                        </div>
                        <p class="ic-text">Named groups of permissions — e.g., <strong>Admin</strong>, <strong>Accountant</strong>, <strong>Viewer</strong>. Assign one role per user.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-card">
                        <div class="d-flex align-items-center gap-2 mb-1">
                            <i class="bi bi-key-fill" style="color:#f4b942;"></i>
                            <div class="ic-title">Permissions</div>
                        </div>
                        <p class="ic-text">Specific actions: <strong>"Create Invoice"</strong>, <strong>"Delete Customer"</strong>, <strong>"View Reports"</strong>, etc.</p>
                    </div>
                </div>
            </div>
            <div class="doc-tip mt-3">
                <i class="bi bi-lightbulb-fill me-2" style="color:var(--emerald);"></i>
                Use the <strong>Viewer</strong> role for read-only staff who should see reports but not create or modify documents.
            </div>
        </div>
    </div>

    <div id="settings" class="doc-card reveal">
        <div class="doc-card-header">
            <div class="icon-wrap" style="background:rgba(0,201,123,.1);color:var(--emerald);"><i class="bi bi-gear"></i></div>
            <div><div class="step-num">Section 3</div><h5>Global Settings &amp; Sequences</h5></div>
        </div>
        <div class="doc-card-body">
            <ul class="doc-ul">
                <li><strong>Company Settings:</strong> Update your address, logo, and VAT number appearing on all printouts and ZATCA submissions.</li>
                <li><strong>Document Sequences:</strong> Define custom prefixes (e.g., <code>INV-2026-</code>) and zero-padding for document IDs.</li>
                <li><strong>VAT Framework:</strong> Manage the tax rate categories (15%, 0%, Exempt) used throughout the system.</li>
            </ul>
            <div class="doc-warn mt-2">
                <i class="bi bi-exclamation-circle-fill me-2" style="color:#f4b942;"></i>
                Changing your <strong>Document Sequences</strong> mid-year may break number continuity. Only modify at the start of a new financial period.
            </div>
        </div>
    </div>
@endsection
