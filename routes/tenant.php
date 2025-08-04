<?php

declare(strict_types=1);

use App\Http\Controllers\Tenant\AuthController;
use App\Http\Controllers\Tenant\DepartmentController;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;
use App\Http\Controllers\Tenant\OnboardingController;
use App\Http\Controllers\Tenant\DashboardController;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::middleware([
    'web',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->as('tenant:')->group(function () {
    Route::get('/', function () {
        return 'This is your multi-tenant application. The id of the current tenant is ' . tenant('id');
    });

    Route::get('login', [AuthController::class, 'show'])->name('tenant.loginShow');
    Route::post('login', [AuthController::class, 'login'])->name('tenant.login');
    Route::get('/onboarding', [OnboardingController::class, 'show'])->name('tenant.onboarding');
    Route::post('/onboarding', [OnboardingController::class, 'store'])->name('tenant.onboarding.store');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('tenant.dashboard')->middleware('auth');
    Route::get('/dashboard/departments', [DepartmentController::class, 'index'])->name('tenant.departments')->middleware('auth');

});


