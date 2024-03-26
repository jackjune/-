<?php
	 $link = mysqli_connect("localhost","root","123456789","ts");	 
    mysqli_query($link,"set names utf-8");
    $id=$_GET['id'];
    
     
     if($id!="")
     {
        $sql="update biao2 set zt='挂失' where id='".$id."'";
        $result=mysqli_query($link,$sql);
       if($result)
       {
         echo "<script>alert('挂失成功！');</script>";
         echo '<meta http-equiv="refresh" content="0;URL=yhgl1.php"/>';
       }
       else
       {
         echo "<script>alert('挂失失败！');</script>";
         echo '<meta http-equiv="refresh" content="0;URL=yhgl1.php"/>';
       }
     }
     else
     {
      echo "<script>alert('用户id不能为空！');</script>";
      echo '<meta http-equiv="refresh" content="0;URL=yhgl1.php"/>';
     }
     ?>