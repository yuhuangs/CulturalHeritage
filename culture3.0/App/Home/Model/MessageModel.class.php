<?php
/**
 * Created by PhpStorm.
 * User: GodYu
 * Date: 2020/2/22
 * Time: 10:13
 */

namespace Home\Model;
use Think\Model;

class MessageModel extends Model
{
    protected $_validate = array(
        array('writer', 'require', '姓名不能为空！'), //默认情况下用正则进行验证
        array('email', 'email', '<script>alert("邮箱格式不正确!");</script>'), // 内置正则验证邮箱格式
        array('phone', '/^1[34578]\d{9}$/', '<script>alert("手机号码格式不正确!");</script>', 0), // 正则表达式验证手机号码
    );

    /**
     * 自动完成
     */
    protected $_auto = array(
        array('time', 'time', 1, 'function'), // 对regdate字段在新增的时候写入当前时间戳
    );
}