<?php
/**
 * Created by PhpStorm.
 * User: GodYu
 * Date: 2020/1/5
 * Time: 12:31
 */

namespace Home\Controller;
use Think\Controller;

header('charset=utf-8');
class EmptyActionController extends Controller
{
    public function _empty(){
        $this->error('System in busy!',U('Index/index'),5);
    }
}