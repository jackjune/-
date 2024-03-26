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
      .k{
                background-color:red;
            }
            .j{
                background-color:lightblue;
            }
         
            .x{
                border-top-left-radius:10px;
                border-bottom-left-radius:10px;               
                
            }
        
            .table,th,td{border: 1px solid gray;}
            table{border-spacing: 5px 10px;}
</style>
<script src="js/1.js"></script>
<script src="js/sakura.js"></script>
<body>
<h2 align="center">图书查询</h2>
<form method="post" action="find_result.php">
<table align="center"  style="border-spacing: 5px 10px;">
    <tr>
	    <td bgcolor="lightgray" class="x">图书号</td>
        <th><input type="text" name="tsh" value="" placeholder="请输入图书号" ></th>
        <tr><td bgcolor="lightgray" class="x">图书名</td>
        <th><input type="text" name="tsm" value="" placeholder="请输入图书名" ></th>
        <tr><td bgcolor="lightgray" class="x">作者</td>
        <th><input type="text" name="zz" value="" placeholder="请输入作者" ></th>
        <tr><td bgcolor="lightgray" class="x">状态</td>
        <th><input type="text" name="zt" value="" placeholder="请输入状态" ></th>
    </tr>
</table>
<br>
<div align="center"><input type="submit" value="确定" class="j">&nbsp;<input type="reset" class="k"></div>
</form>
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
