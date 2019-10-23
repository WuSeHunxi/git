<?php

$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";
// 因为在每一个if中都是用了return就是不满足条件的话，直接结束，因此一个input出现问题的话整个表单就要重新输入了
function login(){
    if(isset($_POST['name'])){
        $nameErr='请输入姓名';
        return;
    }
    if(isset($_POST['email'])){
        $emailErr="请输入正确的邮箱地址";
        return;
    }
    if(isset($_POST['web'])){
       $websiteErr="请输入正确的网址";
        return;
    }
    if(isset($_POST['sex'])){
        $genderErr="请选择性别";
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
        <span class="error"><?php if(isset($nameErr)){ echo $nameErr;} ?></span>
        <br>
        E-mail：<input type="email" name="email" id="email">
        <span class="error"><?php if(isset($emailErr)){ echo $emailErr;} ?></span>
        <br>
        网址：<input type="text" name="web" id="web">
        <span class="error"><?php if(isset($websiteErr)){ echo $websiteErr;} ?></span>
        <br>
        备注：<input type="text" name="note" id="note">
        <br>
        <input type="radio" name="sex" id="sex" value="1">♂
        <input type="radio" name="sex" id="sex" value="0">♀
        <span class="error"><?php if(isset($genderErr)){ echo $genderErr;} ?></span>
        <br>
        <input type="submit" id="btn" value="提交">
    </form>
</body>

</html>