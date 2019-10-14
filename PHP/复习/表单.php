<?php

function postSuccess(){
    if(empty($_POST['username'])){
        $GLOBALS['message']="用户名不能为空";
        return;
    }
    if(empty($_POST['password'])){
        $GLOBALS['message']='请输入密码';
        return;
    }
    if(empty($_POST['confirm'])){
        $GLOBALS['confirm']="请再一次输入密码";
        return;
    }
    if($_POST['password']===$_POST['confirm']){
        $GLOBALS['message']="两次密码不一致";
        return;
    }
    $name=$_POST['username'];
    $pass=$_POST['password'];
    $confirm=$_POST['confirm'];
}

if($_SERVER['REQUEST_METHOD']==='POST'){
    postSuccess();
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
    * {
        padding: 0;
        margin: 0;
    }

    .container {
        width: 400px;
        height: 500px;
        border: 10px soid #000;
        margin: 100px auto;
    }

    h1 {
        text-align: center;
    }

    button {
        background-color: #eee;
        border-radius: 20px;
        height: 35px;
        width: 70px;
        border: none;
        margin-top: 20px;
        margin-left: 100px;
        cursor: pointer;
        outline: none;
        transition: all 0.5s;
    }

    button:hover {
        /* padding: 10px; */
        font-weight: bolder;
        height: 40px;
        width: 75px;
    }

    form {
        width: 100%;
        margin: 30px 100px;
    }

    input {
        margin-bottom: 20px;
    }

    span {
        color: red;
        margin: 100px;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1>信息调查</h1>
        <?php if(isset($message)){ ?>
        <span><?php echo $message; ?></span>
        <?php } ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label for="username">用户名：</label>
            <input type="text" name="username" id="name">
            <br />
            <label for="password">密码：</label>
            <input type="password" name="password" id="pass">
            <br />
            <label for="confirm">确认密码：</label>
            <input type="password" name="confirm" id="confirm">
            <br />
            <button>提交</button>
        </form>
    </div>
</body>

</html>