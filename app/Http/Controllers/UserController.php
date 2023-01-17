<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function data_user()
    {
        $dtUser = User::all();
        return view('dashboard.data-user', compact('dtUser'));
    }

    public function destroy($id)
    {
        $dtUser = User::findorfail($id);
        $dtUser->delete();
        return back();
    }

    public function register()
    {
        $data['title'] = 'Register';
        return view('homepage/auth/register');
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'level' => 'required',
            'username' => 'required|unique:tb_user',
            'password' => 'required',
            'password_confirm' => 'required|same:password',
        ]);

        $user = new User([
            'name' => $request->name,
            'level' => $request->level,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);
        $user->save();

        return redirect()->route('register')->with('success', 'Registration success. Please login!');
    }

    public function login()
    {
        $data['title'] = 'Login';
        return view('homepage/auth/login', $data);
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
            if (Auth::user()->level == 'admin') {
                return redirect()->intended('dashboard');
            } else {
                return redirect()->intended('profile');
            }
            return redirect('/');
        }

        return back()->withErrors([
            'password' => 'Wrong username or password',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
