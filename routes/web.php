<?php

use App\Http\Controllers\CostumerController;
use App\Http\Controllers\PakaianController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\SupplierController;
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

Route::get('/', function () {
    return view('layout.main');
});

Route::resource('pakaian',PakaianController::class);
Route::resource('costumer',CostumerController::class);
Route::resource('supplier',SupplierController::class);
Route::resource('pembelian',PembelianController::class);
Route::resource('pesanan',PesananController::class);


// Route::get('/dasboard', function () {
//     return view('home', Home);
// });
