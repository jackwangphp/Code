<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['name', 'userid', 'teamid', 'projectid', 'year', 'email', 'inteam',
        'info', 'cellphone', 'type', 'is_active', 'token'];

    public static function getTeam($teamid){
        $teams = Team::where([
            ['teamid', '=', $teamid],
            ['is_active', '=', 1]
        ])->orderBy('inteam')->get();
        $teams = $teams->transform(function ($item) {
            $data = json_decode($item->info, true);
            $data['email'] = $item->email;
            $data['cellphone'] = $item->cellphone;
            $data['type'] = $item->type;
            if ($item->inteam == 1) {
                $data['inteam'] = '项目负责人';
            } elseif ($item->inteam == 2) {
                $data['inteam'] = '指导教师';
            } else {
                $data['inteam'] = '项目成员';
            }
            return $data;
        });
        return $teams;
    }
}
