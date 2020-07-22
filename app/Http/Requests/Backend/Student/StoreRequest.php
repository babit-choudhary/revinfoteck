<?php

namespace App\Http\Requests\Backend\Student;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreRequestRequest.
 */
class StoreRequest extends FormRequest
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
            "teacher_id" => "required",
            "father_name" => "required|string|min:3|max:50",
            "mother_name" => "required|string|min:3|max:50",
            "phone_no" => 'required|digits:10',
            "class" => "required|string|min:2|max:100",
            "roll_no" => "required|string|min:2|max:100",
            "address" => "required|string|min:30|max:300",
            "profile_pic" => "required|string|max:100",
        ];
    }
}
