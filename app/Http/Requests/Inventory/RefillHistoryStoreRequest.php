<?php

namespace App\Http\Requests\Inventory;

use Illuminate\Foundation\Http\FormRequest;

class RefillHistoryStoreRequest extends FormRequest
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
            'flavour_id' => ['integer','exist:flavours,id'],
            'quantity'   => ['integer','min:0'],
            'user_id'    => ['integer','exist:users,id'],
            'shop_id'    => ['integer','exist:shops,id'],
        ];
    }
}
