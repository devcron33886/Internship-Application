<?php

namespace App\Http\Requests;

use App\Models\Institution;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateInstitutionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('institution_edit');
    }

    public function rules()
    {
        return [
            'name'        => [
                'string',
                'required',
            ],
            'email'       => [
                'required',
                'unique:institutions,email,' . request()->route('institution')->id,
            ],
            'address'     => [
                'string',
                'required',
            ],
            'address_two' => [
                'string',
                'nullable',
            ],
            'contact'     => [
                'string',
                'required',
            ],
            'contact_two' => [
                'string',
                'nullable',
            ],
            'url'         => [
                'string',
                'nullable',
            ],
        ];
    }
}
