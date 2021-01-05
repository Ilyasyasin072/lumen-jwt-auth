<?php

namespace App\Http\Controllers;
use \Illuminate\Http\Request;
use JWTAuth;

class AuthController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function login(Request $request) {
        $credential = $request->only('name', 'password');

        if(!$token = JWTAuth::attempt($credential) ) {
            return $this->sendError('failed');
        }

        return $this->sendResponse(compact('token'), 'login Success');
    }
    //
}
