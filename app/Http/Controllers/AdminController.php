<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        $data=[
            'title'=>'Dashboard - zlick',
            'description'=>'Look up your activity!',
        ];
        return view('admin.dashboard',$data);
    }
    public function settings()
    {
        $data=[
            'title'=>'Settings - zlick',
            'description'=>'Look up your activity!',
        ];
        return view('admin.settings',$data);
    }
    public function size()
    {
        $data=[
            'title'=>'Size - zlick',
            'description'=>'Look up your activity!',
        ];
        return view('admin.size',$data);
    }
    public function color()
    {
        $data=[
            'title'=>'Color - zlick',
            'description'=>'Update you stuffs colors!',
        ];
        return view('admin.color',$data);
    }
    public function country()
    {
        $data=[
            'title'=>'Country - zlick',
            'description'=>'Look up your activity!',
        ];
        return view('admin.country',$data);
    }
    public function shipping()
    {
        $data=[
            'title'=>'Shipping - zlick',
            'description'=>'Look up your activity!',
        ];
        return view('admin.shipping',$data);
    }
    public function toplevel()
    {
        $data=[
            'title'=>'TOP LEVEL - zlick',
            'description'=>'Look up your activity!',
        ];
        return view('admin.toplevel',$data);
    }
    public function midlevel()
    {
        $data=[
            'title'=>'MID Category - zlick',
            'description'=>'Look up your activity!',
        ];
        return view('admin.midlevel',$data);
    }
    public function endlevel()
    {
        $data=[
            'title'=>'END Category - zlick',
            'description'=>'Look up your activity!',
        ];
        return view('admin.endlevel',$data);
    }
    public function productmanagement()
    {
        $data=[
            'title'=>'END Category - zlick',
            'description'=>'Look up your activity!',
        ];
        return view('admin.productmanagement',$data);
    }
    public function ordermanagement()
    {
        $data=[
            'title'=>'END Category - zlick',
            'description'=>'Look up your activity!',
        ];
        return view('admin.ordermanagement',$data);
    }
    public function slider()
    {
        $data=[
            'title'=>'END Category - zlick',
            'description'=>'Look up your activity!',
        ];
        return view('admin.slider',$data);
    }
}
