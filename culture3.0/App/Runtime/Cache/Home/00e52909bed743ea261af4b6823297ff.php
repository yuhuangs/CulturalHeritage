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
    <title>追遗首页</title>
<br>
<div class="container" id="container1">
    <div class="row" id="center1">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8" id="lunbo">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active">
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class="active">
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class="active">
                    </li>
                </ol>
                <div class="carousel-inner" style="text-align: center">
                    <div class="item active">
                        <img alt="First slide" src="/test/culture3.0/Public/Home/image/mianju.jpg"/>
                        <div class="carousel-caption">

                        </div>
                    </div>
                    <div class="item">
                        <img alt="Second slide" src="/test/culture3.0/Public/Home/image/huasan.jpg" />
                        <div class="carousel-caption">

                        </div>
                    </div>
                    <div class="item">
                        <img alt="Third slide" src="/test/culture3.0/Public/Home/image/piying.jpg" />
                        <div class="carousel-caption">

                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4" id="gonggao">
            <div class="title-style">公告发布</div>
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane active" id="gonggaobg">
                    <table class="table table-hover">
                        <thead>
                        </thead>
                        <tbody>
                        <?php if(is_array($list)): foreach($list as $key=>$g): ?><a href="">
                                <tr>
                                    <td class="notice_title"><strong><?php echo (msubstr($g["title"],0,12,'utf-8')); ?></strong></td>
                                    <td><?php echo ($g["time"]); ?></td>
                                </tr>
                            </a><?php endforeach; endif; ?>
                        </tbody>
                    </table>
                    <div class="under-box">
                        <div class="page-list pages" id="page">
                            <?php echo ($page); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row" id="center2">
        <div class="col-xs-12 col-sm-12 col-md-12  col-lg-8" id="center2-1">
            <div class="center-insidebox">
                <div class="inside" id="policy">
                    <div class="title-style">政策发布</div>
                    <div class="table-box">
                    <table class="table table-hover">
                        <tbody>
                        <?php if(is_array($policy)): foreach($policy as $key=>$policy): ?><tr>
                                <td class="notice_title"><?php echo (msubstr($policy["title"],0,16,'utf-8')); ?></td>
                                <td><?php echo ($policy["time"]); ?></td>
                            </tr><?php endforeach; endif; ?>
                        </tbody>
                    </table>
                    <div class="under">
                        <a href="<?php echo U('Policy/index');?>"><h4>查看更多</h4></a>
                    </div>
                    </div>
                </div>
                <div class="inside2" id="minglu">
                    <div class="title-style">非遗名录</div>
                    <div id="minglu-main">
                        <div id="minglu_content">
                            <?php if(is_array($director)): foreach($director as $key=>$dir): ?><div class="minglu">
                                    <b><?php echo ($dir); ?></b>
                                </div><?php endforeach; endif; ?>
                        </div>
                        <div class="under">
                            <a href="<?php echo U('Minglu/index');?>"><h4>查看更多</h4></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12  col-lg-4" id="center2-2">
            <div class="center-insidebox" id="dynamic">
                <div class="title-style">最新动态</div>
                <div class="table-box">
                <table class="table table-hover">
                    <tbody>
                    <?php if(is_array($dynamic)): foreach($dynamic as $key=>$dynamic): ?><tr>
                            <td class="notice_title"><?php echo (msubstr($dynamic["title"],0,10,'utf-8')); ?></td>
                            <td><?php echo ($dynamic["time"]); ?></td>
                        </tr><?php endforeach; endif; ?>
                    </tbody>
                </table>
                    <div class="under">
                        <a href="<?php echo U('Dynamic/index');?>"><h4>查看更多</h4></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row" id="center3">
        <div class="col-xs-12 col-sm-12 col-md-12  col-lg-8" id="center3-1">
            <div id="inheritor">
                <div class="inside1">
                    <div id="inheritor-title">
                        <span>非遗传承人</span>
                    </div>

                    <div id="inheritor-content">
                        <span><?php echo ($inher["qname"]); ?> · <?php echo ($inher["name"]); ?></span>
                        <p><?php echo (msubstr($inher["intro"],0,400,'utf-8')); ?></p>
                    </div>
                </div>
                <div class="insidepic">
                    <img id="insidepic" src="/test/culture3.0/Public/Home/image/inheritor/<?php echo ($inher["id"]); ?>.jpg">
                    <div id="insidepic1">
                        <?php echo ($inher["qname"]); ?>
                    </div>
                </div>
            </div>
            <div id="more">
                <a>点击查看更多非遗传承人</a>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12  col-lg-4" id="center3-2">

        </div>
    </div>
</div>
<div class="container" id="container2">
    <section id="dg-container" class="dg-container">
        <div class="dg-wrapper">
            <a href="#"><img src="/test/culture3.0/Public/Home/image/shop/products/banya2.jpg" alt="image1" /></a>
            <a href="#"><img src="/test/culture3.0/Public/Home/image/shop/products/douchi2.jpg" alt="image2" /></a>
            <a href="#"><img src="/test/culture3.0/Public/Home/image/shop/products/hotpot2.jpg" alt="image3" /></a>
            <a href="#"><img src="/test/culture3.0/Public/Home/image/shop/products/taopian2.jpg" alt="image4" /></a>
            <a href="#"><img src="/test/culture3.0/Public/Home/image/shop/products/weike2.jpg" alt="image5" /></a>
            <a href="#"><img src="/test/culture3.0/Public/Home/image/shop/products/zhulian2.jpg" alt="image1" /></a>
        </div>
    </section>
</div>


    <div class="footer container">
        <div></div>
    </div>
    </body>
</html>