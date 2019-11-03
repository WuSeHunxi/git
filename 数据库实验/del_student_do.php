<?php

// 接收要删除的数据 ID
if (empty($_GET['id'])) {
  exit('<h1>必须传入指定参数</h1>');
}

$id = $_GET['id']; // => 1,2,3

// 1. 建立连接
$conn = mysqli_connect('localhost', 'root', '123456', 'test');

if (!$conn) {
  exit('<h1>连接数据库失败</h1>');
}

// 2. 开始查询
$query = mysqli_query($conn, 'delete from users where id in (' . $id . ');');

if (!$query) {
  exit('<h1>查询数据失败</h1>');
}

$affected_rows = mysqli_affected_rows($conn);

if ($affected_rows <= 0) {
  exit('<h1>删除失败</h1>');
}

header('Location: index.php');
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
 <h1>删除某个学生的全部信息 事务</h1>
 <hr />
 
 <%
 	String id=request.getParameter("id");
 	if(id!=null){
 		StudentDao dao=new StudentDao();
		dao.delStudentById(Integer.parseInt(id));
		request.setAttribute("msg", "用户的基本信息,  年级信息, 补助信息删除成功!  ");
 	}
 %>
 
 <form action="del_student_do.jsp"  >
    学生id: <input name="id" value="${param.id }" >
    <input type="submit" value="删除 "  onclick="return confirm('确认要删除该学生的全部信息吗')">
 </form>
 
 <hr />
  ${msg }
  
</body>
</html>