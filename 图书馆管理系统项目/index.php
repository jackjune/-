<?
session_start();
$one=$_SESSION['yzmCode'];
$conn=mysqli_connect("localhost","root","123456789","ts")  or die ("连接数据库服务器失败。");
mysqli_query($conn,"set names 'utf-8'"); 
$sql="select * from biao2 where 用户名="."'".$_POST['name']."'"."and 密码="."'".$_POST['passwd']."'";
$data=mysqli_query($conn,$sql) or die ("表格访问错误！<a href='index.php'>返回主页</a>");
$rec_count=mysqli_num_rows($data);
if(!isset($_COOKIE["us"]))
{
	if(isset($_POST['tj']))
	{
		if($rec_count>0 && $_POST['validatorCode']==$one)
		{
			setcookie("us",$_POST['name'],time()+300);
			echo '<meta http-equiv="refresh" content="0;URL=jygl.php"/>';
		}
		else{
			die("用户或密码或验证码错误！<a href='index.php'>请重试</a>");
		  }
	}
}
else
echo '<meta http-equiv="refresh" content="0;URL=jygl.php"/>';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>PHP期末设计</title>
		<link rel="stylesheet" href="css/base.css">
	</head>
	<body >
		<div align="center" >
			<img width="400px" height="150px" src="images/qx22.jpg" />
		    <p></p>
		</div>
		<div id="wrapper">
			<h2 align="center">泉州信息工程学院图书管理系统</h2>
			<form method="post" action="">
				<ul class="group_input" >
					<li>
						<input type="text" class="mobile required" id="mobile" placeholder="账号" name="name"/>
					</li>
				
					<li>
						<input type="password" class="psd required" id="psd" placeholder="密码" name="passwd" />
					</li>
					<li>
						<input type="text" name="validatorCode" placeholder="请输入验证码"/><br><br>
						<img src="20.php" onclick='this.src="20.php?a="+Math.random();'><br><br>
						<p style="color:grey;font-size: 3px ;">看不清？点击验证码换一张新的!</p>
						
					</li>
				</ul>
                <button type="submit" class="submit_btn" name="tj">登陆</button>
				<h5 class="submit_btn" align="center"><a href="add.php">注册</a></h5>
			</form>
		<script src="js/sakura.js"></script>
		<script src="js/1.js"></script>

	</body>
</html>


