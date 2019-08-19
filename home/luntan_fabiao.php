<?php
include '../public/common/config.php';
?>
<html>
	<head>
		<title>fabiao</title>
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap-theme.min.css"/>
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css"/>
    <script src="public/js/jquery.min.js"></script>
   <script src="public/js/bootstrap.min.js"></script>
	</head>
	<style type="text/css">
		body{
			background: url(public/img/ty-fabiao.jpg) no-repeat;
			background-size: cover;	
		}
		.ty-fbnav{
			margin: 300px 600px;			
		}
	</style>
	<body>
		<div class="ty-fbnav">
			<form action="luntan_inster.php" method="post" enctype="multipart/form-data">
			<p>标题：</p>
			<input type="text" name='biaoti'/>
			<p>正文：</p>
			<textarea style="word-wrap: break-word; word-break: normal; width: 300px;height: 100px;" type="text" name="zhengwen" id=""></textarea>
			<p>头像：</p>
			<input type="file" name="img" id="" value="" />
			<input style="width:70px;line-height: 30px; height: 30px; text-align: center;margin-top: 30px;" type="submit" value="添加话题"/>
		</form>
		</div>
	</body>
</html>