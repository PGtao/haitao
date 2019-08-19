<?php 
include '../../public/common/config.php';
$id=$_GET['id'];
$sqlShop="select * from luntan where id={$id}";
$rstShop=mysqli_query($link,$sqlShop);
$rowShop=mysqli_fetch_assoc($rstShop); 
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
</head>
<body>
	<div class="main">
		<form action="update.php" method='post' enctype='multipart/form-data'>
			<p>名称:</p>
			<p><input type="text" name='biaoti' value='<?php echo $rowShop['biaoti']?>'></p>
			<p>正文:</p>
			<p><input type="text" name='zhengwen' value='<?php echo $rowShop['zhengwen']?>'></p>
			<p>原图:</p>
			<p><img src="../public/uploads/<?php echo $rowShop['img']?>"class="am-thumbnail" width="100px" height="50px"></p>
			<p>图片:</p>
			<p><input type="file" name="img"></p>
			
			<input type="hidden" name="id" value='<?php echo $rowShop['id']?>'>
			<input type="hidden" name="imgsrc" value='<?php echo $rowShop['img']?>'>
			
			<p><input type="submit" value="修改"></p>
		</form>		
	</div>
	
</body>
</html>