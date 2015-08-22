<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;


// controller for manipulating data
class AdminController extends Controller
{

    // delete single post
    public function deletePost($post_name)
    {
        DB::table('posts')->where('post_name', $post_name)->delete();
        return back();
    }

    // delete category and all associated posts
    public function deleteCategory($post_category)
    {
        DB::table('posts')->where('post_category', $post_category)->delete();
        DB::table('categories')->where('category_name', $post_category)->delete();
        return back();
    }

    // show view with form to add new category
    public function addCategory(){
        return view('addCategory');
    }

    // submit new category
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

    // page with form to edit already existed category (category_name edit is not allowed, because it is primary key)
    public function editCategory($category_name){

        $category = DB::table('categories')->select("category_name", "category_description")->where('category_name', $category_name)->first();
        if(empty($category)) abort(404);
        return view('editCategory', ['category' => $category]);
    }

    // submit edited category
    public function submitEditedCategory(Request $request, $category_name){

        $this->validate($request, [
            'category_description' => 'required||max:500',
        ]);

        DB::table('categories')->where('category_name', $category_name)
            ->update(['category_description' => $request->input('category_description')]);

        return back();
    }


    // show view with form to add new post
    public function addPost(){
        $categories = DB::table('categories')->select("category_name")->get();

        return view('addPost', ['categories' => $categories]);
    }

    // submit new post
    public function submitPost(Request $request){

        $this->validate($request, [
            'post_name' => 'required|unique:posts|max:255',
            'post_category' => 'required',
            'post_date' => 'required',
            'post_preview' => 'required|max:500',
            'post_body' => 'required|max:10000',
        ]);


        DB::table('posts')->insert(
            ['post_name' => $request->input('post_name'),
                'post_category' => $request->input('post_category'),
                'post_date' => strtotime($request->input('post_date')),
                'post_preview' => $request->input('post_preview'),
                'post_body' => $request->input('post_body')]
        );

        return back();
    }

    // page with form to edit already existed post (post_name edit is not allowed, because it is primary key)
    public function editPost($post_name){
        $categories = DB::table('categories')->select("category_name")->get();
        $post = DB::table('posts')->select("post_name", 'post_category', 'post_preview', 'post_body')
            ->where('post_name', $post_name)->first();

        return view('editPost', ['categories' => $categories, 'post' => $post]);
    }

    // submit edited post
    public function submitEditedPost(Request $request, $post_name){

        $this->validate($request, [
            'post_category' => 'required',
            'post_date' => 'required',
            'post_preview' => 'required|max:500',
            'post_body' => 'required|max:10000',
        ]);


        DB::table('posts')->where('post_name', $post_name)->update(
            ['post_category' => $request->input('post_category'),
                'post_date' => strtotime($request->input('post_date')),
                'post_preview' => $request->input('post_preview'),
                'post_body' => $request->input('post_body')]
        );

        return back();
    }
}