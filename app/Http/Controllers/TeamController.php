<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamController extends Controller
{
    public function index(Request $request){
        return view('team', $request->user());
    }

    public function create(Request $request){

    }
}
