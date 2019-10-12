<?php

// require 用户载入不可缺少的文件
// include 用于载入


// 数组和字符串的方法

$str='pappa  ';
echo trim($str);
echo '<br/>';

// 格式化时间

$time=time(); // 获取当前的时间戳
echo $time;
echo '<br/>';


$t=date('Y-m-d');
echo $t;


// 响应报文的应用场景
/**
 * 设置文件响应类型：header('Content-type:text/css');  它的值还可以为application/javascript;text/html;text/plain
 * 设置重定向：header('Location:https://www.baidu.com')
 * 下载文件：让文件下载和默认文件下载（Content-Type和Content-Disposition）
 */

/**
 * GET请求的参数不会保存到浏览器的历史里，但是POST的请求参数会保存到浏览器的历史里
 * 与POST相比，GET请求的安全性差
 * GET：表单数据通过URL中的?参数传递到服务端
 * POST：表单数据是通过请求提传递到服务端的
 */

/**
 * form标签的两个属性action：放的是表单提交的地址；method：放的是表单以什么方式进行了提交
 * $_REQUEST：获取get或者是post方法提交的内容
 * 获取当前页面的访问路径：$_SERVER[PHP_SELF]
 * 判断表单是否提交成功：$_SERVER['REQUEST_METHOD']
 */