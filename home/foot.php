<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="public/css/foot.css"/>
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap-theme.min.css"/>
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css"/>
    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
	</head>
	<body>
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
<div class="footer">
	<div class="auto clearfix">

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
