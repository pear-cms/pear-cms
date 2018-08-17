<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Helpers;
use DB;
use Auth;
use News;
use NewsComments;

class NewsController extends Controller
{

    public function index()
    {
      return view('news.news',
      [
        'title'     => 'Viewing News',
        'articles'  => News::select('id', 'title', 'description', 'content', 'image', 'timestamp')->orderBy('id', 'desc')->get(),
      ]);
    }
    public function getArticle($id)
    {
      if ( $data = News::where('id', $id)->first() ) {
        return view('news.view-news',
        [
          'title'     => $data->title,
          'news'      => $data,
          'comments'  => News::find($id)->comments()->where('newsId', $id)->paginate(10),
        ]);
      } else {
        return redirect()->route('newsId', $id);
      }
    }

    public function addNewsComment($id, Request $request)
    {

      $validator = $request->validate([
            'comment' => 'required|min:30|max:250'
        ]);

        if( Helpers::checkIfGM() )
        {
          $is_gm = 1;
        } else {
          $is_gm = 0;
        }
        $query = NewsComments::insert([
          'newsId'    => $id,
          'comment'   => $request->get('comment'),
          'timestamp' => time(),
          'is_gm'     => $is_gm,
          'author'    => Auth::user()->username
        ]);

      if ( $query )
      {
        return redirect()->route('newsId', $id);
      } else {
        return false;
      }
    }
}
