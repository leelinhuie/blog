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
    return view('home');
});

Route::get('/myProduct', function () {
    return view('detail');
});
Route::get('/addProduct/', function(){
    return view('addProduct',['categoryID'=>App\Models\Category::all()]);
});

Route::post('/addProduct/store',[App\Http\Controllers\ProductController::class,'add']);

Auth::routes(); 
ddd
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
