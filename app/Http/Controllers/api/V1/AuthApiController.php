<?php

namespace App\Http\Controllers\api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class AuthApiController extends Controller
{
    public function login(LoginRequest $request){
       $credintails=$request->only('email', 'password');
       $token=auth('api')->attempt($credintails);
       if(!$token){
           return response()->json(['error' => 'Unauthorized '], 401);
       } 
       return response()->json([
            'access_token'=> $token,
            'expires_in'=>auth('api')->factory()->getTTL() * 60,
       ]);
       
       }
       public function me(){
        $user=auth('api')->user();
        return response()->json($user);
    }
    public function refresh(){
        $refreshed_token=auth('api')->refresh();
        return response()->json(
            [
                'refreshed_token'=>$refreshed_token,
                'expires_in'=>auth('api')->factory()->getTTL()*60
            ]
            );
    }
    public function logout(){
        auth('api')->logout(true);
        return response()->json([
            'message'=>"logged out success !! "
        ]);
    }
    
}
