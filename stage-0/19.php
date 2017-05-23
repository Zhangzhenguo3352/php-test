<?php
	header("content-type:text/html;charset='utf-8'");
	// 获取当前时间，1、先把phpinfo() 打印出来 找到 Loaded Configuration File，将这个目录下中的内容修改。2、搜索 date.timezone   将后面的 修改成 PRC。3、然后打印 data() 时间就出来了
	echo date('Y/m/d H:i:s'),'<br>'; // 2017/05/14 09:00:39

	echo date('Y年m月d日 H:i:s'),'<br>';

	echo time(),'<br>'; // 1494723639

	//显示昨天 的时间，可以传递第二个 参数
	echo date('Y/m/d H:i:s', time() - 3600 * 24),'<br>';

	//          时   分    秒   月   日    年
	echo mktime('06','04','00','05','17','2017'),'<br>'; // 将时间 转成 时间戳
	echo time(),'<br>';

	// 时间戳 计算 还有一种方法 ， （这个到时候可以查）
	echo strtotime('now'),'<br>';  // 获取当前的时间戳  相当于  time()
	echo strtotime('-1 day'),'<br>';  // 前一天的 时间戳

	// checkdate('05','33','2017')  检查5月有没有33号，有 返回 true ,没有 false
	var_dump(checkdate('05','33','2017'));	// boolean false
?>