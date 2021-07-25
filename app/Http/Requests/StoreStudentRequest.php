<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
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
            'reg_id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone_no' => 'required',
            'dob' => 'required',
            'degree_id' => 'required',
            'gender' => 'nullable',
            'religion' => 'nullable',
            'high_school' => 'nullable',
            'primary_school' => 'nullable',
            'address' => 'nullable',
            'residence' => 'nullable',
            'fathers_name' => 'nullable',
            'fathers_occupation' => 'nullable',
            'fathers_phone_number' => 'nullable',
            'mothers_name' => 'nullable',
            'mothers_occupation' => 'nullable',
            'mothers_phone_number' => 'nullable',
            'guardians_name' => 'nullable',
            'guardians_occupation' => 'nullable',
            'guardians_phone_number' => 'nullable',
           
        ];
    }
}
