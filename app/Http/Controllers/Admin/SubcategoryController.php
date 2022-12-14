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




}
