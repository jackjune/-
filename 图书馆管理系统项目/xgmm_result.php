<?php
	 $link = mysqli_connect("localhost","root","123456789","ts");	 
   mysqli_query($link,"set names utf-8");
    $id=$_GET['id'];
    $jmm=$_GET['jmm'];
    $xmm=$_GET['xmm'];
    
     
     if($xmm!="")
     {
        $sql="update biao2 set 密码='".$xmm."' where id='".$id."'";
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
      echo "<script>alert('新密码不能为空！');</script>";
      echo '<meta http-equiv="refresh" content="0;URL=yhgl1.php"/>';
     }
     ?>