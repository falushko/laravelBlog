<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;



class SiteController extends Controller
{

    public function mainPage()
    {
        $posts = DB::table('posts')->select("post_name", "post_category", "post_date", "post_preview")->paginate(25);
        $categories = $this->getAllCategories();
        return view('main', ['posts' => $posts, 'categories' => $categories]);
    }

    public function category($category)
    {
        $posts = DB::table('posts')->select("post_name", "post_category", "post_date", "post_preview")->where('post_category', $category)->paginate(25);
        $categoryDescription = DB::table('categories')->select("category_name", "category_description")->where('category_name', $category)->first();
        if(empty($categoryDescription)) abort(404);
        $categories = $this->getAllCategories();

        return view('postsByCategory', ['posts' => $posts, 'categories' => $categories, 'category' => $categoryDescription]);
    }

    public function post($postName)
    {
        $post = DB::table('posts')->select("post_name", "post_category", "post_date", "post_body")->where('post_name', $postName)->first();
        if(empty($post)) abort(404);
        $categories = $this->getAllCategories();
        return view('post', ['post' => $post, 'categories' => $categories]);
    }

    public function allPosts()
    {
        $posts = DB::table('posts')->select("post_name", "post_date")->paginate(25);
        return view('all_posts', ['posts' => $posts]);
    }

    public function allCategories()
    {
        $categories = $this->getAllCategories();
        return view('categories', ['categories' => $categories]);
    }

    public function deletePost($post_name)
    {
        DB::table('posts')->where('post_name', $post_name)->delete();
        return back();
    }

    public function deleteCategory($post_category)
    {
        DB::table('posts')->where('post_category', $post_category)->delete();
        DB::table('categories')->where('category_name', $post_category)->delete();
        return back();
    }

    //todo shit
    public function addPost(){
        return view('addPost');
    }

    public function addCategory(){
        return view('addCategory');
    }

    public function submitCategory(Request $request){

        $this->validate($request, [
            'category_name' => 'required|unique:categories|max:60',
            'category_description' => 'required||max:500',
        ]);

        $name = $request->input('category_name');
        $description = $request->input('category_description');

        DB::table('categories')->insert(
            ['category_name' => $name, 'category_description' => $description]
        );

        return back();
    }


    public function editCategory($category_name){

        $category = DB::table('categories')->select("category_name", "category_description")->where('category_name', $category_name)->first();
        if(empty($category)) abort(404);
        return view('editCategory', ['category' => $category]);
    }

    public function submitEditedCategory(Request $request, $category_name){

        $this->validate($request, [
            'category_description' => 'required||max:500',
        ]);

        DB::table('categories')->where('category_name', $category_name)
            ->update(['category_description' => $request->input('category_description')]);

        return back();
    }



    public function getAllCategories()
    {
        return DB::table('categories')->select("category_name")->get();
    }
}