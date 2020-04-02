<?php
namespace Admin\Controller;
use Think\Controller;
//后台用户登录控制器
class LoginController extends Controller {
    //后台登录页
    public function index(){
        if (IS_POST){
            //检查验证码
            $rst = $this->checkVerify(I('post.verify'));
            if($rst===false){
                $this->error('验证码错误');
            }
            //检查用户名密码
            if(I('post.admin_name')==C('USER_CONFIG.admin_name') && I('post.admin_pwd')==C('USER_CONFIG.admin_pwd')){
                session('admin_name',C('USER_CONFIG.admin_name'));
                $this->success('登录成功，请稍等', U('Index/index'));
            }else{
                $this->error('登录失败，用户名或密码错误');
            }
            return;
        }
        $this->display();
    }
    //生成验证码
    public function getVerify(){
        $verify = new \Think\Verify();
        return $verify->entry();
    }
    //检查验证码
    private function checkVerify($code, $id='') {
        $verify = new \Think\Verify();
        return $verify->check($code,$id);
    }
    //退出系统
    public function logout(){
        session('[destroy]');
        $this->success('退出成功',U('Login/index'));
    }
}
