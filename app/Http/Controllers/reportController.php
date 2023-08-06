<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\ProductExport;
use App\Exports\ProductExportMonthWise;
use Maatwebsite\Excel\Facades\Excel;

class reportController extends Controller
{
    public function index()
    {
        return view('report.index');
    }
    public function ExportProduct()
    {
        return Excel::download(new ProductExport, 'users.xlsx');
    }

    public function ExportProductMonthWise()
    {
        return Excel::download(new ProductExportMonthWise, 'users.xlsx');
    }
    
}
