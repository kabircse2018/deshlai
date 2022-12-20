<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Subcategory;
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
        $subcategory_data = Subcategory::all();
        return view('admin.category.index', compact('category_data','subcategory_data'));
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
        // $category_store = DB::table('categories')->insert([
        //     'category_name' => $request->category_name,
        //     'category_slug' => Str::of($request->category_name)->slug('-'),
        //     'category_meta_keyword' => $request->category_meta_keyword,
        //     'category_meta_description' => $request->category_meta_description,
        //     'status' => $request->status,
        //     'created_at' => Carbon::now(),
        //     'created_by' => Auth::user()->id,
        // ]);

    //__eloquent ORM
        $category_store = new Category;
        $category_store->category_name = $request->category_name;
        $category_store->category_slug = Str::of($request->category_name)->slug('-');
        $category_store->category_meta_keyword = $request->category_meta_keyword;
        $category_store->category_meta_description = $request->category_meta_description;
        $category_store->status = $request->status;
        $category_store->created_by = Auth::user()->id;
        $category_store->save();

        $notification = array('message' => 'Category Inserted Successfully', 'alert-type' => 'success' );
        return redirect()->back()->with($notification);
    }



//__Category Create__//
    public function edit($id)
    {
        $category_data = Category::find($id);
        return view('admin.category.edit', compact('category_data'));
    }


//__Update Category__//
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'category_name' => 'required|unique:categories',
        ]);
        $category_data = Category::find($id);
        $category_data->category_name = $request->category_name;
        $category_data->category_slug = Str::of($request->category_name)->slug('-');
        $category_data->category_meta_keyword = $request->category_meta_keyword;
        $category_data->category_meta_description = $request->category_meta_description;
        $category_data->status = $request->status;
        $category_data->created_by = Auth::user()->id;
        $category_data->update();

        $notification = array('message' => 'Category Updated Successfully', 'alert-type' => 'success' );
        return redirect()->back()->with($notification);

    }


//__Delete Category__//
    public function delete($id)
    {
        $category_data = Category::find($id);
        $category_data->delete();

        $notification = array('message' => 'Category Deleted Successfully', 'alert-type' => 'success' );
        return redirect()->back()->with($notification);

    }









    public function homeIndex()
    {
        return view('admin.home.index');
    }


}
