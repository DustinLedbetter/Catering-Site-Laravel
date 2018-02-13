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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/servicesvenues', function () {
    return view('servicesvenues');
});

Route::get('/siteMenu', function () {
    return view('siteMenu');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/testimonials', function () {
    return view('testimonials');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/contact', [
  'uses' => 'ContactMessageController@create'
]);

Route::post('/contact', [
  'uses' => 'ContactMessageController@store',
  'as' => 'contact.store'
]);
