<?php
	 $link = mysqli_connect("localhost","root","123456789","ts");	  
  // mysql_query("set names utf-8");
   $tsh=$_GET['tsh'];
   $tsm=$_GET['tsm'];
   $zz=$_GET['zz'];
   $zt=$_GET['zt'];
  
     $sql="insert into biao1(tsh,tsm,zz,zt) values('".$tsh."'".",'".$tsm."','".$zz."','".$zt."')";
     $result=mysqli_query($link,$sql);
     if($result)
   {
    echo "<script>alert('添加成功！');</script>";
    echo '<meta http-equiv="refresh" content="0;URL=tsgl.php"/>';
   }
     else
 {
  echo "<script>alert('添加失败！');</script>";
  echo '<meta http-equiv="refresh" content="0;URL=tsgl.php"/>';
}
 ?>