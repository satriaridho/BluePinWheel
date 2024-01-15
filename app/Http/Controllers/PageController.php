<?php

namespace App\Http\Controllers;

use App\Models\Porto;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // Menampilkan Halaman Utama 
    public function index()
    {
        $portos = Porto::orderBy('id', 'DESC')->get();
        return view('index', compact('portos'));
    }

    // Menampilkan Halaman Portfolio
    public function portfolio()
    {
        $portos = Porto::orderBy('id', 'DESC')->get();
        return view('portfolio', compact('portos'));
    }
}
