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
<title>评论与回复</title>

<link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="public/css/ty-pinglun.css">
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
							echo "<li style='color:#999999;line-height: 40px; '>&nbsp;您好，<a href='ty-pinglun.php'>请登录</a></li>";
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
<div class="container">
	<div class="commentbox">
		<textarea cols="80" rows="50" placeholder="来说几句吧......" class="mytextarea" id="content"></textarea>
		<div class="btn btn-info pull-right" id="comment">评论</div>
	</div>
	<div class="comment-list">

	</div>
</div>
<script type="text/javascript" src="public/js/jquery.1.4.2-min.js"></script>
<script type="text/javascript" src="public/js/jquery.comment.js" ></script>
<script type="text/javascript" src="public/js/bootstrap.min.js"></script>
<script type="text/javascript">
	//初始化数据
	var arr = [
		{id:1,img:"public/img/touxiang-5.jpg",replyName:"孤独的箭",beReplyName:"匿名",content:"今天买了一注体彩，真的是把所有的运气都花光了，竞猜竟然赢了。以前从来都没赢过，真的是太开心了",time:"2018-10-17 11:42:53",address:"厦门",osname:"win7",browse:"谷歌",replyBody:[]},
		{id:2,img:"public/img/touxiang-7.jpg",replyName:"天堂引路人",beReplyName:"",content:"今天关注了一下欧联的足球比赛，他们踢得太好了，法国队太厉害，比分3-0直接晋级，完全没给对方留一点机会",time:"2018-1-17 11:42:53",address:"深圳",osname:"",browse:"谷歌",replyBody:[{id:3,img:"",replyName:"知夏",beReplyName:"匿名",content:"那场比赛我也看了，主要是对面太菜了",time:"2017-10-17 11:42:53",address:"",osname:"",browse:"谷歌"}]},
		{id:3,img:"public/img/touxiang-8.jpg",replyName:"桃之夭夭",beReplyName:"匿名",content:"不知道昨天的比赛在哪里看，哪位大神能推荐一下网址吗，急需！！！",time:"2018-10-17 11:42:53",address:"上海",osname:"win10",browse:"谷歌",replyBody:[]}
	];
	$(function(){
		$(".comment-list").addCommentList({data:arr,add:""});
		$("#comment").click(function(){
			var obj = new Object();
			obj.img="public/img/touxiang-9.jpg";
			obj.replyName="<?php echo $username ?>";
			obj.content=$("#content").val();
			obj.browse="厦门";
			obj.osname="谷歌";
			obj.replyBody="";
			$(".comment-list").addCommentList({data:[],add:obj});
		});
	})
</script>
</body>
</html>