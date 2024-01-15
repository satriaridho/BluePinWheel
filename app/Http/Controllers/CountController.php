<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountController extends Controller
{
    // showEsti

    public function showEsti()
    {
        return view('estimasi');
    }

    // menghitung laravel

    public function count(Request $request)
    {

        if ($request->service == "" && $request->jenis == "") {
            return redirect('estimasi')->with('toast_error', 'Ada yang belum tercentang loch !!!');
        } elseif ($request->service == "") {
            return redirect('estimasi')->with('toast_error', 'Ada yang belum tercentang loch !!!');
        } elseif ($request->jenis == "") {
            return redirect('estimasi')->with('toast_error', 'Ada yang belum tercentang loch !!!');
        } else {

            // logo
            if ($service = join(',', $request->service) == "logo") {
                $service = 30000;
                if ($jenis = $request->jenis == 1) { // personal
                    $jenis = 20000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa Logo dan untuk keperluan Personal adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.')  . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                } elseif ($jenis = $request->jenis == 2) { //Sekolah
                    $jenis = 50000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa Logo dan untuk keperluan School adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.')  . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                } elseif ($jenis = $request->jenis == 3) { // company
                    $jenis = 100000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa Logo dan untuk keperluan Company adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.')  . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                } elseif ($jenis = $request->jenis == 4) { // esport
                    $jenis = 70000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa Logo dan untuk keperluan Esport adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.') . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                }

                // web
            } elseif ($service = join(',', $request->service) == "web") {
                $service = 1000000;

                if ($jenis = $request->jenis == 1) { // personal
                    $jenis = 500000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa Web dan untuk keperluan Personal adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.')  . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                } elseif ($jenis = $request->jenis == 2) { //Sekolah
                    $jenis = 3000000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa Web dan untuk keperluan School adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.')  . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                } elseif ($jenis = $request->jenis == 3) { // company
                    $jenis = 4000000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa Web dan untuk keperluan Company adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.')  . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                } elseif ($jenis = $request->jenis == 4) { // esport
                    $jenis = 5000000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa Web dan untuk keperluan Esport adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.') . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                }

                // id card
            } elseif ($service = join(',', $request->service) == "id card") {
                $service = 20000;

                if ($jenis = $request->jenis == 1) { // personal
                    $jenis = 5000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa Id Card dan untuk keperluan Personal adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.')  . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                } elseif ($jenis = $request->jenis == 2) { //Sekolah
                    $jenis = 10000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa Id Card dan untuk keperluan School adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.')  . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                } elseif ($jenis = $request->jenis == 3) { // company
                    $jenis = 20000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa Id Card dan untuk keperluan Company adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.')  . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                } elseif ($jenis = $request->jenis == 4) { // esport
                    $jenis = 30000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa Id Card dan untuk keperluan Esport adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.') . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                }

                // logo,web
            } elseif ($service = join(',', $request->service) == "logo,web") {
                $service = 1030000;
                if ($jenis = $request->jenis == 1) { // personal
                    $jenis = 520000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa Logo & Web dan untuk keperluan Personal adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.')  . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                } elseif ($jenis = $request->jenis == 2) { //Sekolah
                    $jenis = 3050000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa Logo & Web dan untuk keperluan School adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.')  . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                } elseif ($jenis = $request->jenis == 3) { // company
                    $jenis = 4100000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa Logo & Web dan untuk keperluan Company adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.')  . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                } elseif ($jenis = $request->jenis == 4) { // esport
                    $jenis = 5070000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa Logo & Web dan untuk keperluan Esport adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.') . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                }
            } elseif ($service = join(',', $request->service) == "web,logo") {
                $service = 1030000;
                if ($jenis = $request->jenis == 1) { // personal
                    $jenis = 520000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa Logo & Web dan untuk keperluan Personal adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.')  . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                } elseif ($jenis = $request->jenis == 2) { //Sekolah
                    $jenis = 3050000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa Logo & Web dan untuk keperluan School adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.')  . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                } elseif ($jenis = $request->jenis == 3) { // company
                    $jenis = 4100000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa Logo & Web dan untuk keperluan Company adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.')  . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                } elseif ($jenis = $request->jenis == 4) { // esport
                    $jenis = 5070000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa Logo & Web dan untuk keperluan Esport adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.') . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                }

                // web, id card
            } elseif ($service = join(',', $request->service) == "web,id card") {
                $service = 1020000;

                if ($jenis = $request->jenis == 1) { // personal
                    $jenis = 505000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa ID Card & Web dan untuk keperluan Personal adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.')  . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                } elseif ($jenis = $request->jenis == 2) { //Sekolah
                    $jenis = 3010000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa ID Card & Web dan untuk keperluan School adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.')  . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                } elseif ($jenis = $request->jenis == 3) { // company
                    $jenis = 4020000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa ID Card & Web dan untuk keperluan Company adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.')  . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                } elseif ($jenis = $request->jenis == 4) { // esport
                    $jenis = 5030000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa ID Card & Web dan untuk keperluan Esport adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.') . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                }
            } elseif ($service = join(',', $request->service) == "id card,web") {
                $service = 1020000;

                if ($jenis = $request->jenis == 1) { // personal
                    $jenis = 505000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa ID Card & Web dan untuk keperluan Personal adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.')  . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                } elseif ($jenis = $request->jenis == 2) { //Sekolah
                    $jenis = 3010000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa ID Card & Web dan untuk keperluan School adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.')  . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                } elseif ($jenis = $request->jenis == 3) { // company
                    $jenis = 4020000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa ID Card & Web dan untuk keperluan Company adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.')  . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                } elseif ($jenis = $request->jenis == 4) { // esport
                    $jenis = 5030000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa ID Card & Web dan untuk keperluan Esport adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.') . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                }

                // id card, logo
            } elseif ($service = join(',', $request->service) == "id card,logo") {
                $service = 50000;
                if ($jenis = $request->jenis == 1) { // personal
                    $jenis = 70000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa Logo & Id Card dan untuk keperluan Personal adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.')  . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                } elseif ($jenis = $request->jenis == 2) { //Sekolah
                    $jenis = 60000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa Logo & Id Card dan untuk keperluan School adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.')  . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                } elseif ($jenis = $request->jenis == 3) { // company
                    $jenis = 120000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa Logo & Id Card dan untuk keperluan Company adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.')  . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                } elseif ($jenis = $request->jenis == 4) { // esport
                    $jenis = 100000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa Logo & Id Card dan untuk keperluan Esport adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.') . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                }
            } elseif ($service = join(',', $request->service) == "logo,id card") {
                $service = 50000;
                if ($jenis = $request->jenis == 1) { // personal
                    $jenis = 70000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa Logo & Id Card dan untuk keperluan Personal adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.')  . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                } elseif ($jenis = $request->jenis == 2) { //Sekolah
                    $jenis = 60000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa Logo & Id Card dan untuk keperluan School adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.')  . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                } elseif ($jenis = $request->jenis == 3) { // company
                    $jenis = 120000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa Logo & Id Card dan untuk keperluan Company adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.')  . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                } elseif ($jenis = $request->jenis == 4) { // esport
                    $jenis = 100000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa Logo & Id Card dan untuk keperluan Esport adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.') . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                }
            } elseif ($service = join(',', $request->service) == "logo,id card,web") {
                $service = 1050000;

                if ($jenis = $request->jenis == 1) { // personal
                    $jenis = 570000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa Web,Logo,ID Card dan untuk keperluan Personal adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.')  . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                } elseif ($jenis = $request->jenis == 2) { //Sekolah
                    $jenis = 3060000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa Web,Logo,ID Card dan untuk keperluan School adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.')  . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                } elseif ($jenis = $request->jenis == 3) { // company
                    $jenis = 4120000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa Web,Logo,ID Card dan untuk keperluan Company adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.')  . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                } elseif ($jenis = $request->jenis == 4) { // esport
                    $jenis = 5100000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa Web,Logo,ID Card dan untuk keperluan Esport adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.') . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                }
            } elseif ($service = join(',', $request->service) == "logo,web,id card") {
                $service = 1050000;

                if ($jenis = $request->jenis == 1) { // personal
                    $jenis = 570000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa Web,Logo,ID Card dan untuk keperluan Personal adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.')  . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                } elseif ($jenis = $request->jenis == 2) { //Sekolah
                    $jenis = 3060000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa Web,Logo,ID Card dan untuk keperluan School adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.')  . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                } elseif ($jenis = $request->jenis == 3) { // company
                    $jenis = 4120000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa Web,Logo,ID Card dan untuk keperluan Company adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.')  . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                } elseif ($jenis = $request->jenis == 4) { // esport
                    $jenis = 5100000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa Web,Logo,ID Card dan untuk keperluan Esport adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.') . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                }
            } elseif ($service = join(',', $request->service) == "web,id card,logo") {
                $service = 1050000;

                if ($jenis = $request->jenis == 1) { // personal
                    $jenis = 570000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa Web,Logo,ID Card dan untuk keperluan Personal adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.')  . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                } elseif ($jenis = $request->jenis == 2) { //Sekolah
                    $jenis = 3060000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa Web,Logo,ID Card dan untuk keperluan School adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.')  . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                } elseif ($jenis = $request->jenis == 3) { // company
                    $jenis = 4120000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa Web,Logo,ID Card dan untuk keperluan Company adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.')  . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                } elseif ($jenis = $request->jenis == 4) { // esport
                    $jenis = 5100000;
                    $harga = $service + $jenis;
                    return redirect('estimasi')->with('success', ' Perhitungan dari Estimasi untuk jasa Web,Logo,ID Card dan untuk keperluan Esport adalah sekitar ' . '</br>' . ' RP. ' . number_format($harga, 0, ',', '.') . '</br>'  . 'Jika Tertarik dengan jasa kami hubungi kami kehalaman Contact ');
                }
            }
        }
    }
}
