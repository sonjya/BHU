<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Report;

class DashboardController extends Controller
{
    function getReportData() {
        // $result = Report::groupBy('ICD10')
        // ->get('ICD10');

        $result = DB::table('reports')
        ->select('ICD10', DB::raw('count(*) as total'))
        ->groupBy('ICD10')
        ->get();

        return view('pages.dashboard', compact('result'));
    }
}
