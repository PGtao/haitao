<?php
include '../../public/common/config.php';
	$sql="select * from saiguo";
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
		<form action="updata.php" method='post' >
			<p>赛事日期</p>
			<p><input type="text" name='time' value='<?php echo $row['time'] ?>'  ></p>
			<p>赛事编号</p>
			<p><input type="text" name='bhao' value='<?php echo $row['bhao'] ?>' ></p>
			<p>联赛</p>
			<p><input type="conter" name='lians' value='<?php echo $row['lians'] ?>' ></p>
			<p>主队vs客队</p>
			<p><input type="text" name='rangq' value='<?php echo $row['rangq'] ?>' ></p>
			<p>半场比分</p>
			<p><input type="text" name='bfen'  value='<?php echo $row['bfen'] ?>' ></p>
			<p>全场比分</p>
			<p><input type="conter" name='qfen' value='<?php echo $row['qfen'] ?>' ></p>
			<p>胜</p>
			<p><input type="text" name='sheng' value='<?php echo $row['sheng'] ?>' ></p>
			<p>平</p>
			<p><input type="text" name='ping' value='<?php echo $row['ping'] ?>' ></p>
			<p>负</p>
			<p><input type="conter" name='fu' value='<?php echo $row['fu'] ?>'  ></p>
			<p>状态</p>
			<p><input type="text" name='ztai' value='<?php echo $row['ztai'] ?>' ></p>
			<p>开奖结果</p>
			<p><input type="text" name='jieg' value='<?php echo $row['jieg'] ?>' ></p>
			<p>比赛资讯</p>
			<input type="text" name="zixun" value='<?php echo $row['zixun'] ?>'>
			<input type="hidden" name="id"  value='<?php echo $row['id'] ?>'>
			<p><input type="submit" value="修改"></p>
		</form>		
	</div>
	
</body>
</html>