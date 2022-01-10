<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
    public function handelRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'string|min:3',
            'email' => 'email'
            
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json($errors);
        }
        $user = user::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'access_token'=>str::random(64)
        ]);
        
        return response()->json($user->access_token);
    }


    public function handelLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'email|required', 
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json($errors);
        }
        $is_found = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        if (!$is_found)
        {
            $error = "this email not found";
            return response()->json($error);
        }

        $newAccess_token= str::random(64);
        $user = User::where('email','=',$request->email)->first();
        $user->update([
            'access_token'=>$newAccess_token
        ]);
        
        return response()->json($newAccess_token);

    }

    public function logout(Request $request)
    {
        $access_token = $request->access_token;
        $user= User::where( 'access_token' , $access_token)->first();
        if($user== null){
            $error = 'Access_token is not correct ';
            return response()->json($error);
        }

        $user->update([
            'access_token' => Null
        ]);
        return response()->json("logged out successefully");
          
    }

    
}
