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
        return view('addPost');
    }

}