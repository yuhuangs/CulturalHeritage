<?php
/**
 * Created by PhpStorm.
 * User: GodYu
 * Date: 2020/1/5
 * Time: 12:48
 */

namespace Home\Controller;
use Think\Controller;

class EmptyController extends Controller
{
    public function _empty(){
        $this->error('System in busy!',U('Index/index'),5);
    }
}