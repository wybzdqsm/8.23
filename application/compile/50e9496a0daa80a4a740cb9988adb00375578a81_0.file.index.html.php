<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-19 10:03:16
  from 'E:\wamp64\www\php\8.17\mvc\application\template\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f3cf8e4d98785_98372413',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50e9496a0daa80a4a740cb9988adb00375578a81' => 
    array (
      0 => 'E:\\wamp64\\www\\php\\8.17\\mvc\\application\\template\\index.html',
      1 => 1597831395,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3cf8e4d98785_98372413 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
首页
<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
    <li><?php echo $_smarty_tpl->tpl_vars['v']->value["name"];?>
</li>
    <li><?php echo $_smarty_tpl->tpl_vars['v']->value["age"];?>
</li>
    <li><?php if ($_smarty_tpl->tpl_vars['v']->value["sex"] == 'man') {?>
        男
        <?php } else { ?>
        女
        <?php }?>
       </li>
    <li>
        <a href="index.php/index/index/del">删除</a>
    </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <a href="index.php/teach/log/add" style="text-decoration: none">
        添加
    </a>
</ul>
</body>
</html><?php }
}
