<?php
	  $link = mysqli_connect("localhost","root","123456789","ts");	 
    mysqli_query($link,"set names utf-8");	 
  // mysql_query("set names utf-8");
   $tsh=$_GET['tsh'];
   $tsmc=$_GET['tsmc'];
   $jssj=$_GET['jssj'];
   $yhsj=$_GET['yhsj'];
  
     $sql="update biao3 set tsmc='".$tsmc."',jssj='".$jssj."',yhsj='".$yhsj."' where tsh='".$tsh."'";
     $result=mysqli_query($link,$sql);
     if($result)
   {
    echo "<script>alert('续借成功！');</script>";
    echo '<meta http-equiv="refresh" content="0;URL=yhgl1.php"/>';
   }
     else
 {
  echo "<script>alert('续借失败！');</script>";
  echo '<meta http-equiv="refresh" content="0;URL=yhgl1.php"/>';
}
 ?>