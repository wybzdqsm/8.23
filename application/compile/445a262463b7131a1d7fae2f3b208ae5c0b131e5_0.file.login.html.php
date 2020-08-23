<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-22 03:50:40
  from 'E:\wamp64\www\php\mvc\application\template\admin\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f409610589c69_20538374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '445a262463b7131a1d7fae2f3b208ae5c0b131e5' => 
    array (
      0 => 'E:\\wamp64\\www\\php\\mvc\\application\\template\\admin\\login.html',
      1 => 1598068238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f409610589c69_20538374 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/bootstrap.css">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/login.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jQuery2.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin.js"><?php echo '</script'; ?>
>
    <title>后台管理系统</title>
</head>
<?php echo '<script'; ?>
>
    // document.cookie="name=zhangsan";
    // var date=new Date();
    // var time=date.getTime()+1000*20;
    // date.setTime(time);
    // document.cookie="age=12;expires="+date.toUTCString()+"domain=localhost";

<?php echo '</script'; ?>
>
<body>
<form class="form-horizontal" action="<?php echo ENTRY_ADD;?>
/admin/index/login" method="post" style="height: 360px">
    <h1>欢迎来到后台管理中心</h1>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="用户名" name="uname">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" placeholder="密码" name="pass">
        </div>
    </div>
    <div class="form-group">

            <label for="code" class="col-sm-2 control-label">验证码</label>
        <div class="col-sm-10">
            <input type="text" placeholder="请输入验证码" id="code" style="width:90px;" name="code">
            <img src="http://localhost/php/mvc/index.php/admin/index/mycode" alt="" onclick="this.src='http://localhost/php/mvc/index.php/admin/index/mycode?'+Math.random()"
                 style="cursor: pointer;font-size: 14px">
            看不清楚？点击更换
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
                <label>
                    <input type="checkbox"> 记住密码
                </label>

            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">登录</button>
            &nbsp;&nbsp;没有账号？请
            <a href="<?php echo ENTRY_ADD;?>
/admin/reg/add" >注册</a>
        </div>

    </div>
</form>
</body>
</html><?php }
}
