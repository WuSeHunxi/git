<?php


$conn = mysqli_connect('localhost', 'root', 'root', 'testsql');

if (!$conn) {
  exit('<h1>连接数据库失败</h1>');
}

if($_SERVER['REQUEST_METHOD']==='GET'){
	$id=$_GET['id'];
}


// 2. 开始查询
$query = mysqli_query($conn, "{call proc_getname_byid({$_GET['stuId']})};");

if (!$query) {
  exit('<h1>查询数据失败</h1>');
}




?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <h1>根据ID 调用存诸过程查询</h1>
    <hr />x

    <form action="search_byid_do.php" method="get">
        学生id (整型): <input name="id" value="输入id值">
        <input type="submit" value="查询 ">
    </form>

    <hr />
    <?php while($item=mysqli_fetch_assoc($query)){ ?>
    学生的名字是: <label><?php echo $item['stuname']; ?></label> <br />
    学生的性别是: <label><?php echo $item['gender']; ?></label> <br />
    学生的密码是: <label><?php echo $item['password']; ?></label> <br />
    学生的的ID是: <label><?php echo $item['stuId']; ?></label>
    <?php } ?>

</body>

</html>