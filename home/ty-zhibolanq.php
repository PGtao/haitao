   <?php      	
      include "tou.php";
      ?>
<html>
 	<head>
 		<meta charset="UTF-8">
 		<title>zhuqiu</title>
 	<link rel="stylesheet" type="text/css" href="public/css/ty-zhibo.css" />
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap-theme.min.css"/>
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css"/>
    <script src="public/js/jquery.min.js"></script>
   <script src="public/js/bootstrap.min.js"></script>
 	</head>
 	<body>  
		<div style="clear: both;" class="">

		</div>	
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
		
		<div class="ty-fenl">
			<p><span><a href="">竞猜网</a>&raquo;</span><span>篮球比分直播</span></p>
		</div>
		
		 <div style="width: 100%; max-width: 1200px;margin:  0 auto;height: 40px;line-height: 40px;">
  		<p style="color: #FF0000;font-weight: bold;text-indent: 10px;">正在进行的比赛</p>
  	</div>	
  	
  <div style="max-width: 1200px; margin: 0 auto;" class="table-responsive table table-bordered ">	
  <table class="table"> 	
  	<thead>
      <tr class="active">
        <th>欧洲篮球联赛</th>
        <th>进行中</th>
        <th>一节</th>
        <th>二节</th>
        <th>三节</th>
        <th>四节</th>
        <th>全场</th>
        <th>总分</th>
        <th>胜负</th>
        <th>让分胜负</th>
        <th>大小分</th>
        <th>其他</th>
    </thead>
    <tbody>
    	<?php
		include '../public/common/config.php';
         $sql="select * from liebiao where time='周二312' order by 
		            rand() limit 2";
         $rst=mysqli_query($link,$sql);
         while($row=mysqli_fetch_array($rst)){		
		?>
		<tr class="info">
        <td> <?php echo $row['time']?></td>
        <td> <?php echo $row['jie']?></td>
        <td> <?php echo $row['foof']?></td>
        <td> <?php echo $row['foos']?></td>
        <td> <?php echo $row['foot']?></td>
        <td> <?php echo $row['foog']?></td>
        <td style="color: #FA0000;"> <?php echo $row['tall']?></td>
        <td style="color: #333333;"> <?php echo $row['succ']?></td>
        <td style="color: #6CB26C;"><?php echo $row['game']?></td>
        <td style="color: #01CC00;"> <?php echo $row['rangf']?></td>
        <td style="color: #318131;"><?php echo $row['dax']?></td>
        <td style="color: #4E91EA;"> <a href=""><?php echo $row['outher']?></a></td>  
        </tr> 						
						<?php
						}
						?>
						
											
	 <thead>
      <tr class="active">
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
    </thead>
    
     	    </tbody>
  </table>
