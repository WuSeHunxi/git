<?php

// 接收要删除的数据 ID
if (empty($_GET['id'])) {
  exit('<h1>必须传入指定参数</h1>');
}

$id = $_GET['id']; // => 1,2,3

// 1. 建立连接
$conn = mysqli_connect('localhost', 'root', 'root', 'testsql');

if (!$conn) {
  exit('<h1>连接数据库失败</h1>');
}

// 2. 开始查询
$query = mysqli_query($conn, 'delete from student_money where studentId in (' . $id . ');');

if (!$query) {
  exit('<h1>查询数据失败</h1>');
}

$affected_rows = mysqli_affected_rows($conn);

if ($affected_rows <= 0) {
  exit('<h1>删除失败</h1>');
}

header('Location: search_all_do.php');

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<style>
a {
    display: block;
    width: 50px;
    height: 30px;
    background-color: yellow;
}
</style>

<body>
    <h1>删除某个学生的全部信息 事务</h1>
    <hr />

    <form action="del_student_do.php">
        学生id: <input name="id" value="<?php echo $item['id'] ?>">
        <a class="btn" href="delete_student_do.php?id=<?php echo $item['id'] ?>">删除</a>
    </form>

    <hr />

</body>

</html>