<?php

$name=$_GET['name'];

$personArr=array(
    '赵丽颖'=>array('icon'=>'img/zly.jpg','info'=>'盛世明兰，霸气楚乔，呆萌姗姗'),
    '吴世勋'=>array('icon'=>'img/wsx.jpg','info'=>'那心怡的男朋友'),
    '金正贤'=>array('icon'=>'img/jzx.jpg','info'=>'那心怡的女婿'),
    '金世正'=>array('icon'=>'img/jsz.jpg','info'=>'那心怡的女儿')
);

$someOne=$personArr[$name];
echo $someOne['icon'];
echo '|';
echo $someOne['info'];