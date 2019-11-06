<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type:text/html;charset=utf-8');

$con = mysql_connect("localhost","root","root");

if (!$con){
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("test", $con);

$sql="update student set password = '$_POST[password]', name = '$_POST[name]',
school = '$_POST[school]',age ='$_POST[age]' where id = $_POST[id] ";
// echo $sql;

if (!mysql_query($sql,$con)){
    die('Error: ' . mysql_error());
}

echo '{"status":"ok"}';

mysql_close($con)
?>