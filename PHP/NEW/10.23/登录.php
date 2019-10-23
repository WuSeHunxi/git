<html>

<head>
    <title>一个简易的登录表单</title>
</head>

<body>
    <?php
    
$email = $passwd ="";
$emailErr=$passwdErr="";

if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['email']))
        $emailErr='请输入邮箱！';
    else if(preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$_POST['email']))
        $email=clear_input($_POST['email']);
    else $emailErr="请输入有效的邮箱！";
    if(empty($_POST['passwd']))
        $passwdErr='请输入密码！';
    else
        $passwd=clear_input($_POST['passwd']);
}

function clear_input($data){
    $data=trim($data);
    $data=stripcslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        邮箱：<input type="text" name="email" value="<?php echo $email;?>" />
        <span class='error'><?php echo $emailErr;?></span>
        <br />
        密码：<input type="password" name="passwd" value="<?php echo $passwd;?>" />
        <span class='error'><?php echo $passwdErr;?></span>
        <br />
        <input type="submit" name="submit" value="登录">
    </form>
    <?php
    echo "你输入的<br />";
    echo "邮箱：".$email;
    echo "<br />";
    echo "密码：".$passwd;
?>

</body>

</html>