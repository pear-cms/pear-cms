<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Validator;
use Helpers;
use Auth;
use DB;
use Lang;
use Account;
use Characters;
use Logs;
use NewsComments;
use News;

class AdminPanelController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admincheck');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // get IP info for last ip that accessed account.
      return view('admin.home',
      [
        'title' => __('translation.account_panel'),
      ]);
    }

    public function create()
    {

    }

    public function view($id)
    {
      return view('admin.accounts.view',
      [
        'title' => 'View Account',
        'account' => Account::find($id),
        'characters' => Characters::where('account', $id)->get(),
      ]);
    }

    public function edit($id)
    {
      $account = Account::find($id);
      return view('admin.accounts.edit')->with('account', $account);
    }

    public function update($id)
    {

    }

    public function delete($id)
    {
      if ( Account::destroy($id))
      {
        return response()->json(['success' => true], 200);
      } else {
        return response()->json(['success' => false], 200);
      }
    }

    public function deleteComment($id)
    {
      if ( NewsComments::destroy($id))
      {
        return response()->json(['success' => true], 200);
      } else {
        return response()->json(['success' => false], 200);
      }
    }

    public function deleteArticle($id)
    {
      if ( News::destroy($id))
      {
        return response()->json(['success' => true], 200);
      } else {
        return response()->json(['success' => false], 200);
      }
    }

    public function accounts()
    {
      // get IP info for last ip that accessed account.
      return view('admin.accounts.home',
      [
        'title' => 'Accounts',
        'accounts' => Account::paginate(15),
      ]);
    }

    public function comments()
    {
      // get IP info for last ip that accessed account.
      return view('admin.articles.comments',
      [
        'title' => 'Comments',
        'comments' => NewsComments::paginate(15),
      ]);
    }

    public function articles()
    {
      // get IP info for last ip that accessed account.
      return view('admin.articles.articles',
      [
        'title' => 'Articles',
        'articles' => News::paginate(15),
      ]);
    }
}
