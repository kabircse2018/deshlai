<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



//__index__//
    public function index()
    {
        $tag_data = DB::table('tags')->get();
        return view('admin.tag.index', compact('tag_data'));
    }


//__Store__//
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tag_name' => 'required|unique:tags',
        ]);

        $tag_store = DB::table('tags')->insert([
            'tag_name' => $request->tag_name,
            'tag_slug' => Str::of($request->tag_name)->slug('-'),

        ]);

        $notification = array('message' => 'Tag Inserted Successfully', 'alert-type' => 'success' );
        return redirect()->back()->with($notification);

    }

//__edit__//
    // public function edit($id)
    // {
    //     $tag_data = DB::table('tags')->find($id);
    //     return view('admin.tag.edit', compact('tag_data'));
    // }
//__update__//

//__delete__//
        public function delete($id)
        {
            $tag_data = DB::table('tags')->where('id', $id)->delete();

            $notification = array('message' => 'Tag Deleted Successfully', 'alert-type' => 'success' );
            return redirect()->back()->with($notification);

        }











}
