<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    // show message
    public function showMessage()
    {
        $messages = Message::orderBy('id', 'DESC')->get();
        return view('contact', compact('messages'));
    }

    // send Message
    public function sendMessage(Request $request)
    {
        $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->no_telp = $request->no_telp;
        $message->pesanan = $request->message;
        $message->save();

        if ($message) {
            return redirect()->back()->with('toast_success', 'Berhasil Mengirim Pesan');
        } else {
            return redirect()->back()->with('toast_error', 'Gagal Mengirim Pesan');
        }
    }
}
