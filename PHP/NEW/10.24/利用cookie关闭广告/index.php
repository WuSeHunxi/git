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
    .close {
        width: 100%;
        height: 200px;
        background: yellow;
    }

    a {
        float: right;
    }
    </style>
</head>

<body>
    <?php
        
    if(empty($_COOKIE['hide_advice'])||$_COOKIE['hide_advice']!="1"){?>
    <a href="close.php">不再显示</a>
    <div class="close"></div>


    <?php } ?>
    <script>
    </script>

</body>

</html>