<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Customer;
use App\Models\Message;
use App\Models\Porto;


class DashboardController extends Controller
{
    // show dashboard
    public function showDasboard()
    {

        return view('admin.dashboard');
    }

    // menampilkan halaman admin/customer
    public function showAdminCustomer()
    {
        $customers = Customer::orderBy('id', 'DESC')->get();
        return view('admin.customers', compact('customers'));
    }

    // menghapus data customer;
    public function deleteCustomer($id)
    {
        $customers = Customer::find($id);
        $customers->delete();

        return response()->json(['status' => 'Data Berhasil Dihapus']);
    }

    // menampilkan halaman messages
    public function showAdminMessages()
    {
        $messages = Message::orderBy('id', 'DESC')->get();
        return view('admin.messages', compact('messages'));
    }

    // Menghapus pesanan
    public function deleteMessages($id)
    {
        $messages = Message::find($id);
        $messages->delete();

        return response()->json(['status' => 'Data Berhasil Dihapus']);
    }
}
