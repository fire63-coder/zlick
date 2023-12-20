<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function top_level()
    {
        $data=[
            'title'=>'TOP LEVEL - zlick',
            'description'=>'Look up your activity!',
        ];
        return view('admin.category.toplevel',$data);
    }
   public function add_top_level()
    {
        $data=[
            'title'=>'Add TOP LEVEL - zlick',
            'description'=>'Look up your activity!',
        ];
        return view('admin.category.addtoplevel',$data);
    }
   public function edit_top_level()
    {
        $data=[
            'title'=>'TOP LEVEL - zlick',
            'description'=>'Look up your activity!',
        ];
        return view('admin.category.edittoplevel',$data);
    }
    public function midlevel()
    {
        $data=[
            'title'=>'MID Category - zlick',
            'description'=>'Look up your activity!',
        ];
        return view('admin.category.midlevel',$data);
    }
    public function add_midlevel()
    {
        $data=[
            'title'=>'MID Category - zlick',
            'description'=>'Look up your activity!',
        ];
        return view('admin.category.addmidlevel',$data);
    }
    public function edit_midlevel()
    {
        $data=[
            'title'=>'MID Category - zlick',
            'description'=>'Look up your activity!',
        ];
        return view('admin.category.editmidlevel',$data);
    }
    public function endlevel()
    {
        $data=[
            'title'=>'END Category - zlick',
            'description'=>'Look up your activity!',
        ];
        return view('admin.category.endlevel',$data);
    }

}