</div>
		
		
		 <div style="width: 100%; max-width: 1200px;margin:  0 auto;height: 40px;line-height: 40px;">
  		<p style="color: #FF0000;font-weight: bold;text-indent: 10px;">将要进行的比赛</p>
  	</div>	
  	
  <div style="max-width: 1200px; margin: 0 auto;" class="table-responsive table table-bordered ">	
  <table class="table"> 	
  	<thead>
      <tr class="active">
        <th>欧洲篮球联赛</th>
        <th>未开场</th>
        <th>一节</th>
        <th>二节</th>
        <th>三节</th>
        <th>四节</th>
        <th>全场</th>
        <th>总分</th>
        <th>胜负</th>
        <th>让分胜负</th>
        <th>大小分</th>
        <th>其他</th>
    </thead>
    <tbody>
    	<?php
		include '../public/common/config.php';
         $sql="select * from liebiao where time='周一311' order by 
		            rand() limit 2";
         $rst=mysqli_query($link,$sql);
         while($row=mysqli_fetch_array($rst)){		
		?>
		<tr class="info">
        <td> <?php echo $row['time']?></td>
        <td> <?php echo $row['jie']?></td>
        <td> <?php echo $row['foof']?></td>
        <td> <?php echo $row['foos']?></td>
        <td> <?php echo $row['foot']?></td>
        <td> <?php echo $row['foog']?></td>
        <td style="color: #FA0000;"> <?php echo $row['tall']?></td>
        <td style="color: #333333;"> <?php echo $row['succ']?></td>
        <td style="color: #6CB26C;"><?php echo $row['game']?></td>
        <td style="color: #01CC00;"> <?php echo $row['rangf']?></td>
        <td style="color: #318131;"><?php echo $row['dax']?></td>
        <td style="color: #4E91EA;"> <a href=""><?php echo $row['outher']?></a></td>  
        </tr> 						
						<?php
						}
						?>
						
											
	 <thead>
      <tr class="active">
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
    </thead>
    
    <thead>
      <tr class="active">
        <th>欧洲篮球联赛</th>
        <th>未开场</th>
        <th>一节</th>
        <th>二节</th>
        <th>三节</th>
        <th>四节</th>
        <th>全场</th>
        <th>总分</th>
        <th>胜负</th>
        <th>让分胜负</th>
        <th>大小分</th>
        <th>其他</th>
    </thead>
    <tbody>
    	<?php
		include '../public/common/config.php';
         $sql="select * from liebiao where time='周一321' order by 
		            rand() limit 2";
         $rst=mysqli_query($link,$sql);
         while($row=mysqli_fetch_array($rst)){		
		?>
		<tr class="info">
        <td> <?php echo $row['time']?></td>
        <td> <?php echo $row['jie']?></td>
        <td> <?php echo $row['foof']?></td>
        <td> <?php echo $row['foos']?></td>
        <td> <?php echo $row['foot']?></td>
        <td> <?php echo $row['foog']?></td>
        <td style="color: #FA0000;"> <?php echo $row['tall']?></td>
        <td style="color: #333333;"> <?php echo $row['succ']?></td>
        <td style="color: #6CB26C;"><?php echo $row['game']?></td>
        <td style="color: #01CC00;"> <?php echo $row['rangf']?></td>
        <td style="color: #318131;"><?php echo $row['dax']?></td>
        <td style="color: #4E91EA;"> <a href=""><?php echo $row['outher']?></a></td>  
        </tr> 						
						<?php
						}
						?>
						
											
	 <thead>
      <tr class="active">
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
    </thead>
    
    
    <thead>
      <tr class="active">
        <th>欧洲篮球联赛</th>
        <th>未开场</th>
        <th>一节</th>
        <th>二节</th>
        <th>三节</th>
        <th>四节</th>
        <th>全场</th>
        <th>总分</th>
        <th>胜负</th>
        <th>让分胜负</th>
        <th>大小分</th>
        <th>其他</th>
    </thead>
    <tbody>
    	<?php
		include '../public/common/config.php';
         $sql="select * from liebiao where time='周一331' order by 
		            rand() limit 2";
         $rst=mysqli_query($link,$sql);
         while($row=mysqli_fetch_array($rst)){		
		?>
		<tr class="info">
        <td> <?php echo $row['time']?></td>
        <td> <?php echo $row['jie']?></td>
        <td> <?php echo $row['foof']?></td>
        <td> <?php echo $row['foos']?></td>
        <td> <?php echo $row['foot']?></td>
        <td> <?php echo $row['foog']?></td>
        <td style="color: #FA0000;"> <?php echo $row['tall']?></td>
        <td style="color: #333333;"> <?php echo $row['succ']?></td>
        <td style="color: #6CB26C;"><?php echo $row['game']?></td>
        <td style="color: #01CC00;"> <?php echo $row['rangf']?></td>
        <td style="color: #318131;"><?php echo $row['dax']?></td>
        <td style="color: #4E91EA;"> <a href=""><?php echo $row['outher']?></a></td>  
        </tr> 						
						<?php
						}
						?>
						
											
	 <thead>
      <tr class="active">
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
    </thead>
  	
  	    </tbody>
  </table>
</div>
		
	 <div style="width: 100%; max-width: 1200px;margin:  0 auto;height: 40px;">
  		<p style="color: #FF0000;font-weight: bold;text-indent: 10px; line-height: 40px;">已完成的比赛</p>
  	</div>
  		
