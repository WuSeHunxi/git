<?php

if(isset($_GET['sub'])){
    $num=$_GET['num'];
    $aa=settype($num,'int');
    // if($aa==true){
    //     var_dump($num);
    // }
    // var_dump($num);
    // die();
    echo "papa";
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
    <form action="test1.php">
        数字：<input type="text" name="num">
        <input type="submit" name="sub" value="提交">
        <span></span>
    </form>
</body>

</html>