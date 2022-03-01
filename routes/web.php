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
    return view('welcome');
});

Route::get('/catalog', function () {
    return view('catalog');    
});

Route::get('catalog/{jenis}', function ($jenis) {
    return view('isiCatalog', ['jenis'=>$jenis ]);    
});

Route::get('catalog/{jenis}/{id}', function ($jenis, $id) {
    return view('detail ', [
        'jenis'=>$jenis ,
        'id'=>$id
    ]);    
});
