<?php	 
	 $link = mysqli_connect("localhost","root","123456789","ts");	  
	 //mysql_query("set names utf-8");
	 $tsh=$_GET['tsh'];

	  $sql="delete from biao3 where tsh='".$tsh."'";
	  $c1 = mysqli_query($link,$sql);
	if($c1)
	{
		echo "<script>alert('归还成功！');</script>";
        echo '<meta http-equiv="refresh" content="0;URL=yhgl1.php"/>';
	}
	else
	{
		echo "<script>alert('归还失败,请重试!'); </script>";
		echo '<meta http-equiv="refresh" content="0;URL=yhgl1.php"/>';
	}
?>