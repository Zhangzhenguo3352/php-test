<?php
	// 写一个程序
	for($i=1,$m=100000;$m>=5000;$i = $i+1){
		if($m > 50000){
			$m = $m - $m*0.05;
		}else if($m <= 50000){
			$m = $m-5000;
		}
		echo $i,'次过路口',$m,'元','<br>';
	}
?>