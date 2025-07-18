<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function signup(Request $request) {
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $sucess['token'] = $user->createToken('MyApp')->plainTextToken;
        $user["name"]= $user->name;
        return ['sucess'=>true,"result"=>$sucess,"msg"=>"user register Complete","user"=>$user];
    }

    
    function login(Request $request) {
        $input = $request->all();
        $user = User::where('email', $input['email'])->first();
        if(!$user || !Hash::check($input['password'], $user->password)) {
            return ["sucess"=>false,"msg"=>"Email or Password is incorrect"];
        }
        $sucess['token'] = $user->createToken('MyApp')->plainTextToken;
        $user["name"]= $user->name;
        return ['sucess'=>true,"result"=>$sucess,"msg"=>"user login Complete","user"=>$user];}
}
