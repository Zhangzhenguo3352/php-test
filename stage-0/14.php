<?php
	// 循环数组
	// count()  相当一js 中的 arr.length
	$arr = array(33,44,55,66);
	for($i=0;$i<count($arr);$i++){
		echo $arr[$i],'<br>';
	}
	// foreach( as ){}
	$arr_r = array('name'=>'zhang','age'=>123,'data'=>'{name:"guo"}');
	foreach($arr_r as $k=>$v){
		echo $k,'==',$v,'<br>';
	}
?>