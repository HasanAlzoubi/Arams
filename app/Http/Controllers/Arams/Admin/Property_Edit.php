<?php

namespace App\Http\Controllers\Arams\Admin;


use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\City;
use App\Models\Country;
use App\Models\Property;
use App\Traits\Property_Trait;
use Illuminate\Http\Request;


class Property_Edit extends Controller
{
use Property_Trait;

 public function view($id){
     $Country= Country::all();
     $property=Property::find($id);
     return view('Aram.Admin.Property_Edit',compact('property','Country'));
 }

    public function city($id){

        $city = City::where('country_id',$id)->get();
        return response()->json($city);
    }

    public function area($id){

        $area = Area::where('city_id',$id)->get();
        return response()->json($area);
    }


    public function update(Request $request){
      $update=[];
        $image_name=" ";


        if ($request->has('photo')) {
            $image_name=$this->File_name($request->photo);
            $update['photo']=$image_name;
        }

        if($request->has('country_id')){
            $country=Country::find($request->country_id) ;
            $update['country']=$country->name;
        }

        if($request->has('city_id')){
            $city=City::find($request->city_id);
            $update['city']=$city->name;
        }

      if($request->has('contract_type')){
          $update['contract_type']=$request->contract_type;
      }

        if($request->has('property_type')){
            $update['property_type']=$request->property_type;
        }

        if($request->has('area_id')){
            $update['area']=$request->area_id;
        }

        if($request->has('currency')){
            $update['currency']=$request->currency;
        }

        if($request->has('number_of_bedroom')){
            $update['number_of_bedroom']=$request->number_of_bedroom;
        }

        if($request->has('number_of_bathroom')){
            $update['number_of_bathroom']=$request->number_of_bathroom;
        }

        if($request->has('Parking')){
            $update['Parking']=$request->Parking;
        }

        if($request->has('space')){
            $update['space']=$request->space;
        }

        if($request->has('price')){
            $update['price']=$request->price;
        }

        if($request->has('address')){
            $update['address']=$request->address;
        }

        Property::find($request->property_id)->update($update);

        if ($image_name!=" ") {

            $this->File('Arams\images\Property_Form',$request->photo, $image_name);
        }



        return redirect()->back()->with(['success_edit_property'=>'تم تعديل بيانات العقار بنجاح']);

    }

}