<div style="max-width: 1200px; margin: 0 auto;" class="table-responsive table table-bordered ">	
  <table class="table">  	 	
 	
    <thead>      
      <tr class="active">
        <th>美国职业篮球联盟</th>
        <th>完</th>
        <th>一节</th>
        <th>二节</th>
        <th>三节</th>
        <th>四节</th>
        <th>全场</th>
        <th>总分</th>
        <th>胜负</th>
        <th>让分胜负</th>
        <th>大小分</th>
        <th>其他</th>
    </thead>
    <tbody>
    	<?php
		include '../public/common/config.php';
         $sql="select * from liebiao where time='周三303' order by 
		            rand() limit 2";
         $rst=mysqli_query($link,$sql);
         while($row=mysqli_fetch_array($rst)){		
		?>
		<tr class="info">
        <td> <?php echo $row['time']?></td>
        <td> <?php echo $row['jie']?></td>
        <td> <?php echo $row['foof']?></td>
        <td> <?php echo $row['foos']?></td>
        <td> <?php echo $row['foot']?></td>
        <td> <?php echo $row['foog']?></td>
        <td style="color: #FA0000;"> <?php echo $row['tall']?></td>
        <td style="color: #333333;"> <?php echo $row['succ']?></td>
        <td style="color: #6CB26C;"><?php echo $row['game']?></td>
        <td style="color: #01CC00;"> <?php echo $row['rangf']?></td>
        <td style="color: #318131;"><?php echo $row['dax']?></td>
        <td style="color: #4E91EA;"> <a href=""><?php echo $row['outher']?></a></td>  
        </tr> 						
						<?php
						}
						?>
						
	 <thead>
      <tr class="active">
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
    </thead>
						
					
		<thead>
      <tr class="active">
        <th>美国职业篮球联盟</th>
        <th>完</th>
        <th>一节</th>
        <th>二节</th>
        <th>三节</th>
        <th>四节</th>
        <th>全场</th>
        <th>总分</th>
        <th>胜负</th>
        <th>让分胜负</th>
        <th>大小分</th>
        <th>其他</th>
    </thead>
    <tbody>
    	<?php
		include '../public/common/config.php';
        $sql="select * from liebiao where time='周四304' order by 
		            rand() limit 2";
         $rst=mysqli_query($link,$sql);
         while($row=mysqli_fetch_array($rst)){		
		?>
		<tr class="info">
        <td> <?php echo $row['time']?></td>
        <td> <?php echo $row['jie']?></td>
        <td> <?php echo $row['foof']?></td>
        <td> <?php echo $row['foos']?></td>
        <td> <?php echo $row['foot']?></td>
        <td> <?php echo $row['foog']?></td>
        <td style="color: #FA0000;"> <?php echo $row['tall']?></td>
        <td style="color: #333333;"> <?php echo $row['succ']?></td>
        <td style="color: #6CB26C;"><?php echo $row['game']?></td>
        <td style="color: #01CC00;"> <?php echo $row['rangf']?></td>
        <td style="color: #318131;"><?php echo $row['dax']?></td>
        <td style="color: #4E91EA;"> <a href=""><?php echo $row['outher']?></a></td>  
        </tr> 		
						<?php
						}
						?> 
						 <thead>
      <tr class="active">
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
    </thead>
						<thead>
      <tr class="active">
        <th>美国职业篮球联盟</th>
        <th>完</th>
        <th>一节</th>
        <th>二节</th>
        <th>三节</th>
        <th>四节</th>
        <th>全场</th>
        <th>总分</th>
        <th>胜负</th>
        <th>让分胜负</th>
        <th>大小分</th>
        <th>其他</th>
    </thead>
    <tbody>
    	<?php
		include '../public/common/config.php';
        $sql="select * from liebiao where time='周五305' order by 
		            rand() limit 2";
         $rst=mysqli_query($link,$sql);
         while($row=mysqli_fetch_array($rst)){		
		?>
		<tr class="info">
        <td> <?php echo $row['time']?></td>
        <td> <?php echo $row['jie']?></td>
        <td> <?php echo $row['foof']?></td>
        <td> <?php echo $row['foos']?></td>
        <td> <?php echo $row['foot']?></td>
        <td> <?php echo $row['foog']?></td>
        <td style="color: #FA0000;"> <?php echo $row['tall']?></td>
        <td style="color: #333333;"> <?php echo $row['succ']?></td>
        <td style="color: #6CB26C;"><?php echo $row['game']?></td>
        <td style="color: #01CC00;"> <?php echo $row['rangf']?></td>
        <td style="color: #318131;"><?php echo $row['dax']?></td>
        <td style="color: #4E91EA;"> <a href=""><?php echo $row['outher']?></a></td>  
        </tr> 		
						<?php
						}
						?>        
						
						 <thead>
      <tr class="active">
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
    </thead>
						<thead>
      <tr class="active">
        <th>美国职业篮球联盟</th>
        <th>完</th>
        <th>一节</th>
        <th>二节</th>
        <th>三节</th>
        <th>四节</th>
        <th>全场</th>
        <th>总分</th>
        <th>胜负</th>
        <th>让分胜负</th>
        <th>大小分</th>
        <th>其他</th>
    </thead>
    <tbody>
    	<?php
		include '../public/common/config.php';
        $sql="select * from liebiao where time='周六306' order by 
		            rand() limit 2";
         $rst=mysqli_query($link,$sql);
         while($row=mysqli_fetch_array($rst)){		
		?>
		<tr class="info">
        <td> <?php echo $row['time']?></td>
        <td> <?php echo $row['jie']?></td>
        <td> <?php echo $row['foof']?></td>
        <td> <?php echo $row['foos']?></td>
        <td> <?php echo $row['foot']?></td>
        <td> <?php echo $row['foog']?></td>
        <td style="color: #FA0000;"> <?php echo $row['tall']?></td>
        <td style="color: #333333;"> <?php echo $row['succ']?></td>
        <td style="color: #6CB26C;"><?php echo $row['game']?></td>
        <td style="color: #01CC00;"> <?php echo $row['rangf']?></td>
        <td style="color: #318131;"><?php echo $row['dax']?></td>
        <td style="color: #4E91EA;"> <a href=""><?php echo $row['outher']?></a></td>  
        </tr> 		
						<?php
						}
						?>        
						 <thead>
      <tr class="active">
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
    </thead>
						
						<thead>
      <tr class="active">
        <th>美国职业篮球联盟</th>
        <th>完</th>
        <th>一节</th>
        <th>二节</th>
        <th>三节</th>
        <th>四节</th>
        <th>全场</th>
        <th>总分</th>
        <th>胜负</th>
        <th>让分胜负</th>
        <th>大小分</th>
        <th>其他</th>
    </thead>
    <tbody>
    	<?php
		include '../public/common/config.php';
        $sql="select * from liebiao where time='周天307' order by 
		            rand() limit 2";
         $rst=mysqli_query($link,$sql);
         while($row=mysqli_fetch_array($rst)){		
		?>
		<tr class="info">
        <td> <?php echo $row['time']?></td>
        <td> <?php echo $row['jie']?></td>
        <td> <?php echo $row['foof']?></td>
        <td> <?php echo $row['foos']?></td>
        <td> <?php echo $row['foot']?></td>
        <td> <?php echo $row['foog']?></td>
        <td style="color: #FA0000;"> <?php echo $row['tall']?></td>
        <td style="color: #333333;"> <?php echo $row['succ']?></td>
        <td style="color: #6CB26C;"><?php echo $row['game']?></td>
        <td style="color: #01CC00;"> <?php echo $row['rangf']?></td>
        <td style="color: #318131;"><?php echo $row['dax']?></td>
        <td style="color: #4E91EA;"> <a href=""><?php echo $row['outher']?></a></td>  
        </tr> 		
						<?php
						}
						?>               
    </tbody>
  </table>
</div>
		
 	</body>
 </html>
		 <?php
 include "foot.php";
?>