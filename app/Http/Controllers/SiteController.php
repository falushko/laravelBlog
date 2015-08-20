<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use DB;


class SiteController extends Controller
{

    public function mainPage()
    {
        $posts = DB::table('posts')->select("post_name", "post_category", "post_date", "post_preview")->paginate(25);
        $categories = $this->getAllCategories();
        return view('main', ['posts' => $posts, 'categories'=> $categories]);
    }

    public function category($category)
    {
        $posts = DB::table('posts')->select("post_name", "post_category", "post_date", "post_preview")->where('post_category', $category)->paginate(25);
        $categories = $this->getAllCategories();
        return view('main', ['posts' => $posts, 'categories'=> $categories]);
    }

    public function post($postName){
        $post = DB::table('posts')->select("post_name", "post_category", "post_date", "post_body")->where('post_name', $postName)->first();
        $categories = $this->getAllCategories();
        return view('post', ['post' => $post, 'categories'=> $categories]);
    }

    public function allPosts(){
        $posts = DB::table('posts')->select("post_name", "post_date")->paginate(25);
        return view('all_posts', ['posts' => $posts]);
    }

    public function getAllCategories(){
        return DB::table('categories')->select("category_name")->get();
    }
}