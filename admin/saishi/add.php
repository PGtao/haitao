<?php
include '../../public/common/config.php';
	$sql="select * from saishi";
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
		<form action="insert.php" method='post' enctype="multipart/form-data">
			<p>名称:</p>
			<p><input type="text" name='name'></p>
			<p>内容</p>
			<p><input type="text" name='conter'></p>				
			<p>图片</p>
			<p><input type="file" name='img' id=""></p>		
			<p><input type="submit" value="添加"></p>
		</form>		
	</div>
	
</body>
</html>