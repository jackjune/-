<?php	 
	 $link = mysqli_connect("localhost","root","123456789","ts");	 
	 	 
	 //mysql_query("set names utf-8");
	 $tsh=$_GET['tsh'];

	  $sql="delete from biao1 where tsh='".$tsh."'";
	  $c1 = mysqli_query($link,$sql);
	if($c1)
	{
		echo "<script>alert('删除成功！');</script>";
        echo '<meta http-equiv="refresh" content="0;URL=tsgl.php"/>';
	}
	else
	{
		echo "<script>alert('删除失败,请重试!'); </script>";
		echo '<meta http-equiv="refresh" content="0;URL=tsgl.php"/>';
	}
?>