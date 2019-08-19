<?php
	session_start();
	include '../public/common/config.php';
	$sql = "select * from user where isadmin=0";
    $rstuser=mysqli_query($link,$sql);
    @$username=$_SESSION['username'];
	?>
<html>
	<head>
		<meta charset="utf-8"/>
		<title></title>
		<link rel="stylesheet" type="text/css" href="public/css/ty-luntan.css"/>	
		<link rel="stylesheet" type="text/css" href="public/css/bootstrap-theme.min.css"/>
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css"/>
    <script src="public/js/jquery.min.js"></script>
   <script src="public/js/bootstrap.min.js"></script>	
	</head>
	<body>	
			<div class="ty-tou">
			<div class="ty-touup">
				<div style="float: left;">
					<p style="color: 999999;line-height: 40px;">中国体育彩票竞猜游戏官方信息发布平台</p>
				</div>
				<div style="float: right;">
					<ul>
						<li>
							<p>
		
								<a href="register.php">注册&nbsp;|</a>
							</p>
						</li>
						<li>
						<?php
						if($username!=''){
							echo "<li style='width:150px;line-height: 40px; color:#999999;overflow: hidden;text-overflow: ellipsis;white-space: nowrap; '>&nbsp;您好，$username</li>";
						}else{
							echo "<li style='color:#999999;line-height: 40px; '>&nbsp;您好，<a href='login.php'>请登录</a></li>";
						}
					?>
					</li>
					<li>
							<p>		
								<a href="login.php">&nbsp;退出</a>
                            </p> 
					</ul>
				</div>
			</div>
		</div>
		<div style="clear: both;" class="">

		</div>
		<div class="ty-top">
			<div class="ty-topl">
				<img style="margin: 15px 10px" src="public/img/ty-01.jpg" />
			</div>
			<div class="ty-topr">
				<p style="font-size: 14px; color:#999999 ;margin-top: 40px;">竞彩网竞彩网客服热线400-869-5086</p>
				<p style="font-size: 14px; color:#999999 ;">中国体育彩票服务热线95086</p>
			</div>
		</div>
  
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
		<div style="width: 1px; height: 30px;margin: 0;padding: 0;"></div>
						
		<div class="centent">
			<div class="ty-lttaizi">
				<h4>彩民俱乐部</h4>
			</div>
			<div class="ty-ltfenl">
			<ul>
				<li><img style="float: left;" src="public/img/ty-lt01.png"/>
					<div style="float: left;" class="ty-ltwen">
						<h3>双色球</h3>
						<p><span>主题：445</span>&nbsp;<span>贴数：1317</span></p>
					</div>
					
				</li>
				<li><img style="float: left;" src="public/img/ty-lt02.png"/>
					<div style="float: left;" class="ty-ltwen">
						<h3>大乐透</h3>
						<p><span>主题：345</span>&nbsp;<span>贴数：1417</span></p>
					</div>
					
				</li>
				<li><img style="float: left;" src="public/img/ty-lt03.png"/>
					<div style="float: left;" class="ty-ltwen">
						<h3>福彩3D </h3>
						<p><span>主题：245</span>&nbsp;<span>贴数：1017</span></p>
					</div>
					
				</li>
				<li><img style="float: left;" src="public/img/ty-lt04.png"/>
					<div style="float: left;" class="ty-ltwen">
						<h3>排三排五</h3>
						<p><span>主题：524</span>&nbsp;<span>贴数：1837</span></p>
					</div>
					
				</li>
				<li><img style="float: left;" src="public/img/ty-lt05.png"/>
					<div style="float: left;" class="ty-ltwen">
						<h3>七星七乐彩</h3>
						<p><span>主题：554</span>&nbsp;<span>贴数：21024</span></p>
					</div>
					
				</li>
				<li><img style="float: left;" src="public/img/ty-lt06.png"/>
					<div style="float: left;" class="ty-ltwen">
						<h3>11选5</h3>
						<p><span>主题：524</span>&nbsp;<span>贴数：1837</span></p>
					</div>
					
				</li>
				<li><img style="float: left;" src="public/img/ty-lt07.png"/>
					<div style="float: left;" class="ty-ltwen">
						<h3>时时彩 </h3>
						<p><span>主题：624</span>&nbsp;<span>贴数：1347</span></p>
					</div>
					
				</li>
				<li><img style="float: left;" src="public/img/ty-lt08.png"/>
					<div style="float: left;" class="ty-ltwen">
						<h3>胜负彩</h3>
						<p><span>主题：1204</span>&nbsp;<span>贴数：1204</span></p>
					</div>
					
				</li>
				<li><img style="float: left;" src="public/img/ty-lt09.png"/>
					<div style="float: left;" class="ty-ltwen">
						<h3>北京单场</h3>
						<p><span>主题：204</span>&nbsp;<span>贴数：2837</span></p>
					</div>
					
				</li>
				<li><img style="float: left;" src="public/img/ty-lt10.png"/>
					<div style="float: left;" class="ty-ltwen">
						<h3>竞彩足球</h3>
						<p><span>主题：384</span>&nbsp;<span>贴数：1537</span></p>
					</div>
					
				</li>
				<li><img style="float: left;" src="public/img/ty-lt11.png"/>
					<div style="float: left;" class="ty-ltwen">
						<h3>竞彩篮球</h3>
						<p><span>主题：344</span>&nbsp;<span>贴数：1157</span></p>
					</div>
					
				</li>
				<li><img style="float: left;" src="public/img/ty-lt12.png"/>
					<div style="float: left;" class="ty-ltwen">
						<h3>平台大奖情报站</h3>
						<p><span>主题：724</span>&nbsp;<span>贴数：1834</span></p>
					</div>
					
				</li>
				<li><img style="float: left;" src="public/img/ty-lt13.png"/>
					<div style="float: left;" class="ty-ltwen">
						<h3>投诉/意见反馈</h3>
						<p><span>主题：474</span>&nbsp;<span>贴数：2017</span></p>
					</div>
					
				</li>
				<li><img style="float: left;" src="public/img/ty-lt14.png"/>
					<div style="float: left;" class="ty-ltwen">
						<h3>网站公告</h3>
						<p><span>主题：484</span>&nbsp;<span>贴数：2737</span></p>
					</div>
					
				</li>
			</ul>	
			</div>
			<div style="clear: both;" class="">
				
			</div>
			<div class="ty-lttaizi">
				<p><span>今日:7411&nbsp;|&nbsp;</span><span>昨日:9311&nbsp;|&nbsp;</span><span>帖子:29421</span></p>
			</div>
			<ul class="centent-ul">
				<li class="left">
					<div class="left-div">
						<p>
							<span><a href="">全部&nbsp;|&nbsp;</a></span>
						    <span><a href="">热门&nbsp;|&nbsp;</a></span>
							<span><a href="">精华&nbsp;|&nbsp;</a></span>
							<select style="padding: 2px 10px;" name="">
								<option value="0">最后发表</option>
								<option value="1">默认排序</option>
								<option value="2">发帖时间</option>
								<option value="3">回复/查看</option>
								<option value="4">热门评论</option>
							</select>							
						</p>			
					</div>
					<ul class="left-ul">
						<?php 
							include '../public/common/config.php';
							$sql="select * from luntan";
							$result=mysqli_query($link,$sql);
							while($row=mysqli_fetch_array($result)){
//								print_r($row);
							echo"<li class='left-ul-li'>
				
								<img class='left-ul-img' src='../admin/public/uploads/{$row['img']}'/>					
								<p class='left-ul-p1' > {$row['biaoti']} </p>
								<span class='left-ul-span'><button><a href=ty-pinglun.php>评论</a></button></span>																
								<p class='left-ul-p2'> {$row['zhengwen']}</p>															
								</li>";
							};
						?>						
					</ul>				
					
				</li>
				<li class="right">
					<a href="luntan_fabiao.php"><input  type="" name="" id="" value="发布话题" /></a>
					<img width="100%" style="margin-top: 15px;" src="public/img/ty-luntan.png"/>
				</li>
			</ul>
		</div>
		<div style="clear: both;"></div>
		
	</body>
	
</html>