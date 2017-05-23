<?php
	// 数值的操作
	$arr = array('5'=>1, 2 => 2 , 3=>3); //第一种数值 创建形式 
	$arr_0 = array('23','23','{a:1}');   // 第二种数值 创建形式
	print_r($arr); // Array ( [5] => 1 [2] => 2 [3] => 3 )
	echo '<br>';
	print_r($arr_0);

	echo '<br>';
	echo $arr[5],'<br>';
	echo $arr_0[1]; // 数组的操作
?>