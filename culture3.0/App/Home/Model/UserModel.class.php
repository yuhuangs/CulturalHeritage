<?php
namespace Home\Model;
use Think\Model;

/**
 * Created by PhpStorm.
 * User: GodYu
 * Date: 2020/1/6
 * Time: 16:46
 */
class UserModel extends Model
{
    /**
     * 自动验证
     * self::EXISTS_VALIDATE 或者0 存在字段就验证（默认）
     * self::MUST_VALIDATE 或者1 必须验证
     * self::VALUE_VALIDATE或者2 值不为空的时候验证
     */
//    protected $insertFields = 'nickname,password,email,qq,phone';
//    protected $updateFields = 'nickname,password,email,qq,phone';
    protected $_validate = array(
        array('nickname', 'require', '昵称不能为空！'), //默认情况下用正则进行验证
        array('command', 'require', '密保口令不能为空！'), //默认情况下用正则进行验证
        array('nickname', '', '该昵称已被注册！', 0, 'unique', 1), // 在新增的时候验证name字段是否唯一
        array('email', '', '该邮箱已被占用', 0, 'unique', 1), // 新增的时候email字段是否唯一
        array('phone', '', '该手机号码已被占用', 0, 'unique', 1), // 新增的时候phone字段是否唯一
        // 正则验证密码 [需包含字母数字,长度为6-22位]
        array('password', '/^([a-zA-Z0-9]{6,22})$/', '密码格式不正确,请重新输入！', 0),
        array('repassword', 'password', '确认密码不正确', 0, 'confirm'), // 验证确认密码是否和密码一致
        array('email', 'email', '邮箱格式不正确'), // 内置正则验证邮箱格式
        array('phone', '/^1[34578]\d{9}$/', '手机号码格式不正确', 0), // 正则表达式验证手机号码
        array('verify', 'verify_check', '验证码错误', 0, 'function'), // 判断验证码是否正确
        //array('agree', 'is_agree', '请先同意网站安全协议！', 1, 'callback'), // 判断是否勾选网站安全协议
//        array('agree', 'require', '请先同意网站安全协议！', 1), // 判断是否勾选网站安全协议
    );

    /**
     * 自动完成
     */
    protected $_auto = array(
        array('password', 'md5', 3, 'function'), // 对password字段在新增和编辑的时候使md5函数处理
        array('regdate', 'time', 1, 'function'), // 对regdate字段在新增的时候写入当前时间戳
        array('regip', 'get_client_ip', 1, 'function'), // 对regip字段在新增的时候写入当前注册ip地址
    );


    public function checkUser($name,$pwd,$user) {
        $data = $this->field('uid,nickname,password,loginnum,lastdate')->where(array('nickname'=>$name))->find();
        if($data===null){
            return '用户名不存在';
        }
        if($data['password']===md5($pwd)){
            //密码正确
            session('user_name',$name);
            session('user_id',$data['uid']);
            $data['lastdate']=date("Y-m-d H:i:s",time());
            $data['loginnum']=$data['loginnum']+1;
            $res=$user->save($data);
            if(!$res){
                echo "数据插入错误！";
            }
            return true;
        }else{
            return '密码错误';
        }
    }
    //获取收件地址
    public function getAddr($mid){
        //取出数据
        $data = $this->field(
            'consignee,address,email,phone'  //收件人，收件地址，邮箱，手机号码
        )->where("mid=$mid")->find();
        //分割“收件地址”字符串
        $data['area'] = explode(',',$data['address'],4); //最多分割4次
        if(count($data['area'])!=4){
            $data['area'] = array('','请选择','请选择','');
        }
        return $data;
    }
}

