<?php

namespace App\Http\Controllers\Arams\Administrator;


use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Property;
use App\Models\User;
use App\Traits\Admin_Trait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Add_Admin extends Controller
{
use Admin_Trait;
 public function view(){


     return view('Aram.Administrator.add_admin');
 }

    public function add(Request $request){



        if ($request->has('photo')) {
            $image_name=" ";
            $image_name=$this->File_name($request->photo);

            Admin::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
                'mobile'=>$request->mobile,
                'photo'=>$image_name,
            ]);

                $this->File('Arams\images\Admin',$request->photo, $image_name);

        }

        else{

            Admin::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>$request->password,
                'mobile'=>$request->mobile,
            ]);
        }



         notify()->success('تمت اضافة المسؤول بنجاح');
        return redirect()->back();
 }


}









