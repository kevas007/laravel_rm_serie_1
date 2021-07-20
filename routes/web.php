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


Route::get('/welcome/{kev}', function ($kev) {

    return view('welcome', compact('kev'));
});


Route::get('/couleur/{nav}', function($nav){
    return view('index', compact('nav'));
});



Route::get('/main',function (){
    $var1 = 48;
    $var2 =10;
    return view('main', compact('var1','var2'));
});
Route::get('/kevin',function(){
    $kev = "<h2>kevin</h2>";
    return $kev ;
});
