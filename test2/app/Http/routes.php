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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/crud-dashboard', [
	'uses' => 'CategoriesController@getDashboard',
	'as' => 'crud-dashboard',
]);

Route::post('/create-category', [
	'uses' => 'CategoriesController@postCreateCategory',
	'as' => 'category.create',
]);

Route::get('/delete-category/{category_id}', [
	'uses' => 'CategoriesController@getDeleteCategory',
	'as' => 'categories.delete',
]);

// Route::get('/edit-category}', [
// 	'uses' => 'CategoriesController@getEditCategory',
// 	'as' => 'categories.edit',
// ]);

Route::post('/update-category', [
	'uses' => 'CategoriesController@postEditPost',
	'as' => 'categories.edit'
]);
