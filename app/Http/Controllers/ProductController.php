<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $data=[
            'title'=>'Welcome - zlick',
            'description'=>'Look up your activity!',
        ];
        return view('admin.products.index',$data);
    }
    public function create()
    {
        $data=[
            'title'=>'Create - zlick',
            'description'=>'Look up your activity!',
        ];
        return view('admin.products.create',$data);
    }
    public function edit()
    {
        $data=[
            'title'=>'Edit - zlick',
            'description'=>'Look up your activity!',
        ];
        return view('admin.products.edit',$data);
    }
}
