<?php
	require('./conn.php');

	$id = $_GET['id'];
		
	if(empty($_POST)){   //   没有post 输出结果内容
		// 获取留言数据
		$sql = "select * from msg1 where id=$id";
		$rs = mysql_query($sql);
			
		// 获取某一条
		$row = mysql_fetch_assoc($rs);

		require('./msg-bianji.html');
	} else { // 有post 请求

		$sql = "update msg1 set content='$_POST[content]', name='$_POST[name]', password='$_POST[password]' where id=$id";

		if(!mysql_query($sql)){
			echo 'mysql 执行失败';
		}else{
			echo '更新成功';
			// header('Location: msg-bianji.php');
		}
	}
?>