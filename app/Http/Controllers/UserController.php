<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function create()
    {
        $user = User::create([
            'name' => 'zxc',
            'email' => 'asd@s.rt',
            'password' => '123',
        ]);

        return response()->json(['ok']);
    }
}
