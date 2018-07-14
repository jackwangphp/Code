<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['name', 'userid', 'teamid', 'projectid', 'year', 'email', 'inteam',
        'info', 'cellphone', 'type', 'is_active', 'token'];
}
