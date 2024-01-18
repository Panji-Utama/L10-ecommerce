<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function mock_home()
    {
        return view('users.home_user');
    }

    public function store(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('users.home_user');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
        // $request->authenticate();

        // $request->session()->regenerate();

        // return redirect()->intended('users.home_user');
    }

    public function showLogin()
    {
        return view('login');
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);
    }

    protected function credentials(Request $request)
    {
        $field = filter_var($request->get('login'), FILTER_VALIDATE_EMAIL)
            ? 'email'
            : 'username';

        return [
            $field => $request->get('login'),
            'password' => $request->get('password'),
        ];
    }
}
