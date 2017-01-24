<?php
session_start();
// 如果已经登录过，直接退出
if(isset($_SESSION['user'])) {
	//重定向到管理留言
	if($_SESSION['user']!=null)
	{
	echo "<script language='javascript'>alert('you have logined already');window.location.href='head.php';</script>";
	
	}
	// 登录过的话，立即结束
   exit;
}
require ('dbconnect.php');
// 获得参数
$nickname=$_POST['username'];
$password=$_POST['password'];
$password=md5($password);
echo $password;
// 检查帐号和密码是否正确,
$sql="select * from user where name='$nickname' and password='$password'";
$re=mysql_query($sql,$conn);
$result=mysql_fetch_array($re);
echo $result[0];
// 如果用户登录正确

if( !empty($result)) {
	//注册session变量，保存当前会话用户的昵称
	$_SESSION['user']=$nickname;
	

	// 登录成功重定向到管理页面
    include('head.php');
	header("Location:head.php");
}
else { 
  echo "<script language='javascript'>alert('the name and password is wrong');history.back();</script>";
	


}
?>