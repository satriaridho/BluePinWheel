<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    // Menampilkan Halaman Login
    public function customerLogin()
    {
        return view('auth.login');
    }

    // Proses Register Customers
    public function submitRegis(Request $request)
    {
        $customer = new Customer();
        $customer->username = $request->username;
        $customer->email = $request->email;
        $customer->password = bcrypt($request->password);
        $customer->save();

        if ($customer) {
            return redirect('login/customer')->with('toast_success', 'Regist Success');
        } else {
            return redirect()->back()->with('toast_error', 'Regist Failed');
        }
    }

    // Proses Submit Login
    public function submitLogin(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::guard('customer')->attempt($credentials)) {

            $request->session()->regenerate();
            return redirect('/')->with('toast_success', 'Login Success');
        }
        return redirect()->back()->with('toast_error', 'Login Failed');
    }


    // Proses Logout 
    public function doLogout()
    {
        if (Auth::guard('customer')->check()) {
            Auth::guard('customer')->logout();
        } else if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
        }
        return redirect('/')->with('toast_success', 'Logout Success');
    }


    // Menampilkan Halaman Account Customer 
    public function showCustomerAcc()
    {
        return view('setting');
    }

    public function updateCstmrAcc(Request $request, $id)
    {
        $customer = Customer::find($id);

        if ($request->foto != '') {
            $file = public_path('/customer_uhuy/profile/');

            // menghapus gambar yang lama dalam folder 
            if ($customer->foto != '' && $customer->foto != NULL) {
                $file_old = $file . $customer->foto;
                @unlink($file_old);
            }

            // Uplode gambar baru
            $newGambar = $request->foto;
            $namaFile  = $newGambar->getClientOriginalName();
            $newGambar->move(public_path() . '/customer_uhuy/profile', $namaFile);

            // Password

            // sisipkan ke field gambar
            $customer->foto = $namaFile;
        }

        $customer->username = $request->username;
        $customer->email    = $request->email;

        if ($request->password) {
            $customer->password = bcrypt($request->password);
        } else {
            $customer->password = Auth::guard('customer')->user()->password;
        }

        $customer->no_telp  = $request->no_telp;
        $customer->update();

        if ($customer) {
            return redirect()->back()->with('toast_success', 'Berhasil Mengubah Data');
        } else {
            return redirect()->back()->with('toast_error', 'Gagal Mengubah Data');
        }
    }
}
