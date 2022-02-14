<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginAuthRequest;
use App\Http\Requests\RegisterAuthRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(RegisterAuthRequest $request){
        return new UserResource(User::create(array_merge(
            ['password'=>Hash::make($request->input('password'))],
            $request->only('name','email'),
        )));
    }
    public function login(LoginAuthRequest $request){
        
        if (Auth::attempt($request->only('email','password'))) {
            $token = $request->user()->createToken($request->email);
            return ['token' => $token->plainTextToken];
        }
 
        return response()->json([
            'message'=>'Credencial incorrecta!!'
        ],401);

    }
}
