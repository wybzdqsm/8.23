<?php
class main{
    function __construct(){
        global $config;
        $smarty=new Smarty();
        $templatedir=isset($config["smarty"]["templatedir"])?$config["smarty"]["templatedir"]:"templatedir";
        $compiledir=isset($config["smarty"]["compiledir"])?$config["smarty"]["compiledir"]:"compiledir";
        $cachedir=isset($config["smarty"]["cachedir"])?$config["smarty"]["cachedir"]:"cachedir";
        $smarty->setTemplateDir( $templatedir);
        $smarty->setCompileDir($compiledir);
        $smarty->setCacheDir($cachedir);
           $this->smarty=$smarty;


           $host=isset($config["database"]["host"])?$config["database"]["host"]:"localhost";
        $username=isset($config["database"]["username"])?$config["database"]["username"]:"root";
        $password=isset($config["database"]["password"])?$config["database"]["password"]:"123456";
        $dbname=isset($config["database"]["dbname"])?$config["database"]["dbname"]:"";
        $port=isset($config["database"]["port"])?$config["database"]["port"]:"3306";
           $db=new mysqli($host,$username,$password,$dbname,$port);
           if($db->connect_errno){
               echo "数据库连接错误";
           }
           $db->query("set names utf8");
           $this->db=$db;
    }
}