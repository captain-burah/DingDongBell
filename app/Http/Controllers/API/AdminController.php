<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use JWTAuth;

class AdminController extends Controller
{
    public function login(Request $request){
        
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if (! $token = JWTAuth::attempt($validator->validated())) {
            return response()->json(['error' => 'Unauthorized', 'access_token' => 'false'], 401);
        }

        return $this->createNewToken($token);
    }



    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'fname' => 'required|string|between:2,100',
            'lname' => 'required|string|between:2,100',
            'email' => 'required|string|email|max:100|unique:admins',
            'password' => 'required|confirmed|',
        ]);

        if($validator->fails()){
            return response()->json(['error'=>$validator->errors()->toJson()], 400);
        }

        $admin = Admin::create(array_merge(
                    $validator->validated(),
                    ['password' => bcrypt($request->password)]
                ));

        if (! $token = JWTAuth::attempt($request->only('email','password'))) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        return $this->createNewToken($token);  
    }

    

    protected function createNewToken($token){
        
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'user' => auth('admins')->user()
        ]);
    }

    public function getUser(Request $request)
    {
        return response()->json($request->admin());
    }

    public function refresh() {
        return $this->createNewToken(auth()->refresh());
    }
}
