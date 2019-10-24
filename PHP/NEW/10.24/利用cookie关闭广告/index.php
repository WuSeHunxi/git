<?php



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    a {
        float: right;
        cursor: pointer;
    }

    .box {
        background: yellow;
        height: 300px;
        width: 100%;
    }
    </style>
</head>

<body>
    <?php if(empty($_COOKIE['hide_ad'])||$_COOKIE['hide_ad']==='1'){ ?>
    <div class="box">
        <a href="close.php">不再显示广告</a>
    </div>
    <?php } ?>
</body>

</html>