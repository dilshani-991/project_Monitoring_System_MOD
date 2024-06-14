<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class resetPasswordController extends Controller
{
    public function showResetPasswordForm()
    {
        return view('pages.reset_password');
    }
}
