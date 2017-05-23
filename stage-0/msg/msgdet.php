<?php
	require('./conn.php');
	$id = $_GET['id'];
	$sql = "delete from msg1 where id=$id";

	if(!mysql_query($sql)){
		echo '删除失败';
	} else {
		header("Location: msgList.php");  // 成功 页面跳转 msgList.php ，相当于刷新页面
	}
	
?>