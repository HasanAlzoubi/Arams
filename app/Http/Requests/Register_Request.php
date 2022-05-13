<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Register_Request extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'email' => ['required','email', 'unique:users'],
            'password' => ['required', 'min:8','max:15'],
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>' الحقل مطلوب',
            'name.string'=>' أدخل اسم رجاء',
            'email.required'=>' الحقل مطلوب',
            'email.email'=>' أدخل ايميل',
            'email.unique'=>' البريد الالكتروني موجود ',
            'password.required'=>' الحقل مطلوب',
            'password.min:8'=>' كلمة المرور قصيرة ',
            'password.max:15'=>' لقد تجاوزت كلمة المرور الحد الأعلى المسموح به:15',

        ];
    }
}
