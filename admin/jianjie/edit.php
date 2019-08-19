<?php
include '../../public/common/config.php';
	$sql="select * from jianjie";
	$rst=mysqli_query($link,$sql);
	$row=mysqli_fetch_array($rst);				
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
		<form action="updata.php" method='post'>
			<p>年份</p>
			<p><input type="text" name='data'  value='<?php echo $row['data'] ?>'></p>
			<p>标题</p>
			<p><input type="text" name='title' value='<?php echo $row['title']?>'></p>
			<p>内容</p>
			<p><input type="text" name='conter' value='<?php echo $row['conter']?>'></p>
				<input type="hidden" name="id"  value='<?php echo $row['id'] ?>'>
			<p><input type="submit" value="修改"></p>
		</form>		
	</div>
	
</body>
</html>