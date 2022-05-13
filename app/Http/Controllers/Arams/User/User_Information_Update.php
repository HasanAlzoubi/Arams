<?php

namespace App\Http\Controllers\Arams\User;


use App\Http\Controllers\Controller;
use App\Http\Requests\User_Update_Request;
use App\Models\User;
use App\Traits\User_Trait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class User_Information_Update extends Controller
{


use User_Trait;
    public function update(User_Update_Request $request, $user_id)
{

    $update=[];
    $image_name=" ";

    if ($request->has('photo')) {
        $image_name=$this->File_name($request->photo);
    }
        $validate = Validator::make($request->all(), [], []);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput($request->all());
        }

        $User = \App\Models\User::find($user_id);
        if ($User == null) {
            return view('Aram.Errore404');
        }

if ($User != null) {
    if ($request->has('username') && $request->username != $User->name) {
       $update['name']=$request->username;

    }

    if ($request->has('email')  && $request->email != $User->email) {
        $update['email']=$request->email;

    }


    if ($request->has('photo')) {
        $update['photo']=$image_name;

    }

    User::where('id', $user_id)->update($update);

    if ($image_name!=" ") {

        $this->File('Arams\images\Person',$request->photo, $image_name);
    }



}


    }



    public function update_password(Request $request, $user_id)
    {

        $User = \App\Models\User::find($user_id);
        if ($User == null) {
            return view('Aram.Errore404');
        }


        if (Hash::check($request->old_password,$User->password)) {

               \App\Models\User::where('id', $user_id)->update([

                    'password' =>Hash::make($request->new_password),
                ]);
            notify()->success('تم تغيير كلمة المرور بنجاح');
            return redirect()->back();


        }

        if (!Hash::check($request->old_password,$User->password)) {
            notify()->error('كلمة المرور غير صحيحة');
            return redirect()->back();


        }


    }
}









