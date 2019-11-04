<?php

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
    text-decoration: none;
    text-align: center;
    line-height: 30px;
    color: #000;
}
</style>

<body>
    <h1>删除某个学生的全部信息 事务</h1>
    <hr />

    <form action="delete.php" method='get'>
        学生id: <input name="id" value="<?php echo $item['id']; ?>" placeholder='输入删除id'>
        <a class="btn" href="delete_student_do.php?id=<?php echo $$_GET['id']; ?>">删除</a>
    </form>

    <hr />

</body>

</html>