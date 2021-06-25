<?php

namespace App\Http\Controllers;
use Firebase\JWT\JWT;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request){
        if($request->username === 'test' && $request->password === "12345678"){
            $payload = [
                'username' => $request->username,
            ];
            $secret_key = config('app.jwt_secret_key');
            $jwt_token = JWT::encode($payload, $secret_key);
            return redirect()->route('profile')->withCookie('token',$jwt_token);
        }
        else{
            return response([
                'result' => 'FAILED',
                'message' => 'Username or password not valid',
            ], 200);
        }   
    }
}
