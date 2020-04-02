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
    <title>非遗商城</title>
<script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
<link href="/test/culture3.0/Public/Home/css/shop.css" rel="stylesheet" type="text/css" media="all" />
<script src="/test/culture3.0/Public/bootstrap/js/jquery.flexisel.js"></script>
<div class="ads-grid">
    <div class="container">
        <!-- tittle heading -->
        <h3 class="tittle-w3l">非遗特产商城
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>
        <!-- //tittle heading -->
        <!-- product left -->
        <div class="side-bar col-md-3">
            <div class="search-hotel">
                <h3 class="agileits-sear-head">搜索商品</h3>
                <form action="#" method="post">
                    <input type="search" placeholder="商品名..." name="search" required="">
                    <input type="submit" value=" ">
                </form>
            </div>
            <!-- price range -->
            <!--<div class="range">-->
                <!--<h3 class="agileits-sear-head">Price range</h3>-->
                <!--<ul class="dropdown-menu6">-->
                    <!--<li>-->

                        <!--<div id="slider-range"></div>-->
                        <!--<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />-->
                    <!--</li>-->
                <!--</ul>-->
            <!--</div>-->
            <!--&lt;!&ndash; //price range &ndash;&gt;-->
            <!--&lt;!&ndash; food preference &ndash;&gt;-->
            <!--<div class="left-side">-->
                <!--<h3 class="agileits-sear-head">Food Preference</h3>-->
                <!--<ul>-->
                    <!--<li>-->
                        <!--<input type="checkbox" class="checked">-->
                        <!--<span class="span">Vegetarian</span>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<input type="checkbox" class="checked">-->
                        <!--<span class="span">Non-Vegetarian</span>-->
                    <!--</li>-->
                <!--</ul>-->
            <!--</div>-->
            <!--&lt;!&ndash; //food preference &ndash;&gt;-->
            <!--&lt;!&ndash; discounts &ndash;&gt;-->
            <!--<div class="left-side">-->
                <!--<h3 class="agileits-sear-head">Discount</h3>-->
                <!--<ul>-->
                    <!--<li>-->
                        <!--<input type="checkbox" class="checked">-->
                        <!--<span class="span">5% or More</span>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<input type="checkbox" class="checked">-->
                        <!--<span class="span">10% or More</span>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<input type="checkbox" class="checked">-->
                        <!--<span class="span">20% or More</span>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<input type="checkbox" class="checked">-->
                        <!--<span class="span">30% or More</span>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<input type="checkbox" class="checked">-->
                        <!--<span class="span">50% or More</span>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<input type="checkbox" class="checked">-->
                        <!--<span class="span">60% or More</span>-->
                    <!--</li>-->
                <!--</ul>-->
            <!--</div>-->
            <!--&lt;!&ndash; //discounts &ndash;&gt;-->
            <!--&lt;!&ndash; reviews &ndash;&gt;-->
            <!--<div class="customer-rev left-side">-->
                <!--<h3 class="agileits-sear-head">Customer Review</h3>-->
                <!--<ul>-->
                    <!--<li>-->
                        <!--<a href="#">-->
                            <!--<i class="fa fa-star" aria-hidden="true"></i>-->
                            <!--<i class="fa fa-star" aria-hidden="true"></i>-->
                            <!--<i class="fa fa-star" aria-hidden="true"></i>-->
                            <!--<i class="fa fa-star" aria-hidden="true"></i>-->
                            <!--<i class="fa fa-star" aria-hidden="true"></i>-->
                            <!--<span>5.0</span>-->
                        <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a href="#">-->
                            <!--<i class="fa fa-star" aria-hidden="true"></i>-->
                            <!--<i class="fa fa-star" aria-hidden="true"></i>-->
                            <!--<i class="fa fa-star" aria-hidden="true"></i>-->
                            <!--<i class="fa fa-star" aria-hidden="true"></i>-->
                            <!--<i class="fa fa-star-o" aria-hidden="true"></i>-->
                            <!--<span>4.0</span>-->
                        <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a href="#">-->
                            <!--<i class="fa fa-star" aria-hidden="true"></i>-->
                            <!--<i class="fa fa-star" aria-hidden="true"></i>-->
                            <!--<i class="fa fa-star" aria-hidden="true"></i>-->
                            <!--<i class="fa fa-star-half-o" aria-hidden="true"></i>-->
                            <!--<i class="fa fa-star-o" aria-hidden="true"></i>-->
                            <!--<span>3.5</span>-->
                        <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a href="#">-->
                            <!--<i class="fa fa-star" aria-hidden="true"></i>-->
                            <!--<i class="fa fa-star" aria-hidden="true"></i>-->
                            <!--<i class="fa fa-star" aria-hidden="true"></i>-->
                            <!--<i class="fa fa-star-o" aria-hidden="true"></i>-->
                            <!--<i class="fa fa-star-o" aria-hidden="true"></i>-->
                            <!--<span>3.0</span>-->
                        <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a href="#">-->
                            <!--<i class="fa fa-star" aria-hidden="true"></i>-->
                            <!--<i class="fa fa-star" aria-hidden="true"></i>-->
                            <!--<i class="fa fa-star-half-o" aria-hidden="true"></i>-->
                            <!--<i class="fa fa-star-o" aria-hidden="true"></i>-->
                            <!--<i class="fa fa-star-o" aria-hidden="true"></i>-->
                            <!--<span>2.5</span>-->
                        <!--</a>-->
                    <!--</li>-->
                <!--</ul>-->
            <!--</div>-->
            <!--&lt;!&ndash; //reviews &ndash;&gt;-->
            <!--&lt;!&ndash; cuisine &ndash;&gt;-->
            <!--<div class="left-side">-->
                <!--<h3 class="agileits-sear-head">Cuisine</h3>-->
                <!--<ul>-->
                    <!--<li>-->
                        <!--<input type="checkbox" class="checked">-->
                        <!--<span class="span">South American</span>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<input type="checkbox" class="checked">-->
                        <!--<span class="span">French</span>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<input type="checkbox" class="checked">-->
                        <!--<span class="span">Greek</span>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<input type="checkbox" class="checked">-->
                        <!--<span class="span">Chinese</span>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<input type="checkbox" class="checked">-->
                        <!--<span class="span">Japanese</span>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<input type="checkbox" class="checked">-->
                        <!--<span class="span">Italian</span>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<input type="checkbox" class="checked">-->
                        <!--<span class="span">Mexican</span>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<input type="checkbox" class="checked">-->
                        <!--<span class="span">Thai</span>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<input type="checkbox" class="checked">-->
                        <!--<span class="span">Indian</span>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<input type="checkbox" class="checked">-->
                        <!--<span class="span"> Spanish </span>-->
                    <!--</li>-->
                <!--</ul>-->
            <!--</div>-->
            <!--&lt;!&ndash; //cuisine &ndash;&gt;-->
            <!--&lt;!&ndash; deals &ndash;&gt;-->
            <!--<div class="deal-leftmk left-side">-->
                <!--<h3 class="agileits-sear-head">Special Deals</h3>-->
                <!--<div class="special-sec1">-->
                    <!--<div class="col-xs-4 img-deals">-->
                        <!--<img src="images/d2.jpg" alt="">-->
                    <!--</div>-->
                    <!--<div class="col-xs-8 img-deal1">-->
                        <!--<h3>Lay's Potato Chips</h3>-->
                        <!--<a href="#">$18.00</a>-->
                    <!--</div>-->
                    <!--<div class="clearfix"></div>-->
                <!--</div>-->
                <!--<div class="special-sec1">-->
                    <!--<div class="col-xs-4 img-deals">-->
                        <!--<img src="images/d1.jpg" alt="">-->
                    <!--</div>-->
                    <!--<div class="col-xs-8 img-deal1">-->
                        <!--<h3>Bingo Mad Angles</h3>-->
                        <!--<a href="#">$9.00</a>-->
                    <!--</div>-->
                    <!--<div class="clearfix"></div>-->
                <!--</div>-->
                <!--<div class="special-sec1">-->
                    <!--<div class="col-xs-4 img-deals">-->
                        <!--<img src="images/d4.jpg" alt="">-->
                    <!--</div>-->
                    <!--<div class="col-xs-8 img-deal1">-->
                        <!--<h3>Tata Salt</h3>-->
                        <!--<a href="#">$15.00</a>-->
                    <!--</div>-->
                    <!--<div class="clearfix"></div>-->
                <!--</div>-->
                <!--<div class="special-sec1">-->
                    <!--<div class="col-xs-4 img-deals">-->
                        <!--<img src="images/d5.jpg" alt="">-->
                    <!--</div>-->
                    <!--<div class="col-xs-8 img-deal1">-->
                        <!--<h3>Gujarat Dry Fruit</h3>-->
                        <!--<a href="#">$525.00</a>-->
                    <!--</div>-->
                    <!--<div class="clearfix"></div>-->
                <!--</div>-->
                <!--<div class="special-sec1">-->
                    <!--<div class="col-xs-4 img-deals">-->
                        <!--<img src="images/d3.jpg" alt="">-->
                    <!--</div>-->
                    <!--<div class="col-xs-8 img-deal1">-->
                        <!--<h3>Cadbury Dairy Milk</h3>-->
                        <!--<a href="#">$149.00</a>-->
                    <!--</div>-->
                    <!--<div class="clearfix"></div>-->
                <!--</div>-->
            <!--</div>-->
            <!--&lt;!&ndash; //deals &ndash;&gt;-->
        </div>
        <!-- //product left -->
        <!-- product right -->
        <div class="agileinfo-ads-display col-md-9">
            <div class="wrapper">
                <!-- first section (nuts) -->
                <div class="product-sec1">
                    <h3 class="heading-tittle">美食</h3>
                    <?php if(is_array($food)): foreach($food as $key=>$g): ?><div class="col-md-4 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="/test/culture3.0/Public/Home/image/shop/products/<?php echo ($g["picname"]); ?>1.jpg" alt="">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="#" class="link-product-add-cart">查看详情</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">新品</span>
                                </div>
                                <div class="item-info-product ">
                                    <h4>
                                        <a href="#"><?php echo ($g["goodname"]); ?></a>
                                    </h4>
                                    <div class="info-product-price">
                                        <span class="item_price"><?php echo ($g["price"]); ?>元</span>
                                        <del><?php echo ($g["originalPrice"]); ?>元</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="<?php echo ($g["goodname"]); ?>" />
                                                <input type="hidden" name="amount" value="<?php echo ($g["price"]); ?>" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="加入购物车" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div><?php endforeach; endif; ?>
                    <div class="clearfix"></div>
                </div>
                <!-- //first section (nuts) -->
                <!-- second section (nuts special) -->
                <div class="product-sec1 product-sec2">
                    <div class="col-xs-7 effect-bg">
                        <h3><?php echo ($bigDisplay["goodname"]); ?></h3>
                        <h6>属于你的健康饮食</h6>
                        <p>现在降价10%</p>
                    </div>
                    <h3 class="w3l-nut-middle"><?php echo (msubstr($bigDisplay["introduce"],0,8,'utf-8')); ?></h3>
                    <div class="col-xs-5 bg-right-nut" id="bigDisplay">
                        <img src="/test/culture3.0/Public/Home/image/shop/products/youlaozao.jpg" alt="">
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- //second section (nuts special) -->
                <!-- third section (oils) -->
                <div class="product-sec1">
                    <h3 class="heading-tittle">文玩</h3>
                    <?php if(is_array($art)): foreach($art as $key=>$g): ?><div class="col-md-4 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="/test/culture3.0/Public/Home/image/shop/products/<?php echo ($g["picname"]); ?>1.jpg" alt="">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="#" class="link-product-add-cart">查看详情</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">新品</span>
                                </div>
                                <div class="item-info-product ">
                                    <h4>
                                        <a href="#"><?php echo ($g["goodname"]); ?></a>
                                    </h4>
                                    <div class="info-product-price">
                                        <span class="item_price"><?php echo ($g["price"]); ?>元</span>
                                        <del><?php echo ($g["originalPrice"]); ?>元</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="<?php echo ($g["goodname"]); ?>" />
                                                <input type="hidden" name="amount" value="<?php echo ($g["price"]); ?>" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="加入购物车" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div><?php endforeach; endif; ?>
                    <div class="clearfix"></div>
                </div>
                <!-- //third section (oils) -->
                <!-- fourth section (noodles) -->
                <div class="product-sec1">
                    <h3 class="heading-tittle">其他商品</h3>
                    <?php if(is_array($art)): foreach($art as $key=>$g): ?><div class="col-md-4 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="/test/culture3.0/Public/Home/image/shop/products/<?php echo ($g["picname"]); ?>1.jpg" alt="">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="#" class="link-product-add-cart">查看详情</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">新品</span>
                                </div>
                                <div class="item-info-product ">
                                    <h4>
                                        <a href="#"><?php echo ($g["goodname"]); ?></a>
                                    </h4>
                                    <div class="info-product-price">
                                        <span class="item_price"><?php echo ($g["price"]); ?>元</span>
                                        <del><?php echo ($g["originalPrice"]); ?>元</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="<?php echo ($g["goodname"]); ?>" />
                                                <input type="hidden" name="amount" value="<?php echo ($g["price"]); ?>" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="加入购物车" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div><?php endforeach; endif; ?>
                    <div class="clearfix"></div>
                </div>
                <!-- //fourth section (noodles) -->
            </div>
        </div>
        <!-- //product right -->
    </div>
