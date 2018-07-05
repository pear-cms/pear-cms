<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Authentication Routes...
Route::get('/login', '\ThibaudDT\TrinityCoreAuth\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', '\ThibaudDT\TrinityCoreAuth\Http\Controllers\Auth\LoginController@login');
Route::post('/logout', '\ThibaudDT\TrinityCoreAuth\Http\Controllers\Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('/register', '\ThibaudDT\TrinityCoreAuth\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', '\ThibaudDT\TrinityCoreAuth\Http\Controllers\Auth\RegisterController@register');

// Password Reset Routes...

Route::get("password/reset", '\ThibaudDT\TrinityCoreAuth\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post("password/email", '\ThibaudDT\TrinityCoreAuth\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get("password/reset/{token?}", '\ThibaudDT\TrinityCoreAuth\Http\Controllers\Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post("password/reset", '\ThibaudDT\TrinityCoreAuth\Http\Controllers\Auth\ResetPasswordController@reset');