<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //
    public function settings()
    {
        $company = Company::first();
        $data=[
            'title'=>'Settings - zlick',
            'description'=>'Look up your activity!',
            'company'=>$company
        ];
        return view('admin.settings',$data);
    }

    public function save_logo(Request $request) : void {
        $this->validate($request, [
            'photo_logo'=> 'image|nullable|max:1999|required'
        ]);
        
        //1: file name with extension
        $fileNameWithExt = $request->file('photo_logo')->getClientOriginalName();
        
        //2: file name
        $fileName = $request->file('photo_logo')->;//pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        
        //3: file extension
        $ext = $request->file('photo_logo')->extension();
        dd($ext);
    }
}
