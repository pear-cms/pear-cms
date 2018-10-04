<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Helpers;
use DB;
use Auth;
use Changelog;

class ChangelogController extends Controller
{

    public function index()
    {
      return view('changelogs.changelogs',
      [
        'title'     => 'Viewing Changelogs',
        'changelogs'  => Changelog::select('id', 'title', 'content', 'timestamp')->orderBy('id', 'desc')->get(),
      ]);
    }
    public function getChangelog($id)
    {
      if ( $data = Changelog::where('id', $id)->first() ) {
        return view('changelogs.view-changelog',
        [
          'title'     => $data->title,
          'changelog'      => $data,
        ]);
      } else {
        return redirect()->route('newsId', $id);
      }
    }
}
