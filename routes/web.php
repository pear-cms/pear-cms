<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if ( env('SITE_MAINTENANCE') == TRUE) {
      // if site maintenance is set to true, show maintenance page.
      return view('misc.maintenance', ['title' => __('translation.maintenance_mode')]);
    } else {
      // if not, continue as normal.
    return view('welcome');
  }
});

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);
Route::get('backend', 'AdminPanelController@index')->name('backend');
Route::get('backend/settings', 'AdminPanelController@settings')->name('settings');
Route::get('backend/settings/core', 'AdminPanelController@coreShow');
Route::post('backend/settings/core/save', 'AdminPanelController@saveCoreSettings');
Route::get('backend/settings/realms', 'AdminPanelController@realmsShow');
Route::get('backend/settings/realm/{id}', 'AdminPanelController@realmShow');
Route::post('backend/settings/realm/save/{id}', 'AdminPanelController@saveRealmSettings');

Route::get('backend/accounts', 'AdminPanelController@accounts')->name('accountsmanager');
Route::get('backend/account/{id}', 'AdminPanelController@view');
Route::get('backend/account/{id}/edit', 'AdminPanelController@edit');
Route::post('backend/account/{id}/delete', 'AdminPanelController@delete');

Route::get('backend/comments', 'AdminPanelController@comments')->name('commentsmanager');
Route::post('backend/comment/{id}/delete', 'AdminPanelController@deleteComment');

Route::get('backend/articles', 'AdminPanelController@articles')->name('articlesmanager');
Route::get('backend/article/create', 'AdminPanelController@createArticle');
Route::post('backend/article/create/publish', 'AdminPanelController@publishArticle');
Route::get('backend/article/edit/{id}', 'AdminPanelController@editArticle');
Route::post('backend/article/edit/save/{id}', 'AdminPanelController@saveArticle');
Route::post('backend/article/{id}/delete', 'AdminPanelController@deleteArticle');

Route::get('backend/themes', 'AdminPanelController@themes')->name('themesmanager');

Route::fallback(function() {
  Helpers::saveErrorLog(request()->fullUrl() . ' is missing?');
  return response()->view('misc.missing', [], 404);
});

// Route group will redirect all routes within to maintenance page if site maintenance is enabled.
Route::group(['middleware' => ['\App\Http\Middleware\SiteMaintenance::class']], function () {

  // Connection guide route below.
  Route::get('/connection-guide', function () {
      return view('misc.connection-guide', ['title' => __('translation.connection_guide')]);
  });

  // Donation routes below.
  Route::get('donate', array('as' => 'addmoney.paywithpaypal', 'uses' => 'PaypalController@showForm'));
  Route::post('donate', array('as' => 'addmoney.paypal', 'uses' => 'PaypalController@store'));
  Route::get('donate/status', array('as' => 'payment.status', 'uses' => 'PaypalController@getPaymentStatus'));

  Route::get('/status', function () {
      return view('server.status', ['title' => __('translation.server_status')]);
  });

  // News routes below.
  Route::get('/news/{id}', 'NewsController@getArticle')->name('getArticle');
  Route::post('/news/{id}', 'NewsController@addNewsComment')->name('newsId');
  Route::get('/news', 'NewsController@index')->name('news');

  //Shop
  Route::get('/shop', 'ShopController@index');
});

// Route group will redirect all routes within to maintenance page if auth maintenance is enabled.
Route::group(['middleware' => ['\App\Http\Middleware\AuthMaintenance::class']], function () {

  // Account panel index route below.
  Route::get('/acp', 'AccountPanelController@index');

  // Acccount panel view character routes below.
  Route::get('/acp/character/{name}', 'AccountPanelController@viewCharacter');

  // Account panel change password routes below.
  Route::get('/acp/password', 'AccountPanelController@changePasswordForm');
  Route::post('/acp/password', 'AccountPanelController@changePassword');

  // Account panel ticket routes below.
  Route::get('/acp/tickets', 'AccountPanelController@viewTickets');
  Route::get('/acp/character/ticket/{name}/{id}', 'AccountPanelController@viewCharacterTicket');
  Route::get('/acp/character/tickets/{name}', 'AccountPanelController@viewCharacterTickets');

  // Login, register routes below.
  TrinityCoreAuth::routes();
});

Route::group(['middleware' => ['\App\Http\Middleware\GMCheck::class']], function () {
  Route::get('/gm', 'GamemasterController@index');
  Route::get('/gm/account/list', 'GamemasterController@viewAccountList');
  Route::get('/gm/account/view/{id}', 'GamemasterController@viewAccount');
  Route::get('/gm/account/edit/{id}', 'GamemasterController@editAccount');
  Route::get('/gm/account/{id}/character/customize', 'GamemasterController@viewCustomizeCharacter');
  Route::post('/gm/account/{id}/character/customize', 'GamemasterController@customizeCharacter');
  Route::get('/gm/publish-article', 'GamemasterController@publishArticleForm')->name('publishArticleForm');
  Route::post('/gm/publish-article/', 'GamemasterController@publishArticle');

  Route::get('/gm/ticket/list', 'GamemasterController@viewTicketList')->name('viewTicketList');
  Route::get('/gm/ticket/{id}', 'TicketsController@viewTicket')->name('viewTicket');
  Route::post('/gm/ticket/{id}/close', 'TicketsController@closeTicket')->name('closeTicket');
});

Route::group(['middleware' => ['\App\Http\Middleware\AdminCheck::class']], function () {
  Route::get('/admin/change-theme/{theme-name}', 'themeController@changeTheme');
});
