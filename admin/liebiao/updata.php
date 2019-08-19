<?php
include '../../public/common/config.php';
$id=$_POST['id'];
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
 $sql="update liebiao set time='{$time}',jie='{$jie}',foof='{$foof}',foos='{$foos}'
  ,foot='{$foot}',foog='{$foog}',tall='{$succ}',game='{$game}',rangf='{$rangf}',dax='{$dax}',outher='{$outher}' where id={$id}";
 $aa=mysqli_query($link,$sql);
 if($aa){
 	echo '<script>location="index.php"</script>';
 }
?>