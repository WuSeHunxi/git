<?php
	// $n=5;
	// $arr=array();
	// $w=0;
	
	// while($w<$n){
	// 	$num=rand(1,9);
	// 	$arr[]=$num; // 将$num的值添加到数组中
	// 	$arr1=array_unique($arr);
	// 	$w=count($arr1);
	// }
	
	/*
	
	for($i=0;$i<$n;$i++){
		$num=rand(1,9);
		$arr[$i]=$num;
		if(count($arr) != count(array_unique($arr))){
			$i--;
		}
	}*/
	
	// echo "<pre>";
	// print_r($arr1); //pre 带有格式的标签
	// echo "</pre>";
	
$n=5;
$w=0;
$arr=array();
while($w<$n){
	$num=rand(1,9); // 得到随机数
	$arr[]=$num;
	$w=count($arr);
}	

echo "<pre>";
print_r($arr);
echo "</pre>";


?>