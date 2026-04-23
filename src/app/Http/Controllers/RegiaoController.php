<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegiaoController extends Controller
{
     public function home()
    {
        return view('site.regiao.regiao');
    }
}
