<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
	    <script src="js/1.js"></script>
		<script src="js/sakura.js"></script>
		<p></p>
		<p></p>
		<p></p>
		<p></p>
		<table border="1" align="center">
			<form action="xj_result.php" method="get">
			<tr>
				<td colspan="2" bgcolor="grey" align="center" width="400px" height="60px">续借图书办理</td>
				</tr>
			<tr>
				<td align="right">图书号：</td>
			    <td><input type="text" name="tsh"   value=""  placeholder="输入要续借的图书号"/></td>
			</tr>
			<tr>
				<td align="right">图书名称：</td>
				<td><input type="text" name="tsmc"  value=""  placeholder="输入要续借的图书名称"/></td>
			</tr>
			<tr>
				<td align="right">借书时间：</td>
				<td><input type="text" name="jssj"  value=""  placeholder="输入借书时间"/></td>
			</tr>
			<tr>
				<td align="right">应还时间：</td>
				<td><input type="text" name="yhsj"  value=""  placeholder="输入归还时间"/></td>
			</tr>
			<tr><td colspan="2" align="center"><input type="submit" name="" id="" value="提交" />&nbsp; <input type="button" name="" id="" value="取消修改" /></td>
			</tr>
		</form>
		</table>
	</body>
</html>
