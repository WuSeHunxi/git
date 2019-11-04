<?php


$stuname=$_POST['stuname'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$schoolId=$_POST['schoolId'];
var_dump($_POST);

$conn=mysqli_connect('localhost', 'root', 'root', 'testsql');

if(!$conn){
    exit("<h1>数据库连接失败</h1>");
}

$s=mysqli_query($conn,'select student_Id,gradeName,addTime from student_grade;');
$sql=mysqli_query($conn,'select student.id,student.stuname,student.gender , school.schoolName,school.address ,level_info.levelName,level_info.note from student  left join school   on student.schoolId=school.id  left join level_info  on school.levelId=level_info.id;');
$query=mysqli_query($conn,"insert into student(stuName, password,gender,schoolId) values ('{$stuname}','{$password}','{$gender}','{$schoolId}');");

if(!$query){
    exit("<h1>数据库查询失败</h1>");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>c
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
        <?php while($item = mysqli_fetch_array($sql)){ ?>
        <tr>

            <td><?php echo $item['id']; ?></td>
            <td><?php echo $item['stuname']; ?></td>
            <td><?php echo $item['gender']; ?></td>
            <td><?php echo $item['schoolName']; ?></td>
            <td><?php echo $item['address']; ?></td>
            <td><?php echo $item['levelName']; ?></td>
            <td><?php echo $item['note']; ?></td>
        </tr>
        <?php }?>
    </table>
    <h1>学生班级信息</h1>
    <hr />
    <table>
        <tr>
            <th>id</th>
            <th>年级</th>
            <th>添加时间</th>
        </tr>
        <?php while($item = mysqli_fetch_array($s)){ ?>
        <tr>
            <td><?php echo $item['student_Id']; ?></td>
            <td><?php echo $item['gradeName']; ?></td>
            <td><?php echo $item['addTime']; ?></td>
        </tr>
        <?php }?>
    </table>
</body>

</html>