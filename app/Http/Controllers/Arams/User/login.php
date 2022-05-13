<?php

namespace App\Http\Controllers\Arams\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Login_Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class login extends Controller
{

    public function show()
    {
        return view('Aram.Auth.login');
    }

    public function Login(Login_Request $request)
    {
        $validate=Validator::make($request->all(),[],[]);
        if($validate->fails()){
            return redirect()->back()->withErrors($validate)->withInput($request->all());
        }

         $remember_me = $request->has('remember') ? true : false;

        if (Auth::guard('user')->attempt(['email' => $request->input("email"),
            'password' => $request->input("password")], $remember_me)) {
            notify()->success('تم الدخول بنجاح  ');
            return redirect() -> route('User.profile');
        }
        notify()->error('البريد الالكتروني أو كلمة المرور غير صحيحية ');
        return redirect()->back();
    }


}

