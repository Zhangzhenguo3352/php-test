<?php
	//九九乘法表
	for($i=1;$i<10;$i++){
		for($j=1;$j<=$i;$j++){
			echo $j.'*'.$i.'='.($i*$j).'&nbsp;&nbsp;&nbsp;';
		}
		echo '<br>';
	}
?>