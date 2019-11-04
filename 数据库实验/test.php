<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title> </title>
    <link rel="stylesheet" href="style.css">
    <style>
    body {
        background-image: url('img/winner.gif');
        background-repeat: no-repeat;
        background-size: cover;
    }

    h1 {
        color: #fff;
        margin-top: 100px;
    }

    ul {
        width: 400px;
        height: 300px;
        margin: 30px auto;
    }

    ul li {
        margin-bottom: 10px;
    }
    </style>
</head>

<body>

    <h1>❤学生管理系统❤</h1>
    <hr />

    <ul>
        <li><a href="search_all_do.php">查看所有学生 (三表关联)</a></li>
        <li><a href="search_female_do.php">查看所有女学生(查询视图)</a></li>
        <li><a href="search_byid_do.php">根据id查询学生信息(调用存储过程)</a></li>
        <li><a href="add_student.php">添加学生(触发器)</a></li>
        <li><a href="rand_money_do.php">随机给学生分补助(游标)</a></li>
        <li><a href="del_student_do.php">删除学生全部信息(事务)</a></li>
        <li><a href="search_byname_do.php">根据名称查询(利用索引加快速度)</a></li>
    </ul>

</body>

</html>