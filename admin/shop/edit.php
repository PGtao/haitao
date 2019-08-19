<?php
include '../../public/common/config.php';
    $id=$_GET['id'];
	$sqlshop="select * from shop where id={$id}";
	$rstshop=mysqli_query($link,$sqlshop);	
	$rowshop=mysqli_fetch_array($rstshop);			
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
		<form action="updata.php" method='post' enctype="multipart/form-data">
			<p>名称:</p>
			<p><input type="text" name='name' value='<?php echo $rowshop['name'] ?>'></p>
			<p>内容</p>
			<p><input type="text" name='conter' value='<?php echo $rowshop['conter'] ?>'></p>		
			<p>比赛</p>
			<p>
			<select name="brand_id">
				<?php
				$sqlclass="select * from class";
				$rstclass=mysqli_query($link,$sqlclass);
				while($rowclass=mysqli_fetch_array($rstclass)){
				echo"<option disabled>{$rowclass['name']}</option>";
				$sqlbrand="select * from brand where class_id={$rowclass['id']}";	
				$rstbrand=mysqli_query($link,$sqlbrand);
				while($rowbrand=mysqli_fetch_array($rstbrand)){
				if($rowbrand['id']==$rowshop['brand_id']){
				echo"<option value='{$rowbrand['id']}'selected>|--{$rowbrand['name']}</option>";	
				}else{
					echo"<option value='{$rowbrand['id']}'>|--{$rowbrand['name']}</option>";	
				}
				
			}
		   }		
					?>
			</select>
			</p>
			<p>原图：</p>
			<p><img src="../public/uploads/<?php echo $rowshop['img']?>"width='100px' height='50px' alt=""></p>			
			<p>图片</p>
			<p><input type="file" name='img' id=""></p>
			<input type="hidden" name="id" value='<?php echo $rowshop['id']?>'/>
			<p><input type="submit" value="修改"></p>
		</form>		
	</div>
	
</body>
</html>