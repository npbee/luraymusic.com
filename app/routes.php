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


Route::get('admin', array('as' => 'admin', 'do' => function() {
    return View::make('admin.index')-> with('bodyClass','admin');
}));

Route::resource('admin/tour', 'AdminTourController');