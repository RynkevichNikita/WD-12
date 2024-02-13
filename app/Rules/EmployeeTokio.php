<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class EmployeeTokio implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if ($value != 5) {
            $fail('The :attribute must be 5.');
        }
    }

    public function passes($attribute, $value) 
    {
        return $value = 5;
    }
}
