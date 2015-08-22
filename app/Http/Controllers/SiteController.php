<?php

namespace App\Http\Controllers;

use DB;

class SiteController extends Controller
{

    // show the main page
    public function mainPage()
    {
        $posts = DB::table('posts')->select("post_name", "post_category", "post_date", "post_preview")->paginate(25);

        // get categories for sidebar
        $categories = $this->getAllCategories();
        return view('main', ['posts' => $posts, 'categories' => $categories]);
    }

    // show posts by single category
    public function category($category)
    {
        $posts = DB::table('posts')->select("post_name", "post_category", "post_date", "post_preview")->where('post_category', $category)->paginate(25);
        $categoryDescription = DB::table('categories')->select("category_name", "category_description")->where('category_name', $category)->first();

        // catch 404 error if category doesn't exist
        if(empty($categoryDescription)) abort(404);

        // get categories for sidebar
        $categories = $this->getAllCategories();

        return view('postsByCategory', ['posts' => $posts, 'categories' => $categories, 'category' => $categoryDescription]);
    }

    // show single post
    public function post($postName)
    {
        $post = DB::table('posts')->select("post_name", "post_category", "post_date", "post_body")->where('post_name', $postName)->first();

        // catch 404 if post doesn't exist
        if(empty($post)) abort(404);

        // get categories for sidebar
        $categories = $this->getAllCategories();

        return view('post', ['post' => $post, 'categories' => $categories]);
    }

    // show the page with posts names and ability to manipulate them
    public function allPosts()
    {
        $posts = DB::table('posts')->select("post_name", "post_date")->paginate(25);
        return view('allPosts', ['posts' => $posts]);
    }

    // show the page with categories names and ability to manipulate them
    public function allCategories()
    {
        $categories = $this->getAllCategories();
        return view('categories', ['categories' => $categories]);
    }

    // get categories for showing them in sidebar
    public function getAllCategories()
    {
        return DB::table('categories')->select("category_name")->get();
    }
}