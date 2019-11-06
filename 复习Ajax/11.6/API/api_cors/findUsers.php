<?php
header('Access-Control-Allow-Origin: *');

header('Content-Type:application/json;charset=utf-8');

// 默认值
// 默认 的用户 名root 密码 也是 root
// 默认的用户名还有密码时 root root
$con = mysql_connect("localhost","root","root");

// 判断是否连接成功
if (!$con){
    die('Could not connect: ' . mysql_error());
}

// 选择数据库
mysql_select_db("test", $con);

$pageNum = $_GET['pageNum'];
$pageSize = $_GET['pageSize'];

$start=($pageNum-1)*$pageSize;

// 数据库查询语句
$sql="select *,(select count(*) from student) as total from student order by id desc limit $start , $pageSize ";

$result = mysql_query($sql);

$list = array();
$total = 0;

// 获取数据
while($row = mysql_fetch_array($result)){
    $item = array(
    'id' => $row['id'],
    'password' => $row['password'],
    'name' => $row['name'],
    'school' => $row['school'],
    'age' => intval($row['age']),
    );
    array_push($list,$item);
    $total = $row['total'];
}

echo json_encode(
array(
'list'=>$list,
'pageSize'=>intval($pageSize),
'pageNum'=>intval($pageNum),
'total'=> intval($total)
)
);

mysql_close($con);

// sleep(1);
?>