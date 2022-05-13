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

class Notification extends Controller
{

    public function view()
    {
        UserNotification::where('view','0')->update(['view'=>'1']);

    }




}
