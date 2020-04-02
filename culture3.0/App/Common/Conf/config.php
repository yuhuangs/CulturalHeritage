<?php
return array(
	'DB_TYPE' => 'mysql',
    'DB_HOST' => 'localhost',
    'DB_NAME' => 'db_culture',
    'DB_USER' => 'root',
    'DB_PWD' => '123456',
    'DB_PORT'=>'3306',
    'DB_PREFIX' => 'tb_',
    'DB_CHARSET'=>'utf8',
    //启动模板布局
    'LAYOUT_ON'=>true,
    'LAYOUT_NAME'=>'layout',
    //配置URL模式为REWRITE
    'URL_MODEL'=>2,
    //定义允许访问的模块列表
    'MODULE_ALLOW_LIST'=>array('Home','Admin'),
);