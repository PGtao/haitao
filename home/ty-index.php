<?php
	session_start();
	include '../public/common/config.php';
	$sql = "select * from user where isadmin=0";
    $rstuser=mysqli_query($link,$sql);
    @$username=$_SESSION['username'];
	?>

<!DOCTYPE html>

<html>

	<head>
		<meta charset="UTF-8">
		<title>体育竞猜</title>
	<link rel="stylesheet" type="text/css" href="public/css/index.css" />
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

		<div class="ty-luobo">
			<div class="ty-lbl">
				<h3 style="margin: 10px;"><img src="public/img/ty-lb01.png"/>&nbsp;<a href="">竞彩足球</a></h3>
				<ul>
					<li>
						<a href="">胜平负</a>
					</li>
					<li>
						<a href="">让球胜平负</a>
					</li>
					<li>
						<a href="">比分总进球</a>
					</li>
					<li>
						<a href="">半全场</a>
					</li>
					<li>
						<a href="">混合过关</a>
					</li>
				</ul>
				<h3 style="margin: 10px;"><img src="public/img/ty-lb02.png"/>&nbsp;<a href="">竞彩篮球</a></h3>
				<ul>
					<li>
						<a href="">胜负</a>
					</li>
					<li>
						<a href="">让分胜负</a>
					</li>
					<li>
						<a href="">大小分</a>
					</li>
					<li>
						<a href="">胜分差</a>
					</li>
					<li>
						<a href="">混合过关</a>
					</li>
				</ul>
				<h3 style="margin: 10px;"><img src="public/img/ty-lb03.png"/>&nbsp;<a href="">传统足彩</a></h3>
				<ul>
					<li>
						<a href="">14场胜负</a>
					</li>
					<li>
						<a href="">任选9场</a>
					</li>
					<li>
						<a href="">6场半全场</a>
					</li>
					<li>
						<a href="">4场进球</a>
					</li>
					<li>
						<a href="">混合过关</a>
					</li>
				</ul>
				<h3 style="margin: 10px;"><img src="public/img/ty-lb05.png"/>&nbsp;<a href="">乐透数字</a></h3>
				<ul>
					<li>
						<a href="">最新开奖</a>
					</li>
					<li>
						<a href="">乐透走势图</a>
					</li>
					<li>
						<a href="">乐透咨询</a>
					</li>
					<li>
						<a href="">游戏介绍</a>
					</li>
					<li>
						<a href="">混合过关</a>
					</li>
				</ul>
				<h3 style="margin: 10px;"><img src="public/img/ty-lb04.png"/>&nbsp;<a href="">特色栏目</a></h3>
				<ul>
					<li>
						<a href="">今日寻胆</a>
					</li>
					<li>
						<a href="">竞猜独家</a>
					</li>
					<li>
						<a href="">支持比例</a>
					</li>
					<li>
						<a href="">开奖汇总</a>
					</li>
					<li>
						<a href="">竞猜图集</a>
					</li>
				</ul>
			</div>
			<div class="ty-lbc">
				<div id="myCarousel" class="carousel slide">
					<!-- 轮播（Carousel）指标 -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
					</ol>
					<!-- 轮播（Carousel）项目 -->
					<div class="carousel-inner ty-tu">
						<div class="item active ">
							<img src="public/img/ty-lb06.jpg" alt="First slide">
						</div>
						<div class="item">
							<img src="public/img/ty-lb07.png" />
						</div>
						<div class="item">
							<img src="public/img/ty-lb08.png" />
						</div>
						<div class="item">
							<img src="public/img/ty-lb09.png" />
						</div>
					</div>

				</div>

				<div id="box">
					<ul>
						<li class="active">足球焦点赛事</li>
						<li>篮球焦点赛事</li>
					</ul>
					<div id="content">
						<div style="display: block;">
							<p><span>周二301 美职篮 2018-12-12 09:00:00 开赛</span><span style="float: right;"><a style="font-size: 14px;" href="">[析讯]</a></span></p>
							<span> 
                	<p style="float: left;"><button style="width: 210px;  height:100px; background-color: #FFFFFF;border: 1px solid #999999;">
                		<span style="float: left;"><img src="public/img/ty-lb12.png"/></span>
							<span style="float: right;margin: 20px 10px;"><p ><a class="ty-yanse" href="">艾因</a><p style="font-size: 14px;color: #333333;">胜 &nbsp;1.30<p></p></span>
							</button>
							</p>
							</span>
							<span>
          		 		<p style="float: left;margin: 0 15px;">
          		 		<button  style="width: 120px;height:100px; background-color: #FFFFFF;border: 1px solid #999999;">
          		 		<span><p><a class="ty-yanse" href="">平局</a><p style="font-size: 14px;color: #333333;">胜 &nbsp;4.80<p></p></span>
							</button>
							</p>
							</span>
							<span> 
                	<p style="float: left;"><button style="width: 210px;  height:100px; background-color: #FFFFFF;border: 1px solid #999999;">
                		<span style="float: left;"><img src="public/img/ty-lb13.png"/></span>
							<span style="float: right;margin: 20px 10px;"><p><a class="ty-yanse" href="">惠灵顿FC</a><p style="font-size: 14px;color: #333333;">胜 &nbsp;2.40<p></p></span>
							</button>
							</p>
							</span>
							<p><span><a class="ty-yanse1" href="">周三001：艾因战绩彪炳 惠灵顿经验少</a></span><span style="float: right;"><a style="font-size: 14px;" href=""><button style="width: 80px;height: 30px;border-radius: 5px;border: 0; background-color: #4E91EA;color: #FFFFFF;">计算奖金</button></a></span></p>

							<p style="margin: 10px 0;"><span>周二301 美职篮 2018-12-12 09:00:00 开赛</span><span style="float: right;"><a style="font-size: 14px;" href="">[析讯]</a></span></p>
							<span> 
                	<p style="float: left;"><button style="width: 210px;  height:100px; background-color: #FFFFFF;border: 1px solid #999999;">
                		<span style="float: left;"><img src="public/img/ty-lb10.png"/></span>
							<span style="float: right;margin: 20px 10px;"><p ><a class="ty-yanse" href="">比尔森</a><p style="font-size: 14px;color: #333333;">胜 &nbsp;1.30<p></p></span>
							</button>
							</p>
							</span>
							<span>
          		 		<p style="float: left;margin: 0 15px;">
          		 		<button  style="width: 120px;height:100px; background-color: #FFFFFF;border: 1px solid #999999;">
          		 		<span><p><a class="ty-yanse" href="">平局</a><p style="font-size: 14px;color: #333333;">胜 &nbsp;4.80<p></p></span>
							</button>
							</p>
							</span>
							<span> 
                	<p style="float: left;"><button style="width: 210px;  height:100px; background-color: #FFFFFF;border: 1px solid #999999;">
                		<span style="float: left;"><img src="public/img/ty-lb12.png"/></span>
							<span style="float: right;margin: 20px 10px;"><p><a class="ty-yanse" href="">罗马</a><p style="font-size: 14px;color: #333333;">胜 &nbsp;1.40<p></p></span>
							</button>
							</p>
							</span>
							<p><span><a class="ty-yanse1" href="">周三001：艾因战绩彪炳 惠灵顿经验少</a></span><span style="float: right;"><a style="font-size: 14px;" href=""><button style="width: 80px;height: 30px;border-radius: 5px;border: 0; background-color: #4E91EA;color: #FFFFFF;">计算奖金</button></a></span></p>

						</div>

						<div>
							<p><span>周二301 美职篮 2018-12-12 09:00:00 开赛</span><span style="float: right;"><a style="font-size: 14px;" href="">[析讯]</a></span></p>
							<span> 
                	<p style="float: left;"><button style="width: 210px;  height:100px; background-color: #FFFFFF;border: 1px solid #999999;">
                		<span style="float: left;"><img src="public/img/ty-lb14.png"/></span>
							<span style="float: right;margin: 20px 10px;"><p ><a class="ty-yanse" href="">开拓者</a><p style="font-size: 14px;color: #333333;">胜 &nbsp;3.40<p></p></span>
							</button>
							</p>
							</span>
							<span>
          		 		<p style="float: left;margin: 0 15px;">
          		 		<button  style="width: 120px;height:100px; background-color: #FFFFFF;border: 1px solid #999999;">
          		 		<span><p><a class="ty-yanse" href="">平局</a><p style="font-size: 14px;color: #333333;">胜 &nbsp;4.80<p></p></span>
							</button>
							</p>
							</span>
							<span> 
                	<p style="float: left;"><button style="width: 210px;  height:100px; background-color: #FFFFFF;border: 1px solid #999999;">
                		<span style="float: left;"><img src="public/img/ty-lb15.png"/></span>
							<span style="float: right;margin: 20px 10px;"><p><a class="ty-yanse" href="">火箭</a><p style="font-size: 14px;color: #333333;">胜 &nbsp;2.40<p></p></span>
							</button>
							</p>
							</span>
							<p><span><a class="ty-yanse1" href="">马刺谋夺三连胜 火箭力争主场反弹</a></span><span style="float: right;"><a style="font-size: 14px;" href=""><button style="width: 80px;height: 30px;border-radius: 5px;border: 0; background-color: #4E91EA;color: #FFFFFF;">计算奖金</button></a></span></p>

							<p style="margin: 10px 0;"><span>周二302 美职篮 2018-12-12 09:30:00 开赛</span><span style="float: right;"><a style="font-size: 14px;" href="">[析讯]</a></span></p>
							<span> 
                	<p style="float: left;"><button style="width: 210px;  height:100px; background-color: #FFFFFF;border: 1px solid #999999;">
                		<span style="float: left;"><img src="public/img/ty-lb16.png"/></span>
							<span style="float: right;margin: 20px 10px;"><p ><a class="ty-yanse" href="">太阳</a><p style="font-size: 14px;color: #333333;">胜 &nbsp;4.50<p></p></span>
							</button>
							</p>
							</span>
							<span>
          		 		<p style="float: left;margin: 0 15px;">
          		 		<button  style="width: 120px;height:100px; background-color: #FFFFFF;border: 1px solid #999999;">
          		 		<span><p><a class="ty-yanse" href="">平局</a><p style="font-size: 14px;color: #333333;">胜 &nbsp;4.80<p></p></span>
							</button>
							</p>
							</span>
							<span> 
                	<p style="float: left;"><button style="width: 210px;  height:100px; background-color: #FFFFFF;border: 1px solid #999999;">
                		<span style="float: left;"><img src="public/img/ty-lb17.png"/></span>
							<span style="float: right;margin: 20px 10px;"><p><a class="ty-yanse" href="">马刺</a><p style="font-size: 14px;color: #333333;">胜 &nbsp;2.40<p></p></span>
							</button>
							</p>
							</span>
							<p><span><a class="ty-yanse1" href="">周二302：进攻状态回暖 马刺主战太阳</a></span><span style="float: right;"><a style="font-size: 14px;" href=""><button style="width: 80px;height: 30px;border-radius: 5px;border: 0; background-color: #4E91EA;color: #FFFFFF;">计算奖金</button></a></span></p>

						</div>
					</div>

				</div>

			</div>
			<div class="ty-lbr">
				<div id="wai">
					<div id="btl">
						<div class="bt" sy="0" style="background-color: #E30000;color: #FFFFFF;">国内</div>
						<div class="bt" sy="1" style="color: #333333;">国际</div>
					</div>
					<div class="nr" style="display: block;">
						<dl>
							<dt style="width: 100%;height: 40px;line-height: 40px;margin: 0 10px;border-bottom: 1px solid #E5E5E5;"><a  href="">奖报</a></dt>
							<dd>
								<a href="">茂名购彩者复式包围 喜领足彩大奖116万</a>
							</dd>
							<dd>
								<a href="">上杭彩友钟情篮彩 喜获“2串1”10.7万</a>
							</dd>
							<dd>
								<a href="">龙岩竞彩新秀喜中4串1超值奖金10710元</a>
							</dd>
							<dd>
								<a href="">1000倍投 福鼎彩友收获竞彩单固6900元</a>
							</dd>
							<dd>
								<a href="">哪来的回报？！感恩节收到230万大红包</a>
							</dd>
							<dd>
								<a href="">瞌睡遇到枕头 正想买房时38万从天而降</a>
							</dd>
							<dd>
								<a href="">晋江彩友自由过关揽竞彩奖金14040元</a>
							</dd>
							<dd>
								<a href="">欧罗巴资格赛让福建彩友揽2注350万头奖</a>
							</dd>
						</dl>
						<dl>
							<dt style="width: 100%;height: 40px;line-height: 40px;margin: 0 10px;border-bottom: 1px solid #E5E5E5;"><a  href="">最新关注</a></dt>
							<dd>
								<a href="">(1) 竞彩名次2019亚洲杯冠军、冠亚军游戏现已开售，请广大购彩者关注！ 发布于: 2018/12/12 9:01</a>
							</dd>
							<dd>
								<a href="">(2) 周三003 皇家马德里VS莫斯科中央陆军比赛时间：2018-12-13 01:55</a>
							</dd>
							<dd>
								<a href="">(3) 周三004 阿贾克斯VS拜仁慕尼黑比赛时间：2018-12-13 04:00</a>
							</dd>
							<dd>
								<a href="">(3) 周三007 巴伦西亚VS曼彻斯特联比赛时间：2018-12-13 04:00</a>
							</dd>
						</dl>
					</div>
					<div class="nr">
						<dl>
							<dt style="width: 100%;height: 40px;line-height: 40px;margin: 0 10px;border-bottom: 1px solid #E5E5E5;"><a  href="">公告</a></dt>
							<dd>
								<a href="">竞彩一周销量公告(11月03日-12月09日)</a>
							</dd>
							<dd>
								<a href="">竞彩一周销量公告(11月26日-12月02日)</a>
							</dd>
							<dd>
								<a href="">竞彩一周销量公告(11月19日-11月25日)</a>
							</dd>
							<dd>
								<a href="">竞彩一周销量公告(11月12日-11月18日)</a>
							</dd>
						</dl>
						<dl>
							<dt style="width: 100%;height: 40px;line-height: 40px;margin: 0 10px;border-bottom: 1px solid #E5E5E5;"><a  href="">联赛资料</a></dt>

							<dd style="width: 70px; height: 10px;float: left; ">
								<p><img style="margin: 5px 10px;" src="public/img/ty-lb18.jpg" /></p>
								<p style="text-align: center;">
									<a href="">英超</a>
								</p>
							</dd>
							<dd style="width: 70px; height: 100px;float: left;">
								<p><img style="margin: 5px 10px;" src="public/img/ty-lb19.jpg" /></p>
								<p style="text-align: center;">
									<a href="">西甲</a>
								</p>
							</dd>
							<dd style="width: 70px; height: 100px;float: left;">
								<p><img style="margin: 5px 10px;" src="public/img/ty-lb20.jpg" /></p>
								<p style="text-align: center;">
									<a href="">意甲</a>
								</p>
							</dd>
							<dd style="width: 70px; height: 10px;float: left; ">
								<p><img style="margin: 5px 10px;" src="public/img/ty-lb21.jpg" /></p>
								<p style="text-align: center;">
									<a href="">德甲</a>
								</p>
							</dd>
							<dd style="width: 70px; height: 100px;float: left;">
								<p><img style="margin: 5px 10px;" src="public/img/ty-lb22.jpg" /></p>
								<p style="text-align: center;">
									<a href="">法甲</a>
								</p>
							</dd>
							<dd style="width: 70px; height: 100px;float: left;">
								<p><img style="margin: 5px 10px;" src="public/img/ty-lb23.jpg" /></p>
								<p style="text-align: center;">
									<a href="">葡超</a>
								</p>
							</dd>
							<dd style="width: 70px; height: 10px;float: left; ">
								<p><img style="margin: 5px 10px;" src="public/img/ty-lb24.jpg" /></p>
								<p style="text-align: center;">
									<a href="">瑞超</a>
								</p>
							</dd>
							<dd style="width: 70px; height: 100px;float: left;">
								<p><img style="margin: 5px 10px;" src="public/img/ty-lb25.jpg" /></p>
								<p style="text-align: center;">
									<a href="">澳超</a>
								</p>
							</dd>
							<dd style="width: 70px; height: 100px;float: left;">
								<p><img style="margin: 5px 10px;" src="public/img/ty-lb26.jpg" /></p>
								<p style="text-align: center;">
									<a href="">日职</a>
								</p>
							</dd>
						</dl>
					</div>
				</div>
			</div>
		</div>

		<div class="ty-conter">
			<div class="ty-cl">
				<h3 style="width: 100%;height: 50px;line-height: 50px;margin: 0 20px;"><a style="color: #333333;font-weight: bold;" href="">竞彩销售时间</a></h3>
				<table class="table table-bordered table table-hover table-condensed">
					<thead>
						<tr>
							<th style="width: 25%;text-align: center;color: #333333;">时间</th>
							<th style="width: 25%;text-align: center;color: #333333;">地点</th>
							<th style="width: 25%;text-align: center;color: #333333;">球队</th>
							<th style="width: 25%;text-align: center;color: #333333;">比赛名称</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td style="width: 25%;text-align: center;height: 60px;">2016.06.10</td>
							<td style="width: 25%;text-align: center;height: 60px;">费城(Philadelphia)</td>
							<td style="width: 25%;text-align: center;height: 60px;">克里夫兰骑士(Cleveland Cavaliers)</td>
							<td style="width: 25%;text-align: center;height: 60px;">美职篮赛季期间春季十六进八争霸赛</td>
						</tr>
						<tr>
							<td style="width: 25%;text-align: center;height: 60px;">2016.06.10</td>
							<td style="width: 25%;text-align: center;height: 60px;">洛杉矶(Los Angeles)</td>
							<td style="width: 25%;text-align: center;height: 60px;">休斯敦火箭(Houston Rockets)</td>
							<td style="width: 25%;text-align: center;height: 60px;">美职篮赛季期间春季八进四争霸赛</td>
						</tr>
						<tr>
							<td style="width: 25%;text-align: center;height: 60px;">2016.06.10</td>
							<td style="width: 25%;text-align: center;height: 60px;">明尼苏达(Minnesota)</td>
							<td style="width: 25%;text-align: center;height: 60px;">芝加哥公牛(Chicago Bulls)</td>
							<td style="width: 25%;text-align: center;height: 60px;">美职篮赛季期间春季赛半决赛争霸赛</td>
						</tr>
						<tr>
							<td style="width: 25%;text-align: center;height: 60px;">2016.06.10</td>
							<td style="width: 25%;text-align: center;height: 60px;">洛杉矶(Los Angeles)</td>
							<td style="width: 25%;text-align: center;height: 60px;">洛杉矶湖人(L.A. Lakers)</td>
							<td style="width: 25%;text-align: center;height: 60px;">美职篮赛季期间春季决赛争霸赛</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="ty-cr">
				<h3 style="width: 100%;height: 50px;line-height: 50px;margin: 0 20px;"><a style="color: #333333;font-weight: bold;" href="">竞彩方向指南</a></h3>
				<div class="panel-group" id="accordion">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 style="text-align: center;color: #333333;" class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" 
				   href="#collapseOne">
					竞彩的奥秘-今日快报
				</a>
			</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in">
							<div style="text-align: center;" class="panel-body ty-wen">
								<p>
									<a href="">山西体彩召开第十二次中心组理论学习会</a>
								</p>
								<p>
									<a href="">贵州体彩公益巡演在凯里、兴义开场</a>
								</p>
								<p>
									<a href="">传播公益传递快乐 湖南常德体彩走进社</a>
								</p>
								<p>
									<a href="">网点建设成效显著 南康区体彩网点新面</a>
								</p>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 style="text-align: center;color: #333333;" class="panel-title">
				<a  data-toggle="collapse" data-parent="#accordion" 
				   href="#collapseTwo">
				竞彩的奥秘-全民体彩
				</a>
			</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse">
							<div class="panel-body ty-wen">
								<p>
									<a href="">2018年湖南“公益体彩 快乐操场”为爱</a>
								</p>
								<p>
									<a href="">体彩公益金支持广州大学城造市区运动基</a>
								</p>
								<p>
									<a href="">老携幼助脱贫 体彩帮扶弱势群体</a>
								</p>
								<p>
									<a href="">从阳光开奖到信息发布 体彩公信源于信</a>
								</p>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 style="text-align: center;color: #333333;" class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" 
				   href="#collapseThree">
					竞彩的奥秘-国际技巧
				</a>
			</h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse">
							<div class="panel-body ty-wen">
								<p>
									<a href="">巴西甲快速入门：激情桑巴的内战</a>
								</p>
								<p>
									<a href="">竞彩名词——多样的过关方式</a>
								</p>
								<p>
									<a href="">美职联投注窍门：三条主场龙 大球概率高</a>
								</p>
								<p>
									<a href="">你知道吗？ 鸡年购彩应知道的5个关键点</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

		<div class="ty-guend">
			<div class="ty-bunner">
				<a href=""><img style="width: 100%;" src="public/img/ty-bunner.png" /></a>
			</div>
			<div class="ty-gl1">
				<h3 style="width: 100%;height: 40px;line-height: 40px;font-size: 20px;border-bottom: 1px solid #E5E5E5; margin: 0 20px;"><a style="color: #333333;" href="">竞彩视频</a></h3>
				<li>
					<a href=""><img style="width: 90%;" src="public/img/ty-g01.jpg" /></a>
				</li>
				<li>
					<a href=""><img style="width: 90%;" src="public/img/ty-g02.png" /></a>
				</li>
			</div>
			<div class="ty-gl2">
				<h3 style="width: 100%;height: 40px;line-height: 40px;font-size: 20px;border-bottom: 1px solid #E5E5E5; margin: 0 20px;"><a style="color: #333333;" href="">省市之窗</a></h3>
				<p>山西体彩举办119消防月安全知识培训</p>
				<p>菏泽观摩团实地“探秘”体彩大乐透开奖</p>
				<p>庆贺销售破亿 监利县举办体彩运动会</p>
				<p>湖南体彩“赢在社区”活动圆满收官</p>
				<p>“体彩杯”聊城市中小学生武术比赛开赛</p>
				<p>临沂观摩团”零距离见证体彩阳光开奖</p>
				<p>山西体彩召开第十次中心组理论学习会</p>
				<p>贵州体彩公益巡演在凯里、兴义开场</p>
			</div>
			<div class="ty-gl2">
				<h3 style="width: 100%;height: 40px;line-height: 40px;font-size: 20px;border-bottom: 1px solid #E5E5E5; margin: 0 20px;"><a style="color: #333333;" href="">公益体彩</a></h3>
				<p>2018年湖南“公益体彩 快乐操场”为爱</p>
				<p>体彩公益金支持广州大学城造市区运动基</p>
				<p>老携幼助脱贫 体彩帮扶弱势群体</p>
				<p>从阳光开奖到信息发布 体彩公信源于信</p>
				<p>佛山体彩扶贫慈善活动走进四川凉山</p>
				<p>脱贫攻坚 公益金修筑百姓致富路</p>
				<p>全国法制宣传日 山西体彩提升公益影响</p>
				<p>“体彩杯”青岛市青少年网球精英赛结束</p>
			</div>
			<div class="ty-gl2">
				<h3 style="width: 100%;height: 40px;line-height: 40px;font-size: 20px;border-bottom: 1px solid #E5E5E5; margin: 0 20px;"><a style="color: #333333;" href="">帮助与技巧</a></h3>
				<p>巴西甲快速入门：激情桑巴的内战</p>
				<p>竞彩名词——奖金计算</p>
				<p>竞彩名词——多样的过关方式</p>
				<p>世界杯该你上场——淘汰赛技巧大起底</p>
				<p>美职联投注窍门：三条龙 大球概率高</p>
				<p>没了竞彩怎么玩？巧玩转小联赛</p>
				<p>购买彩票前 你需要知道这几条忠告</p>
				<p>小串中大奖 彩友揽竞彩31万奖金</p>
			</div>
		</div>
		
			<div class="ty-wei">
			<!-- footer -->
