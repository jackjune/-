<?
if($_COOKIE['us'])
{
?>
<?php
 include_once "share.php";
?>
<br>
<!DOCTYPE html>
<head>
</head>
<style type="text/css">
	table{border-collapse: collapse;font-size: 150%;}
	td{border-width: 2px; text-align: center;}
	th{border-width: 2px; text-align: center;}
	.p5{font-size: 150%; background-color: #0F88EB;width: 500px; margin: 0 auto;}
</style>
<body onload="date()">
	<script src="js/sakura.js"></script>
	<script src="js/1.js"></script>
<?php
	 $link = mysqli_connect("localhost","root","123456789","ts");	 
     mysqli_query($link,"set names utf-8");
		//mysql_query("set names utf-8",$link);	
		$sql = "select * from biao2";
      $result=mysqli_query($link,$sql);
    ?>
<table align="center" border="2" width="500px" height="100px">
    <tr>
        <th>用户id</th>
        <th>姓名</th>
        <th>班级</th>
        <th>状态</th>
        <th>操作</th>
    </tr>
    <div align="center" class="p5"><b><a href="add.php">添加用户</a></b></div>
    <?php  
		while($row=mysqli_fetch_array($result))
		{
    ?> 
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['xm']; ?></td>
        <td><?php echo $row['bj']; ?></td>
        <td><?php echo $row['zt']; ?></td>
        <td><a href="yhgl1.php?;">详情</a></td>
    <?php } ?>  

</table>      

<html>
    <head>
      <meta charset="utf-8">

    </head>
    <body onload="date()">
	  <h4 id="h" align="center" ></h4>
           <script>
               function date()
               {  
                   var now=new Date();
				   var s,t,month;
				   month=now.getMonth()+1;
                   if(month<10){
 month = "0"+month; 
 }
 if(now.getDate()<10){
     now.getDate() = "0"+now.getDate(); 
 }
 if(now.getHours()<10){
     now.getHours()= "0"+now.getHours(); 
 }
 if(now.getMinutes()<10){
     now.getMinutes()= "0"+now.getMinutes(); 
 }
 if(now.getSeconds()<10){
     now.getSeconds() = "0"+now.getSeconds(); 
 }

				   s=now.getFullYear()+"-"+month+"-"+now.getDate();
				   t=now.getHours()+":"+now.getMinutes()+":"+now.getSeconds();
                    document.getElementById("h").innerHTML="最后登录时间:"+s+" "+t;
                    
               }
           </script>
        </div>
    </body>
</html>
</body>
</html>
<?
}
else
{
echo "<script>alert('越权访问！请重新登录获取授权');</script>";
echo '<meta http-equiv="refresh" content="0;URL=index.php"/>';
}
?>