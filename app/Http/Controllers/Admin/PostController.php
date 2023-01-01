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

        $post_data = DB::table('posts')->get();
        return view('admin.posts.index', compact('post_data'));
    }

//__Create Method__//
    public function create()
    {

        $author = DB::table('users')->get();

        $category_data = DB::table('categories')->where('status', 1)->get();
        $subcategory_data = DB::table('subcategories')
                                ->leftjoin('categories', 'subcategories.category_id', 'categories.id')
                                ->get();

        $childcategory_data = DB::table('childcategories')
                                ->leftjoin('categories', 'childcategories.category_id', 'categories.id')
                                ->leftjoin('subcategories', 'childcategories.subcategory_id', 'subcategories.id')
                                ->get();

        $tag_data = DB::table('tags')->get();

        return view('admin.posts.create', compact('category_data','subcategory_data' , 'childcategory_data' , 'tag_data', 'author'));
    }

//__Store Method__//
    public function store(Request $request)
    {


        $validated = $request->validate([
            'post_title' => 'required|unique:posts',
            'image' => 'required',
        ]);

        $post_data = new Post;
        $post_data->post_title = $request->post_title;
        $post_data->post_slug = preg_replace('/\s+/u', '-', trim($request->post_title));

        // $post_data->post_slug = Str::slug($request->post_title, '-');
        // $post_data->post_slug = Str::of($request->post_title)->slug('-');
        $post_data->post_description = $request->post_description;
        $post_data->category_id = $request->category_id;
        $post_data->subcategory_id = $request->subcategory_id;
        $post_data->status = $request->status;
        $post_data->special_number_status = $request->special_number_status;
        $post_data->headline = $request->headline;
        $post_data->first_section = $request->first_section;
        $post_data->post_date = $request->post_date;

        if ($request['tag_id']) {
            $post_data->tag_id = implode(",", $request['tag_id']);
        }


        $post_data->author_id = Auth::user()->id;
        $post_data->author_custom_post_id = $request->author_custom_post_id;

        //Post Image Intervention
        $post_img_slug = Str::of($request->post_title)->slug('-');
        $img = $request->image;
        $img_name = $post_img_slug. '.' . $img->getClientOriginalExtension();
        Image::make($img)->save('public/admin/storage/posts/original/'. $img_name);//image Intervention without Crop
        Image::make($img)->fit(433, 273)->save('public/admin/storage/posts/first_section_thumbnail/'. $img_name); //image Intervention with crop 800 x 600
        Image::make($img)->fit(800, 600)->save('public/admin/storage/posts/crop/'. $img_name); //image Intervention with crop 800 x 600
        Image::make($img)->fit(200, 170)->save('public/admin/storage/posts/thumbnails/'. $img_name); //image Intervention with crop 800 x 600
        $post_data->image = 'public/admin/storage/posts/original/'.$img_name;
        $post_data->bigthumbnail = 'public/admin/storage/posts/crop/'.$img_name;
        $post_data->first_section_thumbnail = 'public/admin/storage/posts/first_section_thumbnail/'.$img_name;
        $post_data->image_thumbnails = 'public/admin/storage/posts/thumbnails/'.$img_name;


        if($request->special_number_image){
            $special_number_image = $request->special_number_image;
            $img_name = $post_img_slug. '.' . $special_number_image->getClientOriginalExtension();
            Image::make($special_number_image)->fit(273, 433)->save('public/admin/storage/posts/special/'. $img_name); //image Intervention with crop 273 x 433
            $post_data->special_number_image = 'public/admin/storage/posts/special/'.$img_name;

        }


        $post_data->save();

        $notification = array('message' => 'Post Inserted Successfully', 'alert-type' => 'success' );
        return redirect()->back()->with($notification);



    }











//__JSON DATA SUBCATEGORY__//
    public function getSubcate($category_id)
    {
       $sub = DB::table('subcategories')->where('category_id', $category_id)->get();
       return response()->json($sub);
    }

//__JSON DATA CHILDCATEGORY__//
    public function getChildcate($subcategory_id)
    {
       $child = DB::table('childcategories')->where('subcategory_id', $subcategory_id)->where('category_id', $subcategory_id)->get();
       return response()->json($child);
    }






}
