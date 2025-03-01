<?php

namespace App\Http\Requests\Flavour;

use Illuminate\Foundation\Http\FormRequest;

class FlavourStoreRequest extends FormRequest
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
            "is_fixed"            => ['required','integer'],
            "shop_id"             => ['required','integer','exists:shops,id'],
            "manufacturer_id"     => ['required','integer','exists:manufacturers,id'],
            "name"                => ['required','string'],
            "category_id"         => ['required','integer','exists:categories,id'],
            "minimum_quantity"    => ['required','integer','min:0']
        ];
    }
}
