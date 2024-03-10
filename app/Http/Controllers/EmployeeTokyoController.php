<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EmployeeTokyoRequest;
use App\Models\Employee;
use App\Models\Office;

class EmployeeTokyoController extends Controller
{
    public function index() {
        return view('employeeTokyo');
    }

    public function validation(EmployeeTokyoRequest $request) {

        return 'Yea, he is from Tokyo';
    }
}
