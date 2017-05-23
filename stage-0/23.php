<?php
	header('content-type:text/html;charset="utf-8"');
	// strlen() 获取字符串的的长度,它计算 字节长度
	$str = 'abc d';
	var_dump(strlen($str)); echo '<br>';  // int 5

	$str = '中国';
	var_dump(strlen($str)); echo '<br>';// int 6  , 按字节长度 计算
	var_dump(mb_strlen($str, 'utf8')); echo '<br>'; // int 2   ,  utf8 算出 中文 长度


	// strpos(字符串变量, 找那个) 获取字符串位置,没有找到 返回 false
	$str = 'abcdef';
	var_dump(strpos($str, 'b')); // int 1 ,  没有 返回 false
	if(strpos($str,'a') === false){  // ===   全等
		echo '没有找到';
	}else{
		echo '找到了','<br>';
	}

	// str_replace(替换前语句, 替换后语句 , 那个字符串上操作) 字符串"替换"
	$str = 'zhangzhenguo逼逼';
	echo str_replace('逼逼', '******', $str); // zhangzhenguo******
	
?>