<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\karyawan;

class ControllerKaryawan extends Controller
{
    protected $karyawan;

    public function __construct()
    {
        $this->karyawan = new karyawan(); // Inisialisasi model karyawan
    }

    // Menampilkan daftar karyawan
    public function tampilkaryawan()
    {
        $karyawan = $this->karyawan->getAllKaryawan(); // Ambil semua data karyawan
        $totalGajiPokok = $this->karyawan->getTotalGajiPokok(); // Total Gaji Pokok
        $totalLembur = $this->karyawan->getTotalLembur(); // Total Lembur

        return view('karyawan.tampil_karyawan', compact('karyawan', 'totalGajiPokok', 'totalLembur'));
    }

    // Menampilkan form tambah karyawan
    public function tambahkaryawan()
    {
        return view('karyawan.tambah_karyawan');
    }

    // Menyimpan data karyawan baru
    public function simpankaryawan(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255|unique:karyawan,nama',
            'jabatan' => 'required|string|max:255',
            'gajipokok' => 'required|integer',
            'lembur' => 'required|integer',
        ]);

        $this->karyawan->createKaryawan($data); // Simpan data menggunakan model

        return redirect('/');
    }

    // Menampilkan form edit karyawan
    public function ubahkaryawan($nama)
    {
        $karyawan = $this->karyawan->getKaryawanByNama($nama); // Ambil data berdasarkan nama
        return view('karyawan.ubah_karyawan', compact('karyawan'));
    }

    // Menyimpan perubahan data karyawan
    public function simpanubahkaryawan(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'gajipokok' => 'required|integer',
            'lembur' => 'required|integer',
        ]);

        $this->karyawan->updateKaryawan($request->nama, $data); // Update data menggunakan model

        return redirect('/');
    }

    // Menghapus data karyawan
    public function simpanhapuskaryawan(Request $request)
    {
        $this->karyawan->deleteKaryawan($request->nama); // Hapus data menggunakan model
        return redirect('/');
    }
}