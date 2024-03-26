<?php
	 $link = mysqli_connect("localhost","root","123456789","ts");	 ;	 
    mysqli_query($link,"set names utf-8");
    $tsh=$_GET['tsh'];
    $tsm=$_GET['tsm'];
    $zz=$_GET['zz'];
	$zt=$_GET['zt'];
     
     if($tsh!="")
     {
        $sql="update biao1 set tsh='".$tsh."',tsm='".$tsm."',zz='".$zz."',zt='".$zt."' where tsh='".$tsh."'";
        $result=mysqli_query($link,$sql);
       if($result)
       {
         echo "<script>alert('修改成功！');</script>";
         echo '<meta http-equiv="refresh" content="0;URL=tsgl.php"/>';
       }
       else
       {
         echo "<script>alert('修改失败！');</script>";
         echo '<meta http-equiv="refresh" content="0;URL=gengxin.php"/>';
       }
     }
     else
     {
      echo "<script>alert('图书号不能为空！');</script>";
      echo '<meta http-equiv="refresh" content="0;URL=gengxin.php"/>';
     }
     ?>