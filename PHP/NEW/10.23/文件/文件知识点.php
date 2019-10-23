<?php

/**
 * 
 * fopen()--->打开文件
 * fget()--->从文件中逐行读取文件
 * fgetc()--->从文件中逐字符地读取文件
 * fclose()--->关闭打开的文件
 * feof()--->检查是否已经到达文件末尾
 * 
 */

$file = fopen("name.txt", "r") or exit("无法打开文件!");
// 读取文件每一行，直到文件结尾
echo $file;//Resource id #3hahhah 
while(!feof($file))
  {
    // 读取文件
    echo fgets($file). "<br>";

  }
fclose($file);


$f=fopen("name.txt","r");
while(!feof($f)){
    echo fgetc($f)."<br/>";
}
fclose($f);

?>