<!-- 获取下拉菜单的值 -->

<?php

if($_GET['REQUEST_METHOD']){
    if($_GET['select']){
        $name=$_GET['select'];
            if($name=='taobao'){
                echo "淘宝";
            }else if($name=='google'){
                echo "谷歌";
            }else if($name=='baidu'){
                echo "百度";
            }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        <select name="select" id="select">
            <option value="">请选择一个网站</option>
            <option value="taobao">淘宝</option>
            <option value="google">谷歌</option>
            <option value="baidu">百度</option>
        </select>
        <input type="submit" value="提交">
    </form>
</body>

</html>