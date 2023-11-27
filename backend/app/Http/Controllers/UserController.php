<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UserController extends Controller
{
    public function __invoke()
    {
        $users = [
            [
                'name' => 'ramazan',
                'age' => 23,
                'city' => 'moscow',
            ],
            [
                'name' => 'ali',
                'age' => 23,
                'city' => 'hushet',
            ],
        ];
        return $users;
    }
}
