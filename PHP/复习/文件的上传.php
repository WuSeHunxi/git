<?php

if(isset($_POST['sub'])){
    $sfile=$_FILES['sfile'];
    $name=$sfile['name'];
    $arr=explode('.',$name);
    $len=count($arr)-1;
    $newarr=array('txt','md','exe');
    $flag=true;
    for($i=0;$i<count($newarr);$i++){
        if($newarr[i]==arr[len]){
            $flag=false;
        }
    }
    if($flag==false){
        echo "<script> alert(’上传文件失败‘)</script?"
    }else{
        $imgname=time();
        $img=$imgname.'.'.$arr[$len];
        $baseurl=getcwd();
        $bb=move_uploaded_file($sfile['tmp_name'],$baseue,'/upload'.$img);
        if($bb){
            echo "success";
        }else{
            echo "fail"
        }
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
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        上传文件：<input type="file" name="sfile" id="sfile">
        <input type="file" name="sfile1" id="sfile1">
        <input type="submit" value="上传" name='sub'>
    </form>
</body>

</html>