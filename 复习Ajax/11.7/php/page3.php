<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 基础语法</title>
    <script type="text/javascript">
        function foo(info){
            console.log(info);
            return info;
        }
        var ret = foo('hello')
        console.log(ret);
    </script>
</head>
<body>
    <div>
        <?php 
        // 函数的名字是不区分大小写
        // 自定义函数
        $ret = foo('hi tom');
        echo $ret;
        function Foo($info){
            return $info;
        }

        // 系统函数
        // $arr = array(111,222,333);
        $arr = array("a"=>"111","b"=>"222","c"=>"hi");
        $ret = json_encode($arr);//{"a":"111","b":"222","c":"333"}
        echo $ret;
        
         ?>        

    </div>
</body>
</html>