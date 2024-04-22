<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HubungController;
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
    return view('kalkulator.index');
});
Route::resource('hitung', ProsesController::class);
Route::resource('hitung2', ProsesController2::class);
Route::get('kalkulator1', [HubungController::class, 'kalkulator1']);
Route::get('index', [HubungController::class, 'index']);
Route::get('kalkulator2', [HubungController::class, 'kalkulator2']);
Route::get('kalkulatorjs', [HubungController::class, 'kalkulatorjs']);