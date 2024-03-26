<html>
<meta charset="utf-8" />
<title>用户添加</title>
</head>
<body>
<script src="js/1.js"></script>
   <form method="get" action="add_result.php" >
       <table border="1" width="500" height="200" align="center">
           <caption>添加用户</caption>
           <tr>
               <td>用户id</td>
               <td><input type="text" name="id" value="" /></td>
           </tr>
           <tr>
               <td>姓名</td>
               <td><input type="text" name="xm" value="" /></td>
           </tr>
           <tr>
               <td>班级</td>
               <td><input type="text" name="bj" value="">
           </tr>
           <tr>
               <td align="left">状态</td>
               <td><select name="zt">
               <option>请选择状态</option>
               <option value="正常">正常</option>
               <option value="不正常">不正常</option>
            </select></td>
           </tr>
           <tr>
               <td colspan="2" align="center"><input type="submit" value="提交" />&nbsp;&nbsp;<input type="reset" value="重置" /></td>
           </tr>
       </table>
   </form>
</body>
</html>