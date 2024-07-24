<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop(){
        return view('home.shop');
    }
    public function shopDetails(){
        return view('home.shop-details');
    }
}
