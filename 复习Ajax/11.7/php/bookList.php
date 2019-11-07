<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>图书列表</title>
    <style type="text/css">
    th,td{
        border-left: 1px solid red;
        border-top:1px solid red;
    }
    table{
        border-right: 1px solid red;
        border-bottom: 1px solid red;
    }
    </style>
</head>
<body>
    <?php 
    sleep(3);//执行到这里的时候等待3秒
    /*这里的数据是假数据，真正的场景中数据基本上都是来自数据库。*/
    $arr = array();
    $arr[0] = array("name"=>"三国演义","author"=>"罗贯中","category"=>"古典文学","desc"=>"一个封建王朝的缩影");
    $arr[1] = array("name"=>"水浒传","author"=>"施耐庵","category"=>"古典文学","desc"=>"108好汉的故事");
    $arr[2] = array("name"=>"三国演义","author"=>"吴承恩","category"=>"古典文学","desc"=>"佛教与道教的斗争");
    $arr[3] = array("name"=>"三国演义","author"=>"曹雪芹","category"=>"古典文学","desc"=>"一个封建王朝的缩影");
     ?>
    <table cellspacing="0" cellpadding="0">
        <thead>
            <tr>
                <th>名称</th>
                <th>作者</th>
                <th>分类</th>
                <th>描述</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($arr as $value) {?>
               <tr>
                <td><?php echo $value["name"]; ?></td>
                <td><?php echo $value["author"]; ?></td>
                <td><?php echo $value["category"]; ?></td>
                <td><?php echo $value["desc"]; ?></td>
               </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>