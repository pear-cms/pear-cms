<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Validator;
use Helpers;
use Auth;
use DB;
use Lang;
use Account;
use Realms;
use Characters;
use Logs;
use NewsComments;
use News;
use Theme;

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
      // Dashboard page.
      return view('admin.home',
      [
        'title' => 'Admin Panel',
      ]);
    }

    public function settings()
    {
      // Settings page.
      return view('admin.settings.home',
      [
        'title' => 'Settings',
      ]);
    }

    public function coreShow()
    {
      // Website settings page.
      return view('admin.settings.core',
      [
        'title' => 'Core Settings',
      ]);
    }

    public function saveCoreSettings(Request $request)
    {
      // Settings page.

      $validator = Validator::make($request->all(), [
        'appName'               => 'required|min:5',
        'appDesc'               => 'required|min:5|max:500',
        'appUrl'                => 'required|min:10',
        'realmlist'             => 'required|min:5',
        'metaDescription'       => 'required|min:10|max:250',
        'metaKeywords'          => 'required|min:10',

        'recaptchaSiteKey'      => 'required',
        'recaptchaSecretKey'    => 'required',
        'paypalClientID'        => 'required',
        'paypalSecretKey'       => 'required',

        'authHost'              => 'required',
        'authDatabase'          => 'required',
        'authUsername'          => 'required',

        'charactersHost'        => 'required',
        'charactersDatabase'    => 'required',
        'charactersUsername'    => 'required',

        'worldHost'             => 'required',
        'worldDatabase'         => 'required',
        'worldUsername'         => 'required',

        'websiteHost'           => 'required',
        'websiteDatabase'       => 'required',
        'websiteUsername'       => 'required',


        ]);
        if ($validator->fails())
        {
            return response()->json(['success' => false, 'errors' => $validator->getMessageBag()->toArray()], 422);
        }
            Helpers::setConfig([
              'APP_NAME'             => '"' . $request->input('appName') . '"',
              'APP_INFO'             => '"' . $request->input('appDesc') . '"',
              'APP_URL'              => $request->input('appUrl'),
              'REALMLIST'            => $request->input('realmlist'),
              'META_DESCRIPTION'     => '"' . $request->input('metaDescription') . '"',
              'META_KEYWORDS'        => '"' . $request->input('metaKeywords') . '"',
              'APP_DEBUG'            => $request->input('appDebugging'),
              'SITE_MAINTENANCE'     => $request->input('siteMaintenance'),
              'AUTH_MAINTENANCE'     => $request->input('authMaintenance'),
              'ERROR_LOGGING'        => $request->input('errorLogging'),

              'DB_HOST_AUTH'        => $request->input('authHost'),
              'DB_DATABASE_AUTH'    => $request->input('authDatabase'),
              'DB_USERNAME_AUTH'    => $request->input('authUsername'),
              'DB_PASSWORD_AUTH'    => $request->input('authPassword'),

              'DB_HOST_CHARACTERS'        => $request->input('charactersHost'),
              'DB_DATABASE_CHARACTERS'    => $request->input('charactersDatabase'),
              'DB_USERNAME_CHARACTERS'    => $request->input('charactersUsername'),
              'DB_PASSWORD_CHARACTERS'    => $request->input('charactersPassword'),

              'DB_HOST_WORLD'        => $request->input('worldHost'),
              'DB_DATABASE_WORLD'    => $request->input('worldDatabase'),
              'DB_USERNAME_WORLD'    => $request->input('worldUsername'),
              'DB_PASSWORD_WORLD'    => $request->input('worldPassword'),

              'DB_HOST_WEBSITE'        => $request->input('websiteHost'),
              'DB_DATABASE_WEBSITE'    => $request->input('websiteDatabase'),
              'DB_USERNAME_WEBSITE'    => $request->input('websiteUsername'),
              'DB_PASSWORD_WEBSITE'    => $request->input('websitePassword'),

              'RECAPTCHA_PUBLIC_KEY'  => $request->input('recaptchaSiteKey'),
              'RECAPTCHA_PRIVATE_KEY' => $request->input('recaptchaSecretKey'),
              'PAYPAL_CLIENT_ID'      => $request->input('paypalClientID'),
              'PAYPAL_SECRET'         => $request->input('paypalSecretKey'),
              'PAYPAL_MODE'           => $request->input('paypalMode'),
            ]);
            return response()->json(['success' => true], 200);
    }


    public function realmsShow()
    {
      // Realms settings page.
      return view('admin.settings.realms', [
      'title'  => 'Realms Settings',
      'realms' => Realms::paginate(5),
      ]);
    }

    public function realmShow($id)
    {
      // Realm settings page.
      return view('admin.settings.realm', [
      'title'  => 'Realm Settings',
      'realm' => Realms::where('id', $id)->first(),
      ]);
    }

    public function saveRealmSettings($id, Request $request)
    {
      // Settings page.

      $validator = Validator::make($request->all(), [
        'realmName'           => 'required|min:3|max:32',
        'realmAddress'        => 'required|min:3|max:255|ipv4',
        'realmDescription'    => 'max:150',
        'realmPort'           => 'required|integer',
        'realmIcon'           => 'required|integer',
        'realmSecurityLevel'  => 'required|integer',
        'realmGameBuild'      => 'required|integer',


        ]);
        if ($validator->fails())
        {
            return response()->json(['success' => false, 'errors' => $validator->getMessageBag()->toArray()], 422);
        }
            Realms::where('id', $id)->update([
              'name'                  => $request->input('realmName'),
              'address'               => $request->input('realmAddress'),
              'port'                  => $request->input('realmPort'),
              'description'           => $request->input('realmDescription'),
              'icon'                  => $request->input('realmIcon'),
              'allowedSecurityLevel'  => $request->input('realmSecurityLevel'),
              'gamebuild'             => $request->input('realmGameBuild'),
            ]);
            return response()->json(['success' => true], 200);
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
      return view('admin.accounts.edit',
      [
        'title' => 'Edit Account',
        'account' => Account::find($id),
      ]);
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
        'accounts' => Account::paginate(10),
      ]);
    }

    public function themes()
    {
      // Dashboard page.
      return view('admin.themes.home',
      [
        'title' => 'Themes',
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

    public function editArticle($id)
    {
      return view('admin.articles.article',
      [
        'title' => 'Editing Article',
        'article' => News::where('id', $id)->first(),
      ]);
    }

    public function saveArticle($id, Request $request)
    {
      // Save article.

      $validator = Validator::make($request->all(), [
        'articleTitle'           => 'required|min:3|max:50',
        'articleDescription'     => 'required|min:3|max:255',
        'articleContent'         => 'required|max:65000',
        'articleImage'           => 'required',


        ]);
        if ($validator->fails())
        {
            return response()->json(['success' => false, 'errors' => $validator->getMessageBag()->toArray()], 422);
        }
            News::where('id', $id)->update([
              'title'                    => $request->input('articleTitle'),
              'description'              => $request->input('articleDescription'),
              'content'                  => $request->input('articleContent'),
              'image'                    => $request->input('articleImage'),
            ]);
            return response()->json(['success' => true], 200);
    }

    public function createArticle()
    {
      return view('admin.articles.create',
      [
        'title' => 'Creating Article'
      ]);
    }

    public function publishArticle(Request $request)
    {
      // Publish article.

      $validator = Validator::make($request->all(), [
        'articleTitle'           => 'required|min:3|max:50',
        'articleDescription'     => 'required|min:3|max:255',
        'articleContent'         => 'required|max:65000',
        'articleImage'           => 'required',


        ]);
        if ($validator->fails())
        {
            return response()->json(['success' => false, 'errors' => $validator->getMessageBag()->toArray()], 422);
        }
            News::insert([
              'title'                    => $request->input('articleTitle'),
              'description'              => $request->input('articleDescription'),
              'content'                  => $request->input('articleContent'),
              'image'                    => $request->input('articleImage'),
              'author'                   => Auth::user()->username,
              'timestamp'                => time(),
            ]);
            return response()->json(['success' => true], 200);
    }
}
