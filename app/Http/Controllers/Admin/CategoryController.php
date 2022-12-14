<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


//__Category Index__//
    public function index()
    {
        $category_data = DB::table('categories')->get();
        return view('admin.category.index', compact('category_data'));
    }



//__Category Create__//
    public function create()
    {
        return view('admin.category.create');
    }



//__Category Create__//
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_name' => 'required|unique:categories',
        ]);

        //Query Builder
        $category_store = DB::table('categories')->insert([
            'category_name' => $request->category_name,
            'category_slug' => Str::of($request->category_name)->slug('-'),
            'category_meta_keyword' => $request->category_meta_keyword,
            'category_meta_description' => $request->category_meta_description,
            'status' => $request->status,
            'created_at' => Carbon::now(),
            'created_by' => Auth::user()->id,
        ]);
        //
        // $category_store = new Category;
        // $category_store->category_name = $request->category_name;





    }








}
