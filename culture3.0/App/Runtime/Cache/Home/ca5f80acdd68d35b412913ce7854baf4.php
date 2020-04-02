<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <meta charset="UTF-8">
    <link href="/test/culture3.0/Public/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/test/culture3.0/Public/Home/css/style.css" rel="stylesheet">
    <script type="text/javascript" src="/test/culture3.0/Public/bootstrap/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="/test/culture3.0/Public/bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="/test/culture3.0/Public/bootstrap/js/jquery.gallery.js"></script>
    <script type="text/javascript" src="/test/culture3.0/Public/bootstrap/js/modernizr.custom.53451.js"></script>
    <script src="/test/culture3.0/Public/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $(function() {
            $('#dg-container').gallery({
                autoplay	:	true
            });
            $("#navbar").find("a").each(function () {var a = $(this)[0];
                if ($(a).attr("href") === location.pathname) {
                    $(this).addClass("active");
                } else {
                    $(this).removeClass("active");
                }
            });
        });
        function checkStr(){
            var Search = document.getElementById('search').value;
            var len = Search.length;
            if(len>20){
                alert("搜索内容不能多于20字符！");
            }
        }
        function check() {
            var Search = document.getElementById('search').value;
            var len = Search.length;
            if(len>20){
                alert("您当前输入超过了20个字符！");
                return false;
            }else{
                return true;
            }
        }
    </script>
</head>
    <body>
    <div id="headbox">
        <img id="logo" src="/test/culture3.0/Public/Home/image/logo/logo.jpg">
        <div id="userinfo">
            <?php if(isset($_SESSION['userName'])): ?><h4><img src="/test/culture3.0/Public/Home/image/logo/userlogo.jpg">当前用户：<?php echo (session('userName')); ?>   <a href="<?php echo U('User/logout');?>">注销</a></h4>
                <h5><img src="/test/culture3.0/Public/Home/image/logo/timelogo.jpg"><?php echo (date('Y-m-d g:i a',time())); ?></h5>
                <?php else: ?>
                <h4><a href="<?php echo U('User/login');?>"><img src="/test/culture3.0/Public/Home/image/logo/userlogo.jpg">点击登录</a> </h4>
                <h5><img src="/test/culture3.0/Public/Home/image/logo/timelogo.jpg"><?php echo (date('Y-m-d g:i a',time())); ?></h5><?php endif; ?>
        </div>

    </div>
    <div class="header">
        <div class="container">
            <div class="top-nav">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">展开导航栏</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!--navbar-header-->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul id="navbar" class="nav navbar-nav navbar-right">
                            <li><a class="active" href="<?php echo U('Index/index');?>">首页</a></li>
                            <li><a href="<?php echo U('Policy/index');?>">政策</a></li>
                            <li><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">资源<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="" href="<?php echo U('Resource/shop');?>">商城</a></li>
                                    <li><a class="" href="<?php echo U('Resource/director');?>">名录</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">资讯<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="" href="<?php echo U('Information/notice');?>">公告</a></li>
                                    <li><a class="" href="<?php echo U('Information/dynamic');?>">动态</a></li>
                                </ul>
                            </li>
                            <li><a href="">高校合作</a></li>
                            <li><a href="<?php echo U('Message/index');?>">留言板</a></li>
                        </ul>
                        <div class="clearfix"> </div>
                    </div>
                </nav>
            </div>
            <form class="navbar-form navbar-right" action="<?php echo U('Resource/search');?>" role="search">
                <div class="form-group">
                    <input type="text" id="search" onkeyup="checkStr()" class="form-control" placeholder="请输入查找内容" required>
                </div>
                <button type="submit" onclick="check()" class="btn btn-default">搜索</button>
            </form>
            <div class="clearfix"> </div>
        </div>
    </div>
    <meta charset="UTF-8">
<title>非遗名录</title>
<link href="/test/culture3.0/Public/Home/css/director.css" rel="stylesheet">
<div class="container" id="directorBox">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" id="dir-left">
            <div class="dir-type1">
                <div class="dir-type1-inside1">
                </div>
                <div class="dir-type1-inside2">
                </div>
                <div class="type-name-box" id="wenxue">
                </div>
            </div>
            <div class="dir-type2">
                <div class="dir-type2-inside1">
                </div>
                <div class="dir-type2-inside2">
                </div>
                <div class="type-name-box" id="yinyue">

                </div>
            </div>
            <div class="dir-type1">
                <div class="dir-type1-inside1">

                </div>
                <div class="dir-type1-inside2">

                </div>
                <div class="type-name-box" id="wudao">

                </div>
            </div>
            <div class="dir-type2">
                <div class="dir-type2-inside1">

                </div>
                <div class="dir-type2-inside2">

                </div>
                <div class="type-name-box" id="xiju">

                </div>
            </div>
            <div class="dir-type1">
                <div class="dir-type1-inside1">

                </div>
                <div class="dir-type1-inside2">

                </div>
                <div class="type-name-box" id="jingji">

                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" id="dir-right">
            <div class="dir-type2">
                <div class="dir-type2-inside1">

                </div>
                <div class="dir-type2-inside2">

                </div>
                <div class="type-name-box" id="meishu">

                </div>
            </div>
            <div class="dir-type1">
                <div class="dir-type1-inside1">

                </div>
                <div class="dir-type1-inside2">

                </div>
                <div class="type-name-box" id="shougong">

                </div>
            </div>
            <div class="dir-type2">
                <div class="dir-type2-inside1">

                </div>
                <div class="dir-type2-inside2">

                </div>
                <div class="type-name-box" id="yiyao">

                </div>
            </div>
            <div class="dir-type1">
                <div class="dir-type1-inside1">

                </div>
                <div class="dir-type1-inside2">

                </div>
                <div class="type-name-box" id="minsu">

                </div>
            </div>
            <div class="dir-type2">
                <div class="dir-type2-inside1">

                </div>
                <div class="dir-type2-inside2">

                </div>
                <div class="type-name-box" id="quyi">

                </div>
            </div>
        </div>
    </div>
</div>
    <div class="footer container">
        <div></div>
    </div>
    </body>
</html>