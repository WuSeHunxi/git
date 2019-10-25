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
    body {
        padding: 100px 0;
        background-color: #2b3b49;
        color: #fff;
        text-align: center;
        font-size: 2.5em;
    }

    input {
        padding: 5px 20px;
        height: 50px;
        background-color: #3b4b59;
        border: 1px solid #c0c0c0;
        box-sizing: border-box;
        color: #fff;
        font-size: 20px;
    }

    button {
        padding: 5px 20px;
        height: 50px;
        font-size: 16px;
    }
    </style>
</head>

<body>
    <h1>猜数字</h1>
    <p>Hi，我已经准备了一个0~100的数字，你需要在仅有的10机会之内猜对它</p>
    <form action="<?php echo $_SERVER['SELF_PHP']; ?>" method="get">
        <input type="number" name="num" id="num" placeholder="随便猜">
        <button type="submit">试一试</button>
    </form>
</body>

</html>