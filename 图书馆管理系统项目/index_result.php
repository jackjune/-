<?php
session_start();
$one=$_SESSION['yzmCode'];
setcookie("username",$_POST['name'],time()+300);
$a=$_POST['name'];
echo $one;
$conn=mysqli_connect("localhost","root","123456789","ts")  or die ("连接数据库服务器失败。");
//连接服务器。 
//连接数据库。
mysqli_query($conn,"set names 'utf-8'"); 
//数据库字符编码。

$sql="select * from biao2 where 用户名="."'".$_POST['name']."'"."and 密码="."'".$_POST['passwd']."'";
$data=mysqli_query($conn,$sql) or die ("表格访问错误！<a href='index.php'>返回主页</a>");
$rec_count=mysqli_num_rows($data);

if($rec_count>0 && $_POST['validatorCode']==$one){
  $_SESSION["username"]=$a;
echo '<meta http-equiv="refresh" content="0;URL=jygl.php"/>';

 }
 else{
   die("用户或密码或验证码错误！<a href='index.html'>请重试</a>");
 }
?>