<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDoctorsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
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
            "email" => 'required|email|unique:doctors,email,' . $this->id,
            "password" => 'required|sometimes',
            "phone" => 'required|numeric|unique:doctors,phone,' . $this->id,
            'name' => 'required|unique:doctor_translations,name,'.$this->id,'doctor_id',
            "appointments" => 'required',
            "section_id" => 'required',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => trans('validation.required'),
            'email.email' => trans('validation.email'),
            'email.unique' => trans('validation.unique'),
            'password.required' => trans('validation.required'),
            'phone.required' => trans('validation.required'),
            'phone.numeric' => trans('validation.numeric'),
            'phone.unique' => trans('validation.unique'),
            'name.required' => trans('validation.required'),
            'name.regex' => trans('validation.regex'),
            'name.unique' => trans('validation.unique'),
            'section_id.required' => trans('validation.required'),
        ];
    }
}
