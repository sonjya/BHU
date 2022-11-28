<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;

class RecordController extends Controller
{
    function getRecords(){

        if(session('id')) {
            $result = Record::orderby('reportID')
            ->limit(10)
            ->get();
            return view('pages.records',compact('result'));
        } else {
            return redirect('/');
        }
    }

    function addRecord(Request $request) {
        $item = new Record;
        $item->reportID = 0;
        $item->name = $request->name;
        $item->age = $request->age;
        $item->sex = $request->sex;
        $item->diagnosis = $request->diagnosis;
        $item->ICD10 = $request->ICD10;
        $item->address = $request->address;
        $item->physician = $request->physician;
        $item->save();
        return redirect('/records');
    }
}
