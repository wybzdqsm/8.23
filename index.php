<?php
session_start();
header("Content-type: text/html; charset=utf-8");
//用来记录一个口令
//魔术常量
//模板->视图
define("MVC",true);
define("APP_DIR_NAME","application");
define("APP_NAME",__DIR__.DIRECTORY_SEPARATOR.APP_DIR_NAME.DIRECTORY_SEPARATOR);
//能够获取当前程序运行的目录
//echo __DIR__;
//echo __FILE__; 获取当前运行的文件
//__CLASS  获取当前类的名字
// __METHOD__ 输出当前函数的名字
//__LINE__ 当前程序所在的行
require_once "libs/start.php";

