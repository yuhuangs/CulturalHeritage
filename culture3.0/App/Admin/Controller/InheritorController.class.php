<?php
namespace Admin\Controller;
use Think\Controller;
//传承人控制器
class InheritorController extends CommonController
{
    public function index()
    {
        $model=D('inheritor');
        $where=array('nid'=>'0');
        $count=$model->where($where)->count();
        $Page=new \Think\Page($count, 5);

        foreach ($where as $key=>$val){
            $Page->parameter[$key]=urlencode($val);
        }

        $Page->lastSuffix=false;
        $Page->setConfig('header', '共%TOTAL_PAGE%页，当前是第%NOW_PAGE%页');
        $Page->setConfig('first', '首页');
        $Page->setConfig('last', '尾页');
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $Page->setConfig('theme', '%HEADER% %FIRST% %UP_PAGE% %UP_PAGE% %DOWN_PAGE% %END%');

        $show=$Page->show();

        $res=$model->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('res', $res);
        $this->assign('page', $show);
        $this->display();

    }
    //添加传承人
    public function add()
    {
        if (IS_POST) {
            $rst = $this->create('inheritor', 'add');
            if ($rst === false) {
                $this->error($rst->getError());
            }
            $this->success('添加成功', U('Inheritor/index'));
            //添加成功后查看传承人
        } else {
            $this->display();
        }
    }
    //删除传承人
    public function delete(){
        $id=I('get.id',0, 'int');
        $model=D('inheritor');
        $res=$model->where("id=$id")->delete();
        if ($res===false) {
            $this->error('删除传承人失败');
        }
        $this->success('传承人删除成功', U('Inheritor/index'));
    }
    //修改传承人
    public function revise(){
        $id=I('get.id',0, 'int');
        if(IS_POST){
            $this->reviseAction($id);
            return;
        }
        $model=D('inheritor');
        $res=$model->where("id=$id")->select();
        $this->assign('res',$res);
        $this->display();

    }
    public function reviseAction($id){
        $rst=$this->create('inheritor','save',2,array("id=$id"));
        if ($rst===false){
            $this->error("修改传承人失败");
        }
        $this->success('修改成功', U('Inheritor/index'));
    }
    //查找传承人
    public function search(){
        $this->display();

    }
    public function search_ok(){
        $name="'".I('get.name')."'";
        $goods=D('inheritor');
        $data=$goods->where("name=$name")->select();
        $this->assign('res',$data);
        $this->display();
    }




}