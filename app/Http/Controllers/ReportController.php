<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{
    function getReports(){

        if(session('id')) {
            $result = Report::orderby('reportID')
            ->limit(10)
            ->get();
            return view('pages.reports',compact('result'));
        } else {
            return redirect('/');
        }
    }

    function addReport(Request $request) {
        $item = new Report;
        $item->reportID = 0;
        $item->name = $request->name;
        $item->age = $request->age;
        $item->sex = $request->sex;
        $item->diagnosis = $request->diagnosis;
        $item->ICD10 = $request->ICD10;
        $item->address = $request->address;
        $item->physician = $request->physician;
        $item->save();
        return redirect('/reports');
    }

}
