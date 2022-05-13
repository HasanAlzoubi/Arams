<?php

namespace App\Http\Controllers\Arams\Admin;


use App\Http\Controllers\Controller;
use App\Models\AdminMessage;
use App\Models\AdminNotification;
use App\Models\Property;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class Message_Detals extends Controller
{

 public function view($id){

    $message= AdminMessage::where('id',$id)->get();
   return view('Aram.Admin.message_details',compact('message'));

 }
}









