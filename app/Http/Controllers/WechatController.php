<?php namespace App\Http\Controllers;

use Overtrue\Wechat\Server;
use Log;

class WechatController extends Controller {

    /**
     * 处理微信的请求消息
     *
     * @param Overtrue\Wechat\Server $server
     *
     * @return string
     */
    public function serve(Server $server)
    {
        $server->on('message', function($message){
            return "欢迎关注 Station！";
        });

        return $server->serve(); // 或者 return $server;
    }
}