<?php
/**
 * Created by PhpStorm.
 * User: GodYu
 * Date: 2020/2/21
 * Time: 20:44
 */

namespace Home\Controller;
use Think\Controller;

class MessageController extends Controller
{
    public function index(){
        if(IS_POST) {
            $message = D("message");
            if (!$data = $message->create()) {
                // 防止输出中文乱码
                header("Content-type: text/html; charset=utf-8");
                exit($message->getError());
            }
            $data['time'] = date("Y-m-d", time());
            if (!$res = $message->add($data)) {
                $this->error('留言失败！', U('Message/index'));
            } else {
                $this->success('留言成功', U('Message/index'));
                return;
            }
        }
        $this->country();
        $this->display();
    }

}