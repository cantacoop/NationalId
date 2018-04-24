<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class NationalIdValidate implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // Fomular check thai national id
        $sum = 0;
        for ($i = 0; $i < strlen($value) - 1; $i++) {
            $number = substr($value, $i, 1);
            $sum += $number * (13 - $i);
        }

        $mod = $sum % 11;
        $pre_result = 11 - $mod;
        $result = $pre_result % 10;

        // Check last digit to result of fomular
        return substr($value, -1, 1) == $result;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The National ID invalid.';
    }
}
