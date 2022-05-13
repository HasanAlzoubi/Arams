<?php

namespace App\Http\Controllers\Arams\Admin;


use App\Http\Controllers\Controller;
use App\Models\Property;


class Property_Delete extends Controller
{

 public function delete($id){

     Property::find($id)->delete();

     notify()->success('تم حذف العقار بنجاح');
     return redirect()->back();
 }
}









