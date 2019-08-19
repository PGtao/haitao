<?php
include '../public/common/config.php';
$id=$_GET['class_id'];
$sqlclass="select * from class where id={$id}";
$rstclass=mysqli_query($link,$sqlclass);
$rowclass=mysqli_fetch_array($rstclass);
	
//	echo '<pre>';
//	print_r($rowclass);
//	echo '</pre>';				
?>
<html>
	<head>
		<title>分类页面</title>
	</head>
	<link rel="stylesheet" type="text/css" href="public/css/ty-fenlie.css"/>
	<body>
		
		<div class="main">
			<?php
				include "tou.php";
				?>
				<div style="clear: both;" class="">
				
			</div>
				
				<div style="width: 100%;height: 5px;" id=""></div>
				
			<div class="ty-content">
<div class="ty-floor">
	<div class="ty-floor-header">
		<div class="ty-fleft">
		<span><a href="ty-index.php">首页</a>&raquo; <?php echo $rowclass['name']?></span>	
		</div>
			<div class="ty-fright">
			<?php
	$sqlbrand="select * from brand where class_id={$id}";
	$rstbrand=mysqli_query($link,$sqlbrand);
		$firstbrand='';
		$i=0;
	while($rowbrand=mysqli_fetch_array($rstbrand)){
		if($i==0){
		$firstbrand=$rowbrand['id'];	
		}
		$i++;
								
		echo "		
	    <span>
	<a href='class.php?class_id={$id}&brand_id={$rowbrand['id']}'>
		{$rowbrand['name']}</a>
	    </span>";
			}
			
			?>				
		</div>
	</div>
	
	<div class="ty-floor-footer">
<?php
	@$brand_id=$_GET['brand_id']?$_GET['brand_id']:$firstbrand;
	$sqlshop="select * from shop where brand_id={$brand_id}";	
	$rstshop=mysqli_query($link,$sqlshop);
	while($rowshop=mysqli_fetch_array($rstshop)){	
	?>
	<a href="">
				<div class="ty-zxtu">
			<div class="ty-zximg">
				<img src="../admin/public/uploads/thumb_<?php echo $rowshop['img'] ?>"/>
			</div>
			<div class="ty-zxinfo">
				<p class="ty-zxbiaoti"> <a href=""><?php echo $rowshop['conter'] ?></a></p>
			</div>
		</div>	
		
		</a>
	<?php
	}
		?>	
			
	</div>
</div>


			</div>	
			<div style="clear: both;" class="">
				
			</div>
				
				<?php
				include "foot.php";
				?>
		</div>
		
	</body>
</html>
