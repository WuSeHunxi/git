<?php 
  // 设置返回的是XML
  header('content-type:text/xml;charset=utf-8');
  // 读取并返回
  echo file_get_contents('data/person.xml');
 ?>