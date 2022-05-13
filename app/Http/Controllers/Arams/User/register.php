<?php

namespace App\Http\Controllers\Arams\User;


use App\Http\Controllers\Controller;
use App\Http\Requests\Register_Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class register extends Controller
{
    public function show(){
        return view('Aram.Auth.register');
    }

    public function add(Register_Request $request){

        $validate=Validator::make($request->all(),[],[]);
        if($validate->fails()){
            return redirect()->back()->withErrors($validate)->withInput($request->all());
        }

       \App\Models\User::create([
            'name'=>$request->name ,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
           'remember_token'=>0,

        ]);
        notify()->success('تم الدخول بنجاح  ');
        return redirect()->route('User.profile');
    }
}
