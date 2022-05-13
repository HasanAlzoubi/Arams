<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use function Symfony\Component\Translation\t;

class User_Update_Request extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email'=>['email','string','max:100'],
            'name'=>['string','max:100'],


        ];
    }

    public function messages()
    {
        return [

            'name.string'=>' أدخل اسم رجاء',
            'name.max'=>'لقد تجاوز عدد الحروف الحد المطلوب',
            'email.string'=>' أدخل اسم رجاء ',
            'email.email'=>' أدخل ايميل',
            'email.max'=>'لقد تجاوز عدد الحروف الحد المطلوب',

        ];
    }
}
