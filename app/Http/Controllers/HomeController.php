<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $product = Product::all();

      return view('home',
      //antras parametras yra asoc masyvas, kaireje rasom kintamojo varda vaizde
      // desineje rasom kintamojo reiksme
      ['products' => $product]);
    }
}
