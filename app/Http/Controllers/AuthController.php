<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AuthController extends Controller
{
	public function login(Request $request)
	{
		$request->validate([
			'username'       => 'required',
			'password'       => 'required',
		]);

		$user = User::where('username', $request->username)->first();
		return $user->createToken($request->username . Str::random(30))->plainTextToken;
	}

	public function logout(Request $request)
	{
		$request->user()->currentAccessToken()->delete();
		return response()->json('Logout successfully');
	}
}
