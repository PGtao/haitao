<?php
include '../../public/common/config.php';
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<link rel="stylesheet" href="../public/css/index.css">
	<title></title>

</head>
<body >
	<div class="main">
		<table border="" cellspacing="" cellpadding="">
		<tr>
			<th>编号</th>
			<th>标题</th>
			<th>正文</th>
			<th>图片</th>
			<!--<th>图片2</th>-->
			<th>评论</th>
			<th>修改</th>
			<th>删除</th>
		</tr>
		
		<?php 
			$sql="select * from luntan";
			$result=mysqli_query($link,$sql);
			while($row=mysqli_fetch_array($result)){
				echo"<tr>";
					echo"<td>{$row['id']}</td>";
		 			echo"<td>{$row['biaoti']}</td>";
		 			echo"<td>{$row['zhengwen']}</td>";
		 			echo"<td><img class='am-thumbnail' width='200px' height='100px'  src='../public/uploads/{$row['img']}'/></td>";
		 			echo"<td>{$row['pinglun']}</td>";
		 			echo"<td><a href='edit.php?id={$row['id']}'>修改</a></td>";
		 			echo"<td class='{$row['img']}'><a href='del.php?id={$row['id']}&img={$row['img']}'>删除</a></td>";
		 			echo"<tr>";
		 		}
		?>
	</table>
	</div>
	
</body>
</html>