<?php
namespace Admin\Controller;
//后台控制器
class IndexController extends CommonController {
    //后台首页
    public function index() {
        $model1=D('travel');
        $where1=array('placeid'=>'0');
        $placecount=$model1->where($where1)->count();

        $model2=D('goods');
        $where2=array('gid>=0');
        $goodscount=$model2->where($where2)->count();

        $model3=D('guest');
        $where3=array('guestid'=>'0');
        $guestcount=$model3->where($where3)->count();

        $model4=D('notice');
        $where4=array('id>=0');
        $noticecount=$model4->where($where4)->count();

        $model5=D('dingdan');
        $where5=array('dingdanid'=>'0');
        $dingdancount=$model5->where($where5)->count();

        $model6=D('message');
        $where6=array('messageid'=>'0');
        $messagecount=$model6->where($where6)->count();

        $this->assign('placecount', $placecount);
        $this->assign('goodcount', $goodscount);
        $this->assign('guestcount', $guestcount);
        $this->assign('messagecount', $messagecount);
        $this->assign('noticecount', $noticecount);
        $this->assign('dingdancount', $dingdancount);
        $this->display();
    }
}