<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employee;
use App\Http\Controllers\calculation;
use App\Http\Controllers\meritmatrix;
use App\Http\Controllers\demo;

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

Route::get('/demo',[employee::class, 'go']);
Route::post('/import',[employee::class, 'import'])->name("emp.import");
Route::get('/calc',[calculation::class, 'cc']);
Route::get('/test',[calculation::class, 'cc']);


Route::get('/demo2',[demo::class, 'go2']);
Route::post('/import2',[demo::class,'import2'])->name(("emp.import2"));
