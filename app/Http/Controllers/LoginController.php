<?php

namespace App\Http\Request;
namespace App\Http\Controllers;
use App\Models\Request;
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
        return view('auth.login');
    }


    public function login(Request $request)
    {
        $user = DB::table('users')->whereEmailAndPassword($request->input('email'), $request->input('password'))->first;

        if($user){
            if(Hash::check($user->password,Hash::make($request->input('password')))){

                if(Auth::attempt($user)){
                    $request->session()->regenerate();

                    return redirect()->intended('/index');
                }
            }

        } else{

            echo 'login failed';
        }

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
