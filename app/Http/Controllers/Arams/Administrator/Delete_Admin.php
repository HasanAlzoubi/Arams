<?php

namespace App\Http\Controllers\Arams\Administrator;


use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Property;
use App\Models\User;
use App\Traits\Admin_Trait;
use Illuminate\Http\Request;

class Delete_Admin extends Controller
{
use Admin_Trait;


    public function delete($id)
    {

        Admin::find($id)->delete();
        notify()->success('تم حذف المسؤول بنجاح');
        return redirect()->back();

    }



}









