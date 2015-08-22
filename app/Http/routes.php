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

Route::get('/', 'SiteController@mainPage');

Route::get('/category/{category}', 'SiteController@category');

Route::get('/post/{post}', 'SiteController@post');

Route::get('admin/all-posts', 'SiteController@allPosts');

Route::get('admin/all-categories', 'SiteController@allCategories');

Route::get('/delete-post/{post_name}', 'SiteController@deletePost');

Route::get('/delete-category/{post_category}', 'SiteController@deleteCategory');

Route::get('/add-post', 'SiteController@addPost');

Route::get('/add-category', 'SiteController@addCategory');
Route::post('/submit-category', 'SiteController@submitCategory');

Route::get('/edit-category/{category_name}', 'SiteController@editCategory');
Route::post('/submit-edited-category/{category_name}', 'SiteController@submitEditedCategory');