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





Auth::routes();
/* Route::get('/', function () {
    return view('matches')->middleware('auth');
}); */

Route::get('/','MatchResultController@index')->middleware('auth');
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/matches','MatchResultController@index')->middleware('auth')->name('home');
Route::get('/mybets','MatchController@index')->middleware('auth');
Route::post('/submitbets','MatchController@store')->middleware('auth');

Route::get('/standings','UserPointController@index');

Route::get('/admin','MatchResultController@admin')->middleware('auth')->name('admin');
Route::post('/submitresult','MatchResultController@store')->middleware('auth');

Route::get('/test','BetController@store');
Route::get('/faq',function(){
    return view('faq');
});
Route::get('/profile','UserPointController@show')->middleware('auth');;
Route::get('/test2',function(){
    return view('test');
});
