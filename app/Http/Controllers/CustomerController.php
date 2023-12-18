<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function home()
    {
        $data=[
          'title'=>'home',
          'description'=>'The best e-commerce platform',
        ];
        return view('customer.home',$data);
    }
    public function about()
    {
        $data=[
          'title'=>'About Us',
          'description'=>'Talking of who we are',
        ];
        return view('customer.about',$data);
    }
    public function faq()
    {
        $data=[
          'title'=>'FAQ',
          'description'=>'Do you have any questions? Let us know about!',
        ];
        return view('customer.faq',$data);
    }
    public function contact()
    {
        $data=[
          'title'=>'Contact Us',
          'description'=>'Where to find us',
        ];
        return view('customer.contact',$data);
    }
    public function login()
    {
        $data=[
          'title'=>'Login - zlick',
          'description'=>'Login to your page here',
        ];
        return view('customer.login',$data);
    }
    public function registration()
    {
        $data=[
          'title'=>'Register - zlick',
          'description'=>'Login to your page here',
        ];
        return view('customer.register',$data);
    }
    public function updatepassword()
    {
        $data=[
          'title'=>'Update password - zlick',
          'description'=>'Login to your page here',
        ];
        return view('customer.updatepassword',$data);
    }

    public function cart()
    {
        $data=[
          'title'=>'Cart - zlick',
          'description'=>'Find all your stuffs here!',
        ];
        return view('customer.cart',$data);
    }

    public function checkout()
    {
        $data=[
          'title'=>'Checkout - zlick',
          'description'=>'Find all your bill here!',
        ];
        return view('customer.checkout',$data);
    }

    public function dashboard()
    {
        $data=[
          'title'=>'Dashboard - zlick',
          'description'=>'Look up your activity!',
        ];
        return view('customer.dashboard',$data);
    }
    public function profile()
    {
        $data=[
          'title'=>'Profile - zlick',
          'description'=>'Look up your activity!',
        ];
        return view('customer.profile',$data);
    }
    public function billinfo()
    {
        $data=[
          'title'=>'Bill details - zlick',
          'description'=>'Look up your activity!',
        ];
        return view('customer.billdetails',$data);
    }

    public function order()
    {
        $data=[
          'title'=>'Order details - zlick',
          'description'=>'Watch out your orders!',
        ];
        return view('customer.order',$data);
    }
    public function productcategory()
    {
        $data=[
          'title'=>'Product category - zlick',
          'description'=>'Find here some product shown by categories',
        ];
        return view('customer.category',$data);
    }
    public function show()
    {
        $data=[
          'title'=>'Product category - zlick',
          'description'=>'Find here some product shown by categories',
        ];
        return view('customer.productdetails',$data);
    }
    public function productbycategory()
    {
        $data=[
          'title'=>'Product by category - zlick',
          'description'=>'Find here some product shown by categories',
        ];
        return view('customer.productbycategory',$data);
    }
    public function searchproduct()
    {
        $data=[
          'title'=>'Search product - zlick',
          'description'=>'Find here some product shown by categories',
        ];
        return view('customer.searchproduct',$data);
    }

}
