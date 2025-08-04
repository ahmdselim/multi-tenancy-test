<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as AuthenticateMiddleware;
use Illuminate\Http\Request;

final class Authenticate extends AuthenticateMiddleware
{
    protected function redirectTo(Request $request): string
    {
        return route('tenant:tenant.loginShow');
    }
}
