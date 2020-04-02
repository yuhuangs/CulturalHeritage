<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>传智商城 - 注册</title>
<link href="/test/culture3.0/Public/css/member.css" rel="stylesheet" />
<script src="/test/culture3.0/Public/js/jquery.min.js"></script>
</head>
<body>
<div id="box">
	<h1>传智商城 - 欢迎注册</h1>
	<div id="main">
		<div class="register-ad left">广告位</div>
		<form method="post">
		<table class="register right">
			<tr><th>用户名：</th><td><input type="text" name="user" required /></td></tr>
			<tr><th>密码：</th><td><input type="password" name="pwd" id="pwd" required /></td></tr>
			<tr><th>确认密码：</th><td><input type="password" id="pwd2" required /></td></tr>
			<tr><th>验证码：</th><td><input type="text" name="captcha" required /></td></tr>
			<tr><td>&nbsp;</td><td><img src="/test/culture3.0/index.php/Home/User/captcha" onclick="this.src='/test/culture3.0/index.php/Home/User/captcha/'+Math.random()"/></td></tr>
			<tr><td>&nbsp;</td><td><input class="button" type="submit" value="注　册" /></td></tr>
			<tr><td colspan="2" class="center"><a href="/test/culture3.0/index.php/Home/User/login">返回登录</a><a href="/test/culture3.0/index.php/">返回首页</a></td></tr>
		</table>
		</form>
		<div class="clear"></div>
	</div>
</div>
<script>
	$("#pwd2").blur(function(){ //失去焦点时判断
		if($(this).val() !== $("#pwd").val()){
			$(this).addClass('error');
		}else{
			$(this).removeClass('error');
		}
	});
	$("form").submit(function(){ //表单提交时判断
		if($("#pwd2").val() !== $("#pwd").val()){
			alert('两次输入密码不一致！');
			return false;
		}
	});
</script>
</body>
</html>