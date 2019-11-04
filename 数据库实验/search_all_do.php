<?php  

// 1. 建立连接
$conn = mysqli_connect('localhost', 'root', 'root', 'testsql');

if (!$conn) {
  exit('<h1>连接数据库失败</h1>');
}

// 2. 开始查询
$query = mysqli_query($conn, 'select student.id,student.stuname,student.gender , school.schoolName,school.address ,level_info.levelName,level_info.note from student  left join school   on student.schoolId=school.id  left join level_info  on school.levelId=level_info.id;');


if (!$query) {
    // echo $query;
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
        margin-left: 200px;
    }
    </style>
</head>

<body>
    <h1>学生列表</h1>
    <hr />

    <table>
        <tr>
            <th>id</th>
            <th>名字</th>
            <th>性别</th>
            <th>学校(来自school表)</th>
            <th>学校地址(来自school表)</th>
            <th>学校等级(来自level_info表)</th>
            <th>等级备注(来自level_info表)</th>
        </tr>

        <?php while($item=mysqli_fetch_assoc($query)){ ?>
        <tr>
            <td><?php echo $item['id']; ?></td>
            <td><?php echo $item['stuname']; ?></td>
            <td><?php echo $item['gender']; ?></td>
            <td><?php echo $item['schoolName']; ?></td>
            <td><?php echo $item['address']; ?></td>
            <td><?php echo $item['levelName']; ?></td>
            <td><?php echo $item['note']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>

</html>