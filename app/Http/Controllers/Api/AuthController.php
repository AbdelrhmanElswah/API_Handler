<?php

namespace App\Http\Controllers\Api;

use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request){
        $validate = Validator::make($request->all(),[
    'email' => 'required|email',
    'password' =>'required|min:8'
    ]);
    if($validate->failed()){
        return response()->json(['error'=>'True',"message"=>$validate->errors()],200);
    }
            
    $credentials = request(['email','password']);
    $token = JWTAuth::attempt($credentials);

    if(!$token){
        return response()->json(['error'=>'True','message'=>'unauthroized'],200);
    }
    $payload = JWTAuth::manager()->decode(new \Tymon\JWTAuth\Token($token));

    $expiration = $payload['exp'] * 3600;

    return response()->json([
        'access_token'=>$token,
        'expired_in'=>$expiration,
    ]);

    }

    public function logout(){
        return response()->json(['error'=>'false','message'=>'logout sucessfully'],200);
    }
}
