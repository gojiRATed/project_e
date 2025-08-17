<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsAppController extends Controller
{
  public function halamanUtama()
  {
    return view('app.dashboard');
  }

  public function halamanPengaturan()
  {
    return view('pengaturan');
  }

  public function halamanPengaturanSekolah()
  {
    return view('pengaturan-sekolah');
  }
}
