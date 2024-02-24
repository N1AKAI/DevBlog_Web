<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Show register form
    public function create()
    {
        if (auth()->check()) {
            return redirect("/");
        }
        return view("users.register");
    }

    // Store user
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:6'],
            'username' => 'required',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:6'],
        ], [], [
            'name' => 'full name',
        ]);

        // Hash password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create user
        $user = User::create($formFields);

        // Login
        auth()->login($user);

        return redirect('/')->with('success', 'Registed successfully!');
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect("/")->with('success', 'You have been logout');
    }

    // Show login form
    public function login()
    {
        return view('users.login');
    }

    // Authenticate user
    public function auth(Request $request)
    {
        $formFields = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();
            return redirect('/')->with('success', 'You\'re now logged in!');
        }

        return back()->withErrors(['email' => 'The email address or password is incorrect'])->onlyInput("email");
    }
}
