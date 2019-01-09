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

// authentication
Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('/profile/{id}', 'HomeController@userProfile');

// users
Route::get('/createnewuser','HomeController@createnewuser');//createform
Route::post('/user/store','HomeController@storenewuser');//store
Route::get('/backend/users','HomeController@listallusers');//show allusers
Route::get('backend/users/edit/{id}','HomeController@edituser');//edit
Route::post('/update/{id}','HomeController@updateuser');//update
Route::get('backend/users/view/{id}','HomeController@showuser');//show/view

// dashboard
Route::get('backend/', 'DashboardController@index');

// products
Route::get('backend/products','ProductsController@listing');
Route::get('backend/products/create','ProductsController@create');
Route::get('backend/products/view/{id}','ProductsController@view');
Route::get('backend/products/edit/{id}','ProductsController@edit');
Route::post('backend/products/create','ProductsController@store');
Route::post('backend/products/edit/{id}','ProductsController@update');
Route::get('backend/products/delete/{id}','ProductsController@delete');

// branch
Route::get('backend/branch','BranchController@listing');
Route::get('backend/branch/create','BranchController@create');
Route::get('backend/branch/view/{id}','BranchController@view');
Route::get('backend/branch/edit/{id}','BranchController@edit');
Route::post('backend/branch/create','BranchController@store');
Route::post('backend/branch/edit/{id}','BranchController@update');
Route::get('backend/branch/delete/{id}','BranchController@delete');

// pos
Route::get('backend/pos','PosController@show');
Route::post('backend/pos','PosController@store');

//groups
Route::get('backend/groups','GroupsController@listing');
Route::get('backend/groups/create','GroupsController@create');
Route::get('backend/groups/view/{id}','GroupsController@view');
Route::get('backend/groups/edit/{id}','GroupsController@edit');
Route::post('backend/groups/store','GroupsController@store');
Route::post('backend/groups/{id}/edit/','GroupsController@update');