</div>
<!-- //goodsucts -->
<!-- special offers -->
<div class="featured-section" id="projects">
    <div class="container">
        <!-- tittle heading -->
        <h3 class="tittle-w3l">特色旅游
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>
        <!-- //tittle heading -->
        <div class="content-bottom-in">
            <ul id="flexiselDemo1">
                <li>
                    <div class="w3l-specilamk">
                        <div class="speioffer-agile">
                            <a href="#">
                                <img src="images/s1.jpg" alt="">
                            </a>
                        </div>
                        <div class="product-name-w3l">
                            <h4>
                                <a href="#">Aashirvaad, 5g</a>
                            </h4>
                            <div class="w3l-pricehkj">
                                <h6>$220.00</h6>
                                <p>Save $40.00</p>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="business" value=" " />
                                        <input type="hidden" name="item_name" value="Aashirvaad, 5g" />
                                        <input type="hidden" name="amount" value="220.00" />
                                        <input type="hidden" name="discount_amount" value="1.00" />
                                        <input type="hidden" name="currency_code" value="USD" />
                                        <input type="hidden" name="return" value=" " />
                                        <input type="hidden" name="cancel_return" value=" " />
                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3l-specilamk">
                        <div class="speioffer-agile">
                            <a href="#">
                                <img src="images/s4.jpg" alt="">
                            </a>
                        </div>
                        <div class="product-name-w3l">
                            <h4>
                                <a href="#">Kissan Tomato Ketchup, 950g</a>
                            </h4>
                            <div class="w3l-pricehkj">
                                <h6>$99.00</h6>
                                <p>Save $20.00</p>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="business" value=" " />
                                        <input type="hidden" name="item_name" value="Kissan Tomato Ketchup, 950g" />
                                        <input type="hidden" name="amount" value="99.00" />
                                        <input type="hidden" name="discount_amount" value="1.00" />
                                        <input type="hidden" name="currency_code" value="USD" />
                                        <input type="hidden" name="return" value=" " />
                                        <input type="hidden" name="cancel_return" value=" " />
                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3l-specilamk">
                        <div class="speioffer-agile">
                            <a href="#">
                                <img src="images/s2.jpg" alt="">
                            </a>
                        </div>
                        <div class="product-name-w3l">
                            <h4>
                                <a href="#">Madhur Pure Sugar, 1g</a>
                            </h4>
                            <div class="w3l-pricehkj">
                                <h6>$69.00</h6>
                                <p>Save $20.00</p>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="business" value=" " />
                                        <input type="hidden" name="item_name" value="Madhur Pure Sugar, 1g" />
                                        <input type="hidden" name="amount" value="69.00" />
                                        <input type="hidden" name="discount_amount" value="1.00" />
                                        <input type="hidden" name="currency_code" value="USD" />
                                        <input type="hidden" name="return" value=" " />
                                        <input type="hidden" name="cancel_return" value=" " />
                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3l-specilamk">
                        <div class="speioffer-agile">
                            <a href="single2.html">
                                <img src="images/s3.jpg" alt="">
                            </a>
                        </div>
                        <div class="product-name-w3l">
                            <h4>
                                <a href="single2.html">Surf Excel Liquid, 1.02L</a>
                            </h4>
                            <div class="w3l-pricehkj">
                                <h6>$187.00</h6>
                                <p>Save $30.00</p>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="business" value=" " />
                                        <input type="hidden" name="item_name" value="Surf Excel Liquid, 1.02L" />
                                        <input type="hidden" name="amount" value="187.00" />
                                        <input type="hidden" name="discount_amount" value="1.00" />
                                        <input type="hidden" name="currency_code" value="USD" />
                                        <input type="hidden" name="return" value=" " />
                                        <input type="hidden" name="cancel_return" value=" " />
                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3l-specilamk">
                        <div class="speioffer-agile">
                            <a href="#">
                                <img src="images/s8.jpg" alt="">
                            </a>
                        </div>
                        <div class="product-name-w3l">
                            <h4>
                                <a href="#">Cadbury Choclairs, 655.5g</a>
                            </h4>
                            <div class="w3l-pricehkj">
                                <h6>$160.00</h6>
                                <p>Save $60.00</p>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="business" value=" " />
                                        <input type="hidden" name="item_name" value="Cadbury Choclairs, 655.5g" />
                                        <input type="hidden" name="amount" value="160.00" />
                                        <input type="hidden" name="discount_amount" value="1.00" />
                                        <input type="hidden" name="currency_code" value="USD" />
                                        <input type="hidden" name="return" value=" " />
                                        <input type="hidden" name="cancel_return" value=" " />
                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3l-specilamk">
                        <div class="speioffer-agile">
                            <a href="single2.html">
                                <img src="images/s6.jpg" alt="">
                            </a>
                        </div>
                        <div class="product-name-w3l">
                            <h4>
                                <a href="single2.html">Fair & Lovely, 80 g</a>
                            </h4>
                            <div class="w3l-pricehkj">
                                <h6>$121.60</h6>
                                <p>Save $30.00</p>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="business" value=" " />
                                        <input type="hidden" name="item_name" value="Fair & Lovely, 80 g" />
                                        <input type="hidden" name="amount" value="121.60" />
                                        <input type="hidden" name="discount_amount" value="1.00" />
                                        <input type="hidden" name="currency_code" value="USD" />
                                        <input type="hidden" name="return" value=" " />
                                        <input type="hidden" name="cancel_return" value=" " />
                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3l-specilamk">
                        <div class="speioffer-agile">
                            <a href="#">
                                <img src="images/s5.jpg" alt="">
                            </a>
                        </div>
                        <div class="product-name-w3l">
                            <h4>
                                <a href="#">Sprite, 2.25L (Pack of 2)</a>
                            </h4>
                            <div class="w3l-pricehkj">
                                <h6>$180.00</h6>
                                <p>Save $30.00</p>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="business" value=" " />
                                        <input type="hidden" name="item_name" value="Sprite, 2.25L (Pack of 2)" />
                                        <input type="hidden" name="amount" value="180.00" />
                                        <input type="hidden" name="discount_amount" value="1.00" />
                                        <input type="hidden" name="currency_code" value="USD" />
                                        <input type="hidden" name="return" value=" " />
                                        <input type="hidden" name="cancel_return" value=" " />
                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3l-specilamk">
                        <div class="speioffer-agile">
                            <a href="single2.html">
                                <img src="images/s9.jpg" alt="">
                            </a>
                        </div>
                        <div class="product-name-w3l">
                            <h4>
                                <a href="single2.html">Lakme Eyeconic Kajal, 0.35 g</a>
                            </h4>
                            <div class="w3l-pricehkj">
                                <h6>$153.00</h6>
                                <p>Save $40.00</p>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="business" value=" " />
                                        <input type="hidden" name="item_name" value="Lakme Eyeconic Kajal, 0.35 g" />
                                        <input type="hidden" name="amount" value="153.00" />
                                        <input type="hidden" name="discount_amount" value="1.00" />
                                        <input type="hidden" name="currency_code" value="USD" />
                                        <input type="hidden" name="return" value=" " />
                                        <input type="hidden" name="cancel_return" value=" " />
                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- //special offers -->
<!-- jquery -->
<script>
    $(window).load(function () {
        $("#flexiselDemo1").flexisel({
            visibleItems: 3,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint: 640,
                    visibleItems: 2
                },
                tablet: {
                    changePoint: 768,
                    visibleItems: 2
                }
            }
        });

    });
</script>
    <div class="footer container">
        <div></div>
    </div>
    </body>
</html>