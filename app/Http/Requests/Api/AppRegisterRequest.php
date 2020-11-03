<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;


use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class AppRegisterRequest extends FormRequest
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
        return [
            'fname'=>'required|max:50',
            'lname'=>'required|max:50',
//            'email'=>'required|email|unique:users',
            'mobile'=>'required|unique:users|min:11|max:11',
            'password'=>'required|min:6',
        ];
    }

    public function messages()
    {
        return [
            'fname.required' => 'fname field is required',
            'lname.required' => 'lname field is required',
            'email.required' => 'email field is required',
//            'email.unique' => 'email used   before',
//            'mobile.required' => 'mobile field is required',
            'mobile.unique' => 'mobile used   before',
            'password.required' => 'password field is required',
        ];
    }
    /**
     * Handle a failed validation attempt.
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function failedValidation(Validator $validator)
    {
        $errors = (new ValidationException($validator))->errors();
        $my_error = [];
        foreach ($errors as $key => $value) {
            $my_error[] = $value[0];
        }


        throw new HttpResponseException(response()->json(
            [
                'status'=>403,
                'message'=>"error !!",
                'errors' => $my_error,
                'detail'=>'درخواست شما با خطا مواجه شده است . لطفا خطاها را برطرف کرده و مجدد درخواست را انجام دهید'
            ], 200));
    }
}


