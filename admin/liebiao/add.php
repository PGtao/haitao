<?php
include '../../public/common/config.php';
	$sql="select * from zhibo";
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
			<p>美国职业篮球联盟</p>
			<p><input type="text" name='time'></p>
			<p>第4节</p>
			<p><input type="text" name='jie'></p>
			<p>一节</p>
			<p><input type="conter" name='foof'></p>
			<p>二节</p>
			<p><input type="text" name='foos'></p>
			<p>三节</p>
			<p><input type="text" name='foot'></p>
			<p>四节</p>
			<p><input type="conter" name='foog'></p>
			<p>全场</p>
			<p><input type="text" name='tall'></p>
			<p>总分</p>
			<p><input type="text" name='succ'></p>
			<p>胜负</p>
			<p><input type="conter" name='game'></p>
			<p>让分胜负</p>
			<p><input type="text" name='rangf'></p>
			<p>大小分</p>
			<p><input type="text" name='dax'></p>
			<p>其他</p>
			<p><input type="conter" name='outher'></p>
			<p><input type="submit" value="添加"></p>
		</form>		
	</div>
	
</body>
</html>