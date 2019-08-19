
<?php
include '../../public/common/config.php';
		$sql="select * from saishi";
		$result=mysqli_query($link,$sql);	
		$total=mysqli_num_rows($result);
        $pageNum=5;
        $pageTotal=ceil($total/$pageNum);
        $m=0;
        $page=1;
if(isset($_GET['page'])){
	if($_GET['page']==1){
		$m=0;
	}
	else
	{
		$m=($_GET['page']-1)*$pageNum;
		$page=$_GET['page'];
	}
}

$sql="select * from saishi order by id limit $m,$pageNum";//查询sql语句
$result=mysqli_query($link, $sql);			
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
</head>
<body>
		<table style="margin: 40px auto; text-align: center;" width="1000px" border="1px"cellpadding="0">
			<tr>
				<th>编号</th>
				<th>名称</th>
				<th>图片</th>
				<th>内容</th>
				<th>修改</th>
				<th>删除</th>
			</tr>	 
			<?php 
				while($row=mysqli_fetch_array($result)){
					$d=$row['id'];
					echo "<tr>";
					echo "<td>{$row['id']}</td>";
					echo "<td>{$row['name']}</td>";
					echo "<td><img src='../public/uploads/{$row['img']}'width='200px' height='100px'></td>";
					echo "<td>{$row['conter']}</td>";
					echo "<td><a href='edit.php?id={$row['id']}'>修改</a></td>";
					echo "<td><a href='delete.php?id={$row['id']}&img={$row['img']}'>删除</a></td>";
					echo "</tr>";
				}
			?>
		</table>
	<div style="width: 30%; margin: 10px auto;">
<span style="0 5px">
	第 <?php echo $page;?> 页/共<?php echo $pageTotal; ?>页;
</span>
<?php
if($page>=2){
	$a=$page-1;
	echo "<a href='index.php?page=1'>首页</a>";
    echo "<a href='index.php?page=$a'>上一页</a>";
}
?>

<?php
for($i=1;$i<=$pageTotal;$i++){
?>
<a href="index.php?page=<?php echo $i;?>"><?php echo $i ?></a>
<?php
}
?>
<?php
if($page<$pageTotal){
	$c=$pageTotal;
	$b=$page+1;
	echo "<a href='index.php?page=$c'>尾页</a>";
    echo "<a href='index.php?page=$b'>下一页</a>";
}
?>
</div>
</body>
</html>