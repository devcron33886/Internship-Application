<?php

namespace App\Http\Requests;

use App\Models\Application;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateApplicationRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('application_edit');
    }

    public function rules()
    {
        return [
            'posts.*' => [
                'integer',
            ],
            'posts'   => [
                'array',
            ],
            'status'  => [
                'required',
            ],
        ];
    }
}
