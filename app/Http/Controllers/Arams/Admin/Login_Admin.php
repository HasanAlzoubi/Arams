<?php

namespace App\Http\Controllers\Arams\Admin;


use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Property;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class Login_Admin extends Controller
{

 public function view(){

     return view('Aram.Admin.Login_Admin');
 }


 public function login(Request $request){


        if (Auth::guard('Admin')->attempt(['email' => $request->input("email"),
            'password' => $request->input("password")])) {
            notify()->success('تم الدخول بنجاح  ');
            return redirect() -> route('Admin_page');
        }
        notify()->error('البريد الالكتروني أو كلمة المرور غير صحيحية ');
        return redirect()->back();
    }




}









