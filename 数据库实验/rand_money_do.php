<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'testsql');

if (!$conn) {
  exit('<h1>连接数据库失败</h1>');
}

$sql= mysqli_query('call mc();');
// 2. 开始查询
$query = mysqli_query($conn, 'select * from student_money;');

if (!$query) {
  exit('<h1>查询数据失败</h1>');
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <h1>随机分配补 游标的使用</h1>
    <hr />

    <table>
        <tr>
            <th>id</th>
            <th>名字</th>
            <th>补助金额</th>
        </tr>

        <?php while($item = mysqli_fetch_assoc($query)){ ?>
        <tr>
            <td><?php echo $item['studentId']; ?></td>
            <td><?php echo $item['studentname']; ?></td>
            <td><?php echo $item['money']; ?></td>
        </tr>
        <?php }?>
    </table>
</body>

</html>