<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\InternApplicationExport;
use Maatwebsite\Excel\Facades\Excel;

class SuperAdminController extends Controller
{
    public function exportReport(Request $request)
    {
        $batch = $request->batch ?? 'all';

        return Excel::download(new InternApplicationExport($batch), 'Intern_Report_Batch_'.$batch.'.xlsx');
    }
}
