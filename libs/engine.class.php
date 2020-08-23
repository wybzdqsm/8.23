<?php
class engine{
 //获取原始数据
    //编译
    //显示到页面当中
    //分配变量
    //ob_start() 开启缓存区  不指定结束，缓存区的内容将在其他代码执行完输出
    //ob_end_flush 结束缓存区，并且输出到客户端
    //只要放在缓存区的内容就是已经经过php解析并且要返回给apache->客户端的内容，静态内容
    //ob_get_contents()获取即将要输出到客户端静态的内容
    private $templatedir="template";
    private $compiledir="compile";
    private $cachedir="cache";
    public $cache=false;
    private $arr=array();
     private  function  getdate($file){
    $destfile=$this->templatedir.$file;

    if(is_file($destfile)){

    return file_get_contents($destfile);

    }else{
        die("this template not found");
    }
    }

    public function settemplatedir($path){
         $this->templatedir=$path;
}
    public function setcompiledir($path){
        $this->compiledir=$path;
    }
    public function setcachedir($path){
        $this->cachedir=$path;
    }


    private function compile($file){
        $con=$this->getdate($file);
        $reg='/\{(\$[a-zA-Z][^\}]*)\}/';
        $one=preg_replace_callback($reg,function ($val){
            return "<?php echo ".$val[1]."?>";
        },$con);
        $reg1='/\{foreach([^\}]*)\}/';
        $two=preg_replace_callback($reg1,function ($val){
            return '<?php foreach('.$val[1].'){ ?>';
        },$one);

        //结束
        $reg2='/\{\/foreach\}/';
        $three=preg_replace_callback($reg2,function ($val){
            return '<?php } ?>';
        },$two);
        return $three;
    }


    function display($file){
        $infilename=$this->templatedir.$file;
        $outfilename=$this->compiledir.basename($file,".html").".php";
        $cachefilename=$this->cachedir.basename($file,".html").".htm";
        if($this->cache&&is_file($cachefilename)&&filemtime($cachefilename)>filemtime($infilename)){
            include_once $cachefilename;
        }else {
            if (is_file($outfilename) && filemtime($outfilename) > filemtime($infilename)) {
                foreach ($this->arr as $k => $v) {
                    $$k = $v;
                }
                include_once $outfilename;
            } else {
                $result = $this->compile($file);
                file_put_contents($outfilename, $result);
                foreach ($this->arr as $k => $v) {
                    $$k = $v;
                }
                if($this->cache){
                    ob_start();
                    include_once $outfilename;
                    $con=ob_get_contents();
                    file_put_contents($cachefilename,$con);
                    ob_end_flush();
                }else {
                    include_once $outfilename;
                }
            }
        }
    }

    function assgin($attr,$val){
         $this->arr[$attr]=$val;
    }
}