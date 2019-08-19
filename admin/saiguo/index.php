<?php
include '../../public/common/config.php';
		$sql="select * from saiguo";
		$result=mysqli_query($link,$sql);	
		$total=mysqli_num_rows($result);
        $pageNum=10;
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

$sql="select * from saiguo order by id limit $m,$pageNum";//查询sql语句
$result=mysqli_query($link, $sql);			
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
</head>
<body>
		<table style="margin: 40px auto; text-align: center;" width="1200px" border="1px"cellpadding="0">			
					
			<tr>
				<th>编号</th>
				<th>赛事日期</th>
				<th>赛事编号</th>
				<th>联赛</th>
				<th>主队vs客队</th>
 			    <th>半场比分</th>
 			    <th>全场比分</th>
 			    <th>胜</th>
				<th>平</th>
 			    <th>负</th>
 			    <th>状态</th>
 			    <th>开奖结果</th>
 			    <th>比赛资讯</th>
 			    <th>修改</th>
 			    <th>删除</th>
			</tr>	 
			<?php 
				
				while($row=mysqli_fetch_array($result)){
					$d=$row['id'];
					echo "<tr>";
					echo "<td>{$row['id']}</td>";
					echo "<td>{$row['time']}</td>";
					echo "<td>{$row['bhao']}</td>";
					echo "<td>{$row['lians']}</td>";
					echo "<td>{$row['rangq']}</td>";
					echo "<td>{$row['bfen']}</td>";
					echo "<td>{$row['qfen']}</td>";
					echo "<td>{$row['sheng']}</td>";
					echo "<td>{$row['ping']}</td>";
					echo "<td>{$row['fu']}</td>";
					echo "<td>{$row['ztai']}</td>";
					echo "<td>{$row['jieg']}</td>";
					echo "<td>{$row['zixun']}</td>";
					echo "<td><a href='edit.php?id={$row['id']}'>修改</a></td>";
					echo "<td><a href='delete.php?id={$row['id']}'>删除</a></td>";
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