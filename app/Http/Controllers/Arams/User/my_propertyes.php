<?php

namespace App\Http\Controllers\Arams\User;

use App\Http\Controllers\Controller;

use App\Models\Property;
use Illuminate\Http\Request;

class my_propertyes extends Controller
{


public function show($user_id){

    $propertyes= Property::where('user_id',$user_id)->get();

    return view('Aram.Property.my_propertyes',compact('propertyes','user_id'));

}


}









