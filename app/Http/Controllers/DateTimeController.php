<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class DateTimeController extends Controller
{
    public function show () {
        $time = Carbon::now()->addHours(3);
        return json_encode($time);
    }
}
