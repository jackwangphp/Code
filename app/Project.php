<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name', 'desc', 'teamid', 'git', 'email', 'website','userid','creator'];
}
