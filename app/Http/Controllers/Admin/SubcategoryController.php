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

class SubcategoryController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }


//__Category Create__//
    public function create()
    {
        $categories = Category::where('status', 1)->get();
        return view('admin.subcategory.create', compact('categories'));
    }



//__Category Create__//
    public function store(Request $request)
    {
        $validated = $request->validate([
            'subcategory_name' => 'required|unique:subcategories',
            'category_id' => 'required',
        ]);

    //Query Builder
        $subcategory_store = new Subcategory;
        $subcategory_store->category_id = $request->category_id;
        $subcategory_store->subcategory_name = $request->subcategory_name;
        $subcategory_store->subcategory_slug = Str::of($request->subcategory_name)->slug('-');
        $subcategory_store->status = $request->status;
        $subcategory_store->created_by = Auth::user()->id;
        $subcategory_store->save();

        $notification = array('message' => 'Subcategory Inserted Successfully', 'alert-type' => 'success' );
        return redirect()->back()->with($notification);
    }


//__Edit__//
    public function edit($id)
    {
        $categories = Category::all();
        $subcategory_data = Subcategory::find($id);
        return view('admin.subcategory.edit', compact('categories', 'subcategory_data'));
    }


//__Update__//
    public function update(Request $request, $id)
    {
        $valideted = $request->validate([
            'subcategory_name' => 'required|unique:subcategories',
        ]);

        $subcategory_store = Subcategory::find($id);
        $subcategory_store->category_id = $request->category_id;
        $subcategory_store->subcategory_name = $request->subcategory_name;
        $subcategory_store->subcategory_slug = Str::of($request->subcategory_name)->slug('-');
        $subcategory_store->status = $request->status;
        $subcategory_store->created_by = Auth::user()->id;
        $subcategory_store->update();

        $notification = array('message' => 'Subcategory Updated Successfully', 'alert-type' => 'success' );
        return redirect()->back()->with($notification);

    }


//__Delete Category__//
    public function delete($id)
    {
        $category_data = Subcategory::find($id);
        $category_data->delete();

        $notification = array('message' => 'Subcategory Deleted Successfully', 'alert-type' => 'success' );
        return redirect()->back()->with($notification);

    }









}
