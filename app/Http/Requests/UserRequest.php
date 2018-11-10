<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:6|max:12'
        ];
        if (request()->route('user_id') && intval(request()->route('user_id')) > 0){
            unset($rules['password']);
        }
        return $rules;
    }

    public function messages()

    {
        return [
            'name.required'=>'Full name is not entered',
            'email.required'=>'Email is not entered',
            'email.email'=>'Email is valid',
            'password.required'=>'Password is not entered',
            'password.min'=>'Password should be longer than 6 char',
            'password.max'=>'Password should be shorter than 12 char',
        ];

    }
}
