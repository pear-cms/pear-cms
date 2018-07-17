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
      if (!Helpers::checkAccountExists($id)) {
        return redirect('/gm');
      }
      $data = Helpers::getAccountInformation($id);
      return view('gm.view-account',
      [
        'title' => 'Viewing account '.$data->username,
        'account' => $data
      ]);
    }

    public function editAccount($id)
    {
      if (!Helpers::checkAccountExists($id)) {
        return redirect('/gm');
      }
      $data = Helpers::getAccountInformation($id);
      return view('gm.edit-account',
      [
        'title' => 'Editing account '.$data->username,
        'account' => $data
      ]);
    }

    public function viewTicketList()
    {
      return view('gm.ticket-list',
      [
        'title' => 'Ticket List',
      ]);
    }

    public function viewTicket($id)
    {
        if (Helpers::checkTicketExists($id)) {
          $data = Helpers::getTicket($id);
          return view('acp.view-ticket',
          [
            'title' => 'Viewing ticket #' . $id ,
            'ticket' => $data
          ]);
        } else {
          return redirect('/gm');
        }
    }

    public function viewCustomizeCharacter($id)
    {
      if (!Helpers::checkAccountExists($id)) {
        return redirect('/gm');
      }
      $data = Helpers::getAccountInformation($id);
      return view('gm.customize-character',
      [
        'title' => 'Customize Character of '.$data->username,
        'account' => $data
      ]);
    }

    public function customizeCharacter($id, Request $request)
    {
      if(Helpers::characterCustomize($request->selectedCharacter, $request->customizeType))
      {
        return redirect()->back()->with("success", "Successfully added customization for ".Helpers::getCharacterNameFromGuid($request->selectedCharacter).".");
      } else {
        return redirect()->back()->with("error", "Something happened...");
      }
    }
}
