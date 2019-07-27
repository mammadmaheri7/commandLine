<?php

namespace App\Http\Controllers;

use Exception;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class jwtController extends Controller
{
    public function create()
    {
        return view('jwtcreate');
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        if($user)
        {
            $key = env("jwtPassword","789654123");
            $token = array(
                "username" => $user->name,
            );


            $jwt = JWT::encode($token, $key);
            return response(['jwttoken'=>$jwt]);
            //$decoded = JWT::decode($jwt, $key, array('HS256'));
        }
    }

    public function showUsername(Request $request)
    {
        $jwttoken = $request->jwt;
        $key = env("jwtPassword","789654123");

        $decoded = null;
        try{
            $decoded = JWT::decode($jwttoken, $key, array('HS256'));
            return response()->json([
                'username'=> $decoded->username ,
                 'info' => "news",
            ]);
        }
        catch (Exception $e)
        {
            return response()->json([
                'errors' =>
                    [
                        'message'       => 'Invalid token!',
                    ],
            ]);

        }

    }
}
