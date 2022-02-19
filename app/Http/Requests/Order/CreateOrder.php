<?php

namespace App\Http\Requests\Order;

use Illuminate\Foundation\Http\FormRequest;

class CreateOrder extends FormRequest
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
            'title' => ['required'],
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required'],
            'mobile' => ['required'],
            'state' => ['required'],
            'country' => ['required'],
            'account_number' => ['required'],
            'bank_name' => ['required'],
            'amount' => ['required'],
            'terms' => ['required'],
            'image' => ['required', 'image', 'mimes:png,jpg,gif,jpeg'],
        ];
    }
}