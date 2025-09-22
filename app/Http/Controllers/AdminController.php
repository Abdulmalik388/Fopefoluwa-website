<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // Show login form
    public function showLoginForm()
    {
        return view('admin.login');
    }

    // Handle login
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $admin = Admin::where('username', $request->username)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            // store session
            $request->session()->put('admin_id', $admin->id);
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['username' => 'Invalid credentials']);
    }

    // Dashboard
    public function dashboard(Request $request)
    {
        if (!$request->session()->has('admin_id')) {
            return redirect()->route('admin.login');
        }

        return view('admin.dashboard');
    }

    // Logout
    public function logout(Request $request)
    {
        $request->session()->forget('admin_id');
        return redirect()->route('home');
    }
}
