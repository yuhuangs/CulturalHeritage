<?php
namespace Admin\Model;
use Think\Model;
class PolicyModel extends Model
{
    protected $insertFields = 'title,time,content,promulgator,reference';
    protected $updateFields = 'title,time,content,promulgator,reference';
    protected $_validate = array(
        array('title', 'require', '标题不能为空', 1, '', 3),
        array('time', 'require', '时间不能为空', 1, '', 3),

    );
}