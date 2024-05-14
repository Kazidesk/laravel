<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class soicontroller extends Controller
{
    public function register(Request $request)
    {
        $data= $request->validate([
            'email'=> ['required', 'email','unique:users'],
            'password'=> ['required','min:6'],
            ]) ;


        $user=User::create($data);
        $token =$user->createToken('soi_token')->plainTextToken;
         
        return
        [
            'token'=> $token,
            'user'=> $user,

        ];

} 

        public function login(Request $request) 
        {
            $data= $request->validate([
            'email'=> ['required', 'email','exist:users'],
            'password'=> ['required','min:6'],
            ]) ;
            
            $user=User::where('email', $data['email'] )->first();
           if(!user || !Hash:: check ($data['password'], $user->password)){
            return response([
                'message'=>'Bad creds'], 401); }

            $token =$user->createToken('soi_token')->plainTextToken;
            

         return
           [
           'token'=> $token,
            'user'=> $user,
            ];

        }

} 

    


