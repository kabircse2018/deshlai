<?php

namespace App\Http\Controllers\Admin;

use Image;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

//__Index Method__//
    public function index()
    {
        # code...
    }

//__Create Method__//
    public function create()
    {

        $category_data = DB::table('categories')->where('status', 1)->get();
        // $subcategory_data = DB::table('subcategories')
        //                         ->leftjoin('categories', 'subcategories.category_id', 'categories.id')
        //                         ->get();

        // $childcategory_data = DB::table('childcategories')
        //                         ->leftjoin('categories', 'childcategories.category_id', 'categories.id')
        //                         ->leftjoin('subcategories', 'childcategories.subcategory_id', 'subcategories.id')
        //                         ->get();

        $tag_data = DB::table('tags')->get();

        return view('admin.posts.create', compact('category_data','tag_data'));
    }

//__Store Method__//
    public function store(Request $request)
    {
        $validated = $request->validate([
            'post_title' => 'required|unique:posts',
        ]);

        $post_data = new Post;
        $post_data->post_title = $request->post_title;
        $post_data->post_slug = Str::of($request->post_title)->slug('-');
        $post_data->post_description = $request->post_description;
        $post_data->category_id = $request->category_id;
        $post_data->subcategory_id = $request->subcategory_id;
        $post_data->childcategory_id = $request->childcategory_id;
        $post_data->author_id = Auth::user()->id;



        //Post Image Intervention
        $post_img_slug = Str::of($request->post_title)->slug('-');
        $img = $request->image;
        $img_name = $post_img_slug. '.' . $img->getClientOriginalExtension();
        Image::make($img)->save('public/admin/storage/posts/original/'. $img_name);//image Intervention without Crop
        Image::make($img)->fit(800, 600)->save('public/admin/storage/posts/crop/'. $img_name); //image Intervention with crop 800 x 600
        Image::make($img)->fit(200, 170)->save('public/admin/storage/posts/thumbnails/'. $img_name); //image Intervention with crop 800 x 600
        $post_data->image = 'public/admin/storage/posts/'.$img_name;
        $post_data->image_thumbnails = 'public/admin/storage/posts/thumbnails/'.$img_name;

        $post_data->save();

        $notification = array('message' => 'Post Inserted Successfully', 'alert-type' => 'success' );
        return redirect()->back()->with($notification);



    }









}
