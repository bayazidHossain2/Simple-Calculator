<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Models\history;
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
     $all_history=history::all();
    //return view('Home.flex_cal',compact('all_history'));
    return view('Home.calculator_grid',compact('all_history'));
});

Route::get('/evaluate/{string_value}', function ($string_value) {
    $value= $string_value . "9";
    return redirect()->back()->with('result','value');
});

Route::post('/add_history',[AdminController::class,'add_history']);

Route::get('/simple_calculator', function () {
    $all_history=history::all();
    return view('Home.flex_cal',compact('all_history'));
});