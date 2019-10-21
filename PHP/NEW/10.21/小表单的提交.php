<?php

function login(){
    if(isset($_POST['name'])){
        $GLOBALS['message']='请输入姓名';
        return;
    }
    if(isset($_POST['email'])){
        $GLOBALS['message']="请输入正确的邮箱地址";
        return;
    }
    if(isset($_POST['web'])){
        $GLOBALS['message']="请输入正确的网址";
        return;
    }
    if(isset($_POST['note'])){
        $GLOBALS['message']="请输入备注信息";
        return;
    }

}

if($_SERVER['REQUEST_METHOD']==='POST'){
    login();
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
        font-size: 24px;
    }

    #btn,
    #sex {
        cursor: pointer;
    }

    form {
        margin-top: 50px;
    }
    </style>
</head>

<body>
    <span class="error">
        <?php
            if(isset($message)){
                echo $message;
            }        
        ?>
    </span>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        姓名：<input type="text" name="name" id="name">
        <br>
        E-mail：<input type="email" name="email" id="email">
        <br>
        网址：<input type="text" name="web" id="web">
        <br>
        备注：<input type="text" name="note" id="note">
        <br>
        <input type="radio" name="sex" id="sex" value="1">♂
        <input type="radio" name="sex" id="sex" value="0">♀
        <br>
        <input type="submit" id="btn" value="提交">
    </form>
</body>

</html>