<?php

namespace App\Http\Requests\Manage\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
            'title'       => 'nullable',
            'description' => 'nullable',
            'price'       => 'nullable|numeric|gte:0',
            'quntity'     => 'nullable|numeric|gte:0',
            'category_id' => 'nullable',
        ];
    }
}
