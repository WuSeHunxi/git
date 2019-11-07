<?php 
    // 后台接口
    // echo 1;
    // echo 'Welcome to this';
    // header('Content-Type:text/html; charset=utf-8');
    // echo '<div style="color:red;"><span>测试数据</span><span>测试数据</span><span>测试数据</span></div>';

    // json_encode() 把数组或者对象转换成字符串
    // $arr = array(123,456,789);
    // $arr = array("username"=>"张三","age"=>"12","sex"=>"male");
    // \u5f20\u4e09这种形式就是Unicode编码
    $arr = array();
    $arr['123'] = array("username"=>"zhangsan","chinese"=>"130");
    $arr['124'] = array("username"=>"lisi","chinese"=>"150");
    $arr['125'] = array("username"=>"wangwu","chinese"=>"120");
    $arr['126'] = array("username"=>"zhaoliu","chinese"=>"110");
    echo json_encode($arr);//{"username":"\u5f20\u4e09","age":"12","sex":"male"}
    // $f = $_GET['flag'];
    // if($f == 1){
    //     echo '123';
    // }else if($f == 2){
    //     echo '456';
    // }
 ?>