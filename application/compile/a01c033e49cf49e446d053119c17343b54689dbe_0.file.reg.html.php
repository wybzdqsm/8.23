<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-22 13:37:00
  from 'E:\wamp64\www\php\mvc\application\template\admin\reg.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f411f7c2f07a5_52264693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a01c033e49cf49e446d053119c17343b54689dbe' => 
    array (
      0 => 'E:\\wamp64\\www\\php\\mvc\\application\\template\\admin\\reg.html',
      1 => 1598103418,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f411f7c2f07a5_52264693 (Smarty_Internal_Template $_smarty_tpl) {
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
reg.js"><?php echo '</script'; ?>
>
    <title>后台管理系统</title>
</head>
<body>
<form class="form-horizontal" action="<?php echo ENTRY_ADD;?>
/admin/reg/adduser" method="post" style="height:360px;">
    <h1>注册页面</h1>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="用户名" name="uname">
        </div>
    </div>
    <div class="form-group">
        <label for="pass" class="col-sm-2 control-label">密码</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="pass" placeholder="密码" name="pass">
        </div>
    </div>
    <div class="form-group">
        <label for="pass1" class="col-sm-2 control-label">确认密码</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="pass1" placeholder="密码" name="pass1">
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
            <button type="submit" class="btn btn-default">注册</button>
            &nbsp;&nbsp;已有账号？请
            <a href="<?php echo ENTRY_ADD;?>
/admin" class="btn btn-default">登录</a>
        </div>

    </div>
</form>
</body>
</html><?php }
}
