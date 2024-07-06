<?php

namespace App\Http\Controllers;

use App\Models\KategoriBeritaModel;
use Illuminate\Http\Request;

class KategoriBeritaController extends Controller
{
    public function index()
    {
        $title = 'Kategori Berita';
        $kategori_berita = KategoriBeritaModel::get();
        $no = 1;

        return view('admin.berita.kategori.kategori', compact(
            'title',
            'kategori_berita',
            'no'
        ));
    }

    public function tambah()
    {
        $title = 'Tambah Kategori Berita';

        return view('admin.berita.kategori.kategori_tambah', compact(
            'title'
        ));
    }

    public function action_tambah(Request $request)
    {
        $nama_kategori = $request->nama_kategori;

        $kategori_berita = new KategoriBeritaModel();
        $kategori_berita->nama_kategori = $nama_kategori;

        $kategori_berita->save();
        return redirect('/kategori_berita')->with('success', 'Kategori Berita berhasil di tambah.');
    }

    public function edit($id)
    {
        $title = 'Edit Kategori Berita';
        $detail = KategoriBeritaModel::findOrFail($id);

        return view('admin.berita.kategori.kategori_edit', compact(
            'title',
            'detail'
        ));
    }

    public function action_edit($id, Request $request)
    {
        $nama_kategori = $request->nama_kategori;

        $kategori_berita = KategoriBeritaModel::findOrFail($id);
        $kategori_berita->update([
            'nama_kategori' => $nama_kategori
        ]);

        return redirect('/kategori_berita')->with('success', 'Kategori Berita berhasil di update.');
    }

    public function hapus($id)
    {
        $kategori_berita = KategoriBeritaModel::findOrFail($id);
        $kategori_berita->delete();

        return redirect('/kategori_berita')->with('success', 'Kategori Berita berhasil di hapus.');
    }
}
