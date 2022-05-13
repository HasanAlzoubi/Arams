<?php

namespace App\Http\Controllers\Arams\Admin;


use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\UserNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Property_Outstanding_Details extends Controller
{

 public function view(Request $request){

    $property=Property::where('id',$request->property_id)->first();
   return view('Aram.Admin.Property_Outstanding_Detalis',compact('property'));
 }

    public function agree($id){

       Property::find($id)->update(['status'=>'1']);

        $property=Property::find($id);
         UserNotification::create([
             'user_id'=>$property->user_id,
             'message'=>'تم قبول طلبك باضاقة عقار',
             'view'=>'0',

         ]);

         notify()->success('تم قبول العقار بنجاح');

         return redirect()->to(url('/Admin'));


    }

    public function noagree($id){


        Property::find($id)->delete();

        $property=Property::find($id);
        UserNotification::create([
            'user_id'=>$property->user_id,
            'message'=>'تم رفض طلبك لاضاقة عقار',
            'view'=>'0',

        ]);

        notify()->success('تم حذف العقار بنجاح');

        return redirect()->to(url('/Admin'));
    }
}









