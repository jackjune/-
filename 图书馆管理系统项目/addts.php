<html>
<meta charset="utf-8" />
<title>图书添加</title>
</head>
<body>
    <script src="js/1.js"></script>
	<script src="js/sakura.js"></script>
   <form method="get" action="addts_result.php" >
       <table border="1" width="500" height="200" align="center">
           <caption>添加图书</caption>
           <tr>
               <td>图书号</td>
               <td><input type="text" name="tsh" value="" /></td>
           </tr>
           <tr>
               <td>图书名</td>
               <td><input type="text" name="tsm" value="" /></td>
           </tr>
           <tr>
               <td>作者</td>
               <td><input type="text" name="zz" value="">
           </tr>
           <tr>
               <td align="left">状态</td>
               <td><select name="zt">
               <option>请选择状态</option>
               <option value="在馆">在馆</option>
               <option value="已借出">已借出</option>
            </select></td>
           </tr>
           <tr>
               <td colspan="2" align="center"><input type="submit" value="提交" />&nbsp;&nbsp;<input type="reset" value="重置" /></td>
           </tr>
       </table>
   </form>
</body>
</html>