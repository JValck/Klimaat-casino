<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PlayerAlias;

class HomeController extends Controller
{
    public function index()
    {
      return view('partials.public.home', ['action' => 'start']);
    }

    public function about(){
      return view('pages.general.about', ['aliases' => PlayerAlias::all()]);
    }
}
