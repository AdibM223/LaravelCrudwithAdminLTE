<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CuciController;
use App\Http\Controllers\MetodeController;
use App\Http\Controllers\TransaksiController;

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

// Route::get('/', function () {
//     return view('index');
// });

//route CRUD
Route::get('/', [CuciController::class, 'index']);
Route::get('/metode', [MetodeController::class, 'index']);
Route::get('/transaksi', [TransaksiController::class, 'index']);



Route::get('/tambahkendaraan', [CuciController::class, 'tambah1']);
Route::post('/inputkendaraan', [CuciController::class, 'input']);

Route::get('/tambahmetode', [MetodeController::class, 'tambah1']);
Route::post('/inputmetode', [MetodeController::class, 'input']);

Route::get('/tambahtransaksi', [TransaksiController::class, 'tambah1']);
Route::post('/inputtransaksi', [TransaksiController::class, 'input']);

Route::get('/editkendaraan/{id}', [CuciController::class, 'edit']);
Route::post('/updatekendaraan', [CuciController::class, 'update']);

Route::get('/editmetode/{id}', [MetodeController::class, 'edit']);
Route::post('/updatemetode', [MetodeController::class, 'update']);

Route::get('/edittransaksi/{id}', [TransaksiController::class, 'edit']);
Route::post('/updatetransaksi', [TransaksiController::class, 'update']);


Route::get('/deletekendaraan/{id}', [CuciController::class, 'hapus']);

Route::get('/deletemetode/{id}', [MetodeController::class, 'hapus']);

Route::get('/deletetransaksi/{id}', [TransaksiController::class, 'hapus']);
