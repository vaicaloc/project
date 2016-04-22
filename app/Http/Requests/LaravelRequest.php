<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class LaravelRequest extends Request
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
            'name'      => 'required|unique:custumer,name',
            'email'     => 'email|required|unique:custumer,email',
            'level'     => 'required'
        ];
    }

    public function massages()
    {
        return [
            'name.required' => 'The name field is required. ',
            'email.required' => 'The email field is required. ',
            'email.email'   => 'The mail invalid'
        ];
    }
}
