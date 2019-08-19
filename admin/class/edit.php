<?php
include '../../public/common/config.php';
$id = $_GET['id'];
$sql = "select * from class where id={$id}";
$aa = mysqli_query($link, $sql);
$result = mysqli_fetch_array($aa);
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
			<form action="updata.php" method="post">
			
				<p>
					修改名称:
				</p>
				<p>
					<input type="text" name="name" value='<?php echo $result['name'] ?>'>
				</p>
				<input type="hidden" name="id"  value='<?php echo $result['id'] ?>'>
				<p>
					<input type="submit"  value="修改">
				</p>
			</form>
		</div>
	</body>
</html>