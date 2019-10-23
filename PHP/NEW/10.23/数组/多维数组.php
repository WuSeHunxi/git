<?php 
$sites = array 
( 
    "php"=>array 
    ( 
        "php中文网", 
        "http://www.php.cn" 
    ), 
    "google"=>array 
    ( 
        "Google 搜索", 
        "http://www.google.com" 
    ), 
    "taobao"=>array 
    ( 
        "淘宝", 
        "http://www.taobao.com" 
    ) 
); 
print("<pre>"); // 格式化输出数组 
print_r($sites); 
print("</pre>"); 
echo $sites['php'][0] . '地址为：' . $sites['php'][1];
?>