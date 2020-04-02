<?php
/**
 * Created by PhpStorm.
 * User: GodYu
 * Date: 2020/1/12
 * Time: 14:18
 */

namespace Home\Controller;
use Think\Controller;

class PolicyController extends Controller
{
    public function index(){
        if($id=I('get.id',0)){
            if($id==1){
                $where['type'] = 'China';
            }elseif ($id==2){
                $where['type'] = 'United';
            }else{
                $where['type'] = 'Speech';
            }
        }else{
            $where['type'] = 'China';
        }
        $policy = D("policy");
        $count = $policy->where($where)->count();
        //实例化分页类
        $Page = new \Think\Page($count,15);
        //保持查询参数
        foreach ($where as $key=>$val){
            $Page->parameter[$key] = urlencode($val);
        }
        $Page->lastSuffix = false;
        $Page->setConfig('header', '<li class="rows">共<b>%TOTAL_ROW%</b>条记录 第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li><br>');
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $Page->setConfig('first', '首页');
        $Page->setConfig('last', '尾页');
        $Page->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
        $Page->lastSuffix=false;
        //分页显示输出
        $show = $Page->show();
        $list = $policy->where($where)->order(array('time' => 'desc'))->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('policy', $list);
        $this->assign('page', $show);
        $this->country();
        $this->display();
    }

    public function content(){
        if($policyId=$_POST["policyId"]){
            session('policyId',$_POST["policyId"]);
        }else{
            $policyId=session('policyId');
        }
        $policy = D("policy");
        $map['id']=$policyId;
        $pyContent = $policy->where($map)->select();
        $this->assign("pyContent",$pyContent);
        $this->country();
        $this->display();
    }
}