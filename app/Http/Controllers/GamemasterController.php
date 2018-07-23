<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Validator;
use Helpers;
use Auth;
use Redirect;
use Input;
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
      return view('gm.home',
      [
        'title' => 'GM Panel'
      ]);
    }

    public function viewAccountList()
    {
      return view('gm.characters.list',
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
      // get IP info for last ip that accessed account.
      $ip = Helpers::getIPInfo($data->last_ip);
      return view('gm.characters.view-account',
      [
        'title'   => 'Viewing account ' . $data->username,
        'account' => $data,
        'ip'      => $ip
      ]);
    }

    public function editAccount($id)
    {
      if (!Helpers::checkAccountExists($id)) {
        return redirect('/gm');
      }
      $data = Helpers::getAccountInformation($id);
      return view('gm.characters.edit-account',
      [
        'title' => 'Editing account '.$data->username,
        'account' => $data
      ]);
    }

    public function viewTicketList()
    {
      return view('gm.tickets.ticket-list',
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

    public function closeTicket($id)
    {
        if (Helpers::checkTicketExists($id)) {
            DB::connection('characters')->table('gm_ticket')->where('id', $id)->update([
             'type' => '1',
             'closedBy' => Auth::user()->id
                // Need update lastModificationTime too
            ]);
            return redirect()->route('viewTicket', $id);
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
      return view('gm.characters.customize-character',
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

    public function publishArticleForm()
    {
      return view('gm.news.publish-article',
      [
        'title' => 'Publish Article'
      ]);
    }

    public function publishArticle(Request $request)
    {
      $validator = $request->validate([
            'title'       => 'required|max:50',
            'description' => 'required|max:255',
            'image'       => 'required|max:50',
            'content'     => 'required|max:5000'
        ]);

        $query = DB::connection('website')->table('news')->insert([
          'title'         => $request->get('title'),
          'description'   => $request->get('description'),
          'content'       => $request->get('content'),
          'image'         => $request->get('image'),
          'timestamp'     => time(),
          'author'        => Auth::user()->username
        ]);

      if ( $query )
      {
        return redirect()->to('/news');
      } else {
        return false;
      }
    }
}
