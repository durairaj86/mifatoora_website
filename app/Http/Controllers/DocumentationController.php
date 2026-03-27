<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentationController extends Controller
{
    /**
     * Map specific routes to consolidated documentation views
     */
    protected $viewMap = [
        'customers' => 'sales',
        'suppliers' => 'purchases',
        'projects' => 'projects',
        'items' => 'items',
        'inventory' => 'inventory',
        'quotations' => 'sales',
        'sales-orders' => 'sales',
        'invoices' => 'sales',
        'purchases' => 'purchases',
        'supplier-invoices' => 'purchases',
        'expenses' => 'purchases',
        'treasury' => 'treasury',
        'accounting' => 'accounting',
        'reports' => 'reports',
        'master-data' => 'master-data',
        'hr' => 'hr',
        'overview' => 'overview'
    ];

    public function index($module = 'overview')
    {
        $target = $this->viewMap[$module] ?? 'overview';
        $view = "documentation.{$target}";

        if (!view()->exists($view)) {
            $view = "documentation.overview";
        }

        return view($view, [
            'currentModule' => $module,
            'viewName' => $target
        ]);
    }
}
