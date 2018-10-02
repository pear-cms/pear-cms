<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
Use Validator;
use Helpers;
use Auth;
use DB;
use Lang;
use Account;
use Characters;
class ShopController extends Controller
{
    public function index()
    {
      return view('shop.home',
      [
        'title' => 'Shop',
        'randomitems' => Helpers::randomShopItems(),
      ]);
    }

    public function showItems()
    {
      return view('shop.items',
      [
        'title' => 'Shop Items',
      ]);
    }

    public function showCategories()
    {
      return view('shop.categories',
      [
        'title' => 'Shop Categories',
      ]);
    }


    public function showCategory($id)
    {
      if($data = Helpers::getCategory($id))
      {
        return view('shop.category',
        [
          'title' => 'Category '.$data->name,
          'category' => $data,
        ]);
      } else {
        return redirect('/');
      }
    }
}
