<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContadorController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
    $pesquisa = DB::table('contadors')->first();
    $contador = $pesquisa->total_downloads;
    return view('welcome',compact('contador'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/incrementar-download', [ContadorController::class, 'incrementar']);

Route::view('/tea', 'internas.tea')->name('tea');
Route::view('/tdah', 'internas.tdah')->name('tdah');
Route::view('/dislexia', 'internas.dislexia')->name('dislexia');
Route::view('/discalculia', 'internas.discalculia')->name('discalculia');
Route::view('/disgrafia', 'internas.disgrafia')->name('disgrafia');
Route::view('/tourette', 'internas.tourette')->name('tourette');

Route::get('/baixar-pdf', [ContadorController::class, 'downloadPdf'])->name('baixar-pdf');


