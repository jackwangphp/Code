<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class UserController extends Controller
{
    public function userHome(Request $request){
        $user = json_decode($request->user()['info'],true);
        $user['email'] = $request->user()['email'];
        $user['cellphone'] = $request->user()['cellphone'];
        $user['userid'] = $request->user()['userid'];
        $isJoin = Team::where('userid',$user['userid'])->first();
        if(is_null($isJoin)){
            $user['teamid'] = '';
            $user['teams'] = [];
        }else{
            $user['teamid'] = $isJoin->teamid;
            $user['teams'] = Team::getTeam($isJoin->teamid);
        }
        return view('auth.user', $user);
    }
}
