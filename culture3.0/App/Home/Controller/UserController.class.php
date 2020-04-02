<?php
namespace Home\Controller;
use Think\Controller;

class UserController extends Controller {
    public function __construct()
    {
        parent::__construct();
        $allow_action=array(
            'login','captcha','find','change','register','logout'
        );
        if($this->userInfo === false && !in_array(ACTION_NAME,$allow_action)){
            $this->error('请先登录。',U('User/login'));
        }
    }
//会员中心
    public function index(){
        $this->display();
    }
    //用户登录
    public function login() {
        //处理表单
        if (IS_POST) {
            //判断验证码
            $this->checkVerify(I('post.captcha'));
            //判断用户名和密码
            $name = I('post.nickname','','trim');
            $pwd = I('post.password','','trim');
            $user=D('User');
            $rst = $user->checkUser($name,$pwd,$user);
            if($rst!==true){
                $this->error($rst);
            }
            session('userName',$name);
            $this->success('登录成功，请稍后',U('Index/index'));
            return;
        }
        $this->display();
    }


    //退出
    public function logout(){
        session('[destroy]');
        $this->success('退出成功',U('Index/index'));
    }
    //注册新用户
    public function register() {
        if(IS_POST) {
            $this->checkVerify(I('post.captcha'));
            $user = D("user");
            if (!$data = $user->create()) {
                // 防止输出中文乱码
                header("Content-type: text/html; charset=utf-8");
                exit($user->getError());
            }
            $data['regdate'] = date("Y-m-d", time());
            if (!$res = $user->add($data)) {
                $this->error('注册失败！', U('User/register'));
            } else {
                $this->success('用户注册成功', U('User/login'));
                return;
            }
        }
        $this->display();
    }

    //忘记密码
    public function find(){
        if (IS_POST) {
            //判断验证码
            $this->checkVerify(I('post.captcha'));
            //判断用户名和密码
            $name = I('post.nickname','','trim');
            $phone = I('post.phone','','trim');
            $command=I('post.command','','trim');
            $user=D('User');
            $data = $user->field('uid,nickname,phone,command')->where(array('nickname'=>$name))->find();
            if($data===null){
                return '用户名不存在';
            }
            if($data['phone']==$phone&&$data['command']==$command){
                session('user_name',$name);
                $this->success('验证成功！跳转至修改密码界面！', U('User/change'));
            }else{
                $this->error('电话或密保口令输入错误！', U('User/find'));
            }
            return;
        }
        $this->display();
    }
    //修改密码
    public function change(){
        if(IS_POST) {
            $user = D("user");
            $data=I('post.','','trim');
            if($data['password']!==$data['repassword']){
                $this->error('确认密码和新密码不一致！', U('User/change'),3);
            }
            $res=$user->where(array('nickname'=>$_SESSION['user_name']))->setField('password',md5($data['password']));
            if (!$res) {
                $this->error('修改密码失败！', U('User/change'),3);
            } else {
                $this->success('修改密码成功', U('User/login'),3);
            }
        }
        $this->display();
    }
    //生成验证码
    public function captcha() {
        $verify = new \Think\Verify();
        return $verify->entry();
    }
    //检查验证码
    private function checkVerify($code, $id = '') {
        $verify = new \Think\Verify();
        $rst = $verify->check($code, $id);
        if($rst!==true){
            $this->error('验证码输入有误');
        }
    }
    //查看收件地址
    public function addr(){
        $mid = $this->userInfo['mid'];
        $data['address'] = D('user')->getAddr($mid);
        $this->assign($data);
        $this->display();
    }
    //修改收件地址
    public function addrEdit(){
        if(IS_POST){
            $mid = $this->userInfo['mid'];
            $rst = $this->create('user','save',2,"mid=$mid");
            if($rst===false){
                $this->error('修改失败');
            }
            $this->redirect('User/addr');
            return;
        }
        $this->addr();
    }
}