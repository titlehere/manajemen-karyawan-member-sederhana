<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class karyawan
{
    // Mendapatkan semua data karyawan
    public function getAllKaryawan()
    {
        return DB::table('karyawan')->get();
    }

    // Menghitung total Gaji Pokok
    public function getTotalGajiPokok()
    {
        return DB::table('karyawan')->sum('gajipokok');
    }

    // Menghitung total Lembur
    public function getTotalLembur()
    {
        return DB::table('karyawan')->sum('lembur');
    }

    // Menambahkan data karyawan baru
    public function createKaryawan($data)
    {
        return DB::table('karyawan')->insert($data);
    }

    // Mendapatkan data karyawan berdasarkan nama
    public function getKaryawanByNama($nama)
    {
        return DB::table('karyawan')->where('nama', $nama)->first();
    }

    // Memperbarui data karyawan
    public function updateKaryawan($nama, $data)
    {
        return DB::table('karyawan')->where('nama', $nama)->update($data);
    }

    // Menghapus data karyawan
    public function deleteKaryawan($nama)
    {
        return DB::table('karyawan')->where('nama', $nama)->delete();
    }
}