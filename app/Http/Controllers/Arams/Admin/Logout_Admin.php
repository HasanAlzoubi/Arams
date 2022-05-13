<?php

namespace App\Http\Controllers\Arams\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class Logout_Admin extends Controller
{

 public function logout(){

     Auth::guard('Admin')->logout();
     notify()->success('تم تسجيلك خروجك بنجاح  ');
     return redirect()->route('main.page');
 }





}









