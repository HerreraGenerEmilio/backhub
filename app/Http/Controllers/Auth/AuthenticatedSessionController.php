<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Cookie;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        /* return redirect()->intended(route('dashboard', absolute: false)); */
       return $this->redirectTo();
    }

    public function redirectTo()
    {
        if (Auth::user()->isAdmin()) {
            return redirect('http://localhost:4200/test');
        } else {
            return redirect('http://localhost:4200/home');
        }
    }

    

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    // Eliminar todas las cookies estableciendo su tiempo de expiración en el pasado
    $cookies = Cookie::get();

    foreach ($cookies as $name => $value) {
        Cookie::queue(Cookie::forget($name));
        Cookie::queue(Cookie::make($name, null, -1));
    }

    return redirect('/');
    }
}
