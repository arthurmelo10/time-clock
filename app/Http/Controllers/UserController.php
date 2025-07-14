<?php

namespace App\Http\Controllers;

use User\Models\User;

class UserController
{
    public function index(): array
    {
        return User::all()->toArray();
    }
}
