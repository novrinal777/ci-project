<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TestRequest extends Request
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
            'gift_id' => 'required|min:4',
            'user_id'  => 'required|min:4',
            'target_id'  => 'required',
            'description'  => 'required:',
            'user_name'  => 'required'
        ];
    }
    /**
     * Get the validation messages.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'gift_id.required' => 'Enter email Gift id', // custom message for required rule.
            'gift_id.min' => 'Min is 4',
            'gift_id.alpha' => 'Gift id has to be number', // custom message for email rule.
            'target_id.required' => 'Please enter target id from 1-5',
        ];
    }
}
