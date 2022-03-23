<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function login()
    {
        return view('pages.home');
    }

    public function ajuda()
    {
        return view('pages.help');
    }

    public function ramais()
    {
        return view('pages.ramais');
    }

    public function center($name = 'Fulano')
    {
        return 'center, ' .$name;
    }
}
