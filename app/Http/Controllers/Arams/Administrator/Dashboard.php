<?php

namespace App\Http\Controllers\Arams\Administrator;


use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Property;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class Dashboard extends Controller
{

 public function view(){

   $Administrator=Auth::guard('Administrator')->user();
     $Admins=Admin::all();
     $user_number=User::count();

     notify()->success('أهلا وسهلا بك '.$Administrator->name);

     return view('Aram.Administrator.Dashboard',compact('user_number','Admins','Administrator'));
 }
}









