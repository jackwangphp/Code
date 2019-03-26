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
        $apps = Application::paginate(15);
        return view('application.applist', ['apps'=> $apps]);
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
            $teams = Team::getTeam($leader->teamid);
            return view('application.create', ['teams' => $teams, 'application' => $application]);
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

            $exist = Application::create($application);
        }else{
            $exist->name = $application['name'];
            $exist->reason = $application['reason'];
            $exist->plan = $application['plan'];
            $exist->result = $application['result'];
            $exist->outlay_detail = $application['result'];

            $exist->save();
        }
        return redirect(route('applications.show',["application"=>$exist->id]));

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
        $teams = Team::getTeam($application['team_id']);
//        Storage::put('public/test.doc',view('word.application', [
//            'application'=>$application,
//            'teams'=>$teams
//            ]
//        ));
        return view('application.appdetail', ['teams' => $teams, 'application' => $application]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Application $application)
    {
        $teams = Team::getTeam($application['team_id']);
//        $fileName = $application['year'].'中国传媒大学大学生创新项目申请表'.$application['name'].'-'.$application['leader'].'\.doc';
//        $fileName = iconv('UTF-8', 'GB2312', $fileName);
        $fileName = 'cucipm'.time().'.doc';
        Storage::put('public/'.$fileName, view('word.application',
            [
                'application'=>$application,
                'teams'=>$teams
            ]
        ));
        return redirect(Storage::url('public/'.$fileName));
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

}
