<?php
 include_once "share.php";
?>
<br>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <style>
		table{border-collapse: collapse;font-size: 150%;}
		td{border-width: 2px; text-align: center;}
		th{border-width: 2px; text-align: center;}
        .k{
            color:black;
            width: 1000px;
        }
        td:hover{background-color:grey;}
        .tr{
            width: 500px;
            height: 500px;
            margin-left: 500px;
        }
        .p{
            color: white;
        }
        .k{
            margin:0px;
        
        }
        </style>
</head>
<body>
    <script src="js/sakura.js"></script>
    <script src="js/1.js"></script>
<?php
		$link=mysqli_connect("localhost","root","123456789","ts");	
		//mysql_query("set names utf-8",$link);	
		$sql = "select * from biao3";
      $result=mysqli_query($link,$sql);
    ?>
    <?php
		$a=mysqli_connect("localhost","root","123456789","ts");	
		//mysql_query("set names utf-8",$link);	
		$b = "select * from biao2";
      $c1=mysqli_query($a,$b);
    ?>
     <table border="1" align="center" width="500px" height="100px">
          <caption></caption>
             <th>用户id</th>
             <th>用户姓名</th>
             <th>用户班级</th>
             <th>用户状态</th>

    <?php  
		while($row=mysqli_fetch_array($c1))
		{
    ?> 
             <tr>
             <th><?php echo $row['id'];?></th>
             <th><?php echo $row['xm'];?></th>
             <th><?php echo $row['bj'];?></th>
             <th><?php echo $row['zt'];?></th>
             </tr>
 
          <?php } ?> 
        <table class="p" align="center">
            <th bgcolor="green"><a href="xgzh.php?id=<?php echo $row['id'];?>&xm=<?php echo $row['xm']; ?>&bj=<?php echo $row['bj']; ?>&zt=<?php echo $row['zt']; ?>" >修改账户</a></th>
            <th bgcolor="yellow"><a href="gszh.php">挂失账户</a></th>
            <th bgcolor="orange"><a href="xgmm.php">修改密码</a></th>
            <th bgcolor="red"><a href="sczh1.php?id=<?php echo $row['id'];?>">删除账户</a></th>
        </table>
    </div>
    <h2 align="center"><strong>用户借阅信息</strong></h2>
    <div align="center">
        <table border="1" class="k">
            <tr>
                <td align="center">图书号</td>
                <td align="center">图书名称</td>
                <td align="center">借书时间</td>
                <td align="center">应还时间</td>
                <td align="center">操作</td>
            </tr> 
            <?php  
		while($row=mysqli_fetch_array($result))
		{
	?> 
              <tr>
                 <td><?php echo $row['tsh']; ?></td>
                 <td><?php echo $row['tsmc']; ?></td>
                 <td><?php echo $row['jssj']; ?></td>
                 <td><?php echo $row['yhsj']; ?></td>    
                 <td align="center"><a href="xj.php?tsh=<?php echo $row['tsh'];
                 ?>&tsmc=<?php echo $row['tsmc'];
                 ?>&jssj=<?php echo $row['jssj'];
                 ?>&yhsj=<?php echo $row['yhsj'];
                 ?>" >续借</a>&nbsp;&nbsp;
                 <a href="gh.php?tsh=<?php echo $row['tsh'];?>">归还</a></td>
              </tr>
              <?php } ?> 
        </table>
    </div>
</body>
</html>

