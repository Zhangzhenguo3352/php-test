<?php
	// 数组的 操作 ，
	// 增、删、改、查
	$arr = array(1,2,333,322,34421);
	//增
	$arr[4] = '这是增加的';
	print_r($arr); echo '<br>';

	// 删
	unset($arr[0]);
	print_r($arr); echo '<br>';

	// 改
	$arr[1] = '这是改的内容';
	print_r($arr); echo '<br>';

	// 查
	echo $arr[2]; echo '<br>'; // 或print_r($arr[2])
	print_r($arr[2])
?>