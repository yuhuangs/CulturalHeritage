<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>重庆非遗文化资源网 - 注册</title>
    <link href="/test/culture3.0/Public/bootstrap/css/log_reg.css" rel="stylesheet" />
    <link href="/test/culture3.0/Public/bootstrap/css/bootstrap.css" rel="stylesheet" />
    <script type="text/javascript" src="/test/culture3.0/Public/bootstrap/js/bootstrap.min.js"></script>
    <script src="/test/culture3.0/Public/bootstrap/js/jquery.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div id="register_box">
            <div class="container" id="login_header">
                <br>
                <h2>用户注册界面</h2>
            </div>
            <div class="login_main">
                <form class="form-inline" action="/test/culture3.0/User/register.html" method="post">
                    <div class="input-group">
                        <label class="input-group-addon" for="userName">昵&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;称</label>
                        <input type="text" id="userName" class="login_input" placeholder="请输入1-20位昵称" name="nickname">
                    </div>
                    <br>
                    <br>
                    <div class="input-group">
                        <label class="input-group-addon" for="inputPassword">密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码</label>
                        <input type="password" id="inputPassword"  class="login_input" placeholder="请输入6-22位密码" name="password">
                    </div>
                    <br><br>
                    <div class="input-group">
                        <label class="input-group-addon" for="inputRepassword">确认密码&nbsp;</label>
                        <input type="password" id="inputRepassword"  class="login_input" placeholder="确认密码" name="repassword">
                    </div>
                    <br><br>
                    <div class="input-group">
                        <label class="input-group-addon" for="userEmail">邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱</label>
                        <input type="email" id="userEmail" class="login_input" placeholder="请输入邮箱" name="email">
                    </div>
                    <br><br>
                    <div class="input-group">
                        <label class="input-group-addon" for="userQQ">Q&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Q</label>
                        <input type="text" id="userQQ" class="login_input" placeholder="请输入QQ号码" name="qq">
                    </div>
                    <br><br>
                    <div class="input-group">
                        <label class="input-group-addon" for="userPhone">电&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;话</label>
                        <input type="text" id="userPhone" class="login_input" placeholder="请输入电话号码" name="phone">
                    </div>
                    <br><br>
                    <div class="input-group">
                            <label class="input-group-addon" for="userCommand">密保口令</label>
                        <input type="text" id="userCommand" class="login_input" placeholder="请输入密保口令" name="command">
                    </div>
                    <br><br>
                    <div class="input-group">
                        <label class="input-group-addon" for="inputVerify">&nbsp;验&nbsp;证&nbsp;码&nbsp;</label>
                        <input type="text" id="inputVerify" class="login_input" placeholder="请输入验证码" name="captcha">
                    </div>
                    <br><br>
                    <div class="control-group">
                        <label class="control-label"></label>
                        <div class="controls">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="/test/culture3.0/Home/User/captcha" onclick="this.src='/test/culture3.0/Home/User/captcha/'+Math.random()"/>
                        </div>
                        <div class="controls Validform_checktip text-warning"></div>
                    </div>
                    <br>
                    <br>
                    <div class="control-group">
                        <div class="controls" id="register_sub">
                            <button type="submit" class="btn">注册</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
<script type="text/javascript">

    $(document)
        .ajaxStart(function(){
            $("button:submit").addClass("log-in").attr("disabled", true);
        })
        .ajaxStop(function(){
            $("button:submit").removeClass("log-in").attr("disabled", false);
        });


    $("form").submit(function(){
        var self = $(this);
        $.post(self.attr("action"), self.serialize(), success, "json");
        return false;

    });
</script>
</html>