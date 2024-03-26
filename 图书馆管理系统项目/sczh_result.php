<?php	 
	 $link = mysqli_connect("localhost","root","123456789","ts");	 
	 mysqli_query($link,"set names utf-8");	 
	 
	 //mysql_query("set names utf-8");
	 $id=$_GET['id'];

	  $sql="delete from biao2 where id='".$id."'";
	  $c1 = mysqli_query($link,$sql);
	if($c1)
	{
		echo "<script>alert('删除成功！');</script>";
        echo '<meta http-equiv="refresh" content="0;URL=yhgl1.php"/>';
	}
	else
	{
		echo "<script>alert('删除失败,请重试!'); </script>";
		echo '<meta http-equiv="refresh" content="0;URL=yhgl1.php"/>';
	}
?>