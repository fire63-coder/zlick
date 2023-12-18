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
}
