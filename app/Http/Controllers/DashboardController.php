<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Report;

class DashboardController extends Controller
{
    function getReportData() {

        if(session('id')) {
            // $result = DB::table('records')
            // ->select('ICD10', DB::raw('count(*) as total'))
            // ->groupBy('ICD10')
            // ->get();

            $result = DB::select("select description,count(*) as total from records a inner join recordcategories b where a.categoryid=b.categoryid group by a.categoryID");
    
            return view('pages.dashboard', compact('result'));
        } else {
            return redirect('/');
        }

    }
}
