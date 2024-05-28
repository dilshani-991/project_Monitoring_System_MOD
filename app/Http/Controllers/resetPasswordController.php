<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class resetPasswordController extends Controller
{
    public function resetPasswordForm()
    {
        return view('pages.password-reset');
    }
}
