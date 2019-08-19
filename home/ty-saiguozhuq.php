  <?php      	
      include "tou.php";
      ?>
<html>
	<head>
		<title>lanqiu</title>
		<title>直播</title>
 	<link rel="stylesheet" type="text/css" href="public/css/ty-saiguo.css" />
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
			<p><span><a href="">竞猜网&raquo;</a></span><span>足球赛果开奖</span></p>
		</div>
		
		 <div style="width: 100%; max-width: 1200px;margin:  0 auto;height: 40px;line-height: 40px;">
  		<p style="color: #FF0000;font-weight: bold;text-indent: 10px;">欧洲比利时甲级甲联赛</p>
  	</div>	
  	
  <div style="max-width: 1200px; margin: 0 auto;" class="table-responsive table table-bordered">	
  <table class="table"> 	
  	<thead>
      <tr class="success">
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
    </thead>
    <tbody>
    	<?php
		include '../public/common/config.php';
         $sql="select * from saiguo where  lians='比甲'";
         $rst=mysqli_query($link,$sql);
         while($row=mysqli_fetch_array($rst)){		
		?>
		<tr class="active">
        <td> <input type="checkbox" name="" id="" value="" /> <?php echo $row['time']?></td>
        <td> <?php echo $row['bhao']?></td>
        <td> <?php echo $row['lians']?></td>
        <td> <?php echo $row['rangq']?></td>
        <td> <?php echo $row['bfen']?></td>
        <td> <?php echo $row['qfen']?></td>
        <td style="color: #FA0000;"> <?php echo $row['sheng']?></td>
        <td style="color: #333333;"> <?php echo $row['ping']?></td>
        <td style="color: #6CB26C;"><?php echo $row['fu']?></td>
        <td style="color: #01CC00;"> <?php echo $row['ztai']?></td>
        <td style="color: #318131;"><?php echo $row['jieg']?></td>
        <td style="color: #4E91EA;"> <a href=""><?php echo $row['zixun']?></a></td>  
        </tr> 						
						<?php
						}
						?>
						
											
        
     	    </tbody>
  </table>
</div>

<div style="width: 100%; max-width: 1200px;margin:  0 auto;height: 40px;line-height: 40px;">
  		<p style="color: #FF0000;font-weight: bold;text-indent: 10px;">欧洲意大利甲级甲联赛</p>
  	</div>	
  	
  <div style="max-width: 1200px; margin: 0 auto;" class="table-responsive table table-bordered">	
  <table class="table"> 	
  	<thead>
      <tr class="success">
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
    </thead>
    <tbody>
    	<?php
		include '../public/common/config.php';
         $sql="select * from saiguo where  lians='意甲'";
         $rst=mysqli_query($link,$sql);
         while($row=mysqli_fetch_array($rst)){		
		?>
		<tr class="active">
        <td> <input type="checkbox" name="" id="" value="" /> <?php echo $row['time']?></td>
        <td> <?php echo $row['bhao']?></td>
        <td> <?php echo $row['lians']?></td>
        <td> <?php echo $row['rangq']?></td>
        <td> <?php echo $row['bfen']?></td>
        <td> <?php echo $row['qfen']?></td>
        <td style="color: #FA0000;"> <?php echo $row['sheng']?></td>
        <td style="color: #333333;"> <?php echo $row['ping']?></td>
        <td style="color: #6CB26C;"><?php echo $row['fu']?></td>
        <td style="color: #01CC00;"> <?php echo $row['ztai']?></td>
        <td style="color: #318131;"><?php echo $row['jieg']?></td>
        <td style="color: #4E91EA;"> <a href=""><?php echo $row['zixun']?></a></td>  
        </tr> 						
						<?php
						}
						?>
						
											
        
     	    </tbody>
  </table>
</div>
<div style="width: 100%; max-width: 1200px;margin:  0 auto;height: 40px;line-height: 40px;">
  		<p style="color: #FF0000;font-weight: bold;text-indent: 10px;">欧洲英国甲级甲联赛</p>
  	</div>	
  	
  <div style="max-width: 1200px; margin: 0 auto;" class="table-responsive table table-bordered">	
  <table class="table"> 	
  	<thead>
      <tr class="success">
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
    </thead>
    <tbody>
    	<?php
		include '../public/common/config.php';
         $sql="select * from saiguo where  lians='英超'";
         $rst=mysqli_query($link,$sql);
         while($row=mysqli_fetch_array($rst)){		
		?>
		<tr class="active">
        <td> <input type="checkbox" name="" id="" value="" /> <?php echo $row['time']?></td>
        <td> <?php echo $row['bhao']?></td>
        <td> <?php echo $row['lians']?></td>
        <td> <?php echo $row['rangq']?></td>
        <td> <?php echo $row['bfen']?></td>
        <td> <?php echo $row['qfen']?></td>
        <td style="color: #FA0000;"> <?php echo $row['sheng']?></td>
        <td style="color: #333333;"> <?php echo $row['ping']?></td>
        <td style="color: #6CB26C;"><?php echo $row['fu']?></td>
        <td style="color: #01CC00;"> <?php echo $row['ztai']?></td>
        <td style="color: #318131;"><?php echo $row['jieg']?></td>
        <td style="color: #4E91EA;"> <a href=""><?php echo $row['zixun']?></a></td>  
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