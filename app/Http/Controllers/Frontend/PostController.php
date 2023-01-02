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
                        ->orderBy('id', 'DESC')
                        ->paginate(8);


            return view('frontend.post.index', compact('post','category'));
        }
        else
        {
            return redirect('/');
        }

    }



    public function ViewSubcategory($id, $subcategory_slug)
    {
        $category = DB::table('categories')->first();
        $subcategory = DB::table('subcategories')->where('subcategory_slug', $subcategory_slug)->first();
        $post = DB::table('posts')
                    ->leftjoin('categories', 'posts.category_id', 'categories.id')
                    ->leftjoin('users', 'posts.author_custom_post_id', 'users.id')
                    ->select('posts.*', 'users.name', 'categories.category_name')
                    ->where('subcategory_id', $id)
                    ->orderBy('id', 'DESC')
                    ->paginate(8);
        return view('frontend.post.subcategory.index', compact('post', 'category','subcategory'));
    }


    public function viewPost($post_slug)
    {
        $category = DB::table('categories')->first();
        $post = DB::table('posts')
            ->leftjoin('categories', 'posts.category_id', 'categories.id')
            ->leftjoin('subcategories', 'posts.subcategory_id', 'subcategories.id')
            ->leftjoin('users', 'posts.author_custom_post_id', 'users.id')
            ->select('posts.*', 'users.*', 'categories.category_name', 'subcategories.subcategory_name')
            ->where('post_slug', $post_slug)
            ->first();


            return view('frontend.section.singlepost', compact('post','category'));

    }












}
