<?php
include '../../public/common/config.php';
	$sql="select * from saiguo";
	$aa=mysqli_query($link,$sql);				
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
	<link rel="stylesheet" href="../public/css/index.css">
</head>
<body>
	<div class="main">
		<form action="insert.php" method='post'>
			<p>赛事日期</p>
			<p><input type="text" name='time'></p>
			<p>赛事编号</p>
			<p><input type="text" name='bhao'></p>
			<p>联赛</p>
			<p><input type="conter" name='lians'></p>
			<p>主队vs客队</p>
			<p><input type="text" name='rangq'></p>
			<p>半场比分</p>
			<p><input type="text" name='bfen'></p>
			<p>全场比分</p>
			<p><input type="conter" name='qfen'></p>
			<p>胜</p>
			<p><input type="text" name='sheng'></p>
			<p>平</p>
			<p><input type="text" name='ping'></p>
			<p>负</p>
			<p><input type="conter" name='fu'></p>
			<p>状态</p>
			<p><input type="text" name='ztai'></p>
			<p>开奖结果</p>
			<p><input type="text" name='jieg'></p>
			<p>比赛资讯</p>
			<p><input type="conter" name='zixun'></p>
			<p><input type="submit" value="添加"></p>
		</form>		
	</div>
	
</body>
</html>