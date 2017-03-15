<?php
/**
 * Created by PhpStorm.
 * User: rinalnov
 * Date: 10/23/16
 * Time: 10:52 PM
 */

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
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
            'user_email' => 'required|email',
            'user_pwd'  => 'required|min:3',
//            'target_id'  => 'required',
//            'description'  => 'required:',
//            'user_name'  => 'required'
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
            'user_email.required' => 'Pls Enter email', // custom message for required rule.
            'user_email.email' => 'Invalid Email Format',
            'user_email.alpha' => 'Gift id has to be number', // custom message for email rule.
            'user_pwd.required' => 'Pls Enter password',
            'user_pwd.min' => "Please enter password at lease 3 character"
        ];
    }
}