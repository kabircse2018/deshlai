<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

//__User Create__//
    public function index()
    {
        $users = DB::table('users')->get();
        return view('admin.user.index', compact('users'));
    }

//__User Create__//
    public function create()
    {
        return view('admin.user.create');
    }


//__User Store__//
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:users',
        ]);

        $data = array();
        $data['name'] = $request->name;
        $data['password'] = Hash::make($request->name);
        $data['email'] = $request->email;

        if($request->hasfile('user_profile'))
        {
            $file = $request->file('user_profile');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $data['user_profile']= $file->move('public/admin/storage/user_profile/', $filename);;
        }




        $data['Phone'] = $request->Phone;
        $data['is_admin'] = $request->is_admin;
        $data['user_desc'] = $request->user_desc;

        DB::table('users')->insert($data);

        $notification = array('message' => 'User Inserted Successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }







}
