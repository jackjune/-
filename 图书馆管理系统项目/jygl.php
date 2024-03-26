<?
if($_COOKIE['us'])
{
?>
<?php
 include_once "share.php";
?>
<html>
    <head>
        <style>
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
            table{
                border:0px;
				border-collapse: collapse;
            }
            .table td{
                border:1px solid;
            }
            </style>

    </head>
<body>
    <script src="js/1.js"></script>
	<script src="js/sakura.js"></script>
<h2 align="center">借阅管理（模拟机器扫描操作）</h2>
<form method="get" action="jygl_result.php">
<table align="center" border=1>
    <tr>
	    <td bgcolor="lightgray" class="x">读者id</td>
        <th><input type="text" name="id" value="" placeholder="请输入读者id" ></th>
        <tr><td bgcolor="lightgray" class="x">图书号</td>
        <th><input type="text" name="tsh" value="" placeholder="请输入图书号" ></th>
    </tr>
</table>
<br>
<div align="center" >操作:<input type="radio" name="cz" value="借书" checked="checked">借书<input type="radio" name="cz" value="还书">还书</div><br>
<div align="center"><input type="submit" value="确定" class="j">&nbsp;<input type="reset" class="k"></div>
</form>
</body>
<html>
<?
}
else
{
echo "<script>alert('越权访问！请重新授权登录');</script>";
echo '<meta http-equiv="refresh" content="0;URL=index.php"/>';
}
?>