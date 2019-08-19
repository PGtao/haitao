<?php
include '../../public/common/config.php';
$time=$_POST['time'];
$jie=$_POST['jie'];
$foof=$_POST['foof'];
$foos=$_POST['foos'];
$foot=$_POST['foot'];
$foog=$_POST['foog'];
$tall=$_POST['tall'];
$succ=$_POST['succ'];
$game=$_POST['game'];
$rangf=$_POST['rangf'];
$dax=$_POST['dax'];
$outher=$_POST['outher'];
$sql="insert into liebiao(time,jie,foof,foos,foot,foog,tall,succ,game,rangf,dax,outher) 
values('{$time}','{$jie}','{$foof}','{$foos}','{$foot}','{$foog}','{$tall}','{$succ}','{$game}','{$rangf}','{$dax}','{$outher}')";
$aa=mysqli_query($link,$sql);
if($aa){
	echo '<script>location="index.php"</script>';
}
?>