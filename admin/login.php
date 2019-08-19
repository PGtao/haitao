<!DOCTYPE html>
<html>
<head>
<title>登录</title>
<meta name="content-type"; charset="UTF-8">
	<style type="text/css">
	body{		
		background:url(public/img/ty-login03.jpg) no-repeat;
		background-size: cover;		
	}
	.content{
		margin-top: 150px ;
	}
	h2{
		border-bottom: 2px solid #94BEEF;
		margin: 0 20px;
		padding: 15px;
	}
	.middle{
		width: 460px;
		height: 300px;
		border-radius: 5px;
		border: 2px solid #8CB4E6;	
		background:#14416E;
	}
 .submit{
	background-image:url(http://img.php.cn/upload/course/000/000/008/58240523905f5156.gif); width:57px; height:20px;
 }
 .reset{
	background-image:url(http://img.php.cn/upload/course/000/000/008/5824054310e9b518.gif); width:57px; height:20px;
 }
 #center_submit{
 	width: 500px;
	height: 100px;
 }
 .button{
 	margin:15px;
 }
  

</style>
</head>

<body>
    <div class="content" align="center">
        <!--头部-->
        <div class="header">
        <h1 style="font-size: 30px;color: #666666;font-weight: 1000;">体育彩票竞猜</h1>
        </div>
        <!--中部-->
        <div class="middle">
        	<h2 style="font-size: 24px;color: #ffffff;font-weight: 800;">管理员登录</h2>
           <form id="frm" name="frm" method="post" action="loginaction.php" onSubmit="return check()">
	<div id="center">
		<div id="center_left"></div>
		<div id="center_middle">
			<div style="margin: 25px 0;" class="user">
				<label style="color: #ADC9D9;">用户名：
					<input style="width: 180px;height: 20px; font-size: 14px; color: #FFFFFFF;background-color: #87ADBF; border: 0;" type="text" name="username" id="username" />
				</label>
			</div>
			<div style="margin: 25px 0;" class="user">
				<label style="color: #ADC9D9;">密　码：
					<input style="width: 180px;height: 20px; font-size: 14px; color: #FFFFFF;background-color: #87ADBF; border: 0;"  type="password" name="password" id="password" />
				</label>
			</div>
			<div class="chknumber ">
                 <label style="color: #ADC9D9;">验证码：
					<input style="width: 120px;height: 20px; font-size: 14px; color: #FFFFFF;background-color: #87ADBF; border: 0;"  type="password" name="code" id="code" />
					 <img src="verify.php" style="vertical-align:middle" />
				</label>
                        	
                  </div>
			
		</div>
		<div id="center_submit">
			<div class="button"><input style="float: left; margin-left: 160px;color: #333333;" type="submit" name="Submit" class="submit" value="登录">
			</div>
			<div class="button"><input style="float: left;margin-left: 10px;color: #333333;" type="reset" name="Submit" class="reset" value="重置"> </div>
		</div>	
	</div>
</form>
        </div>
    </div>
</body>
</html>
