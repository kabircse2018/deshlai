<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

//__Category Index__//
    public function index()
    {
        return view('admin.category.index');
    }

//__Category Create__//
    public function create()
    {
        return view('admin.category.create');
    }








}
