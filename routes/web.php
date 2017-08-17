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
Route::group(['middleware' => ['web']], function () {
    Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);

    Route::get('/', function () {
        return view('home.index');
    });
    Route::get('/home', function () {
        return view('home.index');
    });
    Route::get('/userpanel', function () {
        return view('home.index');
    });
    Route::get('/aboutus', function () {
        return view('home.aboutus');
    });


    Route::get('/ourteam', function () {
        return view('home.ourteam');
    });

    Route::get('/contact', function () {
        return view('home.contact');
    });

    Route::post('/sendemail', 'MailController@sendemail');

Route::get('/profile-details', function () {
    return view('home.profile-details');
});


    Auth::routes();

//Route::get('/admin', 'HomeController@index')->name('home');
    Route::get('/403', function () {
        return view('errors.403');
    });

    Route::group(['prefix' => 'service'], function () {


        Route::get('/', function () {
            return view('home.service');
        });

        Route::get('/teacher', function () {
            return view('home.search');
        });
        Route::get('/exam', function () {
            return view('home.exam');
        });
        Route::get('/planning', function () {
            return view('home.planning');
        });
        Route::get('/pdfdownload', function () {
            return view('home.pdfdownload');
        });
        Route::get('/courses', function () {
            return view('home.courses');
        });
    });

});

Route::group(['prefix' => 'adminpanel'], function () {

    if(Auth::check()) {
        if (Auth::user()->isAdmin())
            Route::get('/', 'AdminController@index');

        if (Auth::user()->isTeacher())
            Route::get('/', 'TeacherController@index');
    }
    else
        Route::get('/',function(){
            return view('admin.master');
    });

});
