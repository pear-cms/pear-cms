<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Language;
use Helpers;

class ShopController extends Controller
{
    public function index()
    {
      return view('shop.home',
      [
        'title' => 'Shop',
      ]);

    }
}
