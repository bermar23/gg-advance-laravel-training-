<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Modules\TestModule;
use Illuminate\Http\Request;

class SalesInvoiceController extends Controller
{

    public function myName(TestModule $module)
    {
        return $module->displayText();
    }

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
