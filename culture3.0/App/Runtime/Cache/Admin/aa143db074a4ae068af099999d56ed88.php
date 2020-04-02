<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>后台管理系统</title>
    <style type="text/css">
        .dropdown-submenu { position: relative; } .dropdown-submenu>.dropdown-menu { top: 0; left: 100%; margin-top: -6px; margin-left: -1px; -webkit-border-radius: 0 6px 6px 6px; -moz-border-radius: 0 6px 6px; border-radius: 0 6px 6px 6px; } .dropdown-submenu:hover>.dropdown-menu { display: block; } .dropdown-submenu>a:after { display: block; content: " "; float: right; width: 0; height: 0; border-color: transparent; border-style: solid; border-width: 5px 0 5px 5px; border-left-color: #ccc; margin-top: 5px; margin-right: -10px; } .dropdown-submenu:hover>a:after { border-left-color: #fff; } .dropdown-submenu.pull-left { float: none; } .dropdown-submenu.pull-left>.dropdown-menu { left: -100%; margin-left: 10px; -webkit-border-radius: 6px 0 6px 6px; -moz-border-radius: 6px 0 6px 6px; border-radius: 6px 0 6px 6px; }
    </style>
    <link href="/test/culture3.0/Public/Admin/css/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" />
    <script src="/test/culture3.0/Public/bootstrap/js/jquery-3.4.1.js"></script>
    <script src="/test/culture3.0/Public/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript"></script>

</head>

<body>
<!--页头-->
<div class="header">
    <nav>
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">非遗后台管理系统</a>
            </div>
            <!--Collect the nav linnks, forms, and other content for toggling-->
            <div class="collapse navbar-collapse navbar-ex1-collapse " id="bs-example-navbar-collapse-1" >
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/test/culture3.0/Admin/Index/index"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> 首页</a></li>
                    <li class="dropdown">
                        <a href="/test/culture3.0/Admin/Guest/index" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> 顾客管理<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/test/culture3.0/Admin/Guest/index">查看顾客信息</a></li>
                            <li><a href="/test/culture3.0/Admin/Guest/searchguest">查询顾客</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="/test/culture3.0/Admin/Goods/index" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> 商品管理<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/test/culture3.0/Admin/Goods/index">查看商品</a></li>
                            <li><a href="/test/culture3.0/Admin/Goods/add">添加商品</a></li>
                            <li><a href="/test/culture3.0/Admin/Goods/index">删除商品</a></li>
                            <li><a href="/test/culture3.0/Admin/Goods/index">修改商品</a></li>
                            <li><a href="/test/culture3.0/Admin/Goods/search">查询商品</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="/test/culture3.0/Admin/Travel/index" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-camera" aria-hidden="true"></span> 旅游管理<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/test/culture3.0/Admin/Travel/index">查看旅游景点</a></li>
                            <li><a href="/test/culture3.0/Admin/Travel/add">增加旅游景点</a></li>
                            <li><a href="/test/culture3.0/Admin/Travel/search">查询旅游景点</a></li>
                            <li><a href="/test/culture3.0/Admin/Travel/index">修改旅游景点</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> 信息管理<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a href="/test/culture3.0/Admin/Notice/index">公告管理</a>
                                <ul class="dropdown-menu">
                                    <li><a href="/test/culture3.0/Admin/Notice/index">查看公告</a></li>
                                    <li><a href="/test/culture3.0/Admin/Notice/add">增加公告</a></li>
                                    <li><a href="/test/culture3.0/Admin/Notice/revise">修改公告</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="/test/culture3.0/Admin/Dynamic/index" class="dropdown-toggle" data-toggle="dropdown">动态管理</a>
                                <ul class="dropdown-menu">
                                    <li><a href="/test/culture3.0/Admin/Dynamic/index">查看动态</a></li>
                                    <li><a href="/test/culture3.0/Admin/Dynamic/add">增加动态</a></li>
                                    <li><a href="/test/culture3.0/Admin/Dynamic/revise">修改动态</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="/test/culture3.0/Admin/Inheritor/index" class="dropdown-toggle" data-toggle="dropdown">传承人管理</a>
                                <ul class="dropdown-menu">
                                    <li><a href="/test/culture3.0/Admin/Inheritor/index">查看传承人</a></li>
                                    <li><a href="/test/culture3.0/Admin/Inheritor/add">增加传承人</a></li>
                                    <li><a href="/test/culture3.0/Admin/Inheritor/delete">删除传承人</a></li>
                                    <li><a href="/test/culture3.0/Admin/Inheritor/revise">修改传承人</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="/test/culture3.0/Admin/Inheritor/index" class="dropdown-toggle" data-toggle="dropdown">政策管理</a>
                                <ul class="dropdown-menu">
                                    <li><a href="/test/culture3.0/Admin/Policy/index">查看政策</a></li>
                                    <li><a href="/test/culture3.0/Admin/Policy/add">增加政策</a></li>
                                    <li><a href="/test/culture3.0/Admin/Policy/delete">删除政策</a></li>
                                    <li><a href="/test/culture3.0/Admin/Policy/revise">修改政策</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> 留言管理<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/test/culture3.0/Admin/Message/index">查看留言</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">admin<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/test/culture3.0/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>前台首页</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>个人设置</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>账户中心</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>我的收藏</a></li>
                        </ul>
                    </li>
                    <li><a href="/test/culture3.0/Admin/Login/logout"><span class="glyphicon glyphicon-off" aria-hidden="true"></span>退出</a></li>
                </ul>
            </div>
        </nav>
    </nav>
</div>
<div id="content">
    <div class="item"><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
    <ul class="list-group">
        <a href="/test/culture3.0/Admin/Goods/index" class="list-group-item active">查看商品</a>
        <a href="/test/culture3.0/Admin/Goods/add" class="list-group-item">添加商品</a>
        <a href="/test/culture3.0/Admin/Goods/index" class="list-group-item">修改商品</a>
        <a href="/test/culture3.0/Admin/Goods/search" class="list-group-item">查询商品</a>
        <a href="/test/culture3.0/Admin/Goods/index" class="list-group-item">删除商品</a>
    </ul>
</div>
<!--右侧主要内容-->
<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1>商品管理</h1>
            <!--<div class="panel panel-default">
                <div class="panel-body">
                    <ul id="myTab" class="nav nav-tabs" role="tablist">
                        <li class="active">
                            <a href="#index" role="tab" data-toggle="tab">查看商品</a>
                        </li>
                        <li>
                            <a href="#add" role="tab" data-toggle="tab">添加商品</a>
                        </li>
                        <li>
                            <a href="#rule" role="tab" data-toggle="tab">修改商品</a>
                        </li>
                        <li>
                            <a href="#rule" role="tab" data-toggle="tab">查询商品</a>
                        </li>
                        <li>
                            <a href="#rule" role="tab" data-toggle="tab">删除商品</a>
                        </li>
                    </ul>
                </div>
            </div>-->
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <tbody>
                <tr class="bg-primary">
                    <th scope="row"></th>
                    <th class="all"><input type="checkbox">全选</th>
                    <th>商品名字</th>
                    <th>商品价格</th>
                    <th>上架时间</th>
                    <th>总的数量</th>
                    <th>商品标号</th>
                    <th>商品产地</th>
                    <th>商品图片</th>
                    <th>商品操作</th>
                </tr>
                <?php if(is_array($res)): foreach($res as $key=>$v): ?><tr class="bg-success">
                        <th scope="row"></th>
                        <td><input type="checkbox" name="input[]"></td>
                        <td><?php echo ($v["goodname"]); ?></td>
                        <td><?php echo ($v["price"]); ?></td>
                        <td><?php echo ($v["time"]); ?></td>
                        <td><?php echo ($v["total"]); ?></td>
                        <td><?php echo ($v["biaohao"]); ?></td>
                        <td><?php echo ($v["place"]); ?></td>
                        <td>
                            <?php echo ($v["picname"]); ?>
                            <a href="/test/culture3.0/Admin/Goods/goods/goodname/<?php echo ($v["rid"]); ?>" target="_blank"><?php if(empty($v["picname"])): ?><img src="/test/culture3.0/Public/image/preview.jpg"><?php else: ?><img src="/test/culture3.0/Public/uploads/thumb/<?php echo ($v["picname"]); ?>"><?php endif; ?></a>
                        </td>
                        <td>
                            <a type="button" class="btn btn-primary btn-sm" href="/test/culture3.0/Admin/Goods/revise/id/<?php echo ($v["id"]); ?>">
                                <span class="glyphicon glyphicon-pencil"></span>编辑 </a>
                            <a type="button" class="btn btn-danger btn-sm" href="/test/culture3.0/Admin/Goods/delete/id/<?php echo ($v["id"]); ?>">
                                <span class="glyphicon glyphicon-trash"></span>删除</a>
                        </td>
                    </tr><?php endforeach; endif; ?>
                </tbody>
            </table>
            <div class="pagelist" align="right">
                <?php echo $page; ?>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(".all input[type]").click(function () {
        var $cks=$("td input[type=checkbox]");
        if ($cks.is(":checked")){
            $cks.removeAttr("checked");
        }else {
            $cks.prop("checked","true");
        }
    })
</script>
</body>
</html></div>
</div>

</body>
</html>