<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Validator;
use Helpers;
use Auth;
use DB;

class GamemasterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // get IP info for last ip that accessed account.
      $data = json_decode(file_get_contents("http://ip-api.com/json/" . Auth::user()->last_ip));
      return view('gm.home',
      [
        'title' => 'GM Panel',
        'data' => $data
      ]);
    }

    public function viewAccountList()
    {
      return view('gm.list',
      [
        'title' => 'Account List',
      ]);
    }

    public function viewAccount($id)
    {
      $data = Helpers::getAccountInformation($id);
      return view('gm.view-account',
      [
        'title' => 'Viewing account '.$data->username,
        'account' => $data
      ]);
    }

    public function editAccount($id)
    {
      $data = Helpers::getAccountInformation($id);
      return view('gm.edit-account',
      [
        'title' => 'Editing account '.$data->username,
        'account' => $data
      ]);
    }
}
