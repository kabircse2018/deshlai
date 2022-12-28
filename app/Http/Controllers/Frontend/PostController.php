<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    //
    public function viewCategory($category_slug)
    {
        $category = DB::table('categories')->where('category_slug', $category_slug)->first();

        // $subcategory = DB::table('subcategories')->where('subcategory_slug', $category_id)->first();
        if ($category)
        {
            $post = DB::table('posts')
                        ->where('category_id', $category->id)
                        ->leftjoin('categories', 'posts.category_id', 'categories.id')
                        ->leftjoin('users', 'posts.author_custom_post_id', 'users.id')
                        ->select('posts.*', 'users.name', 'categories.category_name')
                        // ->select('posts.*', 'categories.category_name')
                        ->get();


            return view('frontend.post.index', compact('post','category'));
        }
        else
        {
            return redirect('/');
        }




    }


    public function viewPost(string $category_slug,string  $post_slug)
    {
        $category = DB::table('categories')
                        ->where('category_slug', $category_slug)
                        ->first();
         

        if ($category)
        {
            $post = DB::table('posts')
                        ->where('category_id', $category->id)
                        ->where('post_slug', $post_slug)
                        ->leftjoin('users', 'posts.author_custom_post_id', 'users.id')
                        ->where('status', 1)
                        ->first();
            
            return view('frontend.section.singlepost', compact('post', 'category'));
        }
        else
        {
            return redirect('/');
        }
    }













}
