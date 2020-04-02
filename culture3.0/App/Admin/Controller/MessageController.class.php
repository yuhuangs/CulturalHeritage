<?php
namespace Admin\Controller;
use Think\Controller;
//后台用户登录控制器
class MessageController extends CommonController
{
    //后台登录页
    public function index()
    {
        $model=D('message');
        $all=$model->select();
        foreach ($all as $v){
            if($v['writer']==''){
                $id=$v['id'];
                $model->where("id=$id")->delete();
            }
        }
        $res=$model->select();
        $this->assign('res',$res);
        $this->display();
    }

    public function check(){
        $id=I('get.id');
        $model=D('message');
        $res=$model->where("id=$id")->delete();
        if ($res===false) {
            $this->error('删除失败');
        }
        $this->success('删除成功', U('Message/index'));

    }

    public function reply(){
        $id=I('get.id');
        if(IS_POST){
            $rst=$this->create('message','save',2,array("id=$id"));
            if ($rst===false){
                $this->error("回复失败");
            }
            $this->success('回复成功', U('Message/index'));
            return;
        }
        $this->assign('id',$id);
        $this->display();

    }


}