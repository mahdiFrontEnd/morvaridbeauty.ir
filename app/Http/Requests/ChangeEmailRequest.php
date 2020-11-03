<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Pearl\RequestValidate\RequestAbstract;

class ChangeEmailRequest extends RequestAbstract
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email|unique:users',
            'sms_code' => 'required|min:4',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'email.required' => 'mobile field is required',
            'email.email' => 'password field is not email',
            'email.unique' => 'mobile field is not unique',
            'sms_code.required' => 'mobile field is required',
            'sms_code.min' => 'sms code  min 4',

        ];
    }



    protected function failedValidation(Validator $validator):ValidationException
    {
        $errors = (new ValidationException($validator))->errors();
        $my_error = [];
        foreach ($errors as $key => $value) {
            $my_error[] = $value[0];
        }
        throw new HttpResponseException(response()->json(
            [
                'status' => 0,
                'message' => "خطا ",
                'errors' => $my_error,
                'detail' => 'درخواست شما با خطا مواجه شده است . لطفا خطاها را برطرف کرده و مجدد درخواست را انجام دهید'
            ], JsonResponse::HTTP_UNPROCESSABLE_ENTITY));
    }

}
