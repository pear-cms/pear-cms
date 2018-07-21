<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Helpers;
use DB;
use Auth;

class NewsController extends Controller
{

    public function index()
    {
      return view('news.news',
      [
        'title' => 'Viewing News'
      ]);
    }
    public function getNewsArticles($id)
    {
      $data = Helpers::getNewsArticle($id);
      if ( $data ) {
        return view('news.view-news',
        [
          'title'     => $data->title,
          'news'      => $data,
          'comments'  => Helpers::getNewsArticleComments($id)
        ]);
      } else {
        return redirect('/news');
      }
    }

    public function addNewsComment($id, Request $request)
    {

      $validator = $request->validate([
            'comment' => 'required|min:30|max:250'
        ]);
        $is_gm = 0;
        if(Helpers::checkIfGM())
        {
          $is_gm = 1;
        }
        $query = DB::connection('website')->table('news_comments')->insert([
          'newsid'    => $id,
          'comment'   => $request->get('comment'),
          'timestamp' => time(),
          'is_gm'     => $is_gm,
          'author'    => Auth::user()->username
        ]);

      if ( $query )
      {
        return back();
      } else {
        return false;
      }
    }
}
