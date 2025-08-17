<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsPublicController extends Controller
{
    public function fiturIndex()
    {
        return view('public.fitur');
    }
}
