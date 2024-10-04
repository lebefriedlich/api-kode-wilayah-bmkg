<?php

namespace App\Http\Controllers;

use App\Models\WilayahModel;
use Illuminate\Http\Request;

class WilayahController extends Controller
{
    public function getProvinsi()
    {
        $provinsi = WilayahModel::whereRaw('LENGTH(kode) = 2')->get();

        return response()->json([
            'status' => 'success',
            'message' => 'Data provinsi berhasil diambil',
            'status_code' => 200,
            'data' => $provinsi,
        ], 200);
    }

    public function getKabupatenKota($kodeProvinsi)
    {
        $kabupatenKota = WilayahModel::whereRaw('LENGTH(kode) = 5')
            ->where('kode', 'like', $kodeProvinsi . '%')
            ->get();

        return response()->json([
            'status' => 'success',
            'message' => 'Data kabupaten atau kota berhasil diambil',
            'status_code' => 200,
            'data' => $kabupatenKota,
        ], 200);
    }

    public function getKecamatan($kodeKabupatenKota)
    {
        $kecamatan = WilayahModel::whereRaw('LENGTH(kode) = 8')
            ->where('kode', 'like', $kodeKabupatenKota . '%')
            ->get();

        return response()->json([
            'status' => 'success',
            'message' => 'Data kecamatan berhasil diambil',
            'status_code' => 200,
            'data' => $kecamatan,
        ], 200);
    }

    public function getDesaKelurahan($kodeKecamatan)
    {
        $desaKelurahan = WilayahModel::whereRaw('LENGTH(kode) = 13')
            ->where('kode', 'like', $kodeKecamatan . '%')
            ->get();

        return response()->json([
            'status' => 'success',
            'message' => 'Data desa atau kelurahan berhasil diambil',
            'status_code' => 200,
            'data' => $desaKelurahan,
        ], 200);
    }
}
