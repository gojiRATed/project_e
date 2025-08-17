<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsAppMuridController extends Controller
{
  public function indexPerpus()
  {
    return view('app.murid.index.home-perpus');
  }

  public function indexKoperaasi()
  {
    return view('app.murid.index.home-koperasi');
  }

  public function indexDompet()
  {
    return view('app.murid.index.home-dompet');
  }

  public function indexKantin()
  {
    return view('app.murid.index.home-kantin');
  }

  public function indexTataUsaha()
  {
    return view('app.murid.index.home-tatausaha');
  }
}
