<?php

namespace App\Http\Controllers\View\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterViewController extends Controller
{
    //
    public function showForm($mode = null)
    {
        return view('auth.register')
            ->withMode($mode);
    }
}
