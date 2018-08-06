<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    //
    public function index(){
        return response()->json(['nome' => Auth::user()->nome]);
    }

    public function create(){
        $user = $request->all();
        $user['password'] = brcrypt($user['password']);
        User::create($user);
        return response()->json(['success' => true]);
    }
}
