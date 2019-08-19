<?php
include '../../public/common/config.php';
?>

<html>
	<head>
		<meta charset="UTF-8"/>
		<title></title>
		<link rel="stylesheet" href="../public/css/index.css">		
	</head>
	<body>	
		<div class="main">
			<form action="insert.php" method="post" enctype="multipart/form-data">
			<p>标题：</p>
			<input type="text" name='biaoti'/>
			<p>正文：</p>
			<textarea style="word-wrap: break-word; word-break: normal;" type="text" name="zhengwen" id=""></textarea>
			<p>头像：</p>
			<input type="file" name="img" id="" value="" />
			<!--<p>图片2：</p>
			<input type="file" name="tupian2" id="" value="浏览图片" />-->
			<br>
			<input style="width:70px;line-height: 30px; height: 30px; text-align: center;margin-top: 30px;" type="submit" value="添加话题"/>
		</form>
		</div>
		
	</body>
</html>