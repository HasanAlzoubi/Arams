<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Property_Request extends FormRequest
{

    public function authorize()
    {
        return true;
    }



    public function rules()
    {
        return [
            'property_address'=>['required','string','max:50'],
            'price'=>['required'],
            'country_id'=>['required'],
            'city_id'=>['required'],
            'area_id'=>['required'],
            'space'=>['numeric','required'],
            'year_of_construction'=>['max:4'],
            'description'=>['string','max:100'],
            'photo'=>['required'],

        ];
    }

    public function messages()
    {
        return [
            'property_address.required'=>'هذه الحقل مطلوب',
            'property_address.string'=>'أدخل كلام',
            'property_address.max'=>'لقد تجاوز عدد الأحرف الحد الأعلى المسموح به',
            'price.required'=>' الحقل مطلوب',
            'country_id.required'=>'هذه الحقل مطلوب',
            'city_id.required'=>'هذه الحقل مطلوب',
            'area_id.required'=>'هذه الحقل مطلوب',
            'space.numeric'=>'أدخل أرقام رجاء',
            'space.required'=>'هذا الحقل مطلوب',
            'year_of_construction.max'=>'لقد تجاوز عدد الأرقام الحد الأعلى المسموح به',
            'description.string'=>'أدخل كلام فقط',
            'description.max'=>'لقد تجاوز عدد الأرقام الحد الأعلى المسموح به',
            'photo.required'=>'هذا الحقل مطلوب',

        ];
    }
}
