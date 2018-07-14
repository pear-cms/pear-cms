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
    if ( Helpers::getSiteMaintenanceStatus() ) {
      // if site maintenance is set to 1, show maintenance page.
      return view('misc.maintenance', ['title' => 'Maintenance Mode']);
    } else {
      // if not, continue as normal.
    return view('welcome');
  }
});

// Route group will redirect all routes within to maintenance page if site maintenance is enabled.
Route::group(['middleware' => ['\App\Http\Middleware\SiteMaintenance::class']], function () {

  Route::get('/connection-guide', function () {
      return view('misc.connection-guide', ['title' => 'Connection Guide']);
  });

  Route::get('donate', array('as' => 'addmoney.paywithpaypal', 'uses' => 'PaypalController@showForm'));
  Route::post('donate', array('as' => 'addmoney.paypal', 'uses' => 'PaypalController@store'));
  Route::get('donate/status', array('as' => 'payment.status', 'uses' => 'PaypalController@getPaymentStatus'));


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

  Route::get('/status', function () {
      return view('server.status', ['title' => "Server Status"]);
  });

  // News routes below.
  Route::get('/news/{id}', 'NewsController@getNewsArticles');
  Route::post('/news/{id}', 'NewsController@addNewsComment');
  Route::get('/news', 'NewsController@index');

  TrinityCoreAuth::routes();
});

Route::group(['middleware' => ['\App\Http\Middleware\GMCheck::class']], function () {
  Route::get('/gm', 'GamemasterController@index');
  Route::get('/gm/account/list', 'GamemasterController@viewAccountList');
  Route::get('/gm/account/view/{id}', 'GamemasterController@viewAccount');
  });
