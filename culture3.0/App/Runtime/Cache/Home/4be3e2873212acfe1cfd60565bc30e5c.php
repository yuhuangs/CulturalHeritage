<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>重庆非遗文化资源网 - 修改密码</title>
    <link href="/test/culture3.0/Public/bootstrap/css/log_reg.css" rel="stylesheet" />
    <link href="/test/culture3.0/Public/bootstrap/css/bootstrap.css" rel="stylesheet" />
    <script type="text/javascript" src="/test/culture3.0/Public/bootstrap/js/bootstrap.min.js"></script>
    <script src="/test/culture3.0/Public/bootstrap/js/jquery.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div id="change_box">
            <div class="container" id="login_header">
                <br>
                <h2>修改密码界面</h2>
            </div>
            <div class="login_main">
                <form class="form-inline" action="/test/culture3.0/User/change.html" method="post">

                    <div class="input-group">
                        <label class="input-group-addon" for="inputPassword">新&nbsp;&nbsp;密&nbsp;&nbsp;码</label>
                        <input type="password" id="inputPassword"  class="login_input" placeholder="请输入6-22位密码" name="password">
                    </div>
                    <br><br>
                    <div class="input-group">
                        <label class="input-group-addon" for="inputRepassword">确认密码&nbsp;</label>
                        <input type="password" id="inputRepassword"  class="login_input" placeholder="确认密码" name="repassword">
                    </div><br/>
                    <br/><br/>
                    <div class="control-group">
                        <div class="controls" id="register_sub">
                            <button type="submit" class="btn">确认修改</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>