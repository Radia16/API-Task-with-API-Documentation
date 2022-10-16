<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Exception;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PassportAuthController extends Controller
{
    //
     // for registering user for authentication
     public function register(Request $request)
     {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => [
                'required',
                'min:8',
            ],

        ]);
        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            $token = $user->createToken('laravelAuthapi')->accessToken;


            $response = [
                'user' => $user,
                'token' => $token,
            ];
            return response($response, 201);
            // return 'User data created successfully!';
        } catch (\Exception $e) {
            return ('Insert into database error -' . $e->getLine() . $e->getMessage());
        }
     }

      // for registering user for authentication
    public function login(Request $request)
    {
        $fieldRequired = $request->validate([
            'email' => 'required',
            'password' => 'required',
            'remember_me' => 'boolean'
        ]);
        try {
            // check email for login user
            $user = User::where('email', $request->email)->first();
            if (!$user || !Hash::check($fieldRequired['password'], $user->password)) {
               return response([
                    'message' => 'You have entered incorrect email or password'
                ], 401);
            } else {
                $token = $user->createToken('laravelAuthapi')->accessToken;
                // if ($request->remember_me)
                //     $token->expires_at = Carbon::now()->addWeeks(1);
                $response = [
                    'user' => $user,
                    'token' => $token,
                    // 'expires_at' => Carbon::parse(
                    //     $token->token->expires_at
                    // )->toDateTimeString()
                ];
                return response($response, 201);
            }
            // return 'User data created successfully!';
        } catch (\Exception $e) {
            return ('Insert into database error -' . $e->getLine() . $e->getMessage());
        }
    }

    //for logout
    public function logout(Request $request){
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }
}
