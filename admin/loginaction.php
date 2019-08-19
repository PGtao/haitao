<?php
    //声明变量
    session_start();
    $username = isset($_POST['username'])?$_POST['username']:"";
    $password = isset($_POST['password'])?$_POST['password']:"";
    $remember = isset($_POST['remember'])?$_POST['remember']:"";

    //判断用户名和密码是否为空
    if(!empty($username)&&!empty($password)) {
        //建立连接
        $conn = mysqli_connect('localhost','root','','jingcai');
        //准备SQL语句
        $sql_select = "SELECT username,password FROM user WHERE username = '$username' AND password = '$password'";
        //执行SQL语句
        $ret = mysqli_query($conn,$sql_select);

        $row = mysqli_fetch_array($ret);
        if($_POST["Submit"]){
       $code=$_POST["code"];
       if($code<>$_SESSION["auth"])
   {
      echo "<script language=javascript>alert('验证码不正确！');window.location='login.php'</script>";

      die();
   }
   }
        //判断用户名或密码是否正确
        if($username==$row['username']&&$password==$row['password']) {
            //选中“记住我”          

           //跳转到loginsucc.php页面
              header("Location:index.php?err=1");
            $_SESSION['username']=$username; 
            //关闭数据库
            mysqli_close($conn);
        }else {
            //用户名或密码错误，赋值err为1
            header("Location:login.php?err=1");
        }
    }else {
        //用户名或密码为空，赋值err为2
        header("Location:login.php?err=2");
    }

?>
