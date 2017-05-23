<?php
	header("content-type:text/html;charset='utf-8'");

	//链接数据库
	$conn = mysql_connect('localhost','root','');
	mysql_query('set names utf8',$conn);
	mysql_query('use m001',$conn);
?>