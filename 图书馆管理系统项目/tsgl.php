<?
if($_COOKIE['us'])
{
?>
<?php
 include_once "share.php";
?>
<!DOCTYPE html>
<head>
<style type="text/css">
 caption{
    width:700px;
    height:50px;
    font-size:30px;
    background-color:#C0C0C0;
 }
 .tt{
    text-align:center;
 }
</style>
<script src="js/1.js"></script>
<script src="js/sakura.js"></script>
<body>
	<p></p>
	<p></p>
    <?php
     $link = mysqli_connect("localhost","root","123456789","ts");	 
     mysqli_query($link,"set names utf-8");
   // mysql_query("set names utf-8",$link);  
      $sql = "select * from biao1";
      $result=mysqli_query($link,$sql);

      $row=mysqli_fetch_assoc($result);
$total=mysqli_num_rows($result);
if($total==0)     //本部分代码开始，得到总页数和每页要显示记录数  
{
echo "无图书记录!"; 
}
else
{
   $pagesize=5;                //每页显示5条记录
    if($total%$pagesize)
    {
    $pagecount=intval($total/$pagesize)+1;  //设置总页数
    }                   
    else
    {
    $pagecount=intval($total/$pagesize);
    } 
}
if(@!$_GET['page'])
 {        //如果$_GET[page]的值为空，则默认显示的页为第一页。
 $page=1;
 }
 else
 {                        //否则，使当前页码为获取的$page的值。
 $page=$_GET['page'];
 }
$a=($page-1)*$pagesize;   //本部分代码开始，求出每页分别显示记录内容  
$sql1="select * from biao1 limit $a ,$pagesize";
$result1=mysqli_query($link,$sql1);

    ?>
       <table border="1" align="center" width="700" height="250">
          <caption>图书信息表</caption>
          <tr><th>图书号</th>
             <th>图书名</th>
             <th>作者</th>
             <th>状态</th>   
             <th>操作</th>
         </tr>  
    <?php  
      while($row=mysqli_fetch_array($result1))
      {
   ?> 
              <tr>
                 <td class="tt"><?php echo $row['tsh']; ?></td>
                 <td class="tt"><?php echo $row['tsm']; ?></td>
                 <td class="tt"><?php echo $row['zz']; ?></td>
                 <td class="tt"><?php echo $row['zt']; ?></td>
                 <td class="tt"><a href="gengxin.php?tsh=<?php echo $row['tsh'];?>
                 &tsm=<?php echo $row['tsm']; ?>
                 &zz=<?php echo $row['zz']; ?>
                 &zt=<?php echo $row['zt'];?>">修改</a>&nbsp;&nbsp;
                 <a href="delete.php?tsh=<?php echo $row['tsh'];?>">删除</a></td>
              </tr>
   <?php } ?>   
        <tr>
           <td colspan="6" align="center"><a href="addts.php">添加</a></td>
          </tr>
    </table>
    <div align="center">
    <?php

echo"第".$page."页/共".$pagecount."页&nbsp;&nbsp;";
if($page>=2)    //本部分代码开始，根据页数显示相应页码信息  
 {        //如果当前页码大于2，则显示首页及上一页连接。
  echo" <a href='tsgl.php'>首页</a>&nbsp";
  $pre=$page-1;
  echo"<a href='tsgl.php?page=$pre'>上一页</a>&nbsp;";
  echo"页码：";
  } 
  if($pagecount<=4)
 {    //如果总页数小于或等于4，则显示所有页的连接
   for($i=1;$i<=$pagecount;$i++)
   {  
  echo"<a href='tsgl.php?page=$i'>$i</a>&nbsp;";
    }
 }
 else
{                //如果总页数大于4，则只显示前4页连接，并显示尾页和下一页链接
   for($i=1;$i<=4;$i++)
   {
   echo"<a href='tsgl.php?page=$i'>$i</a>";    
   }
 }
 if($page==$pagecount){$next=$page;}else{$next=$page+1;}
 echo"<a href='tsgl.php?page=$next'>下一页</a>&nbsp";
 echo"<a href='tsgl.php?page=$pagecount'>尾页</a>";
?>
<div>
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
