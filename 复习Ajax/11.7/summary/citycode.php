<?php
// 这里从后台向第三方接口请求数据;这里对第三方数据进行二次封装，封装之后就可以提供给前端使用
// $cityName = $_GET['cityName'];
// header("Content-type:text/html;charset=utf-8");
// function GetCurl($url){
//     $curl = curl_init();
//     curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
//     curl_setopt($curl,CURLOPT_URL, $url);
//     curl_setopt($curl,CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
//     $resp = curl_exec($curl);
//     curl_close($curl);
//     return $resp;
// }
// $resp = GetCurl("http://apistore.baidu.com/microservice/cityinfo?cityname=".$cityName);
// $resp = json_decode($resp,true);
// header('Content-type: application/json');
// echo json_encode($resp);//这里返回的是jsonp形式的字符串
// --------------------------------------------------------------
// 接口的作用：根据城市名称查询城市编码
$cityName = $_GET['cityName'];
if($cityName == '北京'){
	echo '{"cityCode":"101010100"}';
}else if($cityName == '上海'){
	echo '{"cityCode":"101020100"}';
}else if($cityName == '广州'){
	echo '{"cityCode":"101280101"}';
}else if($cityName == '深圳'){
	echo '{"cityCode":"101280601"}';
}