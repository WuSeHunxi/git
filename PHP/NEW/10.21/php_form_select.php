<!-- 通过select的name的属性获取下拉菜单的值 -->

<?php
    $q = isset($_GET['q'])? htmlspecialchars($_GET['q']) : '';if($q) {
        if($q =='PHP') {
                echo 'php中文网教程<br>http://www.php.cn';        
                } else if($q =='GOOGLE') {
                echo 'Google 搜索<br>http://www.google.com';        
                } else if($q =='TAOBAO') {
                echo '淘宝<br>http://www.taobao.com';        
                }} 
                else {
                
                ?>
<form action="" method="get">
    <select name="q">
        <option value="">选择一个站点:</option>
        <option value="PHP">PHP</option>
        <option value="GOOGLE">Google</option>
        <option value="TAOBAO">Taobao</option>
    </select>
    <input type="submit" value="提交">
</form>
<?php}?>