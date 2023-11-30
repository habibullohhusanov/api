<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth")->except("register");
    }
    public function login(LoginRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return $this->error('Email or password incorrect');
        }
        return $this->succes(["token" => $user->createToken($request->email)->plainTextToken]);
    }
    public function register(RegisterRequest $request)
    {
        $user = User::create([
            "name" => $request->name,
            "email"=> $request->email,
            "password"=> Hash::make($request->password),
        ]);
        return $this->succes([
            "token" => $user->createToken($request->email)->plainTextToken,
        ]);
    }
    public function user()
    {
        return auth()->user()->name;
    }
}
