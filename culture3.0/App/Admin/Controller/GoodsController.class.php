<?php
namespace Admin\Controller;
use Think\Controller;
//后台用户登录控制器
class GoodsController extends CommonController
{
    //后台登录页
    public function index()
    {
        $model=D('goods');
        $where=array('goodid'=>'0');
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

       /* $model=D('goods');
        $res=$model->select();
        $this->assign('res',$res);
        $this->display();*/
    }
    public function add()
    {
        if (IS_POST) {
            $rst = $this->create('goods', 'add');
            if ($rst === false) {
                $this->error($rst->getError());
            }
            $id=I('get.id',0, 'int');
            $this->uploadThumb($id);

            $this->success('添加成功', U('Goods/index'));
            //添加成功后查看商品
        } else {
            $this->display();
        }
    }

    /**
     * 上传文件
     * @param $gid int 商品ID
     * @return string 错误信息（成功返回true）
     */
    public function uploadThumb($gid){
        //准备上传目录
        $file['temp'] = './Public/uploads/temp/';
        file_exists($file['temp']) or mkdir($file['temp'],0777,true);
        //上传文件
        $Upload = new \Think\Upload(array(
            'exts' => array('jpg'),
            'rootPath' => $file['temp'],
            'autoSub' => false,
        ));
        $rst = $Upload->upload();
        if($rst===false){
            return $Upload->getError();
        }
        //生成文件信息
        $file['name'] = $rst['thumb']['savename'];
        $file['save'] = date('Y-m/d/');
        $file['path1'] = './Public/uploads/'.$file['save'];
        $file['path2'] = './Public/uploads/thumb/'.$file['save'];
        //创建保存目录
        file_exists($file['path1']) or mkdir($file['path1'],0777,true);
        file_exists($file['path2']) or mkdir($file['path2'],0777,true);
        //生成缩略图
        $Image = new \Think\Image();
        $Image->open($file['temp'].$file['name']);
        $Image->thumb(350,300,2)->save($file['path1'].$file['name']);//大图
        $Image->open($file['temp'].$file['name']);
        $Image->thumb(176,120,2)->save($file['path2'].$file['name']);//小图
        //删除临时文件
        unlink($file['temp'].$file['name']);
        //删除原来的图片文件
        $this->delImage($gid);
        //保存缩略图
        $this->where("id=$gid")->save(array(
            'thumb'=> $file['save'].$file['name'],
        ));
        return true;
    }

    public function delete(){
        $id=I('get.id',0, 'int');
        $model=D('goods');
        $res=$model->where("id=$id")->delete();
        if ($res===false) {
            $this->error('删除商品失败');
        }
        $this->success('商品删除成功', U('Goods/index'));
    }

    public function revise(){
        $id=I('get.id',0, 'int');
        if(IS_POST){
            $this->reviseAction($id);
            return;
        }
        $model=D('goods');
        $res=$model->where("id=$id")->select();
        $this->assign('res',$res);
        $this->display();

    }
    public function reviseAction($id){
        $rst=$this->create('goods','save',2,array("id=$id"));
        if ($rst===false){
            $this->error("修改商品失败");
        }
        //保存上传文件
        if (!empty($_FILES['thumb']['name'])){
            $rst=D('goods')->uploadThumb('ttc'.$id);
            if ($rst!==true){
                $this->error($rst);
            }
        }
        $this->success('修改成功', U('Goods/index'));
    }

    public function search(){
        // $orderid=I('get.orderid');
        //$order=D('order');
        //$data=$order->where("orderid=$orderid")->select();
        //$this->assign('orderid',$orderid);
        //$this->assign('data',$data);
        $this->display();

    }
    public function search_ok(){
        $goodname="'".I('get.goodname')."'";
        $goods=D('goods');
        $data=$goods->where("goodname=$goodname")->select();
        $this->assign('res',$data);
        $this->display();
    }




}