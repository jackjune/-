<html>
<head>
<meta charset="utf-8" />
<title>修改账户</title>
</head>
<body>
   <form method="get" action="xgzh_result.php" >
       <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>" />
       <table border="1" width="500" height="200" align="center">
           <caption>修改账户</caption>
           <tr>
               <td>用户id</td>
               <td><input type="text" name="id" value="<?php echo $_GET['id']?>"/></td>
           </tr>
           <tr>
               <td>用户姓名</td>
               <td><input type="text" name="xm" value="<?php echo $_GET['xm'] ?>"  /></td>
           </tr>
           <tr>
               <td>用户班级</td>
               <td><input  type="text" name="bj" value="<?php echo $_GET['bj'] ?>"  /></td>
           </tr>
           <tr>
               <td>用户状态</td>
               <td><input  type="text" name="zt" value="<?php echo $_GET['zt'] ?>"  /></td>
           </tr>
           <tr>    
           <tr>
               <td colspan="2" align="center"><input type="submit" value="提交" />&nbsp;&nbsp;<input type="reset" value="重置" /></td>
           </tr>
       </table>
   </form>
</body>
</html>