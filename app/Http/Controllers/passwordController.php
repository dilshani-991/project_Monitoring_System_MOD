<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function showForgetPasswordForm()
    {
        return view('pages.forget_password');
    }
}