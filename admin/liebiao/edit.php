<?php
include '../../public/common/config.php';
	$sql="select * from liebiao";
	$rst=mysqli_query($link,$sql);
	$row=mysqli_fetch_array($rst);				
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
		<form action="updata.php" method='post'>
		<p>美国职业篮球联盟</p>
			<p><input type="text" name='time' value='<?php echo $row['time'] ?>'></p>
			<p>第4节</p>
			<p><input type="text" name='jie' value='<?php echo $row['jie'] ?>'></p>
			<p>一节</p>
			<p><input type="conter" name='foof' value='<?php echo $row['foof'] ?>'></p>
			<p>二节</p>
			<p><input type="text" name='foos' value='<?php echo $row['foos'] ?>'></p>
			<p>三节</p>
			<p><input type="text" name='foot' value='<?php echo $row['foot'] ?>'></p>
			<p>四节</p>
			<p><input type="conter" name='foog' value='<?php echo $row['foog'] ?>'></p>
			<p>全场</p>
			<p><input type="text" name='tall' value='<?php echo $row['tall'] ?>'></p>
			<p>总分</p>
			<p><input type="text" name='succ' value='<?php echo $row['succ'] ?>'></p>
			<p>胜负</p>
			<p><input type="conter" name='game' value='<?php echo $row['game'] ?>'></p>
			<p>让分胜负</p>
			<p><input type="text" name='rangf' value='<?php echo $row['rangf'] ?>'></p>
			<p>大小分</p>
			<p><input type="text" name='dax' value='<?php echo $row['dax'] ?>'></p>
			<p>其他</p>
			<p><input type="conter" name='outher' value='<?php echo $row['outher'] ?>'></p>
				<input type="hidden" name="id"  value='<?php echo $row['id'] ?>'>
			<p><input type="submit" value="添加"></p>
		</form>		
	</div>
	
</body>
</html>