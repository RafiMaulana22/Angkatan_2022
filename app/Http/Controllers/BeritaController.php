<?php

namespace App\Http\Controllers;

use App\Models\BeritaModel;
use App\Models\KategoriBeritaModel;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $title = 'Berita';
        $berita = BeritaModel::get();

        return view('admin.berita.berita.berita', compact(
            'title',
            'berita'
        ));
    }

    public function tambah()
    {
        $title = 'Tambah Berita';
        $kategori_berita = KategoriBeritaModel::get();

        return view('admin.berita.berita.berita_tambah', compact(
            'title',
            'kategori_berita'
        ));
    }
}
