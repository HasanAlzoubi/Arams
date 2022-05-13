<?php

namespace App\Http\Controllers\Arams\Admin;


use App\Http\Controllers\Controller;
use App\Models\AdminNotification;
use App\Models\Property;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class Notification extends Controller
{

 public function view(Request $request){

AdminNotification::where('view','0')->update(['view'=>'1']);


 }
}









