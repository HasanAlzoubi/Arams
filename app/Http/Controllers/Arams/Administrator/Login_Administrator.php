<?php

namespace App\Http\Controllers\Arams\Administrator;


use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Administrator;
use App\Models\Property;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class Login_Administrator extends Controller
{

 public function view(){

     return view('Aram.Administrator.Login_Administrator');
 }


 public function login(Request $request)
 {


        if (Auth::guard('Administrator')->attempt(['email' => $request->input("email"),
            'password' => $request->input("password")])) {
            notify()->success('تم الدخول بنجاح  ');
            return redirect() -> route('manger_profile');
        }
        notify()->error('البريد الالكتروني أو كلمة المرور غير صحيحية ');
        return redirect()->back();
    }




}









