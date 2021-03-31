<?php

namespace App\Http\Requests;

use App\Models\Post;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePostRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('post_create');
    }

    public function rules()
    {
        return [
            'title'          => [
                'string',
                'required',
            ],
            'positions'      => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'opening_date'   => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'closing_date'   => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'status'         => [
                'required',
            ],
            'description'    => [
                'required',
            ],
            'institution_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
