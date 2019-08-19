<?php
include '../../public/common/config.php';
    $id=$_GET['id'];
	$sqlshop="select * from saishi where id={$id}";
	$rstshop=mysqli_query($link,$sqlshop);	
	$rowshop=mysqli_fetch_array($rstshop);			
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
		<form action="updata.php" method='post' enctype="multipart/form-data">
			<p>名称:</p>
			<p><input type="text" name='name' value='<?php echo $rowshop['name'] ?>'></p>
			<p>内容</p>
			<p><input type="text" name='conter' value='<?php echo $rowshop['conter'] ?>'></p>				
			<p>图片</p>
			<p><input type="file" name='img' id=""></p>
			<input type="hidden" name="id" value='<?php echo $rowshop['id']?>'/>
			<p><input type="submit" value="修改"></p>
		</form>		
	</div>
	
</body>
</html>