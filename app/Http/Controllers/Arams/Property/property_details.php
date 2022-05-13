<?php

namespace App\Http\Controllers\Arams\Property;

use App\Http\Controllers\Controller;

use App\Models\Property;
use Illuminate\Http\Request;

class property_details extends Controller
{


public function show(Request $request){
  $property= Property::where('id',$request->property_id)->first();

    return view('Aram.Property.Property_Detalis',compact('property'));

}


}









