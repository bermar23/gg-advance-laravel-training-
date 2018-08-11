<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class SalesInvoiceController extends Controller
{
    public function show(Request $request)
    {
        print_r($request->input('field'));
        return view('sample');
    }

    public function getSalesInvoiceModule()
    {
        $module = Module::with('numberSeriesList')
                            ->with('numberSeries')
                            ->findOrFail('si');
        return $module;
    }
}
