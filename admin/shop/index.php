<?php
include '../../public/common/config.php';
		$sql="select shop.*,brand.name bname,class.name cname from shop,brand,class 
		where brand.class_id=class.id and shop.brand_id=brand.id";
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
		<table width="1000px" border="1px"cellpadding="0">
			<tr>
				<th>编号</th>
				<th>名称</th>
				<th>图片</th>
				<th>内容</th>
				<th>比赛</th>
				<th>分类</th>
				<th>修改</th>
				<th>删除</th>
			</tr>	 
			<?php 
				while($row=mysqli_fetch_array($aa)){
					echo "<tr>";
					echo "<td>{$row['id']}</td>";
					echo "<td>{$row['name']}</td>";
					echo "<td><img src='../public/uploads/{$row['img']}'width='200px' height='100px'></td>";
					echo "<td>{$row['conter']}</td>";
					echo "<td>{$row['bname']}</td>";
					echo "<td>{$row['cname']}</td>";
					echo "<td><a href='edit.php?id={$row['id']}'>修改</a></td>";
					echo "<td><a href='delete.php?id={$row['id']}&img={$row['img']}'>删除</a></td>";
					echo "</tr>";
				}
			?>
		</table>
	</div>
	
</body>
</html>