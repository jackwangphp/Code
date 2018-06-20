<?php

namespace App\Http\Controllers;

use App\Mail\JoinTeamMail;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Handler\CurlHandler;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function getinfo($id)
    {
        $body = [
            'appId'=>'KEPaT6',
            'skey'=>'f255d83af93b3786ca280a978a8481e3d2ed6181',
            'userid'=>$id
        ];
        $client = new Client([
            'base_uri'=>'http://eteaching.cuc.edu.cn'
        ]);
        $res= $client->request(
            'POST',
            '/auth/getInfo',
            ['json' => $body]
        );
        return response($res->getBody(),200);

    }

    public function mailTest(Request $request){
        $mail = new JoinTeamMail($request->user());
        Mail::to($request->user())->send($mail);
        return $mail;
    }

    public function test(){
        return response(md5(uniqid()));
    }
}
