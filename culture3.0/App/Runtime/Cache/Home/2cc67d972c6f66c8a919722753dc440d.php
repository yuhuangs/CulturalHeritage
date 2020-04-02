<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>重庆非遗文化资源网 - 忘记密码</title>
    <link href="/test/culture3.0/Public/bootstrap/css/log_reg.css" rel="stylesheet" />
    <link href="/test/culture3.0/Public/bootstrap/css/bootstrap.css" rel="stylesheet" />
    <script type="text/javascript" src="/test/culture3.0/Public/bootstrap/js/bootstrap.min.js"></script>
    <script src="/test/culture3.0/Public/bootstrap/js/jquery.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div id="find_box">
            <div class="container" id="login_header">
                <br>
                <h2>&nbsp;&nbsp;&nbsp;忘记密码</h2>
            </div>
            <div class="login_main">
                <form class="form-inline" action="/test/culture3.0/User/find.html" method="post">
                    <div class="input-group">
                        <label class="input-group-addon" for="userName">昵&nbsp;&nbsp;&nbsp;&nbsp;称</label>
                        <input type="text" id="userName" class="login_input" placeholder="请输入昵称" name="nickname">
                    </div>
                    <br>
                    <br>
                    <div class="input-group">
                        <label class="input-group-addon" for="inputPhone">电&nbsp;&nbsp;&nbsp;&nbsp;话</label>
                        <input type="text" id="inputPhone"  class="login_input" placeholder="请输入电话号码" name="phone">
                    </div>
                    <br><br>
                    <div class="input-group">
                        <label class="input-group-addon" for="inputCommand">口&nbsp;&nbsp;&nbsp;&nbsp;令</label>
                        <input type="text" id="inputCommand"  class="login_input" placeholder="请输入密保口令" name="command">
                    </div>
                    <br><br>
                    <div class="input-group">
                        <label class="input-group-addon" for="inputVerify">验证码</label>
                        <input type="text" id="inputVerify" class="login_input" placeholder="请输入验证码" name="captcha">
                    </div>
                    <br><br>
                    <div class="control-group">
                        <label class="control-label"></label>
                        <div class="controls">
                            &nbsp;&nbsp;&nbsp;&nbsp;<img src="/test/culture3.0/Home/User/captcha" onclick="this.src='/test/culture3.0/Home/User/captcha/'+Math.random()"/>
                        </div>
                        <div class="controls Validform_checktip text-warning"></div>
                    </div>
                    <br>
                    <br>
                    <div class="control-group">
                        <div class="controls" id="login_sub">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn">确认提交</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>