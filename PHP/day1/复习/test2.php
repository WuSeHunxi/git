<?php

$message='';
if(isset($_GET['name'])){
    $name=$_GET['name'];
    switch($name){
        case 'add':
        $GLOBALS['message]="请添加文章"
            
            break;  
        case "del":
        $GLOBALS['message]='tatta';
            break;  
        case "update":
        $GLOBALS['message]='alla';
           
            break;  
        case "select":
        $GLOBALS['message]='udud';
            
            break;  
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
    <style>
    span {
        display: inline-block;
        height: 30px;
        width: 100px;
        border: red;
    }
    </style>
</head>

<body>
    <a href="test2.php?name=add">请添加文章</a>
    <a href="test2.php?name=del">请删除文章</a>
    <a href="test2.php?name=update">请修改文章</a>
    <a href="test2.php?name=select">请查询文章</a>
    <span><?php if(isset($message)){
        echo $message;
    } ?></span>
</body>

</html>