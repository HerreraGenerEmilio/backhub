<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function checkAuthStatus(Request $request)
    {
        Log::info('Solicitud recibida:', ['request' => $request->all()]);

        $authenticated = Auth::check();

        return response()->json([
            'authenticated' => $authenticated,
        ]);
    }
}
