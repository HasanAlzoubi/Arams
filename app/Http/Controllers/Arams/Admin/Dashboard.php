<?php

namespace App\Http\Controllers\Arams\Admin;


use App\Http\Controllers\Controller;
use App\Models\AdminMessage;
use App\Models\AdminNotification;
use App\Models\Property;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class Dashboard extends Controller
{

 public function view(){
     $Admin=Auth::guard('Admin')->user();
     $notification=AdminNotification::all()->reverse();
     $notify=AdminNotification::where('view','0')->get();

     $messages=AdminMessage::all()->reverse();
     $notify_message=AdminNotification::where('view','0')->get();
    $propertes_sale= Property::where('contract_type','للبيع')->get();
    $propertes_rent= Property::where('contract_type','للإيجار')->get();
    $propertes_outstanding= Property::where('status','0')->get();

    if (sizeof($notify)!=0||sizeof($notify_message)!=0)
    notify()->info('يوجد لديك اشعارات جديدة غير مقروءة');

     notify()->success('أهلا وسهلا بك '.$Admin->name);
     return view('Aram.Admin.Dashboard',compact('propertes_rent'
         ,'propertes_sale','Admin','propertes_outstanding',
             'notification','messages','notify_message'

         )

     );
 }
}









