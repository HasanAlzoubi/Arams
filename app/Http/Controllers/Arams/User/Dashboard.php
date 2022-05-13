<?php

namespace App\Http\Controllers\Arams\User;


use App\Http\Controllers\Controller;
use App\Http\Requests\User_Update_Request;
use App\Models\AdminNotification;
use App\Models\UserNotification;
use App\Traits\User_Trait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class Dashboard extends Controller
{
    use User_Trait;

    public function __construct()
    {
     $this->middleware('auth:user');
    }

    public function show(){

        $notification=UserNotification::all()->reverse();
        $notify=UserNotification::where('view','0')->get();

        if (sizeof($notify)!=0)
            notify()->info('يوجد لديك اشعارات جديدة غير مقروءة');

        $user=Auth::guard('user')->user();
        notify()->success('أهلا وسهلا بك '.$user->name);
        return view('Aram.User.User_Page',compact('user','notification','notify'));
    }


    public function user_information_edit($user_id){

    $User= \App\Models\User::find($user_id);
        if($User==null){
            return view('Aram.Errore404');
        }
        return view('Aram.User.User_update',compact('User'));
    }





}
