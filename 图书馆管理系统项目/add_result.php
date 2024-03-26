<?php
	 $link = mysqli_connect("localhost","root","123456789","ts");	 
  // mysql_query("set names utf-8");
   $id=$_GET['id'];
   $xm=$_GET['xm'];
   $bj=$_GET['bj'];
   $zt=$_GET['zt'];
  
     $sql="insert into biao2(id,xm,bj,zt) values('".$id."'".",'".$xm."','".$bj."','".$zt."')";
     $result=mysqli_query($link,$sql);
     if($result)
   {
    echo "<script>alert('添加成功！');</script>";
    echo '<meta http-equiv="refresh" content="0;URL=yhgl.php"/>';
   }
     else
 {
  echo "<script>alert('添加失败！');</script>";
  echo '<meta http-equiv="refresh" content="0;URL=yhgl.php"/>';
}
 ?>