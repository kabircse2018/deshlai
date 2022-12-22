<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SinglePostController extends Controller
{
    //
    public function singlePost($id)
    {
        // $post = DB::table('posts')
        //                     ->leftjoin('subcategories', 'posts.subcategory_id', 'subcategories.id')
        //                     ->leftjoin('users', 'posts.author_custom_post_id', 'users.id')
        //                     ->select('posts.*', 'subcategories.subcategory_name', 'users.name')
        //                     ->where('subcategory_id', 2)
        //                     ->get();

        $data = DB::table('posts')->find($id);

       return view('frontend.section.singlepost', compact('data'));
    }
}
