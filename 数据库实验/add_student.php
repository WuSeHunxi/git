<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <style>
    body {
        background-color: #6699FF;
        opacity: 0.8;
    }

    form {
        width: 300px;
        height: 400px;
        margin: 20px auto;
    }

    input {
        margin-bottom: 5px;
        margin-left: 8px;
    }

    span {
        color: #f40;
        font-size: 22px;
        font-weight: bolder;
    }

    input[type='submit'] {
        background-color: #ccc;
        border: 1px solid #ccc;
        width: 60px;
        height: 30px;
        text-align: center;
        line-height: 24px;
        transition: 0.4s;
        font-weight: bolder;
        cursor: pointer;
        margin-left: 100px;
        border-radius: 10px;
        outline: none;
    }

    input[type='submit']:hover {
        width: 80px;
        background-color: #66FFFF;
        border: 1px solid #66FFFF;
    }
    </style>
</head>

<body>
    <h1>添加学生</h1>
    <hr />

    <form action="add_student_do.php" method="post">
        <span>账号:</span> <input name="stuname"> <br />
        <span>密码: </span><input name="password"> <br />
        <span>性别: </span><input name="gender" maxlength="1"> <br />
        <span>学校: </span><input name="schoolId"> <br />
        <input type="submit" value="提交">
    </form>

</body>

</html>