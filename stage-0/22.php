<?php
	function t1($a){
		return $a + 1;
	}
	$b = 4;
	function t2(&$b){
		$b +=1;
		return $a;
	}
	echo t2($b);
	echo t1(3);
?>