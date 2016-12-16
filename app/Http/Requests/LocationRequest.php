<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LocationRequest extends FormRequest
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
			'title' => 'required',
			'description' => 'required',
			'page' => 'sometimes|mimes:html,txt',  // page if exists must be .html 
			'image' => 'sometimes|mimes:jpeg'   // image if exists must be jpg (temporary only jpeg is available)
        ];
    }
}
