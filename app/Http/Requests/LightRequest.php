<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LightRequest extends FormRequest
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
            'location_id' => 'required|exists:locations,id|numeric|digits_between:1,11',
            'manual_override' => 'required|boolean',
        ];
    }
}
