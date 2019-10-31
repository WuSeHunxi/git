<?php


// $connection =myqli_connect('127.0.0.1','root','root','mydb');
// $json=file_get_contents('data.json');
// $data=json_decode($json,true);

// if($connection){
//     exit('<h1>数据库连接失败</h1>');
// }

// $query=mysqli_query($connection,'select * from ;');

// while($row=mysqli_fetch_assoc($query)){
    
// }
header("Content-Type:text/html;charset=utf-8");
$uname=$_POST['uname'];
$upwd=$_POST['upwd'];
$conn=mysql_connect("localhost","root","root");
mysql_select_db("db1901",$conn);
mysql_query("set names utf8");
$sql="insert into `user`(`uname`,`upwd`) values (`$uname`,`$upwd`)";
$row=mysql_query($sql);
if($row){
    echo "";
}else{
    echo "";
}