<?php 
  print_r($_POST);

  print_r($_FILES);
  // 抢救出来
  /*
  Array
(
    [icon] => Array
        (
            [name] => 01.png
            [type] => image/png
            [tmp_name] => C:\Users\51772\AppData\Local\Temp\phpC23C.tmp
            [error] => 0
            [size] => 22756
        )

)
  */
  move_uploaded_file($_FILES['icon']['tmp_name'],'./files/'.$_FILES['icon']['name']);
?>