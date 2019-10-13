<?php

function postback(){
    if(empty($_POST['username'])){
        $GLOBALS['message']='请输入用户名';
        return ;
    }
    if(empty($_POST['password'])){
        $GLOBALS['message']='请输入密码';
        return ;
    }
    if(empty($_POST['confirm'])){
        $GLOBALS['message']='请输入确认密码';
        return;
    }
    if($_POST['password']!==$_POST['confirm']){
        $GLOBALS['message']='两侧密码确认一致';
        return;
    }
    if(!(isset($_POST['argee'])&&$_POST['argee']==='on')){
        $GLOBALS['message']='必须同意注册协议';
        return;
    }
    $username=$_POST['username'];
    $password=$_POST['password'];
    file_put_contents('users.txt',$username,'|',$password.'\n',FILE_APPEND);
    $GLOBALS['message']='注册成功';
}

if($_SERVER['REQUEST_METHOD']==="POST"){
    postback();
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
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <table border="1">
            <tr>
                <td><label for=""></label></td>
                <td><input type="text" name="username" id="username"
                        value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>"></td>
            </tr>
            <tr>
                <td><label for="password">密码</label></td>
                <td><input type="password" name="password" id="password"></td>
            </tr>
            <tr>
                <td><label for="confirm">确认密码</label></td>
                <td><input type="password" name="confirm" id="confirm"></td>
            </tr>
            <tr>
                <td></td>
                <td><label><input type="checkbox" name="agree" value="on">同意注册协议</label></td>
            </tr>
            <?php if(isset($message)){ ?>
            <tr>
                <td></td>
                <td><?php echo $message; ?></td>
            </tr>
            <?php } ?>
            <tr>
                <td></td>
                <td><button>注册</button></td>
            </tr>
        </table>
    </form>
</body>

</html>