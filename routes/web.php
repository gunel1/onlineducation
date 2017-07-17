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

Route::get('/home', function () {
    return view('home.index');
});

Route::get('/', function () {
    return view('home.index');
});
Route::get('/adminpanel','AdminController@index');

Route::get('/userpanel', function () {
    return view('home.index');
});
Route::get('/aboutus', function () {
    return view('home.aboutus');
});

Route::get('/service', function () {
    return view('home.service');
});

Route::get('/ourteam', function () {
    return view('home.ourteam');
});

Route::get('/contact', function () {
    return view('home.contact');
});

Route::post('/sendemail','MailController@sendemail');

Auth::routes();

//Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/403',function (){
    return view('errors.403');
});
Route ::get('/teacher',function(){
	return view('home.search');
});
