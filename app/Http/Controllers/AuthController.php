<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //handels the authentication logic
    public function showRegister() {
        return view('register');
    }
}
