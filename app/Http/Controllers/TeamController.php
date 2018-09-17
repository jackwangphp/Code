<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeamCreate;
use App\Jobs\JoinTeam;
use App\User;
use Illuminate\Http\Request;
use App\Team;

class TeamController extends Controller
{

    private $leader;
    private $teamid;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
        return view('team', $request->user());
    }

    public function create(StoreTeamCreate $request){
        $team_data = $request->all();
        $this->teamid = md5(uniqid());
        //添加负责人
        $res[0] = $this->addTeam($team_data['userid_1'], '1');
        //添加指导教师
        $res[1] = $this->addTeam($team_data['userid_2'], '2');
        //添加成员
        $res[2] = $this->addTeam($team_data['userid_3'], '3');
        $res[3] = $this->addTeam($team_data['userid_4'], '3');
        $res[4] = $this->addTeam($team_data['userid_5'], '3');

        return $res;
    }

    public function confirm($token, $y){
        $team = Team::where('token',$token)->first();
        if(is_null($team)){
            return redirect('/');
        }
        if($y == '1'){
            $team->is_active = 1;
            $team->token = str_random(40);
            $team->save();
            return redirect('user');
        }else{
            $team->delete();
            return redirect('/');
        }


    }

    /**
     * @param $userid
     * @param $inteam
     * @return array
     *
     * 将user添加到team中，并向user发送邮件通知
     */
    private function addTeam($userid, $inteam){
        $user = User::where('userid',$userid)->first();

        if($inteam == '1'){
            $this->leader = $user;
        }
        $team = [
            'teamid'=>$this->teamid,
            'projectid'=>'',
            'year'=>date('Y'),
            'userid'=>$user['userid'],
            'name'=>$user['name'],
            'email'=>$user['email'],
            'inteam'=>$inteam,
            'info'=>$user['info'],
            'cellphone'=>$user['cellphone'],
            'type'=>'',
            'is_active'=>'',
            'token'=>str_random(40)
        ];
        $team = Team::create($team);
        $user->team = $user->team.'-'.$this->teamid;
        $user->save();
        JoinTeam::dispatch($team, $this->leader)->onQueue('JoinTeam');
        return [true, $userid, '已向'.$user['name'].'发送了邀请'];
    }
}