<div class="wave-box">
     <div style="margin-top: 50px;" class="">
     	
     </div>
	<div class="marquee-box marquee-up" id="marquee-box">
		<div class="marquee">
			<div class="wave-list-box" id="wave-list-box1">
				<ul>
					<li><img height="60" alt="波浪" src="public/img/wave_02.png"></li>
				</ul>
			</div>
			<div class="wave-list-box" id="wave-list-box2">
				<ul>
					<li><img height="60" alt="波浪" src="public/img/wave_02.png"></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="marquee-box" id="marquee-box3">
		<div class="marquee">
			<div class="wave-list-box" id="wave-list-box4">
				<ul>
					<li><img height="60" alt="波浪" src="public/img/wave_01.png"></li>
				</ul>
			</div>
			<div class="wave-list-box" id="wave-list-box5">
				<ul>
					<li><img height="60" alt="波浪" src="public/img/wave_01.png"></li>
				</ul>
			</div>
		</div>
	</div>

</div>
<div  class="footer">
	<div  class="auto clearfix">

		<!-- footer主要-->
		<div class="five-superiority">
			<ul class="five-superiority-list clearfix">
				<li class="compensate_ico">
					<a href="#compensate">
						<span class="superiority-icon"></span>
						<span>100倍故障赔偿</span>
					</a>
				</li>
				<li class="retreat_ico">
					<a href="#refund">
						<span class="superiority-icon"></span>
						<span>7天无理由退款</span>
					</a>
				</li>
				<li class="technology_ico">
					<a class="superiority-text" href="#afterService">
						<span class="superiority-icon"></span>
						<span>7x24小时技术支持</span>
					</a>
				</li>
				<li class="prepare_ico">
					<a href="#ico">
						<span class="superiority-icon"></span>
						<span>0元快速备案</span>
					</a>
				</li>
				<li class="service_ico">
					<a href="#secret">
						<span class="superiority-icon"></span>
						<span>1V1专席秘书</span>
					</a>
				</li>
			</ul>
		</div>

		<div class="footer-floor1">
			<div class="footer-list">
				<ul style="text-align: center;">
					<li  class="flist-title">产品与服务</li>
					<li><a href="#"><strong>产品服务概念</strong></a></li>
					<li><a href="#"><strong>产品服务过程</strong></a></li>
					<li><a href="#"><strong>产品服务内容</strong></a></li>
					<li><a href="#"><strong>产品服务特点</strong></a></li>
					<li><a href="#"><strong>产品服务策略</strong></a></li>
				</ul>
				<ul style="text-align: center;">
					<li class="flist-title">解决与方案</li>
					<li><a href="#">对象解决方案</a></li>
					<li><a href="#">生成解决方案</a></li>
					<li><a href="#">执行解决方案</a></li>
					<li><a href="#">总结解决方案</a></li>
					<li><a href="#">实例解决方案</a></li>
				</ul>
				<ul style="text-align: center;">
					<li class="flist-title">技术与支持</li>
					<li><a href="#" target="user/">工单系统</a></li>
					<!--<li><a href="http://icp.niaoyun.com/">备案中心</a></li>-->
					<li><a href="#">意见反馈</a></li>
					<li><a href="">会员服务</a></li>
					<li><a href="#">IDC公司</a></li>
					<li><a href="#">帮助中心</a></li>
				</ul>
				<ul style="text-align: center;" >
					<li class="flist-title">关于某公司</li>
					<li><a href="#">公司简介</a></li>
					<li><a href="#">新闻动态</a></li>
					<li><a href="#">加入我们</a></li>
					<li><a href="#">服务协议</a></li>
					<li><a href="#">友情链接</a></li>
				</ul>
				<div class="clear-float"></div>
			</div>
			<div class="footer-right">
				<div class="telephone" title="服务热线">
					<span></span>
					<div class="tel-number">6789-4321</div>
				</div>
				<div class="official-plat">
					<p class="weixin" style="background-image: "><span id="wx-corner"></span></p>

					<p class="weibo" style="background-image: "><span id="wb-corner"></span></p>
					<ul>
						<li><a href="#a_null"><span class="weixin-logo"></span>某公司官方微信</a></li>
						<li title="点击打开官方微博"><a href="#" target="_blank"><span class="weibo-logo"></span>某公司官方微博</a></li>
						<li title="点击打开官方客服"><a href="#"><span class="qq-logo"></span>某公司官方客服</a></li>
					</ul>
				</div>
			</div>
			<div class="clear-float"></div>
		</div>
	</div>
	<div class="footer-floor2">
		<p>竞彩网ICP编号：京ICP证090602号    网络视听许可证：0110594号    广播电视节目制作经营许可证(京)字第1864号</p>
		<p>本网站赛程、赛果、奖金等数据由国家体育总局体育彩票管理中心发布</p>
	</div>
