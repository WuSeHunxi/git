<!-- php获取复选框的数据 -->

<?php
    // 多选的时候不能使用htmlspecialchars()函数
    $q = isset($_POST['q'])? $_POST['q'] : '';
    //判断得到的值是否在下面的关联数组中
    //判断$q是不是一个数组
    if(is_array($q)) {
        $sites = array(
            'PHP' => 'php中文网教程: http://www.php.cn',            
            'GOOGLE' => 'Google 搜索: http://www.google.com',            
            'TAOBAO' => '淘宝: http://www.taobao.com',    );    
            // 遍历$q
            foreach($q as $val) { 
                // PHP_EOL 为常量，用于换行
                echo $sites[$val] . PHP_EOL; // 输出键所对应的值   
            }
      } else {
?>
<form action="" method="post">
    <input type="checkbox" name="q[]" value="PHP"> PHP<br>
    <input type="checkbox" name="q[]" value="GOOGLE"> Google<br>
    <input type="checkbox" name="q[]" value="TAOBAO"> Taobao<br>
    <input type="submit" value="提交">
</form>
<?php } ?>