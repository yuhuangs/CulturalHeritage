<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {

    protected $userInfo = false;  //用户登录信息（未登录为false）
    //构造方法
    public function __construct() {
        parent::__construct();
        //登录检查
        $this->checkUser();
    }
    //检查登录
    private function checkUser(){
        if(session('?user_id')){
            $userinfo = array(
                'mid' => session('user_id'),       //会员id
                'mname' => session('user_name'),  //用户名
            );
            $this->userInfo = $userinfo;    //保存登录后的信息
            $this->assign($userinfo);     //为模板分配用户信息变量
        }
    }
}
