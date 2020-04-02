<?php
/**
 * Created by PhpStorm.
 * User: GodYu
 * Date: 2020/2/21
 * Time: 19:46
 */

namespace Home\Controller;
use Think\Controller;

class InformationController extends Controller
{
    public function notice(){
        $notice = D("notice");
        $count = $notice->where("id>=0")->count();
        $index=new IndexController();
        $where="id>=0";
        $list=$index->page($notice,$count,$where,15);
        $this->assign("notice",$list);
        $this->country();
        $this->display();
    }

    public function noticontent(){
        if($noticeId=$_POST["noticeId"]){
            session('noticeId',$_POST["noticeId"]);
        }else{
            $noticeId=session('noticeId');
        }
        $notice = D("notice");
        $map['id']=$noticeId;
        $noContent = $notice->where($map)->select();
        $this->assign("noContent",$noContent);
        $this->country();
        $this->display();
    }

    public function dynamic(){
        $dynamic = D("dynamic");
        $count = $dynamic->where("id>=0")->count();
        $index=new IndexController();
        $where="id>=0";
        $list=$index->page($dynamic,$count,$where,15);
        $this->assign("dynamic",$list);
        $this->country();
        $this->display();
    }

    public function dynacontent(){
        if($dynaId=$_POST["dynaId"]){
            session('dynaId',$_POST["dynaId"]);
        }else{
            $dynaId=session('dynaId');
        }
        $dynamic = D("dynamic");
        $map['id']=$dynaId;
        $dyContent = $dynamic->where($map)->select();
        $this->assign("dyContent",$dyContent);
        $this->country();
        $this->display();
    }
}