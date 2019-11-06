<?php
header('Access-Control-Allow-Origin: *');

header('Content-Type:application/json;charset=utf-8');


// 默认值
$con = mysql_connect("localhost","root","root");

if (!$con){
    die('Could not connect: ' . mysql_error());
}

mysql_select_db("test", $con);

$id = $_GET['id'];

$sql="select * from student where id = $id";

$result = mysql_query($sql);

$list = array();
$total = 0;

while($row = mysql_fetch_array($result)){
    $item = array(
    'id' => $row['id'],
    'password' => $row['password'],
    'name' => $row['name'],
    'school' => $row['school'],
    'age' => intval($row['age']),
    );
    array_push($list,$item);
}

echo json_encode(
array(
'list'=>$list,
    )
);

mysql_close($con);

// sleep(1);
?>