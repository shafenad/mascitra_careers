<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DummyAuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);

        $users = config('dummy_users', []); 

        $email = strtolower(trim($data['email']));
        $pass  = trim($data['password']);

        $found = collect($users)->first(function ($u) use ($email, $pass) {
            return strtolower(trim($u['email'])) === $email
                && (string) $u['password'] === (string) $pass;
        });

        if (!$found) {
            return back()->withErrors(['email' => 'Email atau password salah.'])->withInput();
        }

        session([
            'auth' => true,
            'user' => [
                'name' => $found['name'],
                'email' => $found['email'],
                'role' => $found['role'],
            ],
        ]);

        return match ($found['role']) {
            'superadmin' => redirect()->route('dashboard_superadmin'),
            'admin'      => redirect()->route('dashboard_admin'),
            default      => redirect()->route('dashboard_pengguna'),
        };
    }

}
