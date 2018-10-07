<?php

namespace App\Http\Controllers;

use App\Application;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

//use PhpOffice\PhpWord\PhpWord;
//use PhpOffice\PhpWord\IOFactory;

class ApplicationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user = $request->user();
        $leader = Team::where([
            ['userid', '=', $user['userid']],
            ['inteam', '=', 1],
            ['year', '=', date('Y', time())]
        ])->first();
        $application = Application::where([
            ['leader_id', '=', $user['userid']],
            ['year', '=', date('Y', time())]
        ])->first();

        if (!is_null($leader)) {
            $teams = $this->getTeam($leader->teamid);
            return view('application', ['teams' => $teams, 'application' => $application]);
        } else {
            return view('warming.warming', ['warming' => '只有项目负责人才能创建或修改申请表，快去联系他吧！']);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $application = $this->validate($request, [
            'name' => 'required|string|max:25|min:5',
            'reason' => 'required|string|min:25',
            'plan' => 'required|string|min:25',
            'result' => 'required|string|min:25',
            'outlay' => 'required|string|min:25'
        ]);
        $user = $request->user();
        $leader = Team::where([
            ['userid', '=', $user['userid']],
            ['inteam', '=', 1],
            ['year', '=', date('Y', time())]
        ])->first();
        $exist = Application::where([
            ['year', date('Y', time())],
            ['leader_id', $leader['userid']]
        ])->first();
        if(is_null($exist)){
            $leader_info = json_decode($leader->info, true);
            $application['outlay_detail'] = $application['outlay'];
            $application['type'] = '';
            $application['year'] = date('Y', time());
            $application['leader_id'] = $leader['userid'];
            $application['leader'] = $leader_info['name'];
            $application['grade'] = $leader_info['grade'];
            $application['major'] = $leader_info['major'];
            $application['college'] = $leader_info['college'];
            $application['department'] = $leader_info['department'];
            $application['leader_phone'] = $leader['cellphone'];
            $application['leader_email'] = $leader['email'];
            $application['outlay'] = 1000;
            $application['begin_time'] = date('Y-m-d', time());
            $application['end_time'] = date('Y-m-d', time());
            $application['team_id'] = $leader['teamid'];
            $application['team_info'] = '';

            Application::create($application);
        }else{
            $exist->name = $application['name'];
            $exist->reason = $application['reason'];
            $exist->plan = $application['plan'];
            $exist->result = $application['result'];
            $exist->outlay_detail = $application['result'];

            $exist->save();
        }
        return response('ok',200);

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application)
    {
//        $pdf = PDF::loadView('pdf.application', $application);
//        return $pdf->stream();
//        $word = new PhpWord();
//        $section = $word->addSection();
//        $section->addText($application->plan);
//        $writer = IOFactory::createWriter($word, 'Word2007');
//        $writer->save('test.docx');
        $teams = $this->getTeam($application['team_id']);
        Storage::put('public/test.doc',view('word.application', [
            'application'=>$application,
            'teams'=>$teams
            ]
        ));
        return $application;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }


    public function getTeam($teamid){
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
