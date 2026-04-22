<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{


    // Metodo Home - Carregar a index

    public function home()
    {
        return view('site.home.home');
    }
}
