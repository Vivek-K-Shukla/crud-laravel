<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('index',[MemberController::class,'index']);
Route::post('add',[MemberController::class,'add']);
Route::get('show',[MemberController::class,'show']);
Route::get('edit/{id}',[MemberController::class,'edit']);
Route::post('update',[MemberController::class,'update']);
Route::get('delete/{id}',[MemberController::class,'delete']);