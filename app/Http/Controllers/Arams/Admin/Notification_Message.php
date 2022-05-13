<?php

namespace App\Http\Controllers\Arams\Admin;


use App\Http\Controllers\Controller;
use App\Models\AdminMessage;
use App\Models\AdminNotification;
use App\Models\Property;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;



class Notification_Message extends Controller
{

    public function insert_message(Request $request){

     $contract_type=$request->contract_type;

     if($contract_type=='للبيع') {

         AdminMessage::create([

             'title'=>'طلب مراسلة من أجل شراء عقار',
             'name_user'=>$request->name,
             'email_user'=>$request->email,
             'mobile_user'=>$request->mobile,
             'message_user'=>$request->message,
             'property_id'=>$request->property_id,


         ]);
     }

     if($contract_type=='للإيجار') {
         AdminMessage::create([

             'title'=>'طلب مراسلة من أجل استئجار عقار',
              'name_user'=>$request->name,
             'email_user'=>$request->email,
             'mobile_user'=>$request->mobile,
             'message_user'=>$request->message,
             'property_id'=>$request->property_id,



         ]);
     }

     notify()->success('تم ارسال معلوماتك بنجاح ');
     return redirect()->back();

 }



    public function viewed(Request $request){

        AdminMessage::where('view','0')->update(['view'=>'1']);


 }
}









