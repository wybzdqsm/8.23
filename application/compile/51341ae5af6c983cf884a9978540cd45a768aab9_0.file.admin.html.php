<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-20 03:50:59
  from 'E:\wamp64\www\php\mvc\application\template\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f3df323f350c6_89358522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51341ae5af6c983cf884a9978540cd45a768aab9' => 
    array (
      0 => 'E:\\wamp64\\www\\php\\mvc\\application\\template\\login.html',
      1 => 1597895458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3df323f350c6_89358522 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
bootstrap.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin.js"><?php echo '</script'; ?>
>
    <title>Document</title>
</head>
<body>
<form class="form-horizontal">
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Remember me
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Sign in</button>
        </div>
    </div>
</form>
</body>
</html><?php }
}
