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
		<table width="1000px" border="1px"cellpadding="0">
			<tr>
				<th>编号</th>
				<th>年份</th>
				<th>标题</th>
				<th>内容</th>
				<th>修改</th>
 			    <th>删除</th>
			</tr>	 
			<?php 
				while($row=mysqli_fetch_array($aa)){
					echo "<tr>";
					echo "<td>{$row['id']}</td>";
					echo "<td>{$row['data']}</td>";
					echo "<td>{$row['title']}</td>";
					echo "<td>{$row['conter']}</td>";
					echo "<td><a href='edit.php?id={$row['id']}'>修改</a></td>";
					echo "<td><a href='delete.php?id={$row['id']}'>删除</a></td>";
					echo "</tr>";
				}
			?>
		</table>
	</div>
	
</body>
</html>