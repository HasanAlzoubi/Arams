<?php
namespace App\Http\Controllers\Arams;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;



class Main_Page extends Controller
{

 public function show(Request $request){
     $propertyes = Property::where('status','1')->get();

     if($request->type == "rent"){
         $propertyes = Property::where('contract_type','للإيجار')->get();
     }
     else if($request->type == "sale"){
         $propertyes = Property::where('contract_type','للبيع')->get();
     }

     return view('Aram.main_page',compact('propertyes'));
 }


    public function main_page2(){
        return view('Aram.main_page2');
    }

    public function about(){
        return view('Aram.About_us');
    }




}
