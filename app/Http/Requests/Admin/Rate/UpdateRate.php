<?php

namespace App\Http\Requests\Admin\Rate;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRate extends FormRequest
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
            'country' => ['required'],
            'value' => ['required'],
            'status' => ['required'],
            'amount_in_usd' => ['required'],
        ];
    }
}