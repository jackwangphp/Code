<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userHome(Request $request){
        $user = json_decode($request->user()['info'],true);
        $user['email'] = $request->user()['email'];
        $user['cellphone'] = $request->user()['cellphone'];
        return view('auth.user', $user);
    }
}
