<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function checkAuthStatus(Request $request)
    {
        Log::info('Solicitud recibida test:', ['request' => $request->all()]);

        $authenticated = Auth::check();
        $userCompany = Auth::user()->isAdmin();
        if ($userCompany) {
            $admin = true;
        } else {
            $admin = false;
        }
        return response()->json([
            'authenticated' => $authenticated,
            'isAdmin' => $admin
        ]);
    }

    public function logoutt(Request $request)
    {
        Log::info('Solicitud recibida LOGOUT:', ['request' => $request->all()]);
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    }
}
