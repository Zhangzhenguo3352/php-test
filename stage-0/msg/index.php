
<?php
	header('Content-type:text/html;charset="utf-8"');
	if(empty($_POST)){ // 检查post 数据请求是否为空，没有post 就是 true
		require('./index.html');
	} else {
		$conn = mysql_connect('localhost', 'root', '');
		mysql_query('set names utf8', $conn);
		mysql_query('use m001', $conn);

		$sql = "insert into msg1 (name,password,content) values('$_POST[name]','$_POST[password]','$_POST[content]')";
		// $sql = "insert into msg1(name,password,content) values('zhang',26,'sas')";
		// $sql = "select * from msg1";
		// $rs =  mysql_query($sql);

		// $data = array();
		// while ($row = mysql_fetch_array($rs)) {
		// 	$data[] = $row;
		// }
		// print_r($data);
		if(!mysql_query($sql)){
			echo mysql_error();
			exit();
		} else {
			// echo '留言成功';
			header("Location: index.php");
		}
	}

	
?>