<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItBuyFormRequest extends FormRequest
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
            'name'=>'required',
            'mail'=>'required',
            'phone'=>'required',
            'pdname'=>'required',
            'dtail'=>'required',
        ];
    }
}
