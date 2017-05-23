<?php
	for($i=0;$i<=9;$i++){
		echo $i,'<br>';
	}
	echo '=============','<br>';

	for($i=0;$i<=9;$i = $i+3){
		echo $i,'<br>';
	}

	echo '=============','<br>';

	$a = null;
	for($i=0,$j=0;$i<10,$j<5;$i++,$j++){
		$a = $j+$i;
		echo $a;
		
	}
	// echo $a;
?>