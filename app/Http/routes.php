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

Route::get('/', ['as'=>'home',function () {
    return view('static.index');
}]);

Route::get('login', function () {
    return view('static.login');
});
Route::get('contact', function () {
    return view('static.contact');
});

Route::get('comming', function () {
    return view('static.comming');
});

Route::get('demos', function () {
    return view('static.demos');
});
Route::get('privacy', function () {
    return view('static.privacy');
});
Route::get('terms', function () {
    return view('static.terms');
});

Route::get('signup', function () {
    return view('static.signup');
});

Route::get('uc', function () {
    return view('static.uc');
});

Route::get('upload', function () {
    return view('static.upload');
});
Route::post('subir','Utils\UtilController@upload');
Route::post('delete','Utils\UtilController@test');


Route::post('loguear','Home\HomeController@Login');

Route::get('user/profile', [
    'as' => 'profilex', 'uses' => 'Home\HomeController@hi'
]);

Route::get('ruta', ['as' => 'profile',function () {
    return 'Hello World';
}]);


