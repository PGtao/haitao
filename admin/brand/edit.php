<?php
include '../../public/common/config.php';
    $id=$_GET['id'];
	$sqlbrand="select * from brand where id={$id}";
	$rstbrand=mysqli_query($link,$sqlbrand);
	$rowbrand=mysqli_fetch_array($rstbrand);
	$sqlclass="select * from class";
	$rstclass=mysqli_query($link,$sqlclass);				
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
			<p>品牌名称:</p>
			<p><input type="text" name='name' value='<?php echo $rowbrand['name'] ?>'></p>
			<p>品牌分类</p>
			<p>
				<select name="class_id">
					<?php
			while($rowclass=mysqli_fetch_array($rstclass)){
				if($rowclass['id']==$rowbrand['class_id']){
					echo"<option selected value='{$rowclass['id']}'>{$rowclass['name']}</option>";
				}else{
					echo"<option value='{$rowclass['id']}'>{$rowclass['name']}</option>";
				}
						
			}					
						?>
				</select>
			</p>
			
			<input type="hidden" name="id" value='<?php echo $rowbrand['id']?>'/>
			
			<p><input type="submit" value="修改"></p>
		</form>		
	</div>
	
</body>
</html>