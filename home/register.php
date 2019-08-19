<!DOCTYPE html>
<html>
<head>
<title>注册</title>
<meta name="content-type"; charset=UTF-8">
	<style type="text/css">
	body{		
		background:url(public/img/ty-login01.jpg) no-repeat;
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
		height: 340px;
		border-radius: 5px;
		border: 2px solid #8CB4E6;
		background:#00A8D5;
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
        	<h2 style="font-size: 24px;color: #D0EDFF;font-weight: 800;">用户注册</h2>
            <form action="registeraction.php" method="post">
                 <table border="0" cellspacing="20">
                    <tr>
                      <td style="font-size: 20px; color: #ffffff;">用户名:</td>
                        <td><input style="width: 180px;height: 20px; font-size: 14px; color: #666666;background-color: #FFFFFF;" type="text" id="id_name" name="username" required="required"></td>
                    </tr>
                    <tr>
                        <td  style="font-size: 20px; color: #ffffff;">密&nbsp;&nbsp;&nbsp;码：</td>
                        <td><input style="width: 180px;height: 20px; font-size: 14px; color: #666666;background-color: #FFFFFF;" type="password" id="password" name="password" required="required"></td>
                    </tr>
                    <tr>
                        <td  style="font-size: 20px; color: #ffffff;">重复密码：</td>
                        <td><input style="width: 180px;height: 20px; font-size: 14px; color: #666666;background-color: #FFFFFF;" type="password" id="re_password" name="re_password" required="required"></td>
                    </tr>
                    
                    <tr>
                        <td colspan="2" align="center" style="color:red;font-size:10px;">
                        <!--提示信息-->
                            <?php
                                $err=isset($_GET["err"])?$_GET["err"]:"";
                                switch($err) {
                                    case 1:
                                    echo "用户名已存在！";
                                    break;
                                    case 2:
                                    echo "密码与重复密码不一致！";
                                    break;
                                    case 3:
                                    echo "注册成功！";
                                    break;
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input style="color: #333333;border: 0;background-color: #FFFFFF;width: 60px;height: 30px;font-size: 14px;border-radius: 5%;" type="submit" id="register" name="register" value="注册">
                            <input style="color: #333333;border: 0;background-color: #FFFFFF;width: 60px;height: 30px;font-size: 14px;border-radius: 5%;" type="reset" id="reset" name="reset" value="重置">
                        </td>
                    </tr>
                    <tr>
                        <td style="color: #333333;" colspan="2" align="center">
                            如果已有账号，快去<a href="login.php">登录</a>吧！
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>
