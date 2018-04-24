<?php

namespace App\Http\Requests;

use App\Rules\NationalIdValidate;
use Illuminate\Foundation\Http\FormRequest;

class PeopleRequest extends FormRequest
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
            'number'    => [
                'required',
                new NationalIdValidate
            ],
            'firstname' => 'required',
            'lastname'  => 'required'
        ];
    }
}
