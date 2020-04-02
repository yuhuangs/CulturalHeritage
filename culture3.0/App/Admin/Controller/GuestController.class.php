<?php
namespace Admin\Controller;

class GuestController extends CommonController
{
    //查看用户
    public function index()
    {
        $model=D('guest');
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
        $this->assign('res',$list);
        $this->assign('page',$show);
        $this->display();
    }

    public function searchorder(){
        $id=I('get.id');
        $model=D('dingdan');

        $data=$model->where("id=$id")->select();
        $this->assign('data',$data);
        $this->display();
    }
    public function seachguest(){
        $this->display();
    }

    public function searchguest_ok(){

        $id =I('get.id');
        $model = D('guest');
        $data = $model->where("id=$id")->select();
        if(!$data) {
            echo "该顾客不存在";
        }else{
            $this->assign('list', $data);
            $this->display();
        }
    }


}