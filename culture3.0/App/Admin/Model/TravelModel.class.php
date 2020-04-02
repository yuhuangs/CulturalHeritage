<?php
namespace Admin\Model;
use Think\Model;
class TravelModel extends Model
{
    protected $insertFields = 'place,introduce,hticket,sticket';
    protected $updateFields = 'place,introduce,hticket,sticket';
    protected $_validate = array(
        array('place', 'require', '商品名不能为空', 1, '', 3),
        array('introduce', 'require', '商品价格不能为空', 1, '', 3),

        array('hticket', '/^[\d]+$/', '景点票价只能是数字', 1, '', 3),
        array('sticket', '/^[\d]+$/', '景点票数只能是数字', 1, '', 3),
    );
}