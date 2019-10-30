<?php

sleep(1);

$messageList=array(
    '你好啊',
    '我还没有吃饭',
    '老地方见',
    '讨厌',
    '死鬼，嘿嘿嘿',
    '我爱你'
);

$randomKey=array_rand($messageList,1);
echo $messageList[$randomKey];

?>