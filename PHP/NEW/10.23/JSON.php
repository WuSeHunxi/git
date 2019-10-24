<?php


/***
 * 
 * json_decode()--->进行解码
 * json_encode()-->对变量进行编码
 * 
 */

 $arr=array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
 echo json_encode($arr);

 echo "<br/>";

 //将PHP对象转化成了JSON格式的数据
 class Emp {
    public $name = "";
    public $hobbies  = "";
    public $birthdate = "";
}
$e = new Emp();
$e->name = "sachin";
$e->hobbies  = "sports";
// $e->birthdate = date('m/d/Y h:i:s a', "8/5/1974 12:20:03 p");
$e->birthdate = date('Y-m-d h:i:s a', strtotime("2019-10-23 12:20:03"));
echo json_encode($e);