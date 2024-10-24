<?php

$a = 6;

if($a === 5 ){
    echo "\$aは5です";
}elseif($a === 7){
    echo "\$aは7です";
}else{
    echo "\$aは5と7以外です";
}
    
$name = "saburo";

switch ($name){
    case "taro":
    echo "太郎です";
    break;
    case "jiro":
    echo "次郎です";
    break;
    case "saburo":
    echo "三郎です";
    break;
    }

$i = 7;
$j = ($i === 7) ? "TRUE" : "FALSE";
echo $j;