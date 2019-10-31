<?php

  // 接收用户数据
  $starName = $_GET['name'];

  // 准备图片的版本
  // 假数据
  $personArr = array(
    '周林林'=>array('icon'=>'img/zll.jpg','info'=>'叫兽->骚粉色'),
    '彭林'=>array('icon'=>'img/pl.png','info'=>'原谅色,约跑'),
    '林立群'=>array('icon'=>'img/llq.jpg','info'=>"嘿嘿嘿->程序员到卖烧烤,到底经历了什么"),
    '西兰花'=>array('icon'=>'img/westblueflower.png','info'=>'西兰花炒蛋好好吃, oh-yeah')
  );

  // 查询数据
  $someOne = $personArr[$starName];

  // 返回结果
  // 路径
  echo $someOne['icon'];

  // 额外的返回一些 用来切割的内容
  echo '||||';

  // 返回信息
  echo $someOne['info'];

?>