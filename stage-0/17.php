<?php
	//要实现 Array ( [n1] => 4 [n2] => 8 [n3] => 12 )
	$arr = array('n1'=>2,'n2'=>4,'n3'=>6);
	foreach($arr as $key=>$v){
		$arr[$key] = $v*2;
	}
	print_r($arr); // 得到
?>