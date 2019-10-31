<?php

//通过服务器告诉浏览器，要明确返回的响应内容的格式
header('content-type:text/xml;xharset=utf-8');

/**
 * 
 * 接收由浏览器发送来的内容
 * 处理内容
 * 返回响应数据
 * 
 */

echo file_get_contents("data/person.xml");