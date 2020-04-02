<?php
namespace Admin\Model;
use Think\Model;
class GoodsModel extends Model
{
    protected $insertFields = 'goodname,price,time,total,biaohao,place,id,picname,goodid';
    protected $updateFields = 'goodname,price,time,total,biaohao,place,id,picname,goodid';
    protected $_validate = array(
        array('goodname', 'require', '商品名不能为空', 1, '', 3),
        array('price', 'require', '商品价格不能为空', 1, '', 3),
        array('time', 'require', '上架时间不能为空', 1, '', 3),
        array('total', 'require', '商品库存量不能为空', 1, '', 3),
        array('biaohao', 'require', '商品编号不能为空', 1, '', 3),
        array('place', 'require', '商品产地不能为空', 1, '', 3),
        array('id', '0,10', '编号位数不合法（最多10位）', 1, 'length', 3),

       /* array('price', '/^[\d]+$/', '商品价格只能是数字', 1, '', 3),*/
        array('total', '/^[\d]+$/', '商品库存只能是数字', 1, '', 3),
        array('id', '', '商品编号已经存在', 1, 'unique', 1),
    );

}