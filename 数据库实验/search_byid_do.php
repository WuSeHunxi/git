<?php

$id=$_GET['id'];
$conn = mysqli_connect('localhost', 'root', 'root', 'testsql');

if (!$conn) {
  exit('<h1>连接数据库失败</h1>');
}

$sql='CREATE  PROCEDURE `proc_getstudent_byid`(IN stuId int)
	  BEGIN
	       SELECT * FROM student  WHERE id=stuId;       
	   END;';

// 2. 开始查询
$query = mysqli_query($conn, '{call proc_getname_byid(?)};');

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
        学生id (整型): <input name="id" value="<?php echo $id; ?>">
        <input type="submit" value="查询 ">
    </form>

    <hr />
    <?php while($item=mysqli_fetch_assoc($query)){ ?>
    学生的名字是: <label><?php echo $item['stuname']; ?></label> <br />
    学生的性别是: <label><?php echo $item['gender']; ?></label> <br />
    学生的密码是: <label><?php echo $item['password']; ?></label> <br />
    学生的的ID是: <label><?php echo $item['id']; ?></label>
    <?php } ?>

</body>

</html>