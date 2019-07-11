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
    return view('PreOrder.register');
});


Route::any('/reg', 'detailsController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/box', function () {
    return view('PreOrder.box');
});

Route::get('/additem', function () {
    return view('PreOrder.additem');
});

Route::any('/ram','detailsController@index'); 
Route::any('/storeitems','detailsController@many');

Route::any('/tab','detailsController@index123'); 
Route::post('/details', function () {
     return view('PreOrder.up');
});
Route::post('/update', 'detailsController@update');
Route::post('/getDt', function () {
    return view('PreOrder.getDetails');
    });