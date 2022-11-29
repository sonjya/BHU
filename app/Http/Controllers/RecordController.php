<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;
use Carbon\Carbon;

class RecordController extends Controller
{
    function getRecords(){

        if(session('id')) {
            $result = Record::where('categoryID',1)
            ->orderby('reportID')
            ->limit(10)
            ->get();
            return view('pages.records',compact('result'));
        } else {
            return redirect('/');
        }
    }

    function addRecord(Request $request) {

        $now = Carbon::now();
        $item = new Record;
        $item->reportID = 0;
        $item->categoryID = $request->recordToAdd;
        $item->name = $request->name;
        $item->age = $request->age;
        $item->sex = $request->sex;
        $item->diagnosis = $request->diagnosis;
        $item->ICD10 = $request->ICD10;
        $item->address = $request->address;
        $item->physician = $request->physician;
        $item->month = $now->monthName;;
        $item->save();
        return redirect('/records');

    }
    
    function searchRecord(Request $request) {
        $result = Record::where('categoryID',$request->recordToSearch)
        ->where('name','like','%'. $request->search .'%')
        ->get();
        return view('pages.records',compact('result'));
    }

}
