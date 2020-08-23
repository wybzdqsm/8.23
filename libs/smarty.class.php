<?php
namespace libs;
class smarty{
    function __construct()
    {
        global $config;
        $smarty = new \Smarty();
        $templatedir = isset($config["smarty"]["templatedir"]) ? $config["smarty"]["templatedir"] : "templatedir";
        $compiledir = isset($config["smarty"]["compiledir"]) ? $config["smarty"]["compiledir"] : "compiledir";
        $cachedir = isset($config["smarty"]["cachedir"]) ? $config["smarty"]["cachedir"] : "cachedir";
        $smarty->setTemplateDir($templatedir);
        $smarty->setCompileDir($compiledir);
        $smarty->setCacheDir($cachedir);
        $this->smarty = $smarty;
    }
     function assgin($attr,$val){
         $this->smarty->assign($attr,$val);
     }
    function  display($file){
        $this->smarty->display($file);
    }
}