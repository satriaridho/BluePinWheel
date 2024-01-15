<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    // show admin 
    public function showLoginAdmin()
    {
        return view('auth.admin');
    }

    // show Login Admin
    // public function loginAdmin()
    // {
    //     return route('auth.admin');
    // }

    // submit login admin
    public function submitAdmin(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {

            $request->session()->regenerate();
            return redirect('/admin')->with('toast_success', 'Login Success');
        }
        return redirect()->back()->with('toast_error', 'Login Failed');
    }

    // //Proses Register Customers
    public function uhuyAdmin(Request $request)
    {
        $customer = new Admin();
        $customer->username = $request->username;
        $customer->fullname = $request->username;
        $customer->email = $request->email;
        $customer->password = bcrypt($request->password);
        $customer->save();

        if ($customer) {
            return redirect('admin/admin/login')->with('toast_success', 'Regist Success');;
        } else {
            return redirect()->back()->with('toast_error', 'Register Failed');
        }
    }

    // // Membuka Halaman setting
    public function showSetting()
    {
        return view('admin.setting');
    }

    // Mengubah data pada account admin
    public function updateSetting(Request $request, $id)
    {
        $admin              = Admin::find($id);

        if ($request->foto != '') {
            $file = public_path('/uplodeAdmin/');

            // menghapus gambar yang lama dalam folder 
            if ($admin->foto != '' && $admin->foto != NULL) {
                $file_old = $file . $admin->foto;
                @unlink($file_old);
            }

            // Uplode gambar baru
            $newGambar = $request->foto;
            $namaFile  = $newGambar->getClientOriginalName();
            $newGambar->move(public_path() . '/uplodeAdmin', $namaFile);

            // sisipkan ke field gambar
            $admin->foto = $namaFile;
        }

        $admin->fullname    = $request->fullname;
        $admin->username    = $request->username;
        $admin->email       = $request->email;

        if ($request->password) {
            $admin->password    = bcrypt($request->password);
        } else {
            $admin->password    = Auth::guard('admin')->user()->password;
        }
        $admin->update();

        if ($admin) {
            return redirect()->back()->with('toast_success', 'Berhasil Mengubah Data');
        } else {
            return redirect()->back()->with('toast_error', 'Gagal Mengubah Data');
        }
    }
}
