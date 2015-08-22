<?php

// main page with all posts
Route::get('/', 'SiteController@mainPage');

// posts by category
Route::get('/category/{category}', 'SiteController@category');

// single post
Route::get('/post/{post}', 'SiteController@post');

// page with all posts and ability to manipulate them
Route::get('admin/all-posts', 'SiteController@allPosts');

// page with all categories and ability to manipulate them
Route::get('admin/all-categories', 'SiteController@allCategories');

// admin controller and manipulations with data

// delete single post from database
Route::get('/delete-post/{post_name}', 'AdminController@deletePost');

// delete single category and all posts, associated with it
Route::get('/delete-category/{post_category}', 'AdminController@deleteCategory');

// page with form to add new category
Route::get('/add-category', 'AdminController@addCategory');
// submit new category
Route::post('/submit-category', 'AdminController@submitCategory');

// page with form to edit existed category
Route::get('/edit-category/{category_name}', 'AdminController@editCategory');
// submit changes
Route::post('/submit-edited-category/{category_name}', 'AdminController@submitEditedCategory');

// page with form to add new post
Route::get('/add-post', 'AdminController@addPost');
// submit new post
Route::post('/submit-post', 'AdminController@submitPost');

// page with form to edit existed post
Route::get('/edit-post/{post_name}', 'AdminController@editPost');
// submit changes
Route::post('/submit-edited-post/{post_name}', 'AdminController@submitEditedPost');