<?php

use App\Http\Controllers\WilayahController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/wilayah/provinsi', [WilayahController::class, 'getProvinsi']);
Route::get('/wilayah/kabupaten/{kode_provinsi}', [WilayahController::class, 'getKabupatenKota']);
Route::get('/wilayah/kecamatan/{kode_kabupaten}', [WilayahController::class, 'getKecamatan']);
Route::get('/wilayah/desa/{kode_kecamatan}', [WilayahController::class, 'getDesaKelurahan']);
