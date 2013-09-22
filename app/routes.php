<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('as' => 'home', 'uses' => 'IndexController@index'));
Route::get('media', array('as' => 'media', 'uses' => 'MediaController@index'));
Route::get('albums', array('as' => 'albums', 'uses' => 'AlbumsController@index'));
Route::get('tour', array('as' => 'tour', 'uses' => 'TourController@index'));
Route::get('tour/archive', array('as' => 'tour-archive', 'uses' => 'TourController@Archive'));
Route::get('contact', array('as' => 'contact', 'uses' => 'ContactController@index'));
Route::get('press', array('as' => 'press', 'uses' => 'PressController@index'));
Route::resource('videos', 'VideosController');
Route::get('downloads/thewilder.zip', function() {
    //$file = 'assets/downloads/thewilder.zip';
    return Redirect::to('http://downloads.luraymusic.com/thewilder.zip');
});

//Used for No-JS Navigation
Route::get('menu', array('as' => 'menu', 'do' => function() {
    return View::make('menu')
        ->with('bodyClass', 'menu');
}));


Route::get('admin/logout', array('as' => 'admin.logout', 'uses' => 'AuthController@getLogout'));
Route::get('admin/login', array('as' => 'admin.login', 'uses' => 'AuthController@getLogin'));
Route::post('admin/login', array('as' => 'admin.login.post', 'uses' => 'AuthController@postLogin'));
Route::get('admin/reset', array('as' => 'admin.reset', 'uses' => 'AuthController@getReset'));
Route::post('admin/reset', array('as' => 'admin.reset.post', 'uses' => 'AuthController@postReset'));
Route::get('admin/confirm/{resetCode}', array('as' => 'admin.confirm', 'uses' => 'AuthController@getConfirm'));
Route::post('admin/confirm/{resetCode}', array('as' =>'admin.confirm.post', 'uses' => 'AuthController@postConfirm'));



Route::group(array('prefix' => 'admin', 'before' => 'auth.admin'), function() {
    Route::any('/', array('as' => 'admin', 'do' => function() {
        return View::make('admin.index')
            -> with('bodyClass', 'admin');
    }));
    Route::resource('tour', 'Admin\TourController');
    Route::post('image/sort', array('as' => 'admin.image.sort', 'uses' => 'Admin\ImageController@sortOrderUpdate'));
    Route::resource('image', 'Admin\ImageController');
    Route::post('videos/sort', array('as' => 'admin.videos.sort', 'uses' => 'Admin\VideoController@sortOrderUpdate'));
    Route::resource('videos', 'Admin\VideoController');
    Route::post('press/sort', array('as' => 'admin.press.sort', 'uses' => 'Admin\QuoteController@sortOrderUpdate'));
    Route::resource('press', 'Admin\QuoteController');
});


