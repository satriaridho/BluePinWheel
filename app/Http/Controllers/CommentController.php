<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    // tampilkan halaman admin comment
    public function showAdminComment()
    {
        $comments = Comment::orderBy('id', 'DESC')->get();
        return view('admin.comment', compact('comments'));
    }

    // Menghapus data testi di halaman admin 
    public function deleteAdminComment($id)
    {
        $comment = Comment::find($id);
        $comment->delete();

        return response()->json(['status' => 'Data Berhasil Dihapus']);
    }


    // Menampilkan Halaman testi
    public function showTesti()
    {
        $comments = Comment::orderBy('id', 'ASC')->get();
        return view('testimoni', compact('comments'));
    }

    // Menampilkan Halaman tambah testi atau komentar
    public function showAddTesti()
    {
        return view('testimoni_tambah');
    }

    // Proses memberikan testimoni atau komentar
    public function testiAdd(Request $request)
    {
        $comment = new Comment();
        $comment->id_customers = Auth::guard('customer')->user()->id;
        $comment->categories   = $request->categories;
        $comment->date         = date('Y-m-d');
        $comment->comment      = $request->comment;
        $comment->kepastian    = 0;
        $comment->save();

        if ($comment) {
            return redirect('testimoni')->with('success', 'Berhasil Mengirim Komentar, Tunggu Admin menyetujui komentar anda !');
        } else {
            return redirect()->back()->with('toast_error', 'Gagal Menambahkan Komentar');
        }
    }

    public function testiDelete($id)
    {
        $comment = Comment::find($id);
        $comment->delete();

        return response()->json(['status' => 'Data Berhasil Dihapus']);
    }

    // butuh kepastian loch kack
    public function kepastian($id)
    {
        $porto = Comment::find($id);
        $porto->kepastian = 1;
        $porto->update();

        if ($porto) {
            return redirect('admin/porto')->with('success', 'Berhasil Memberikan Kepastian');
        } else {
            return redirect()->back()->with('toast_error', 'Gagal Mengubah Data');
        }
    }
}
