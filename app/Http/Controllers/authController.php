<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class authController extends Controller
{
    //Register
    public function register()
    {
        return view('auth.signin');
    }

    public function handelRegister(Request $request)
    {
        $request->validate([
            'name' => 'string|min:5',
            'email' => 'email|required',
            'password' => 'required|min:8'
        ]);

        $user = user::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        Auth::login($user);

        return redirect(route('home'));
    }

    //Login

    public function handleLogin(Request $request)
    {
        $request->validate([
            'email' => 'email',
            'password' => 'required|min:8',
        ]);

        $is_found = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);
        if ($is_found && Auth::user()->is_admin == 1) {
            return redirect(route('adminHome'));
        } elseif ($is_found && Auth::user()->is_admin == 0) {
            return redirect(route('home'));
        } else
            return back();
    }

    //Login with GitHub
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    public function handleProviderCallback()
    {
        //$user is array has the data of user github account (name,email,....)
        $user = Socialite::driver('github')->user();
        // dd($user);

        //store user github email in  $github_email
        $github_email = $user->email;
        //check is $github_email in database
        $check_email = user::where('email', '=', $github_email)->first();
        //if $check_email == null that means $github_email not in database ,create new user in database and login this user
        if ($check_email == null) {
            $new_user = user::create([
                'name' => $user->name,
                'email' => $user->email,
                'password' => Hash::make('123456'),
                'oauth_token' => $user->token
            ]);
            Auth::login($new_user);
            //else means $github_email is in database ,here login user without creating new user in database 
        } else {
            Auth::login($check_email);
        }

        return redirect(route('home'));
    }

    //logout
    public function logout()
    {
        Auth::logout();
        return back();
    }
}
