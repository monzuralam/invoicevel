<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Invoice List View
     *
     * @return view
     */
    public function index():view{
        return view('invoices.invoices');
    }

    /**
     * Create invoice
     *
     * @return void
     */
    public function create():view{
        return view('invoices.invoice-create');
    }
}
