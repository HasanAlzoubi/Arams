<?php

namespace App\Http\Controllers\Arams\Property;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\City;
use App\Models\Country;
use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;

class property_filter extends Controller
{


public function show(Request $request)
{


    if (!$request->has('property_type')) {

        $search=[];
        $Areas="none";
        $areas="none";
        array_push($search,['contract_type',$request->contract_type]);

        if ($request->place!=null) {

            $country=Property::where('country',$request->place)->get();
            $city=Property::where('city',$request->place)->get();
            $area=Property::where('area',$request->place)->get();

            if (sizeof($country)!=0){

                $areas=Property::select('area')->distinct()->get();

                array_push($search,['country',$request->place]);

            }

            if (sizeof($city)!=0){

                $City=City::select('id')->where('name',$request->place)->first();
                $Areas= Area::select('name')->where('city_id',$City->id)->get();

                array_push($search,['city',$request->place]);
            }

            if (sizeof($area)!=0){
                $areas=Property::select('area')->distinct()->get();
                array_push($search,['area',$request->place]);
            }

            if(sizeof($country)==0 && sizeof($city)==0 &&sizeof($area)==0 ){
                $areas=Property::select('area')->distinct()->get();

            }

            $propertyes=Property::where($search)->get();
            return view('Aram.Property.Property_Filter', compact('propertyes','Areas','areas'));

        }


        else{

            $Areas="none";
            $areas=Property::select('area')->distinct()->get();
            $propertyes=Property::where($search)->get();
            return view('Aram.Property.Property_Filter', compact('propertyes','areas','Areas'));

        }




    } //the start second request from property search filter



    else {


        $areas = Area::select('city_id')->where('name', $request->area)->first();

        $Areas = Area::select('name')->where('city_id', $areas->city_id)->get();


        $filters = [];

        $areas="none";
        array_push($filters,['area',$request->area]);

        if($request->contract_type != "all"){
            array_push($filters,['contract_type',$request->contract_type]);
        }


        if($request->property_type != "all"){
            array_push($filters,['property_type',$request->property_type]);
        }

        if($request->currency != "all"){
            array_push($filters,['currency',$request->currency]);
        }


        if($request->min_space != null && $request->max_space != null){

             $min = min($request->min_space, $request->max_space);
             $max = max($request->min_space, $request->max_space);

            array_push($filters,['space','>=',$min]);
            array_push($filters,['space','<=',$max]);
        }

        if($request->min_space != null && $request->max_space == null ){

            array_push($filters,['space','>=',$request->min_space]);

        }


        if($request->max_space != null && $request->min_space == null ){

            array_push($filters,['space','<=',$request->max_space]);

        }

        if($request->min_price != null && $request->max_price != null){

            $min = min($request->min_price, $request->max_price);
            $max = max($request->min_price, $request->max_price);

            array_push($filters,['price','>=',$min]);
            array_push($filters,['price','<=',$max]);
        }

        if($request->min_price != null && $request->max_price == null ){

            array_push($filters,['price','>=',$request->min_price]);

        }


        if($request->max_price != null && $request->min_price == null ){

            array_push($filters,['price','<=',$request->max_price]);

        }

        if($request->has('swimming') ){

            array_push($filters,['swimming',$request->swimming]);

        }
        if($request->has('basement') ){

            array_push($filters,['basement',$request->basement]);

        }
        if($request->has('duplex') ){

            array_push($filters,['duplex',$request->duplex]);

        }
        if($request->has('condition') ){

            array_push($filters,['condition',$request->condition]);

        }

        if($request->has('appendix') ){

            array_push($filters,['appendix',$request->appendix]);

        }
        if($request->has('children_play_area') ){

            array_push($filters,['children_play_area',$request->children_play_area]);

        }
        if($request->has('elevator') ){

            array_push($filters,['elevator',$request->elevator]);

        }
        if($request->has('cinema') ){

            array_push($filters,['cinema',$request->cinema]);

        }
        if($request->has('club') ){

            array_push($filters,['club',$request->club]);

        }
        if($request->has('sauna') ){

            array_push($filters,['sauna',$request->sauna]);

        }


        $propertyes = Property::where($filters)->get();


       return view('Aram.Property.Property_Filter', compact('propertyes', 'Areas','areas'));


    }
}


}









