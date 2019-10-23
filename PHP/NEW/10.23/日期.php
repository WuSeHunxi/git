<?php

/**
 * 
 * date()有两个参数，氮素第二个是可选的，第二个参数默认情况下是当前时间，但是我们可以将第二个参数设置成自己想要的，然后该函数将其转化成设置的标准格式
 */
echo date("Y/m/d") . "<br>";
echo date("Y.m.d") . "<br>";
echo date('Y-m-d')."<br/>";

/**
 * 
 * date_create()	返回一个新的 DateTime 对象。
 * date_time_set()	设置时间。
 * date()	格式化本地日期和时间。参数只能是规定的时间格式
 * getdate()	返回某个时间戳或者当前本地的日期/时间的日期/时间信息。
 * time()	返回当前时间的 Unix 时间戳。
 * 
 */

 // 返回当前时间戳
 echo time()."<br>";

 // 这些参数都可选的  mktime(hour,minute,second,month,day,year,is_dst);
 // 当没有参数的时候，返回的就是当前时间的时间戳
 echo mktime(12,32,12,3,2017);

 echo "<br/>";

 //date_create() date_time_set()
 $date = date_create("2017-12-1");// 先创建一个时间对象，然后在设置时间
 date_time_set($date, 12, 36); // date_time_set(object,hour,minute,second);-->最后一个参数是可选的
 //date_format() 参数是对象和时间的格式
 echo date_format($date, "Y-m-d H:i:s");// date_format()	返回根据指定格式进行格式化的日期。


  echo "<br/>";
?>