</div>
</div>
<!-- footer end -->

<div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">
<p></p>
<p></p>
</div>

			
		<script type="text/javascript">
			window.onload = function() {
				var oBox = document.getElementById('box');
				var aLi = oBox.getElementsByTagName('li');
				var oCon = document.getElementById('content');
				var aDiv = oCon.getElementsByTagName('div');

				for(var i = 0; i < aLi.length; i++) {
					aLi[i].index = i; //为每个li添加对应的索引index
					aLi[i].onclick = function() { //循环为每个li添加onclick事件
						for(var i = 0; i < aLi.length; i++) {
							aLi[i].className = ''; //循环清空li样式
							aDiv[i].style.display = 'none'; //循环隐藏所有div
						}
						this.className = 'active'; //当前点击的元素样式变成active
						aDiv[this.index].style.display = 'block'; //this.index 获取当前li对应的索引
					}
				}
			}

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



 $(document).ready(function () {


	$(".official-plat ul li:first-child").hover(function () {
		$(".weixin").show();
		$(".weibo").hide();
	});
	$("li[title='点击打开官方微博']").hover(function () {
		$(".weixin").hide();
		$(".weibo").show();
	});

	//href="#a_null"的统一设置为无效链接
	$("a[href='#a_null']").click(function () {
		return false;
	});


});

//波浪动画
$(function () {
	var marqueeScroll = function (id1, id2, id3, timer) {
		var $parent = $("#" + id1);
		var $goal = $("#" + id2);
		var $closegoal = $("#" + id3);
		$closegoal.html($goal.html());
		function Marquee() {
			if (parseInt($parent.scrollLeft()) - $closegoal.width() >= 0) {
				$parent.scrollLeft(parseInt($parent.scrollLeft()) - $goal.width());
			}
			else {
				$parent.scrollLeft($parent.scrollLeft() + 1);
			}
		}

		setInterval(Marquee, timer);
	}
	var marqueeScroll1 = new marqueeScroll("marquee-box", "wave-list-box1", "wave-list-box2", 20);
	var marqueeScroll2 = new marqueeScroll("marquee-box3", "wave-list-box4", "wave-list-box5", 40);
});


		</script>

	</body>

</html>