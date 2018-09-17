<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'type', 'year', 'name','leader_id', 'leader', 'grade', 'major', 'college', 'department', 'leader_phone',
        'leader_email', 'outlay','begin_time','end_time','team_id','team_info','reason','plan','result',
        'outlay_detail'
    ];
}
