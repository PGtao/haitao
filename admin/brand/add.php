<?php
include '../../public/common/config.php';
	$sql="select * from class";
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
			<p>品牌名称:</p>
			<p><input type="text" name='name'></p>
			<p>品牌分类</p>
			<p>
				<select name="class_id">
					<?php
			while($row=mysqli_fetch_array($aa)){
				echo"<option value='{$row['id']}'>{$row['name']}</option>";		
			}					
						?>
				</select>
			</p>
			<p><input type="submit" value="添加"></p>
		</form>		
	</div>
	
</body>
</html>