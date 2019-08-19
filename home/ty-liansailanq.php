<?php
	include"tou.php";
	?>
<html>
	<head>
		<title>liansai</title>
 	<link rel="stylesheet" type="text/css" href="public/css/ty-liansai.css" />
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap-theme.min.css"/>
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css"/>
    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>	
     <style type="text/css">
    	button{
    		background-color: #ffffff;
    		border: 1px solid #cccccc;
    	}
    	button:hover{
    		background-color: #999999;
    	}
    </style>
	</head>
	<body>			
		<div class="ty-nav">
			<ul>
				<a href="ty-index.php"><li>首页</li></a>
				<a href="ty-zeren.php"><li>责任彩票</li></a>
				<a href="ty-zixun.php"><li>竞猜咨询</li></a>
				<a href=""><li>比分直播
					<span class="caret"></span>
					<div class="ty-yc">
						<p>
							<a href="ty-zhibozhuq.php">足球比分直播</a>
						</p>
						<p>
							<a href="ty-zhibolanq.php">篮球比分直播</a>
						</p>
					</div>
				</li>
				</a>
				<a href=""><li>联赛资料
					<span class="caret"></span>
					<div class="ty-yc">
						<p>
							<a href="ty-liansaizhq.php">足球联赛资料</a>
						</p>
						<p>
							<a href="ty-liansailanq.php">篮球联赛资料</a>
						</p>
					</div>
				</li>
				</a>
				<a href=""><li>赛果开奖
					<span class="caret"></span>
					<div class="ty-yc">
						<p>
							<a href="ty-saiguozhuq.php">足球赛果开奖</a>
						</p>
						<p>
							<a href="ty-saiguolanq.php">篮球赛果开奖</a>
						</p>
					</div>
				</li>
				</a>
				<a href="ty-luntan.php"><li>论坛 </li></a>
			</ul>
		</div>
		
		<div class="ty-lians">
			<h2>热门赛事</h2>
		</div>	
		
		<div class="ty-lscon">
			<ul>
				<?php
			include '../public/common/config.php';
		$sqlsaishi="select * from saishi where conter='篮球热门赛事' order by 
		 rand() limit 3";
		 $rstsaishi=mysqli_query($link,$sqlsaishi);
	   while($rowsaishi=mysqli_fetch_array($rstsaishi)){
		?>
		<li><img src="../admin/public/uploads/<?php echo $rowsaishi['img']?>" /></li>
		<?php			
		  }
		?>
				
			</ul>
		</div>
		<div style="clear: both;" class="">
			
		</div>
		<div class="ty-lians1">
			<h2>全部赛事</h2>
		</div>	
	       <div class="ty-lsxuanx">
	       	 <div id="wan">
					<div id="btn">
					<div class="bt" sy="0" style="background-color: #E30000;color: #FFFFFF;">全  部</div>
					<div class="bt" sy="1">欧洲赛事</div>
                     <div class="bt" sy="2">美洲赛事</div>
                     <div class="bt" sy="3">亚洲赛事</div>
                     <div class="bt" sy="4">国际赛事</div>                  
					</div>
					<div class="nr" style="display: block;">
				<ul>
						
		
<?php
include '../public/common/config.php';
		$sqlsai="select * from saishi";
		$result=mysqli_query($link,$sqlsai);	
		$total=mysqli_num_rows($result);
        $pageNum=18;
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
			
?>
		<?php
			include '../public/common/config.php';
		$sqlsai="select * from saishi order by id limit $m,$pageNum";
	 $rstsai=mysqli_query($link,$sqlsai);
	   while($rowsai=mysqli_fetch_array($rstsai)){
	   	$d=$rowsai['id'];
		?>
		<li><img src="../admin/public/uploads/<?php echo $rowsai['img']?>" />
		<div class="ty-lsxb">
		<button><?php echo $rowsai['name'] ?></button>	
			</div>
			</li>	
		<?php			
		  }
		?>			
	<div style="width: 30%; margin: 10px auto;">
<span style="0 5px">
	第 <?php echo $page;?> 页/共<?php echo $pageTotal; ?>页;
