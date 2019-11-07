<?php 
    // 这里根据表单中的name属性获取值
    $uname = $_POST['username'];
    $pw = $_POST['password'];
    // 设置服务器响应的文件类型
    header("Content-Type:text/plain; charset=utf-8");
    if($uname == 'admin' && $pw == '123'){
        echo '登录成功';
    }else{
        echo '用户名或者密码错误';
    }

 ?>