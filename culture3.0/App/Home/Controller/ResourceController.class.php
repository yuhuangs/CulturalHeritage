<?php
/**
 * Created by PhpStorm.
 * User: GodYu
 * Date: 2020/2/8
 * Time: 16:55
 */

namespace Home\Controller;
use Think\Controller;

class ResourceController extends Controller
{
    public function index(){
        $this->display();
    }
    public function countryList(){
        if($countryName=$_POST["country-name"]){
            session('contryName',$_POST["country-name"]);
        }else{
            $countryName=session('countryName');
        }
        $director=D("director");
        $map['place']=$countryName;
        $countryList = $director->where($map)->order(array('Did' => "asc"))->select();
        $this->assign('countryList',$countryList);
        $this->assign('cName',$countryName);
        $this->country();
        $this->display();
    }

    public function director(){

        $this->country();
        $this->display();
    }
    public function shop(){
        $Goods = D("goods");
        $map = array("type"=>"food");
        $goodsList = $Goods->where($map)->order(array('time' => "desc"))->select();
        for($i=0;$i<3;$i++){
            $foodDisplay[$i] = $goodsList[$i];
        }
        $map = array("state"=>"1");
        $bigDisplay=$Goods->where($map)->find();
        $map = array("type"=>"artware");
        $goodsList = $Goods->where($map)->order(array('time' => "desc"))->select();
        for($i=0;$i<3;$i++){
            $artDisplay[$i] = $goodsList[$i];
        }
        $this->assign("bigDisplay",$bigDisplay);
        $this->assign("food",$foodDisplay);
        $this->assign("art",$artDisplay);
        $this->country();
        $this->display();
    }

    public function search(){
        $search = I('post.search');

        $this->country();
        $this->display();
    }
}