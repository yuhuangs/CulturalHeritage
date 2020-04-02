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
        function cityDisplay(){
            var city = document.getElementById("country");
            if(city.style.display === "none"){
                city.style.display = "block";
            }else{
                city.style.display = "none";
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
            <form class="navbar-form navbar-right" method="post" action="<?php echo U('Resource/search');?>" role="search">
                <div class="form-group">
                    <input type="text" name="search" id="search" onkeyup="checkStr()" class="form-control" placeholder="请输入非遗名称" required>
                </div>
                <button type="submit" onclick="check()" class="btn btn-default">搜索</button>
                <div id="city-button" onclick="cityDisplay()" class="btn btn-default">区县名录</div>
            </form>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div id="country">
        <?php if(is_array($country)): foreach($country as $key=>$country): ?><form action="<?php echo U('/Resource/countryList');?>" method="post">
                <input type="hidden" name="country-name" value="<?php echo ($country["name"]); ?>">
                <button type="submit" class="country-name">
                    <?php echo ($country["name"]); ?>
                </button>
            </form><?php endforeach; endif; ?>
    </div>
    
    <div class="footer container">
        <div></div>
    </div>
    </body>
</html>