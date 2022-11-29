<?php

namespace App\Http\Controllers;

use App\Models\Icd;
use Illuminate\Http\Request;

class IcdController extends Controller
{
    function getICD() {

        if(session('id')) {
            $result = Icd::orderby('code')
            ->limit(10)
            ->get();
            return view('pages.ICD', compact('result'));
        } else {
            return redirect('/');
        }
    }

    function searchICD(Request $request) {
        $result = Icd::where('code','like','%'. $request->search .'%')
        ->orWhere('description','like','%'. $request->search .'%')
        ->get();
        return view('pages.ICD', compact('result'));
    }

    function addICD(Request $request) {
        $item = new Icd;
        $item->code = $request->code;
        $item->description = $request->description;
        $item->created_at = now();
        $item->updated_at = now();
        $item->save();
        return redirect('/ICD');
    }
}
