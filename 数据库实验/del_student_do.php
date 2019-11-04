<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'testsql');

if (!$conn) {
  exit('<h1>连接数据库失败</h1>');
}

// 2. 开始查询
$query = mysqli_query($conn, 'select student.id,student.stuname,student.gender , school.schoolName,school.address ,level_info.levelName,level_info.note from student  left join school   on student.schoolId=school.id  left join level_info  on school.levelId=level_info.id;');

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
<style>
body {
    background-image: url('img/zz.jpeg');
    background-repeat: no-repeat;
    background-size: cover;
    font-size: 24px;
    font-weight: bolder;
}

.box {
    width: 700px;
    height: 300px;
    position: absolute;
    left: 50%;
    top: 50%;
    margin-left: -325px;
    margin-top: -100px;

}

form {
    height: 89px;
    overflow: hidden;
}

input[type="submit"] {
    margin-top: 20px;
    display: block;
    width: 60px;
    height: 30px;
    background-color: yellow;
    text-decoration: none;
    text-align: center;
    line-height: 30px;
    color: #000;
    outline: none;
    border: 1px solid yellow;
    cursor: pointer;
    border-radius: 15px;
    transition: 0.4s;
    font-weight: bolder;
    margin-left: 50px;
}

input[type="submit"]:hover {
    background-color: #f40;
    color: #fff;
}
</style>

<body>
    <div class="box">
        <h1>删除某个学生的全部信息--事务</h1>


        <form action="delete.php?id='<?php echo $item['id'];?>'" method='get'>
            <?php while($item = mysqli_fetch_assoc($query)){ ?>
            学生id: <input name="id" value="" placeholder='输入删除id'>
            <input type="submit" value="删除">
            <?php } ?>
        </form>
    </div>



</body>

</html>