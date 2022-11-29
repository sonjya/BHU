<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
   function searchReport(Request $request) {
      $result = $result = DB::select("select description,count(*) as total, month from records a inner join recordcategories b where a.categoryid=b.categoryid and month='$request->reportToSearch' group by a.categoryID");
      return view('pages.reports',compact('result'));
   }

   function getData() {
      if(session('id')){
         $result = DB::select("select description,count(*) as total, month from records a inner join recordcategories b where a.categoryid=b.categoryid and month='january' group by a.categoryID");
         return view('pages.reports',compact('result'));
      } else {
         return redirect('/');
      }
   }
}
