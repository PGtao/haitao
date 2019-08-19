<?php
include '../../public/common/config.php';
		$sql="select * from user where isadmin=0";
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
				<th>用户名</th>
				<th>修改</th>
				<th>删除</th>
			</tr>	 
			<?php 
				while($row=mysqli_fetch_array($aa)){
					echo "<tr>";
					echo "<td>{$row['user_id']}</td>";
					echo "<td>{$row['username']}</td>";
					echo "<td><a href='edit.php?user_id={$row['user_id']}'>修改</a></td>";
					echo "<td><a href='delete.php?user_id={$row['user_id']}'>删除</a></td>";
					echo "</tr>";
				}
			?>
		</table>
	</div>
	
</body>
</html>