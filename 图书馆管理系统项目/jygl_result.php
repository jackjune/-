<?php
	 $link = mysqli_connect("localhost","root","123456789","ts");	 	 
  // mysql_query("set names utf-8");
   $id=$_GET['id'];
   $tsh=$_GET['tsh'];
   $cz=$_GET['cz'];
 
     $sql="insert into jy(id,tsh,cz) values('".$id."','".$tsh."','".$cz."')";
     $result=mysqli_query($link,$sql);
	 if($cz=="借书"){
                  if($result)
                {
                 echo "<script>alert('借阅成功！');</script>";
                 echo '<meta http-equiv="refresh" content="0;URL=yhgl1.php"/>';
                }
                  else
              {
               echo "<script>alert('借阅失败！');</script>";
               echo '<meta http-equiv="refresh" content="0;URL=yhgl1.php"/>';
             	 }
	 }
	 else{
            		 if($result)
               {
                echo "<script>alert('还书失败！');</script>";
                echo '<meta http-equiv="refresh" content="0;URL=yhgl1.php"/>';
               }
                 else
             {
              echo "<script>alert('还书成功！');</script>";
              echo '<meta http-equiv="refresh" content="0;URL=yhgl1.php"/>';
            	 }
	 }
 ?>