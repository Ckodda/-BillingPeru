<?php

use App\Http\Controllers\Dashboard;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/dashboard',[Dashboard::class,'show']);
Route::get('/', function () {
    return view('welcome');
});
Route::get('hello',function (){
   return \Inertia\Inertia::render('Hello');
});
Route::resource('bill',\App\Http\Controllers\BillController::class);
