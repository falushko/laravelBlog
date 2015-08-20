<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use DB;


class SiteController extends Controller
{

    public function mainPage()
    {
        $posts = DB::table('posts')->select("post_name", "post_category", "post_date", "post_preview")->paginate(15);
        $categories = DB::table('categories')->select("category_name")->get();
        return view('main', ['posts' => $posts, 'categories'=> $categories]);
    }
}