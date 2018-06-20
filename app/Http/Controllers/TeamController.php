<?php

namespace App\Http\Controllers;

use App\Jobs\JoinTeam;
use App\User;
use Illuminate\Http\Request;
use App\Team;

class TeamController extends Controller
{

    private $leader;
    private $teamid;
    public function index(Request $request){
        return view('team', $request->user());
    }

    public function create(Request $request){
        $team_data = $request->validate([
            'userid_1' => 'required|exists:users,userid|max:12|alpha_num',
            'userid_2' => 'required|exists:users,userid|max:12|alpha_num',
            'userid_3' => 'required|exists:users,userid|max:12|alpha_num',
            'userid_4' => 'required|exists:users,userid|max:12|alpha_num',
            'userid_5' => 'required|exists:users,userid|max:12|alpha_num',
        ]);
        $this->teamid = md5(uniqid());
        $res[0] = $this->addTeam($team_data['userid_1'], '1');
        $res[1] = $this->addTeam($team_data['userid_2'], '3');
        $res[2] = $this->addTeam($team_data['userid_3'], '2');
        $res[3] = $this->addTeam($team_data['userid_4'], '2');
        $res[4] = $this->addTeam($team_data['userid_5'], '2');

        return $res;
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

        $existed = Team::where([
            ['userid','=',$userid],
            ['year','=',date('Y')],
            ['inteam','<>','3']
        ])->exists();
        if($existed){
            return [
                false, $userid, $user['name'].'已经加入了其他团队'
            ];
        }

        if($inteam == '3' && $user['type'] == '1'){
            return [
                false, $userid, $user['name'].'不是教师'
            ];
        }

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
            'type'=>''
        ];
        $team = Team::create($team);
        JoinTeam::dispatch($team, $this->leader)->onQueue('JoinTeam');
        return [true, $userid, '已向'.$user['name'].'发送了邀请'];
    }
}
