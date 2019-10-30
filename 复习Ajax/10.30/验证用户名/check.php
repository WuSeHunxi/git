<?php

$name=$_GET['name'];
$nameArr=array('jack','rose','icemountain','robot');

$result=in_array($name,$nameArr);
if($result==true){
    echo "很遗憾，已被注册";
}else{
    echo "未被使用";
}

sleep(2);
?>