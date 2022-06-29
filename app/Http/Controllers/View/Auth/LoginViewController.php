<?php

namespace App\Http\Controllers\View\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginViewController extends Controller
{
    //
    public function showForm(Request $request)
    {
        return view('auth.login');
    }
}
