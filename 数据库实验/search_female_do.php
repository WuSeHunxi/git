<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'testsql');

if (!$conn) {
  exit('<h1>连接数据库失败</h1>');
}

// 2. 开始查询
$query = mysqli_query($conn, 'select * from v_student_nv;');

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
    <style>
    table {
        margin-left: 520px;
    }
    </style>
</head>

<body>

    <h1>从视图中查询</h1>
    <hr />

    <table>
        <tr>
            <th>id</th>
            <th>名字</th>
            <th>性别</th>
            <th>学校ID</th>
            <th>密码</th>
        </tr>

        <?php while($item = mysqli_fetch_assoc($query)){ ?>
        <tr>
            <td><?php echo $item['id']; ?></td>
            <td><?php echo $item['stuname']; ?></td>
            <td><?php echo $item['gender']; ?></td>
            <td><?php echo $item['schoolId']; ?></td>
            <td><?php echo $item['password']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>

</html>