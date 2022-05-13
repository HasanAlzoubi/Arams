<?php

namespace App\Http\Controllers\Arams\Property;


use App\Http\Controllers\Controller;
use App\Http\Requests\Property_Request;
use App\Models\AdminNotification;
use App\Models\Area;
use App\Models\City;
use App\Models\Country;
use App\Models\Property;
use App\Traits\Property_Trait;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class Add_Property extends Controller
{
    use Property_Trait;

    public function view(Request $request){
      $user_id=$request->user_id;
       $Country= Country::all();
            return view('Aram.Property.add_property',compact('Country','user_id'));
    }

    public function city($id){

        $city = City::where('country_id',$id)->get();
        return response()->json($city);
    }

    public function area($id){

        $area = Area::where('city_id',$id)->get();
        return response()->json($area);
    }
////////////////////////////////////////////////////////////////////
    public function creat(Request $request)
    {

        $validate=Validator::make($request->all(),[],[]);
        if($validate->fails()){
          return redirect()->back()->withErrors($validate)->withInput($request->all())
              ->with(['error_property'=>'تأكد من المعلومات المدخلة']);
        }

        $image_name=" ";

        if ($request->has('photo')) {
            $image_name=$this->File_name($request->photo);
        }


$country=Country::find($request->country_id) ;
$city=City::find($request->city_id);
$area=Area::find($request->area_id);



             Property::create([
            'user_id'=>$request->user_id,
            'address' => $request->property_address,
            'contract_type' => $request->contract_type,
            'country'=>$country->name,
            'city'=>$city->name,
            'area'=>$area->name,
            'space' => $request->space,
            'currency' => $request->currency,
            'price' => $request->price,
            'property_type' => $request->property_type,
            'number_of_bedroom' => $request->number_of_bedroom,
            'number_of_bathroom'=>$request->number_of_bathroom,
            'Parking'=>$request->parking,
            'year_of_construction'=> $request->year_of_construction,
            'description' => $request->description,
            'photo'=>$image_name,

                 'swimming'=>$city->swimming,
                 'basement'=>$area->basement,
                 'duplex' => $request->duplex,
                 'condition' => $request->condition,
                 'appendix' => $request->appendix,
                 'children_play_area' => $request->children_play_area,
                 'elevator' => $request->elevator,
                 'club'=>$request->club,
                 'cinema'=>$request->cinema,
                 'sauna'=> $request->sauna,
                 'status'=> '0',
             'remember_token'=>$request->_token,

        ]);

        if ($image_name!=" ") {

            $this->File('Arams\images\Property_Form',$request->photo, $image_name);
        }



        $property=Property::all() ;
        AdminNotification::create([
            'property_id'=>$property[sizeof($property)-1]->id,
            'user_id'=>$property[sizeof($property)-1]->user_id,
            'message'=>' من فضلك اقبل طلبي باضافة عقار ',
            'view'=>'0',
        ]);
        notify()->success('تم ارسال طلبك لاضافة العقار بنجاح');
        return redirect()->back();


    }
}









