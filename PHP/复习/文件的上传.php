<?php

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