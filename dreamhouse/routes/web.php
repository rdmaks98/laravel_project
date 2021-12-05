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
    return view('welcome');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/price_filter/{price?}', 'HomeController@price_filter')->name('price_filter');
Route::get('/fullhouse/{id}','HomeController@fulldetail')->name('fullhouse');
Route::get('/about','HomeController@about')->name('about');
Route::get('/contact','HomeController@contact')->name('contact');
Route::get('/gallery','HomeController@gallery')->name('gallery');
Route::post('rating','HomeController@rating')->name('/rating');
//admin side
Route::get('/admin','Admin@index')->name('admin/dashboard');

//category
Route::get('/admin/addcategory','Admin@addcategory')->name('admin/addcategory');
Route::get('/admin/viewcategory','Admin@viewcategory')->name('admin/viewcategory');
Route::post('/admin/insertcategory','Admin@insertcategory')->name('admin/insertcategory');

Route::get('/admin/addhouse/','Admin@addhouse')->name('admin/addhouse');
Route::post('/admin/inserthouse/','Admin@inserthouse')->name('admin/inserthouse');

