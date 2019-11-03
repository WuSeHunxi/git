<?php


$name=$_POST['name'];
$gender=$_POST['gender'];
$id=$_POST['id'];
$school=$_POST['school'];
$adress=$_POST['adress'];
$level=$_POST['level'];
$note=$_POST['note'];

$conn=mysqli_connect('localhost', 'root', 'root', 'testsql');
if(!$conn){
    exit("<h1>数据库连接失败</h1>");
}

$query=mysqli_query($conn,'insert into user values('{$id}','{$name}','{$gender}','{$school}','{$adress}','{$level}','{$note}')');
if(!$query){
    exit("<h1>数据库查询失败</h1>");
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
    <h1>学生列表</h1>
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
        <tr>
            <td><?php echo $item['id']; ?></td>
            <td><?php echo $item['name']; ?></td>
            <td><?php echo $item['gender']; ?></td>
            <td><?php echo $item['school']; ?></td>
            <td><?php echo $item['adress']; ?></td>
            <td><?php echo $item['level']; ?></td>
            <td><?php echo $item['note']; ?></td>
        </tr>
    </table>
    <h1>学生班级信息</h1>
    <hr />
    <table>
        <tr>
            <th>id</th>
            <th>年级</th>
            <th>添加时间</th>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>

    </table>
</body>

</html>