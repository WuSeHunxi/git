<?php

if($_SERVER['REQUEST_METHOD']==='post'){
    if(isset($_POST['check'])){
        $check=$_POST['check'];
        if(is_array($check)){
            $arr=array(
                'php' => 'php中文网教程: http://www.php.cn',            
                'ajax' => 'Google 搜索: http://www.ajax.com',            
                'nodejs' => '淘宝: http://www.nodejs.com',  
            );
            foreach ($check as $item) {
                echo $arr[$item].PHP_EOL;
            }
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
    <form action="" method="post">
        <input type="checkbox" name="check[]" id="check" value="php">PHP
        <br>
        <input type="checkbox" name="check[]" id="check" value="ajax">Ajax
        <br>
        <input type="checkbox" name="check[]" id="check" value="nodejs">Nodejs
        <br>
        <input type="submit" value="提交">
    </form>
</body>

</html>