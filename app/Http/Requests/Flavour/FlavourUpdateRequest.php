<?php

namespace App\Http\Requests\Flavour;

use Illuminate\Foundation\Http\FormRequest;

class FlavourUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'is_fixed' => ['required','integer'],
            'name' => ['required','string'],
            'minimum_quantity' => ['required','integer','min:0'],
            'is_active' => ['required','integer']
        ];
    }
}
