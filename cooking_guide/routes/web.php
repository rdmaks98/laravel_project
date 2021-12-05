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

// Route::get('/', function () {
//     return view('index');
// });
	
Auth::routes();


Route::get('/', 'Frontend@index');
Route::post('/login','Frontend@login')->name('login');
Route::get('/log','Frontend@log')->name('log');
Route::get('/dishes/{r_id?}', 'Frontend@dishes')->name('dishes');
Route::get('searchcategory/{id?}','Frontend@searchcategory')->name('searchcategory');
Route::post('/register', 'Frontend@register')->name('register');
Route::post('/editprofile/{edit?}','Frontend@editprofile')->name('editprofile');
Route::post('changepassword','Frontend@changepassword')->name('changepassword');
Route::post('/reci_insert','Frontend@reci_insert')->name('reci_insert');

// Admin route set
Route::get('/admin', 'Admin@index');
Route::post('/admin/login','Admin@login')->name('admin/login');
Route::post('admin/changepassword','Admin@changepassword')->name('admin/changepassword');
Route::get('admin/logout','Admin@logout')->name('admin/logout');
Route::get('/admin/dashboard', 'Admin@dashboard')->name('admin/dashboard');
Route::get('admin/view_user', 'Admin@user_view')->name('admin/view_user');
// category part
Route::get('/addcategory', 'Admin@addcategory');
Route::post('/categoryinsert', 'Admin@categoryinsert')->name('categoryinsert');
Route::get('/category_view', 'Admin@categoryview')->name('categoryview');

Route::post('/updatecategory/{cat_id?}', 'Admin@updatecategory')->name('updatecategory');
Route::get('/deletecategory/{cat_id?}', 'Admin@deletecategory')->name('deletecategory');

Route::get('/statuscategory/{cat_id?}', 'Admin@statuscategory')->name('statuscategory');

// recipies area
Route::get('/addrecipies', 'Admin@addrecipies');
Route::post('/recipiesinsert','Admin@recipiesinsert')->name('recipiesinsert');
Route::get('/recipies_view','Admin@recipiesview')->name('recipiesview');
Route::get('/recipiesstatus/{r_id?}', 'Admin@recipiesstatus')->name('recipiesstatus');
Route::post('/recipiesedit/{r_id?}', 'Admin@recipiesedit')->name('recipiesedit');
Route::get('/recipiesdelete/{r_id?}','Admin@recipiesdelete')->name('recipiesdelete');

// user area
Route::get('/user_view','Admin@user_view')->name('user_view');
Route::get('/userstatus/{id?}','Admin@userstatus')->name('userstatus');
Route::get('userdelete/{id?}','Admin@userdelete')->name('userdelete');


Route::get('USer_Report','Admin@User_Report')->name('USer_Report');
Route::get('Category_Report','Admin@Category_Report')->name('Category_Report');
Route::get('Recipie_Report','Admin@Recipie_Report')->name('Recipie_Report');


Route::post('cat_r','Admin@cat_r')->name('cat_r');
Route::post('r_recipi','Admin@r_recipi')->name('r_recipi');
Route::post('User_r','Admin@User_r')->name('User_r');
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
