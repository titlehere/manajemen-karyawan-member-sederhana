<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class member
{
    // Method untuk membaca semua data member
    public function bacamember()
    {
        return DB::table('member')->get();
    }

    // Method untuk menyimpan data member baru
    public function simpanmember($data)
    {
        DB::table('member')->insert([
            'kode_member' => $data['kode_member'],
            'nama_member' => $data['nama_member'],
            'umur_member' => $data['umur_member'],
            'alamat_member' => $data['alamat_member'],
            'telepon_member' => $data['telepon_member'],
            'tanggal_daftar_member' => $data['tanggal_daftar_member'],
        ]);
    }

    // Method untuk mendapatkan data member berdasarkan kode_member
    public function getmember($kode_member)
    {
        return DB::table('member')
                ->where('kode_member', '=', $kode_member)
                ->first(); // Menggunakan first() untuk mengambil satu data
    }

    // Method untuk mengubah data member
    public function ubahmember($kode_member, $data)
    {
        DB::table('member')
            ->where('kode_member', '=', $kode_member)
            ->update([
                'nama_member' => $data['nama_member'],
                'umur_member' => $data['umur_member'],
                'alamat_member' => $data['alamat_member'],
                'telepon_member' => $data['telepon_member'],
                'tanggal_daftar_member' => $data['tanggal_daftar_member'],
            ]);
    }

    // Method untuk menghapus data member
    public function hapusmember($kode_member)
    {
        DB::table('member')
            ->where('kode_member', '=', $kode_member)
            ->delete();
    }
}