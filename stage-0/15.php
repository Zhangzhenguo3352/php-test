<?php
	// 只取 数组中的key用， array_keys()
	$arr = array('name' => 'zhang', 'age'=>18);
	// 循环取出 key
	print_r(array_keys($arr)) ; // Array ( [0] => name [1] => age )
?>