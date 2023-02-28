<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'address' => 'required',
            'zipCode' => 'required|numeric',
            'town' => 'required',
            'country' => 'required',
            'description' => 'required',
            'review' => 'required|numeric',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'The name is required',
            'address.required' => 'The address is required',
            'zipCode.required' => 'The zip code is required',
            'zipCode.numeric' => 'The zipCode must be a number',
            'town.required' => 'The town is required',
            'country.required' => 'The country is required',
            'description.required' => 'The description is required',
            'review.required' => 'The review is required',
            'review.numeric' => 'The review must be a number',
        ];
    }
}
