<?php
include '../../public/common/config.php';
$user_id = $_GET['user_id'];
$sql = "select * from user where user_id={$user_id}";
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
					用户名:
				</p>
				<p>
					<input type="text" name="username" value='<?php echo $result['username'] ?>'>
				</p>
				<p>
					密码:
				</p>
				<p>
					<input type="password" name="password">
				</p>
				<input type="hidden" name="user_id"  value='<?php echo $result['user_id'] ?>'>
				<p>
					<input type="submit"  value="修改">
				</p>
			</form>
		</div>
	</body>
</html>