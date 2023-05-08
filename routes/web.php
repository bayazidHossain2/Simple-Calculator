<?php

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
    $string_value="123";
    return view('Home.flex_cal');
});

Route::get('/evaluate/{string_value}', function ($string_value) {
    $value= $string_value . "9";
    return redirect()->back()->with('result','value');
});