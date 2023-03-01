<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AirPollutionRequest extends FormRequest
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
            'severity' => 'required|max:255',
            'location_id' => 'required|exists:locations,id|numeric|digits_between:1,11',
        ];
    }
}
