<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
      return "Ini dari HomeController";
    }

    public function show_html()
    {
      return view('home.halo');
    }

    public function belajar_blade()
    {
      $nama = "joko";
      $daftar_hewan = ["kucing","jerapah","bebek"];
      return view('home.belajar_blade', compact(
          'nama','daftar_hewan'
      ));
    }

    public function penggunaan_layout()
    {
      return view('home.penggunaan_layout');
    }

    public function contoh()
    {
      return view('home.contoh');
    }

    public function contoh_post(Request $request)
    {
      $nama = $request->get('nama');
      return "ini Function Contoh Post dengan nama = ".$nama;
    }
}
