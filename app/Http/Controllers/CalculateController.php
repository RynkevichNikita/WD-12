<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculateController extends Controller
{
    public function show ($operation, $number1, $number2) {
        switch ($operation) {
            case '+':
                return $number1 + $number2;
            case '-':
                return $number1 - $number2;
            case '*':
                return $number1 * $number2;
            case '/':
                return $number1 / $number2;
        }
    }
}
