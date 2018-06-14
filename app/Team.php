<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    private $fillable = ['name','userid','teamid','year','email','inteam','info','cellphone'];
}
