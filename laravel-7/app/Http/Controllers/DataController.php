<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function daftarKaryawan(){
        return view('halaman', ['judul' => 'Daftar Karyawan']);
    }

    public function tabelKaryawan(){
        return view('halaman', ['judul' => 'Tabel Karyawan']);
    }

    public function blogKaryawan(){
        return view('halaman', ['judul' => 'Blog Karyawan']);
    }
}
