<?php 
  // 告诉浏览器 返回的是 xml 编码格式是 utf-8
  header('content-type:text/xml;charset=utf-8');
  // 接收发送过来的数据

  // 读取 xml
  // =>哪个分类中 文件分类中找
  // 参数1 文件的路径名
  $xmlString = file_get_contents('data/person.xml');

  // 返回读取的 xml
  echo $xmlString;
 ?>