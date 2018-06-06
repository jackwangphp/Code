<?php
/**
 * Created by PhpStorm.
 * User: hello
 * Date: 2018/6/6
 * Time: 15:06
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     *
     * 处理用户登录认证
     *
     */
    public function authenticate()
    {
        if(Auth::attempt(['userid'=>$userid, 'password'=>$password]))
        {
            return redirect()->intended('dashboard');
        }
    }

}