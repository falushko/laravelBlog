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

Route::post('/delete-post', 'SiteController@deletePost');

