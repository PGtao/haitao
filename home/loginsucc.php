<!DOCTYPE html>
<html>
<head>
<title>登录成功</title>
<meta name="content-type"; charset=UTF-8">
</head>
<body>
    <div>
        <?php
            //开启session
            session_start();
            //声明变量
            $username= isset($_SESSION['user'])?$_SESSION['user']:"";
            //判断session是否为空
            if(!empty($username)){         
            echo "<script language=javascript>alert('登陆成功！');window.location='ty-index.php'</script>"; 
        ?>
            <br/> 
        <?php
            }else {
            //未登录，无权访问
        ?>
            <h1>你无权访问！！！</h1>
        <?php   
            }
        ?>  
    </div>
</body>
</html>
