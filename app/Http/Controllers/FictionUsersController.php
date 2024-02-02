<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FictionUsersController extends Controller
{
    public function show () {
        $users = [
            'Andrey' => [1, 2, 3],
            'Petya' => [1, 2, 3],
            'Slava' => [1, 2, 3],
            'Alesya' => [1, 2, 3]
        ];
        return json_encode($users);
    }
}
