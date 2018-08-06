<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Tymon\JWTAuth\JWTAuth;

class AuthController extends Controller
{
    //
    private $jwtAuth;

    public function __construct(JWTAuth $jwtAuth)
    {
        $this->jwtAuth = $jwtAuth;
    }

    public function login (Request $request)
    {
        // grab credentials from the request
        $credentials = $request->only('nome', 'telefone');

        
            // attempt to verify the credentials and create a token for the user
        if (! $token = $this->jwtAuth->attempt($credentials)) {
            return response()->json(['error' => 'invalid_credentials'], 401);
        }
        

        // all good so return the token
        return response()->json(compact('token'));
    }

    public function refresh()
    {
        $token = $this->jwtAuth->getToken();
        $token = $this->jwtAuth->refresh($token);

        return response()->json(compact('token'));
    }

    public function logout()
    {
        $token = $this->jwtAuth->getToken();
        $token->jwtAuth->invalidate($token);

        return response()->json(['logout']);
    }

    public function getAuthenticatedUser()
    {
        

        if (! $user = $this->jwtAuth->attemptparseToken()->authenticate()) {
            return response()->json(['error'=>'user_not_found'], 404);
        }

        

        // the token is valid and we have found the user via the sub claim
        return response()->json(compact('usuarios'));
    }
}
