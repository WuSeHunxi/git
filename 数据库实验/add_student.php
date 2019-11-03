<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <h1>添加学生</h1>
    <hr />

    <form action="add_student_do.jsp" method="post">
        账号: <input name="stuName"> <br />
        密码: <input name="password"> <br />
        性别: <input name="gender" maxlength="1"> <br />
        学校: <input name="schoolId"> <br />
        <input type="submit" value="提交">
    </form>

</body>

</html>