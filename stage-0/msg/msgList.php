<?php
	header("content-type:text/html;charset='utf-8'");

	//链接数据库
	$conn = mysql_connect('localhost','root','');
	mysql_query('set names utf8',$conn);
	mysql_query('use m001',$conn);

	$sql = "select * from msg1";
	$rs = mysql_query($sql);

	$data = array();
	while ($row = mysql_fetch_array($rs)) {
		$data[] = $row;
	}
	// print_r($data);
	require('./msgList.html');
?>