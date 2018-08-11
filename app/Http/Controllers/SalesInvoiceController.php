<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesInvoiceController extends Controller
{
    public function show(Request $request)
    {
        print_r($request->input('field'));
        return view('sample');
    }
}
