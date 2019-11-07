<?php 
$uname = $_POST['username'];
$pw = $_POST['password'];

// if($uname == 'admin' && $pw == '123'){
//     echo '登录成功';
// }


if($uname == 'admin' && $pw == '123'){
?>
    <script type="text/javascript">
        parent.document.getElementById('info').innerHTML = '登录成功';
    </script>
<?php }else{ ?>
    <script type="text/javascript">
        parent.document.getElementById('info').innerHTML = '登录失败';
    </script>
<?php } ?>