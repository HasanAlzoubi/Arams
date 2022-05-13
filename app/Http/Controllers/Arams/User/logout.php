<?php

namespace App\Http\Controllers\Arams\User;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class logout extends Controller
{
    public function Logout() {

        Auth::guard('user')->logout();
        notify()->success('تم تسجيلك خروجك بنجاح  ');
        return redirect()->route('main.page');
    }
}

