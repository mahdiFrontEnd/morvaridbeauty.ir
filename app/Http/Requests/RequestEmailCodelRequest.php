<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Pearl\RequestValidate\RequestAbstract;

class RequestEmailCodelRequest extends RequestAbstract
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
            'email' => 'required|unique:users',

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
            'email.required' => 'email field is required',
            'email.unique' => 'email field is unique error ',

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
