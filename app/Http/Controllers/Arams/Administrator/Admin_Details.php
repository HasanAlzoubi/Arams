<?php

namespace App\Http\Controllers\Arams\Administrator;


use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Property;
use App\Models\User;
use App\Traits\Admin_Trait;
use Illuminate\Http\Request;

class Admin_Details extends Controller
{
use Admin_Trait;
 public function view($id){
     $Admin=Admin::find($id);

     return view('Aram.Administrator.admin_details',compact('Admin'));
 }

    public function update(Request $request,$id){

     $update=[];
        $image_name=" ";

        if ($request->has('photo')) {

            $image_name=$this->File_name($request->photo);

            $update['photo']=$image_name;


        }

        if ($request->name!=null){
            $update['name']=$request->name;
        }

        if ($request->email!=null){
            $update['email']=$request->email;
        }

        if ($request->password!=null){
            $update['password']=$request->password;
        }

        if ($request->mobile!=null){
            $update['mobile']=$request->mobile;
        }



        Admin::find( $id)->update($update);




        if ( $image_name!=" ") {
            $this->File('Arams\images\Admin', $request->photo, $image_name);
        }
         notify()->success('تم تعديل بيانات المسؤول بنجاح');
        return redirect()->back();
 }


}









