{{-- hr.blade.php --}}
@extends('documentation.layout')
@section('doc-title', 'HR & Sales Commissions')
@section('doc-subtitle', 'Documentation for Employee management and Commission Slabs.')
@section('doc-content')

    <div id="employees" class="doc-card reveal">
        <div class="doc-card-header">
            <div class="icon-wrap" style="background:rgba(58,107,255,.1);color:#3a6bff;"><i class="bi bi-people"></i></div>
            <div><div class="step-num">Section 1</div><h5>Employee Directory</h5></div>
        </div>
        <div class="doc-card-body">
            <p class="doc-p">Maintain detailed profiles for your staff: personal details, joining dates, departments, and designations.</p>
            <div class="doc-subhead">System Access</div>
            <p class="doc-p mb-2">Each employee can be granted login access. When <strong>"Can Login?"</strong> is checked, the system creates a User account linked to that employee, allowing them to perform tasks based on their assigned Role.</p>
            <div class="row g-3">
                <div class="col-md-6">
                    <div class="info-card">
                        <div class="ic-title"><i class="bi bi-person-check me-2" style="color:var(--emerald);"></i>Enable Login</div>
                        <p class="ic-text">Toggle "Can Login?" and assign a <strong>User Role</strong> (e.g., Accountant, Viewer, Manager).</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-card">
                        <div class="ic-title"><i class="bi bi-shield-lock me-2" style="color:#3a6bff;"></i>Role Assignment</div>
                        <p class="ic-text">Roles control which modules and actions the employee can access. Managed in Settings &gt; RBAC.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="commissions" class="doc-card reveal">
        <div class="doc-card-header">
            <div class="icon-wrap" style="background:rgba(244,185,66,.12);color:#f4b942;"><i class="bi bi-percent"></i></div>
            <div><div class="step-num">Section 2</div><h5>Salesperson Commission Slabs</h5></div>
        </div>
        <div class="doc-card-body">
            <p class="doc-p">For staff with the <strong>"Salesperson"</strong> designation, the system enables a dynamic tiered commission calculation tool.</p>
            <div class="doc-subhead">Example Commission Slabs</div>
            <div class="code-block mb-3">
                <span class="code-label">Slab 1: &nbsp; 0 SAR &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;→ 50,000 SAR &nbsp;&nbsp;&nbsp;&nbsp;</span><span class="code-dr">2% Commission</span><br>
                <span class="code-label">Slab 2: &nbsp; 50,001 SAR &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;→ 200,000 SAR &nbsp;&nbsp;</span><span class="code-dr">5% Commission</span><br>
                <span class="code-label">Slab 3: &nbsp; 200,001 SAR+ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="code-dr">10% Commission</span>
            </div>
            <div class="doc-tip">
                <i class="bi bi-info-circle-fill me-2" style="color:var(--emerald);"></i>
                Commission slabs are configured directly within the Employee edit form when the designation is set to <strong>Salesperson</strong>.
            </div>
        </div>
    </div>
@endsection
