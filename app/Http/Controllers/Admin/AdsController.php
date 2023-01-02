<?php

namespace App\Http\Controllers\Admin;

use Image;
use App\Models\Ads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AdsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



//__index__//
    public function index()
    {
        $ads = DB::table('ads')->get();
        return view('admin.ads.index', compact('ads'));
    }


//__Ads create__//
    public function create()
    {
        return view('admin.ads.create');
    }

//__Store__//
    public function store(Request $request)
    {
        $ads = new Ads;

        $ads->link = $request->link;
        $ads->section = $request->section;
        $ads->status = $request->status;
        $ads_name = 'Deshlai-Ads'. rand(1111, 9999);
        $img = $request->image;
        $img_name = $ads_name. '.' . $img->getClientOriginalExtension();
        Image::make($img)->save('public/admin/storage/ads/'. $img_name);//image Intervention without Crop
        $ads->image = 'public/admin/storage/ads/'.$img_name;
        $ads->save();

        $notification = array('message' => 'Ads Inserted Successfully', 'alert-type' => 'success' );
        return redirect()->back()->with($notification);




    }





}
