<?php
$userInfo = array(
"name" => "zhangsan",
"name2"=>"lisi",
"name3"=>"wangwu",


);
print_r(array_values($userInfo));
// 转化为数字索引
print_r(array_keys($userInfo));

$arr = array(100,'10',10);
print_r(array_keys($arr,10));
print_r(array_keys($arr,10,true));
$arr=array(10,20,0,1,100,1000);
sort($arr);
rsort($arr);
$fileName = "test.jpg";
$fileInfo = explode(".",$fileName);
echo $fileInfo[1];

// 返回值为10的键
