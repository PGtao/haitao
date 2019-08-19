
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>left</title>
	<style>
		*{
			font-family: 微软雅黑;
			text-decoration:none;
		}
		h4{
			cursor: pointer;
			background: #E4393C;
			border-radius:5px;
			text-align: center;
			color:#fff;
			padding: 4px 0;
		}

		h4:hover{
			color:#aff;
		}

		div{
			display: none;
		}

		p{
			padding-left:15px;			
			background: #00CE68;
			border-radius:5px;
			padding: 2px 0;
			text-indent: 10px;
		}

		p a{
			color:#fff;
		}
	</style>
	<script src='public/js/jquery.min.js'></script>
</head>
<body>
	<h4>用户管理</h4>
	<div>
		<p><a href='user/index.php' target='right'>|-查看用户</a></p>
		<p><a href='user/add.php' target='right'>|-添加用户</a></p>
	</div>
	
	<h4>分类管理</h4>
	<div>
		<p><a href='class/index.php' target='right'>|-查看分类</a></p>
		<p><a href='class/add.php' target='right'>|-添加分类</a></p>
	</div>
	<h4>项目管理</h4>
	<div>
		<p><a href='class/index.php' target='right'>|-查看项目</a></p>
		<p><a href='brand/add.php' target='right'>|-添加项目</a></p>
	</div>
		
	<h4>赛况管理</h4>
	<div>
		<p><a href='shop/index.php' target='right'>|-查看赛况</a></p>
		<p><a href='shop/add.php' target='right'>|-添加赛况</a></p>
	</div>
	<h4>直播管理</h4>
	<div>
		<p><a href='liebiao/index.php' target='right'>|-查看直播</a></p>
		<p><a href='liebiao/add.php' target='right'>|-添加直播</a></p>
	</div>
	<h4>简介管理</h4>
	<div>
		<p><a href='jianjie/index.php' target='right'>|-查看简介</a></p>
		<p><a href='jianjie/add.php' target='right'>|-添加简介</a></p>
	</div>
	<h4>赛事管理</h4>
	<div>
		<p><a href='saishi/index.php' target='right'>|-查看赛事</a></p>
		<p><a href='saishi/add.php' target='right'>|-添加赛事</a></p>
	</div>
	<h4>赛果管理</h4>
	<div>
		<p><a href='saiguo/index.php' target='right'>|-查看赛事</a></p>
		<p><a href='saiguo/add.php' target='right'>|-添加赛事</a></p>
	</div>
	<h4>论坛管理</h4>
	<div>
		<p><a href='community/index.php' target='right'>|-查看评论</a></p>
	</div>
		
	<h4>系统管理</h4>
	<div>
		<p><a href="adminpass.php" target="right">|-修改口令</a></p>
		<p><a href="logout.php"target="_top" onclick="return confirm('您确认退出吗?')">|-退出系统</a></p>
		<p><a href="../home/ty-index.php" target="_blank">|-网站首页</a></p>
	</div>
</body>
<script>
$('h4').click(function(){
	$(this).next().toggle();
	$('div').not($(this).next()).hide();
});
</script>
</html>