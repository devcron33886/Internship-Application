<?php

namespace App\Http\Requests;

use App\Models\User;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreUserRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('user_create');
    }

    public function rules()
    {
        return [
            'name'          => [
                'string',
                'required',
            ],
            'email'         => [
                'required',
                'unique:users',
            ],
            'password'      => [
                'required',
            ],
            'mobile'        => [
                'string',
                'required',
                'unique:users',
            ],
            'department'    => [
                'string',
                'required',
            ],
            'qualification' => [
                'string',
                'required',
            ],
            'option'        => [
                'string',
                'required',
            ],
            'sex'           => [
                'required',
            ],
            'roles.*'       => [
                'integer',
            ],
            'roles'         => [
                'required',
                'array',
            ],
        ];
    }
}
