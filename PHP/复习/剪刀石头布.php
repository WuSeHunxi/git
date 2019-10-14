<?php

if(isset($_POST['sub'])){
    $rnum=rand(0,2);
    $num=$_POST['cq'];
    if($rnum==$num){
        echo "平局";
    }else if($num-$rnum=-1){
        echo "输了";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        请出拳
        <select name="cq" id="s1">
            <option value="0">拳头</option>
            <option value="1">布</option>
            <option value="2">剪刀</option>
        </select>
        <img src="cq.jpg" id="image">
        <input type="submit" value="提交" name="sub">
    </form>
    <script>
    var s1 = document.getElementById('s1');
    img = document.getElementsByTagName['img'][0];
    s1.onclick = function(this) {
        var val = s1.value;
        if (val == 0) {
            img.src = "qt.jpg";
        } else if (val == 1) {
            img.src = "b.jpg";
        } else if (val == 2) {
            img.src = "jz.jpg";
        } else {
            img.src = "cq.jpg";
        }

    }
    </script>
</body>

</html>