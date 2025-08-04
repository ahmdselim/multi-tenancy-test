<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController
{

    public function show()
    {
        return view('tenant.login');
    }

    public function login(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(route('tenant:tenant.dashboard', absolute: false));
    }

}
