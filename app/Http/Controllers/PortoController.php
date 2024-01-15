<?php

namespace App\Http\Controllers;

use App\Models\Porto;
use Illuminate\Http\Request;

class PortoController extends Controller
{
    // Menampilkan Halaman Admin Porto
    public function showAdminPorto()
    {
        $portos = Porto::orderBy('id', 'DESC')->get();
        return view('admin.porto', compact('portos'));
    }

    // Menampilkan Halaman Admin Tambah Porto
    public function showPortoTambah()
    {
        return view('admin.porto_tambah');
    }

    // Insert data ke dalam database
    public function PortoAdd(Request $request)
    {
        $gambar = $request->gambar;
        $namaFile = $gambar->getClientOriginalName();

        $porto = new Porto();
        $porto->gambar = $namaFile;
        $porto->title   = $request->title;
        $porto->categories = $request->categories;
        $porto->date    = date('Y-m-d');
        $porto->technologies = join(',', $request->teknologi);
        $porto->body    = $request->body;

        $gambar->move(public_path() . '/img_uplode', $namaFile);
        $porto->save();

        if ($porto) {
            return redirect('admin/porto')->with('toast_success', 'Berhasil Menambahkan Data');
        } else {
            return redirect()->back()->with('toast_error', 'Gagal menambahkan data');
        }
    }

    // Menampilkan halaman ubah porto 
    public function showPortoUbah($id)
    {
        $portos = Porto::find($id);
        return view('admin.ubah_porto', compact('portos'));
    }

    // Mengubah Data Porto
    public function PortoEdit(Request $request, $id)
    {
        $porto = Porto::find($id);

        if ($request->gambar != '') {
            $file = public_path('/img_uplode/');

            // menghapus gambar yang lama dalam folder 
            if ($porto->gambar != '' && $porto->gambar != NULL) {
                $file_old = $file . $porto->gambar;
                @unlink($file_old);
            }

            // Uplode gambar baru
            $newGambar = $request->gambar;
            $namaFile  = $newGambar->getClientOriginalName();
            $newGambar->move(public_path() . '/img_uplode', $namaFile);

            // sisipkan ke field gambar
            $porto->gambar = $namaFile;
        }

        $porto->title   = $request->title;
        $porto->categories = $request->categories;
        $porto->technologies = join(',', $request->teknologi);
        $porto->body    = $request->body;
        $porto->update();

        if ($porto) {
            return redirect('admin/porto')->with('toast_success', 'Berhasil Mengubah Data');
        } else {
            return redirect()->back()->with('toast_error', 'Gagal Mengubah Data');
        }
    }

    // hapus porto
    public function PortoDelete($id)
    {
        $porto = Porto::find($id);
        $porto->delete();

        return response()->json(['status' => 'Data Berhasil Dihapus']);
    }
}
