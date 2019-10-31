<?php


$arr=array('xx','mm','pp','kkk');
$name=$_GET['name'];

if(in_array($name,$arr)){
    echo "用户名已存在";
}else{
    echo "请继续注册";
}