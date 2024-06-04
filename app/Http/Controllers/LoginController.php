<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // return response()->json([
            //     // 'success' => true,
            //     // 'message' => 'Login successful!',

            // ]);
            return redirect()->route('home');

        }

        return response()->json([
            'success' => false,
            'message' => 'Invalid username or password.',
        ], 401);
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        return redirect('/login');
    }
}
