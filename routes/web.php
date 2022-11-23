<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\IcdController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    if(session('id')) {
        return view('pages.dashboard');
    } else {
        return redirect('/');
    }
});
Route::get('/records', function () {
    if(session('id')) {
        return view('pages.records');
    } else {
        return redirect('/');
    }
});
Route::get('/reports', function () {
    if(session('id')) {
        return view('pages.reports');
    } else {
        return redirect('/');
    }
});

Route::post('/login',[UserController::class,'authUser']);
Route::get('/logout',[UserController::class,'logoutUser']);
Route::post('/searchICD',[IcdController::class,'searchICD']);
Route::get('/ICD',[IcdController::class,'getICD']);
Route::post('/addICD',[IcdController::class,'addICD']);