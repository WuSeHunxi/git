<?php

$email=$word="";
$emailErr=$wordErr="";

if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['email'])){
        $emailErr="请输入邮箱";
    }else if(preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$_POST['email'])){
        $email=clear_input($_POST['email']);
    }else{
        $emailErr="请输入有效邮箱";
    }
    if(empty($_POST{'word'})){
        $wordErr="请输入密码";
    }else{
        // 因为这个是姐姐给value的，所以即便是其他部分填错了，在表单中让然会保存下来
        $word=clear_input($_POST['word']);
    }
}

function clear_input($data){
    $data=trim($data);
    $data=stripcslashes($data);
    $data=htmlspecialchars($data);
    return $data;
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
    .error {
        color: red;
    }
    </style>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        邮箱：<input type="text" name="email" id="email" value="<?php echo $email; ?>">
        <span class="error"><?php echo $emailErr; ?></span>
        <br>
        密码：<input type="password" name="word" id="word" value="<?php echo $word; ?>">
        <span class="error"><?php echo $wordErr; ?></span>
        <br>
        <input type="submit" value="登录" name="submit">
    </form>
</body>

</html>