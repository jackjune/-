<?php
   include_once "share.php";
   
   if(empty($_POST["tsh"]) and empty($_POST["tsm"]) and empty($_POST["zz"]) and empty($_POST["zt"]))
    die(" <br /><div align='center'> 请输入查询条件！<br > <a href='find.php'>返回</a></div>");
	
   $conn=mysqli_connect("localhost","root","123456789","ts") or die("数据库连接失败");
   mysqli_query($conn,"set name 'UTF-8'");
  if(!empty($_POST["tsh"])){
	  $sql="select * from biao1 where tsh='".$_POST["tsh"]."'";
	  show_table($sql);
	  die();
  }
    
    if(!empty($_POST["tsm"]) and !empty($_POST["zz"])){
	  $sql="select * from biao1 where tsm='".$_POST["tsm"]."'"."and zz='".$_POST["zz"]."'";
  }
 
    if(!empty($_POST["tsm"]) and empty($_POST["zz"])){
	  $sql="select * from biao1 where tsm='".$_POST["tsm"]."'";
  }
   
    if(!empty($_POST["zz"]) and empty($_POST["tsm"])){
      $sql="select * from biao1 where zz='".$_POST["zz"]."'";
  } 
    if(!empty($_POST['zt'])){
        $sql="select * from biao1 where zt='".$_POST["zt"]."'";
    }
  $tb_caption="查询表";
  show_table($sql);
  

  //show_table函数定义如下:
  function show_table($sql){
    global $tb_caption;  //全局变量
	global $conn;
    $data=mysqli_query($conn,$sql) or die ("<br> 数据表无记录。<br>");
    $rec_count=mysqli_num_rows($data);
   //显示表格标头
  $fds_count=mysqli_num_fields($data);//得到数据集合的字段个数

  echo "<hr> <p></p>";
  echo  '<table width="900" border="1" align="center" >  ';//表格
  echo  '<caption>'.$tb_caption.' </caption> ';//表格标题
  echo  '<tr>';//表格标头行开始
  echo  '<th align="center"> 序号 </th> ';
  for ($j=0;$j<$fds_count;$j++)  {//循环打印一项
    $fd_name=mysqli_fetch_field($data);
    echo  '<th align="center">'.$fd_name->name.'</th> ';
  }
  echo  '</tr>'; //表格标头行结束
  //逐条显示表格记录。
  $i=1;  //显示序号
 while ( $rec=mysqli_fetch_array($data)) {  
   echo  '<tr>';//循环打印一行
   echo  '<td>'.$i.'</td> ';//打印序号项
    for ($j=0;$j<$fds_count;$j++)  { //循环打印字段值
     if (strlen(trim($rec[$j]))<=0) {
      echo  '<td> &nbsp; &nbsp;</td> ';
     }else {
      echo  '<td>'.$rec[$j].'</td> ';
    }//if结束
  }//fro结束
 echo  '</tr>';  
 $i=$i+1; 
 } //while结束
 echo  '</table>';   //结束表格
 echo "<br> <div width='150px' align='center'> 找到".$rec_count."行记录。</div>";
 echo "<hr>";
 echo "<div  width='150px' align='center'> <a href='find.php'>返回</a> </div> ";
}
?>