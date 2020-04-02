<?php if (!defined('THINK_PATH')) exit();?><div id="slide">
	<?php if(is_array($cate)): $i = 0; $__LIST__ = array_slice($cate,0,9,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?><div class="cate">
		<div class="cate1 left"><a href="/test/culture3.0/index.php/Home/Index/find/cid/<?php echo ($v1["cid"]); ?>"><?php echo ($v1["cname"]); ?></a></div>
		<div class="subitem" style="display:none;">
			<?php if(isset($v1["child"])): if(is_array($v1["child"])): $i = 0; $__LIST__ = array_slice($v1["child"],0,7,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?><dl><dt><a href="/test/culture3.0/index.php/Home/Index/find/cid/<?php echo ($v2["cid"]); ?>"><?php echo ($v2["cname"]); ?></a></dt><dd>
				<?php if(isset($v2["child"])): if(is_array($v2["child"])): $i = 0; $__LIST__ = array_slice($v2["child"],0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v3): $mod = ($i % 2 );++$i;?>|<a href="/test/culture3.0/index.php/Home/Index/find/cid/<?php echo ($v3["cid"]); ?>"><?php echo ($v3["cname"]); ?></a><?php endforeach; endif; else: echo "" ;endif; endif; ?></dd>
			</dl><?php endforeach; endif; else: echo "" ;endif; endif; ?>
		</div>
	</div><?php endforeach; endif; else: echo "" ;endif; ?>
	<div class="clear"></div>
</div>
<div id="hot" class="left"></div>
<div id="news" class="right">新闻列表</div>
<div class="clear"></div>
<div id="best">
	<div class="best-img left"></div>
	<?php if(is_array($best)): foreach($best as $key=>$v): ?><ul class="item left">
		<li><a href="/test/culture3.0/index.php/Home/Index/goods/id/<?php echo ($v["gid"]); ?>" target="_blank"><?php if(empty($v["thumb"])): ?><img src="/test/culture3.0/Public/image/preview.jpg"><?php else: ?><img src="/test/culture3.0/Public/uploads/thumb/<?php echo ($v["thumb"]); ?>"><?php endif; ?></a></li>
		<li class="goods"><a href="/test/culture3.0/index.php/Home/Index/goods/id/<?php echo ($v["gid"]); ?>" target="_blank"><?php echo ($v["gname"]); ?></a></li>
		<li class="price">￥<?php echo ($v["price"]); ?></li>
	</ul><?php endforeach; endif; ?>
	<div class="clear"></div>
</div>
<script>
	$(".cate").hover(function(){
		$(this).find(".subitem").show();
		$(this).find("a").addClass("on");
	},function(){
		$(this).find(".subitem").hide();
		$(this).find("a").removeClass("on");
	});
</script>