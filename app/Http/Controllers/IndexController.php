<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

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
}
