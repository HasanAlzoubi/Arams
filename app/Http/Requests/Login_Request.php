<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Login_Request extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [

            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'min:8','max:15'],
        ];
    }

    public function messages()
    {
        return [

            'email.string'=>' أدخل محارف رجاء',
            'email.email'=>' أدخل ايميل',
            'email.unique:users'=>' البريد الالكتروني موجود ',
            'password.required'=>' الحقل مطلوب',
            'password.min:8'=>' كلمة المرور قصيرة ',
            'password.max:15'=>' لقد تجاوزت كلمة المرور الحد الأعلى المسموح به:15',

        ];
    }
}
