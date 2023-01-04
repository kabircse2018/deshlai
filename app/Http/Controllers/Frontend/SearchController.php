<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    //

    public function Search(Request $request)
    {
        $query = $request->input('query');
        $post = DB::table('posts')
                    ->where('status', 1)
                    ->leftjoin('users', 'posts.author_custom_post_id', 'users.id')
                    ->select('posts.*', 'users.name')
                    ->where('post_title', 'LIKE', "%$query%")
                    ->get();

                    return view('frontend.search', compact('post', 'query'));
    }
}
