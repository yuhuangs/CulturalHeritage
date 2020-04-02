<?php
namespace Admin\Controller;
use Think\Controller;
//后台用户登录控制器
class NoticeController extends CommonController
{
    //后台登录页
    public function index()
    {
        $model=D('notice');
        $all=$model->select();
        foreach ($all as $v){
            if($v['title']==''){
                $id=$v['id'];
                $model->where("id=$id")->delete();
            }
        }
        $where=array('status'=>'1');
        $count=$model->count();
        $Page=new \Think\Page($count,5);
        foreach($where as $key=>$val){
            $Page->parameter[$key]=urlencode($val);
        }
        $Page->lastSuffix=false;
        $Page->setConfig('header','共%TOTAL_PAGE%页，当前是第%NOW_PAGE%页<br>');
        $Page->setConfig('first','首页');
        $Page->setConfig('last','尾页');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %DOWN_PAGE% %END%');
        $show=$Page->show();
        $list=$model->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->display();
    }


    public function add(){
        if (IS_POST) {
            $rst = $this->create('notice', 'add');
            if ($rst === false) {
                $this->error($rst->getError());
            }
            $this->success('添加成功', U('Notice/index'));
        } else {
            $this->display();
        }
    }

    public function revise(){

        if(IS_POST){
            $id=I('post.id');
            $rst=$this->create('notice','save',2,array("id=$id"));
            if ($rst===false){
                $this->error("修改失败");
            }
            $this->success('修改成功', U('Notice/index'));
            return;
        }
        $this->display();
    }


    public function delete(){
        $id=I('get.id');
        $model=D('notice');
        $res=$model->where("id=$id")->delete();
        if ($res===false) {
            $this->error('删除失败');
        }
        $this->success('删除成功', U('Notice/index'));



    }

}