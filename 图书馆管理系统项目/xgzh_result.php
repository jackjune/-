<?php
	 $link = mysqli_connect("localhost","root","123456789","ts");	 
   mysqli_query($link,"set names utf-8");
    $id=$_GET['id'];
    $xm=$_GET['xm'];
    $bj=$_GET['bj'];
    $zt=$_GET['zt'];
    
     
     if($id!="")
     {
        $sql="update biao2 set xm='".$xm."',bj='".$bj."',zt='".$zt."' where id='".$id."'";
        $result=mysqli_query($link,$sql);
       if($result)
       {
         echo "<script>alert('修改成功！');</script>";
         echo '<meta http-equiv="refresh" content="0;URL=yhgl1.php"/>';
       }
       else
       {
         echo "<script>alert('修改失败！');</script>";
         echo '<meta http-equiv="refresh" content="0;URL=yhgl1.php"/>';
       }
     }
     else
     {
      echo "<script>alert('用户id不能为空！');</script>";
      echo '<meta http-equiv="refresh" content="0;URL=yhgl1.php"/>';
     }
     ?>