<?php

namespace App\Http\Requests\Front\CartItem;

use App\Rules\UniqueCartItemRule;
use Illuminate\Foundation\Http\FormRequest;

class CartItemStoreRequest extends FormRequest
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
            'cart_id' => ['required', 'exists:carts,id'],
            'product_id' => ['required', 'exists:products,id', new UniqueCartItemRule($this->product_id,$this->user_id)],
            'quntity'     => 'nullable|numeric|gte:0',
        ];
    }
}
