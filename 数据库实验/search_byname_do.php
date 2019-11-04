<?php

$start=time();
$name=isset($_POST['stuname']) ? $_POST['stuname'] :'';
// var_dump($_POST);
$conn = mysqli_connect('localhost', 'root', 'root', 'testsql');

if (!$conn) {
  exit('<h1>连接数据库失败</h1>');
}

// 2. 开始查询
$query = mysqli_query($conn, "select * from student where stuname='{$name}'");

if (!$query) {
  exit('<h1>查询数据失败</h1>');
}

$end=time();
$time=$end-$start;


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
    body {
        background-image: url('img/bg.jpeg');
        background-repeat: no-repeat;
        background-size: cover;
    }
    </style>
</head>

<body>
    <h1>根据名称(索引列) 进行查询</h1>
    <hr />

    <form method="post" action="search_byname_do.php">
        学生账号(字符串): <input type="text" name="stuname" id="stuname">
        <input type="submit" value="查询 ">
    </form>

    <hr />
    <?php if(isset($name)&&$name!=''){ ?>
    <?php while($item = mysqli_fetch_assoc($query)){ ?>
    学生的的ID是: <label><?php echo $item['id']; ?></label> <br />
    学生的名字是: <label><?php echo $item['stuname']; ?></label> <br />
    学生的性别是: <label><?php echo $item['gender']; ?></label> <br />
    学生的密码是: <label><?php echo $item['password']; ?></label> <br />

    本次查询,一共用时 <label><?php echo $time; ?> 毫秒</label> <br />
    <?php } ?>
    <?php } ?>
    <!-- 创建索引  alter table student add index index_name (stuname) -->


</body>

</html>