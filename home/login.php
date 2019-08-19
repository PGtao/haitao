<!DOCTYPE html>
<html>
<head>
<title>登录</title>
<meta name="content-type"; charset=UTF-8">
	<style type="text/css">
	body{		
		background:url(public/img/ty-login02.jpg) no-repeat;
		background-size: cover;		
	}
	.content{
		margin-top: 150px ;
	}
	h2{
		border-bottom: 2px solid #94BEEF;
		margin: 0 20px;
		padding: 10px;
	}
	.middle{
		width: 500px;
		height: 360px;
		border-radius: 5px;
		border: 2px solid #8CB4E6;	
		background:#00A8D5;
	}
	 .chknumber {
	margin-bottom:3px;
	text-align:left;
	padding-left:3px
 }
  .chknumber_input {
	width:40px;
 }

</style>
</head>

<body>
    <div class="content" align="center">
        <!--头部-->
        <div class="header">
        <h1 style="font-size: 30px;color: #FFFFFF;font-weight: 1000;">体育彩票竞猜</h1>
        </div>
        <!--中部-->
        <div class="middle">
        	<h2 style="font-size: 24px;color: #D0EDFF;font-weight: 800;">用户登录</h2>
            <form id="loginform" action="loginaction.php" method="post">
                <table border="0" cellspacing="20">
                    <tr>
                        <td style="font-size: 20px; color: #ffffff;">用户名:</td>
                        <td>
                            <input style="width: 180px;height: 20px; font-size: 14px; color: #666666;background-color: #FFFFFF;" type="text" id="name" name="username" required="required"
                            value="<?php echo isset($_COOKIE["wang"])?$_COOKIE["wang"]:"";?>">
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 20px; color: #ffffff;">密&nbsp;&nbsp;&nbsp;码：</td>
                        <td><input style="width: 180px;height: 20px; font-size: 14px; color: #666666;background-color: #FFFFFF;" type="password" id="password" name="password"></td>
                    </tr>
                     <tr class="chknumber ">
                        <td style="font-size: 20px; color: #ffffff;">验证码：</td>
                        <td><input name="code" type="text" id="code" maxlength="4" class="chknumber_input" />
                        <img src="verify.php" style="vertical-align:middle" />	
                        </td>
                        	
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input  type="checkbox" name="remember"><small style="color: #333333;font-size: 14px;">记住用户名和密码</samll>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center" style="color:red;font-size:12px;">
                        <!--提示信息-->
                            <?php
                                $err=isset($_GET["err"])?$_GET["err"]:"";
                                switch($err) {
                                    case 1:
                                    echo "用户名或密码错误！";
                                    break;
                                    case 2:
                                    echo "用户名或密码不能为空！";
                                    break;
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input style="color: #333333;border: 0;background-color: #FFFFFF;width: 60px;height: 30px;font-size: 14px;border-radius: 5%;" type="submit" id="login" name="Submit" value="登录">
                            <input  style="color: #333333;border: 0;background-color: #FFFFFF;width: 60px;height: 30px;font-size: 14px;border-radius: 5%;" type="reset" id="reset" name="Submit" value="重置">
                        </td>
                    </tr>
                    <tr>
                        <td style="color: #333333;" colspan="2" align="center">
                            还没有账号，快去<a href="register.php">注册</a>吧！
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>
