<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>传智商城 - 登录</title>
<link href="/test/culture3.0/Public/css/member.css" rel="stylesheet" />
<script src="/test/culture3.0/Public/js/jquery.min.js"></script>
</head>
<body>
<div id="box">
	<h1>传智商城 - 欢迎登录</h1>
	<div id="main">
		<div class="login-ad left">广告位</div>
		<form method="post">
		<table class="login right">
			<tr><th>用户名：</th><td><input type="text" name="user" /></td></tr>
			<tr><th>密码：</th><td><input type="password" name="pwd" /></td></tr>
			<tr><th>验证码：</th><td><input type="text" name="captcha" /></td></tr>
			<tr><td>&nbsp;</td><td><img src="/test/culture3.0/index.php/Home/User/captcha" onclick="this.src='/test/culture3.0/index.php/Home/User/captcha/'+Math.random()"/></td></tr>
			<tr><td>&nbsp;</td><td><input class="button" type="submit" value="登　录" /></td></tr>
			<tr><td colspan="2" class="center"><a href="/test/culture3.0/index.php/Home/User/register">立即注册</a><a href="/test/culture3.0/index.php/">返回首页</a></td></tr>
		</table>
		</form>
		<div class="clear"></div>
	</div>
</div>
</body>
</html>