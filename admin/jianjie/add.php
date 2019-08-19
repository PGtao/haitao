<?php
include '../../public/common/config.php';
	$sql="select * from jianjie";
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
			<p>年份</p>
			<p><input type="text" name='data'></p>
			<p>标题</p>
			<p><input type="text" name='title'></p>
			<p>内容</p>
			<p><input type="conter" name='conter'></p>
			<p><input type="submit" value="添加"></p>
		</form>		
	</div>
	
</body>
</html>