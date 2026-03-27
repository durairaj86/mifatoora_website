@extends('documentation.layout')
@section('doc-title', 'Sales & CRM Module')
@section('doc-subtitle', 'Everything you need to know about managing Customers, Quotations, and Sales Invoices.')

@section('doc-content')

    {{-- Sales Workflow --}}
    <div class="doc-card reveal">
        <div class="doc-card-header">
            <div class="icon-wrap" style="background:rgba(58,107,255,.1);color:#3a6bff;"><i class="bi bi-diagram-3"></i></div>
            <div>
                <div class="step-num">Sales Workflow</div>
                <h5>End-to-End Sales Flow</h5>
            </div>
        </div>
        <div class="doc-card-body">
            <div class="flow-box mb-3">
                {{-- Sales Flow Diagram — Bootstrap 5 only, no custom CSS classes needed --}}
                <div class="d-flex align-items-start overflow-auto pb-2">

                    {{-- Step 1 — Add Customer --}}
                    <div class="d-flex flex-column align-items-center" style="min-width:110px; flex:1;">
                        <div class="rounded-circle d-flex align-items-center justify-content-center mb-2"
                             style="width:44px; height:44px; background:#E6F1FB; flex-shrink:0;">
                            <i class="bi bi-person-plus" style="font-size:18px; color:#185FA5;"></i>
                        </div>
                        <span class="fw-semibold text-center" style="font-size:12px; color:#1a1a1a; line-height:1.3;">Add Customer</span>
                        <span class="text-center" style="font-size:11px; color:#888; margin-top:2px;">CRM profile</span>
                    </div>

                    {{-- Arrow --}}
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0"
                         style="margin-bottom:24px; padding:0 2px; color:#ccc; font-size:18px;">›</div>

                    {{-- Step 2 — Quotation (Optional) --}}
                    <div class="d-flex flex-column align-items-center" style="min-width:110px; flex:1;">
                        <div class="rounded-circle d-flex align-items-center justify-content-center mb-2"
                             style="width:44px; height:44px; background:#f5f7fc; border:1.5px dashed #ccc; flex-shrink:0;">
                            <i class="bi bi-file-text" style="font-size:18px; color:#94a3b8;"></i>
                        </div>
                        <span class="fw-semibold text-center" style="font-size:12px; color:#94a3b8; line-height:1.3;">Quotation</span>
                        <span class="text-center" style="font-size:11px; color:#bbb; margin-top:2px;">Optional</span>
                    </div>

                    {{-- Arrow --}}
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0"
                         style="margin-bottom:24px; padding:0 2px; color:#ccc; font-size:18px;">›</div>

                    {{-- Step 3 — Sales Order (Optional) --}}
                    <div class="d-flex flex-column align-items-center" style="min-width:110px; flex:1;">
                        <div class="rounded-circle d-flex align-items-center justify-content-center mb-2"
                             style="width:44px; height:44px; background:#f5f7fc; border:1.5px dashed #ccc; flex-shrink:0;">
                            <i class="bi bi-check2-square" style="font-size:18px; color:#94a3b8;"></i>
                        </div>
                        <span class="fw-semibold text-center" style="font-size:12px; color:#94a3b8; line-height:1.3;">Sales Order</span>
                        <span class="text-center" style="font-size:11px; color:#bbb; margin-top:2px;">Optional</span>
                    </div>

                    {{-- Arrow --}}
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0"
                         style="margin-bottom:24px; padding:0 2px; color:#ccc; font-size:18px;">›</div>

                    {{-- Step 4 — Tax Invoice (Active) --}}
                    <div class="d-flex flex-column align-items-center" style="min-width:110px; flex:1;">
                        <div class="rounded-circle d-flex align-items-center justify-content-center mb-2"
                             style="width:44px; height:44px; background:#E1F5EE; border:1.5px solid #00c97b; flex-shrink:0;">
                            <i class="bi bi-receipt" style="font-size:18px; color:#00875a;"></i>
                        </div>
                        <span class="fw-semibold text-center" style="font-size:12px; color:#00875a; line-height:1.3;">Tax Invoice</span>
                        <span class="text-center" style="font-size:11px; color:#00c97b; margin-top:2px;">ZATCA cleared</span>
                    </div>

                    {{-- Arrow --}}
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0"
                         style="margin-bottom:24px; padding:0 2px; color:#ccc; font-size:18px;">›</div>

                    {{-- Step 5 — Collection --}}
                    <div class="d-flex flex-column align-items-center" style="min-width:110px; flex:1;">
                        <div class="rounded-circle d-flex align-items-center justify-content-center mb-2"
                             style="width:44px; height:44px; background:#EAF3DE; flex-shrink:0;">
                            <i class="bi bi-cash-stack" style="font-size:18px; color:#3B6D11;"></i>
                        </div>
                        <span class="fw-semibold text-center" style="font-size:12px; color:#1a1a1a; line-height:1.3;">Collection</span>
                        <span class="text-center" style="font-size:11px; color:#888; margin-top:2px;">Payment in</span>
                    </div>

                </div>
            </div>
            <div class="doc-tip">
                <i class="bi bi-lightbulb-fill me-2" style="color:var(--emerald);"></i>
                You can <strong>skip steps 2 and 3</strong> and create a Tax Invoice directly from a customer record if needed.
            </div>
        </div>
    </div>

    {{-- Customers --}}
    <div id="customers" class="doc-card reveal">
        <div class="doc-card-header">
            <div class="icon-wrap" style="background:rgba(58,107,255,.1);color:#3a6bff;"><i class="bi bi-people"></i></div>
            <div>
                <div class="step-num">Section 1</div>
                <h5>Managing Customers</h5>
            </div>
        </div>
        <div class="doc-card-body">
            <div class="doc-subhead">How to Create a Customer</div>
            <ol class="doc-ol">
                <li>Navigate to <strong>Directory &gt; Customers</strong> in the sidebar.</li>
                <li>Click the <strong>+ Add Customer</strong> button.</li>
                <li>Fill in <strong>Basic Info</strong>: Name (English &amp; Arabic), Email, and Contact Number.</li>
                <li>Provide <strong>Billing Details</strong>: Address, City, and Pincode.</li>
                <li>Under <strong>Tax Information</strong>, toggle "Is Registered" if the customer has a VAT number. Enter their CR and Tax numbers.</li>
                <li>Set <strong>Credit Terms</strong>: credit period (days) and maximum credit limit allowed.</li>
                <li>Click <strong>Save Customer</strong>.</li>
            </ol>

            <div class="doc-subhead mt-3">Updating a Customer</div>
            <p class="doc-p">Click the <i class="bi bi-pencil"></i> Edit icon in the customer list. Changes reflect on all <em>future</em> documents. Historical documents retain the info they had at creation for audit purposes.</p>

            <div class="doc-subhead mt-3">Deletion Rules</div>
            <div class="doc-danger mb-2">
                <i class="bi bi-exclamation-triangle-fill me-2" style="color:#ef4444;"></i>
                <strong>Integrity Constraint:</strong> You cannot delete a customer if they have any linked transactions (Quotations, Sales Orders, or Invoices).
            </div>
            <p class="doc-p mb-0">To remove a customer with history, mark them as <strong>Inactive</strong> to hide from selection lists, or ensure all linked documents are deleted first (only possible when documents are in <span class="badge badge-draft px-2 py-1">Draft</span> status).</p>
        </div>
    </div>

    {{-- Quotations --}}
    <div id="quotations" class="doc-card reveal">
        <div class="doc-card-header">
            <div class="icon-wrap" style="background:rgba(244,185,66,.12);color:#f4b942;"><i class="bi bi-file-text"></i></div>
            <div>
                <div class="step-num">Section 2</div>
                <h5>Quotations (Proposals)</h5>
            </div>
        </div>
        <div class="doc-card-body">
            <ul class="doc-ul">
                <li><strong>Creation:</strong> Select items, quantities, and apply discounts. Quotations start as <span class="badge badge-draft px-2 py-1">Draft</span>.</li>
                <li><strong>Approval:</strong> Once the customer agrees, click <strong>Approve</strong>. Status changes to <span class="badge badge-approved px-2 py-1">Accepted</span>.</li>
                <li><strong>Conversion:</strong> An Accepted quotation can be converted into a Sales Order or Tax Invoice with a single click — all item details transfer automatically.</li>
            </ul>
            <div class="doc-tip mt-3">
                <i class="bi bi-lightbulb-fill me-2" style="color:var(--emerald);"></i>
                <strong>Pro Tip:</strong> Use the <strong>"Valid Until"</strong> date field. The system automatically marks expired quotes, keeping your pipeline clean.
            </div>
        </div>
    </div>

    {{-- Invoices --}}
    <div id="invoices" class="doc-card reveal">
        <div class="doc-card-header">
            <div class="icon-wrap" style="background:rgba(0,201,123,.1);color:var(--emerald);"><i class="bi bi-file-earmark-spreadsheet"></i></div>
            <div>
                <div class="step-num">Section 3</div>
                <h5>Tax Invoices &amp; Billing</h5>
            </div>
        </div>
        <div class="doc-card-body">
            <p class="doc-p">Invoices are the most critical document — they trigger accounting entries, ZATCA clearance, and inventory deduction all at once.</p>

            <div class="doc-subhead">The Approval Process</div>
            <div class="table-responsive mb-3">
                <table class="table doc-table rounded-3 overflow-hidden">
                    <thead>
                    <tr>
                        <th>Stage</th>
                        <th>Financial Impact</th>
                        <th>Stock Impact</th>
                        <th>ZATCA</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><span class="badge badge-draft px-2 py-1 fw-semibold">Draft</span></td>
                        <td>None — fully editable or deletable</td>
                        <td>No change</td>
                        <td>Not submitted</td>
                    </tr>
                    <tr>
                        <td><span class="badge badge-approved px-2 py-1 fw-semibold">Approved</span></td>
                        <td>Generates GL entries (DR A/R, CR Revenue &amp; VAT)</td>
                        <td>Stock Out — inventory decreases</td>
                        <td>Cleared &amp; UUID stamped</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="doc-subhead">Fixing an Error on an Approved Invoice</div>
            <div class="doc-warn">
                <i class="bi bi-exclamation-circle-fill me-2" style="color:#f4b942;"></i>
                <strong>Approved invoices cannot be deleted</strong> — this is required for financial auditing and VAT compliance. To fix an error, issue a <strong>Credit Note</strong> instead.
            </div>
            <div class="info-card mt-3">
                <div class="ic-title"><i class="bi bi-arrow-counterclockwise me-2" style="color:var(--emerald);"></i>Credit Note Process</div>
                <p class="ic-text">A Credit Note creates a reversing journal entry in your accounts and returns the items back to inventory. Find the approved invoice and click <strong>"Issue Credit Note"</strong>.</p>
            </div>
        </div>
    </div>

@endsection
