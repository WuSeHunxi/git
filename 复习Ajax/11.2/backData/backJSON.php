<?php 
  // 设置返回的是JSON
  header('content-type:application/json;charset=utf-8');
  // 读取并返回
  echo file_get_contents('data/person.json');
?>