<?php

namespace App\Http\Request;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use DB;


class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function register()
    {
        return view('auth.register');
    }

    public function registration()
    {
        DB::table('users')->insert([
            'username' => request('username'),
            'email' => request('email'),
            'password' => Hash::make(request('password')),
            'remember_token' => Str::random(10)
        ]);

        return redirect('/');
    }


    public function showLoginForm()
    {
        echo Auth::id();
        return view('auth.login');
    }


    public function login(Request $request)
    {

        $remember = true;

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

//        if(DB::table('users')->where($request->input('email'), )->first){
//            $remember = true;
//        } else {
//            $remember = false;
//        }

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);

    }


    public function logout(Request $request)
    {
        Auth::logout();

        // LOGOUT OTHER DEVICES
        Auth::guard()->logoutOtherDevices();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
