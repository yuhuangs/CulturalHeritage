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
        })
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
                            <li><a href="<?php echo U('Resource/index');?>">资源</a></li>
                            <li><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">资讯<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="" href="">公告</a></li>
                                    <li><a class="" href="">动态</a></li>
                                </ul>
                            </li>
                            <li><a href="">高校合作</a></li>
                            <li><a href="">联系我们</a></li>
                        </ul>
                        <div class="clearfix"> </div>
                    </div>
                </nav>
            </div>
            <form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="请输入查找内容" required>
                </div>
                <button type="submit" class="btn btn-default">搜索</button>
            </form>
            <div class="clearfix"> </div>
        </div>
    </div>
    <link href="/test/culture3.0/Public/Home/css/policy&info.css" rel="stylesheet">
<div class="container" id="content">
    <div id="content-title">
        <h2><?php echo ($pyContent["0"]["title"]); ?></h2>
        <br>

    </div>
    <h4><span class="content-time"><?php echo ($pyContent["0"]["time"]); ?></span></h4>
    <br>
    <br>
    <p>
        <?php echo ($pyContent["0"]["content"]); ?>
    </p>
</div>
    <div class="footer container">
        <div></div>
    </div>
    </body>
</html>