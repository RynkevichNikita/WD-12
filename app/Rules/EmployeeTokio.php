<?php

namespace App\Rules;
use App\Models\Employee;
use App\Models\Office;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class EmployeeTokio implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $emp = Employee::find($value);
        if ($emp) {        
            $office = Office::find($emp->officeCode);
            if ($office->city != 'Tokyo') {
                $fail('The :attribute not from Tokyo.');
            }
        }

    }

    public function passes($attribute, $value) 
    {
        return $value = 5;
    }
}
