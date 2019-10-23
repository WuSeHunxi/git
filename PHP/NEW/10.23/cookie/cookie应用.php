<!-- <html>

<head>
    <meta charset="utf-8">
    <title>php中文网(php.cn)</title>
</head>

<body>
    <form action="welcome.php" method="post">
        名字: <input type="text" name="name">
        年龄: <input type="text" name="age">
        <input type="submit">
    </form>
</body>

</html> -->
<?php


// 成功
$expire=time()+3600;
// 文件名 文件类型 过期时间
setcookie('welcome','php',$expire);
// setcookie('日期','php',$expire,'./');
echo $_COOKIE["welcome"];
// 查看所有 cookie
print_r($_COOKIE);