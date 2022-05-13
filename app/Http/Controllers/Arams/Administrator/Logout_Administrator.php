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

class Logout_Administrator extends Controller
{

 public function logout(){

    Auth::guard('Administrator')->logout();
     notify()->success('تم تسجيلك خروجك بنجاح  ');
     return redirect()->route('main.page');
 }







}









