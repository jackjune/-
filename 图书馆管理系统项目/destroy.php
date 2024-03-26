<?
setcookie("us",$_POST['name'],time()-1000);
var_dump($_COOKIE);
header('location:index.php');
?>