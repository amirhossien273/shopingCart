<?php

namespace App\Rules;

use App\Models\CartItem;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class UniqueCartItemRule implements ValidationRule
{
    protected $cart_Id;
    protected $product_id;

    /**
     * Create a new rule instance.
     *
     * @param  string  $cart_Id
     * @param  string  $product_id
     * @return void
     */
    public function __construct( $cart_Id, $product_id)
    {
        $this->cart_Id = $cart_Id;
        $this->product_id = $product_id;
    }
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
         if(!CartItem::where("cart_Id", $this->cart_Id)
        ->where("product_id", $this->product_id)
        ->exists()){
            $fail('is not true');
        }
    }
}