</span>
<?php
if($page>=2){
	$a=$page-1;
	echo "<a href='ty-liansailanq.php?page=1'>首页</a>";
    echo "<a href='ty-liansailanq.php?page=$a'>上一页</a>";
}
?>

<?php
for($i=1;$i<=$pageTotal;$i++){
?>
<button style="padding: 2px 6px;"><a style="color: #333333;text-decoration: none;" href="ty-liansaizhq.php?page=<?php echo $i;?>"><?php echo $i ?></a></button>
<?php
}
?>
<?php
if($page<$pageTotal){
	$c=$pageTotal;
	$b=$page+1;
	echo "<a href='ty-liansailanq.php?page=$c'>尾页</a>";
    echo "<a href='ty-liansailanq.php?page=$b'>下一页</a>";
}
?>				
			   </ul>
						
						</div>
						<div class="nr">
													
				<ul>			
				<?php
			include '../public/common/config.php';
			$sqlsai="select * from saishi where conter='美洲赛事'";
		 $rstsai=mysqli_query($link,$sqlsai);
	   while($rowsai=mysqli_fetch_array($rstsai)){
		?>
		<li><img src="../admin/public/uploads/<?php echo $rowsai['img']?>" />
		<div class="ty-lsxb">
		<button><?php echo $rowsai['name'] ?></button>	
			</div>
			</li>	
		<?php			
		  }
		?>
		</ul>			
						
						</div>
						<div class="nr">
								<ul>			
				<?php
			include '../public/common/config.php';
			$sqlsai="select * from saishi where conter='欧洲赛事'";
		 $rstsai=mysqli_query($link,$sqlsai);
	   while($rowsai=mysqli_fetch_array($rstsai)){
		?>
		<li><img src="../admin/public/uploads/<?php echo $rowsai['img']?>" />
		<div class="ty-lsxb">
		<button><?php echo $rowsai['name'] ?></button>	
			</div>
			</li>	
		<?php			
		  }
		?>
		</ul>
						
						</div>
						<div class="nr">
					<ul>			
				<?php
			include '../public/common/config.php';
			$sqlsai="select * from saishi where conter='亚洲赛事'";
		 $rstsai=mysqli_query($link,$sqlsai);
	   while($rowsai=mysqli_fetch_array($rstsai)){
		?>
		<li><img src="../admin/public/uploads/<?php echo $rowsai['img']?>" />
		<div class="ty-lsxb">
		<button><?php echo $rowsai['name'] ?></button>	
			</div>
			</li>	
		<?php			
		  }
		?>
		</ul>			
						
						</div>
						<div class="nr">
					<ul>			
				<?php
			include '../public/common/config.php';
			$sqlsai="select * from saishi where conter='洲际赛事'";
		 $rstsai=mysqli_query($link,$sqlsai);
	   while($rowsai=mysqli_fetch_array($rstsai)){
		?>
		<li><img src="../admin/public/uploads/<?php echo $rowsai['img']?>" />
		<div class="ty-lsxb">
		<button><?php echo $rowsai['name'] ?></button>	
			</div>
			</li>	
		<?php			
		  }
		?>
		</ul>								
			</div>
	       </div>
	       
	      </div>  
	      
	      <div style="clear: both;" class="">
	      	
	      </div>
	  
	  
	     
			            	
<script type="text/javascript">
	var bt = document.getElementsByClassName("bt");
			var nr = document.getElementsByClassName("nr");
			/*
			    选中的标题变色，其他标题恢复原色，选中标题的对应选项卡显示，其他选项卡隐藏
			*/
			for(var i = 0; i < bt.length; i++) {
				bt[i].onclick = function() {
					for(var i = 0; i < bt.length; i++) {
						bt[i].style.backgroundColor = "#F2F2F2";
						bt[i].style.color = "#333333";
					}
					this.style.backgroundColor = "#E30000";
					this.style.color = "#ffffff";
					var syh = this.getAttribute("sy");
					for(var i = 0; i < nr.length; i++) {
						nr[i].style.display = "none";
					}
					nr[syh].style.display = "block";
				}
			}
			

</script>
	</body>
</html>
<?php
include"foot.php";
?>
