<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>图书后台管理系统注册</title>
<style>
 body {
	margin:0;
	padding:0;
	overflow:hidden;
	background:url(http://img.php.cn/upload/course/000/000/008/582403bb1d326430.gif) repeat-x #152753;
	font-size: 12px;
	color: #adc9d9;
 }
		
 #center {
	height:84px;
	text-align:center;
 }
		
 * IE7 HACK*/
 *+html #center_left {
	margin-left:206px !important;
 }
 /* END HACK*/
 #center_middle {
	float:left;
	background:url(http://img.php.cn/upload/course/000/000/008/582404a48b17a540.gif) no-repeat;
	height:84px;
	width:162px;
 }
 #center_middle_right {
	float:left;
	background:url(http://img.php.cn/upload/course/000/000/008/582404c137d1a417.gif) no-repeat;
	height:84px;
	width:26px;
 }
 #center_submit {
	float:left;
	background:url(http://img.php.cn/upload/course/000/000/008/582404cee31fc426.gif) no-repeat;
	height:84px;
	width:67px;
 }
 #center_right {
	float:left;
	background:url(http://img.php.cn/upload/course/000/000/008/582404e5d1716236.gif) no-repeat;
	height:84px;
	width:211px;
 }
		
 INPUT {
	width:100px;
	height:17px;
	background-color:#87adbf;
	border:solid 1px #153966;
	font-size:12px;
	color:#283439;
 }
 .chknumber_input {
	width:40px;
 }
 .user {
	margin: 6px auto;
 }
 /* IE7 HACK*/
 *+html .user {
	margin: 4px auto;
 }
 /* END HACK*/
 .chknumber {
	margin-bottom:3px;
	text-align:left;
	padding-left:3px
 }
 .button {
	margin: 15px auto;
 }
 .submit{
	background-image:url(http://img.php.cn/upload/course/000/000/008/58240523905f5156.gif); width:57px; height:20px;
 }
 .reset{
	background-image:url(http://img.php.cn/upload/course/000/000/008/5824054310e9b518.gif); width:57px; height:20px;
 }
 IMG {
	border:none;
	cursor:pointer;
 }
 FORM {
	margin:0;
	padding:0
 }
</style> 
</head>
<body>
<div id="top"> </div>
<form id="frm" name="frm" method="post" action="" onSubmit="return check()">
<div id="center">
	<div id="center_left"></div>
	<div id="center_middle">
		<div class="user">
			<label>用户名：
				<input type="text" name="username" id="username" />
			</label>
		</div>
	 <div class="user">
		 <label>密　码：
				<input type="password" name="pwd" id="pwd" />
			</label>
		</div>
		<div class="chknumber">
			<label>验证码：
				<input name="code" type="text" id="code" maxlength="4" class="chknumber_input" />
			</label>
			<img src="verify.php" style="vertical-align:middle" />
		</div>
	</div>
	<div id="center_middle_right"></div>
	<div id="center_submit">
		<div class="button"> <input type="submit" name="Submit" class="submit" value=" ">
		</div>
		<div class="button"><input type="reset" name="Submit" class="reset" value=""> </div>
	</div>
</div>
</form>
<div id="footer"></div>
</body>
</html>
