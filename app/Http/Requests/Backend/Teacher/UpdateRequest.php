<?php

namespace App\Http\Requests\Backend\Teacher;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreRequestRequest.
 */
class UpdateRequest extends FormRequest
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
            "name" => "required|string|min:3|max:50",
            "subject" => "required|string|min:3|max:100",
            "email" => "required|email",
            "phone_no" => 'required|digits:10',
            "qualification" => "required|string|min:2|max:100",
            "address" => "required|string|min:30|max:300",
            "profile_pic" => "required|string|max:100",
         ];
    }
}
