<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Childcategory;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ChildcategoryController extends Controller
{

//Constructor
    public function __construct()
    {
        $this->middleware('auth');
    }


//__Create__//
    public function create()
    {
        $categories = Category::all();
        $subcategories = DB::table('subcategories')->join('categories', 'subcategories.category_id', 'categories.id')->get();

        return view('admin.childcategory.create', compact('categories','subcategories'));
    }

//__Store
    public function store(Request $request)
    {
        $validated = $request->validate([
            'childcategory_name' => 'required|unique:childcategories',
        ]);

        $childcategory_store = new Childcategory;
        $childcategory_store->category_id = $request->category_id;
        $childcategory_store->subcategory_id = $request->subcategory_id;
        $childcategory_store->childcategory_name = $request->childcategory_name;
        $childcategory_store->childcategory_slug = Str::of($request->childcategory_slug)->slug('-');
        $childcategory_store->status = $request->status;
        $childcategory_store->created_by = Auth::user()->id;
        $childcategory_store->created_by = Carbon::now();
        dd($childcategory_store);
        $childcategory_store->save();

        $notification = array('message' => 'Childcategory Inserted Successfully', 'alert-type' => 'success' );
        return redirect()->back()->with($notification);
    }











}
