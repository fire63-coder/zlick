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
    public function edit_profile()
    {
        $data=[
            'title'=>'Profile - zlick',
            'description'=>'Look up your activity!',
        ];
        return view('admin.editprofile',$data);
    }
    public function size()
    {
        $data=[
            'title'=>'Size - zlick',
            'description'=>'Look up your activity!',
        ];
        return view('admin.sizes.size',$data);
    }
    public function add_size()
    {
        $data=[
            'title'=>'Add Size - zlick',
            'description'=>'Look up your activity!',
        ];
        return view('admin.sizes.addsize',$data);
    }
    public function edit_size()
    {
        $data=[
            'title'=>'Add Size - zlick',
            'description'=>'Look up your activity!',
        ];
        return view('admin.sizes.editsize',$data);
    }

    public function color()
    {
        $data=[
            'title'=>'Color - zlick',
            'description'=>'Update you stuffs colors!',
        ];
        return view('admin.colors.color',$data);
    }
    public function add_color()
    {
        $data=[
            'title'=>'Color - zlick',
            'description'=>'Update you stuffs colors!',
        ];
        return view('admin.colors.addcolor',$data);
    }
    public function edit_color()
    {
        $data=[
            'title'=>'Color - zlick',
            'description'=>'Update you stuffs colors!',
        ];
        return view('admin.colors.editcolor',$data);
    }
    public function country()
    {
        $data=[
            'title'=>'Country - zlick',
            'description'=>'Look up your activity!',
        ];
        return view('admin.countries.country',$data);
    }
    public function add_country()
    {
        $data=[
            'title'=>'Country - zlick',
            'description'=>'Look up your activity!',
        ];
        return view('admin.countries.addcountry',$data);
    }
    public function edit_country()
    {
        $data=[
            'title'=>'Country - zlick',
            'description'=>'Look up your activity!',
        ];
        return view('admin.countries.editcountry',$data);
    }

    public function shipping()
    {
        $data=[
            'title'=>'Shipping - zlick',
            'description'=>'Look up your activity!',
        ];
        return view('admin.shipping',$data);
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
            'title'=>'SLIDER - zlick',
            'description'=>'Look up your activity!',
        ];
        return view('admin.sliders.slider',$data);
    }
    public function add_slider()
    {
        $data=[
            'title'=>'ADD SLIDER - zlick',
            'description'=>'Look up your activity!',
        ];
        return view('admin.sliders.addslider',$data);
    }
    public function edit_slider()
    {
        $data=[
            'title'=>'SLIDER Edit - zlick',
            'description'=>'Look up your activity!',
        ];
        return view('admin.sliders.editslider',$data);
    }
    public function service()
    {
        $data=[
            'title'=>'Service - zlick',
            'description'=>'Look up your services!',
        ];
        return view('admin.services.service',$data);
    }
    public function add_service()
    {
        $data=[
            'title'=>'Service - zlick',
            'description'=>'Add service!',
        ];
        return view('admin.services.addservice',$data);
    }
    public function faq()
    {
        $data=[
            'title'=>'FAQ - zlick',
            'description'=>'Look up your faq!',
        ];
        return view('admin.faq.faq',$data);
    }
    public function add_faq()
    {
        $data=[
            'title'=>'ADD FAQ - zlick',
            'description'=>'Look up your faq!',
        ];
        return view('admin.faq.addfaq',$data);
    }
    public function edit_faq()
    {
        $data=[
            'title'=>'ADD FAQ - zlick',
            'description'=>'Look up your faq!',
        ];
        return view('admin.faq.editfaq',$data);
    }
    public function customer()
    {
        $data=[
            'title'=>'customer - zlick',
            'description'=>'Look up your faq!',
        ];
        return view('admin.registercustomer',$data);
    }
    public function page()
    {
        $data=[
            'title'=>'Page - zlick',
            'description'=>'Look up your faq!',
        ];
        return view('admin.page',$data);
    }
    public function social()
    {
        $data=[
            'title'=>'Social - zlick',
            'description'=>'Look up your social!',
        ];
        return view('admin.social',$data);
    }
    public function subscriber()
    {
        $data=[
            'title'=>'Subscriber - zlick',
            'description'=>'Look up your social!',
        ];
        return view('admin.subscriber',$data);
    }
}
