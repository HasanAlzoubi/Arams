<?php

namespace App\Http\Controllers\Arams;


use App\Http\Controllers\Controller;
use App\Area;
use App\City;
use App\Property;
use Illuminate\Http\Request;

class Search extends Controller
{
    public function search_property(Request $request)
    {
       return $request;
//
//        $area_id=0;
//        $city_id=0;
//
//        $area=Area::select('id')->where('name',$request->area)->get();
//        foreach ($area as $id){
//           $area_id= $id->id;
//        }
//
//        $cityis=City::select('id')->where('name',$request->city)->get();
//        foreach ($cityis as $City){
//            $city_id=$City->id;
//        }
//
//
////1 for sale,2 for rent
//        if (($request->area == null) && ($request->contract_type == 1)) {
//            return $city = City::find($city_id)->property->where('contract_type','للبيع');
//            if ($city="[ ]"){
//                return "نعتذر ,لا يوجد عقارات مضافة بهذا الاسم";
//            }
//            return $city;
//
//        }
//        elseif ($request->area == null && $request->contract_type == 2) {
//            $city =  City::find($city_id)->property->where('contract_type','للايجار');
//            if ($city="[ ]"){
//                return "نعتذر ,لا يوجد عقارات مضافة بهذا الاس";
//            }
//            return $city;
//
//
//        }
//
//        else if ($request->area != null && $request->contract_type == 1) {
//            if($area_id==0){
//                return "نعتذر ,لا يوجد عقارات مضافة بهذا الاس";
//            }
//          return  Area::find($area_id)->property->where('contract_type','للبيع');
//
//        }
//
//        else  {
//            if($area_id==0){
//                return "نعتذر ,لا يوجد عقارات مضافة بهذا الاس";
//            }
//            return  Area::find($area_id)->property->where('contract_type','للايجار');
//
//        }


    }

}
