<?php

namespace App\Http\Controllers\Arams\Administrator;


use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;

class User_Table extends Controller
{

 public function view(){
      $users=User::select('id','name','email','created_at')->get();
     return view('Aram.Administrator.user_table',compact('users'));
 }

    public function delete($id){

       // $users= $users=User::select('id','name','email','created_at')->get();;

            User::find($id)->delete();
            Property::where('user_id', $id)->delete();


       notify()->success('تم حذف العميل بنجاح');
        return redirect()->back();

    }

}









