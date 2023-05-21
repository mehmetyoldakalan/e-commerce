<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApiLoginRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    final public function login(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $credentials = ['email' => $request->email, 'password' => $request->password];

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            $token = $user->createToken('product-controller')->plainTextToken;

            return response()->json(['success' => true, 'token' => $token]);
        }

        return response()->json(['message' => 'this credentials not match our data']);
    }
}
