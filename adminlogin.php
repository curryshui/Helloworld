<?
//初始化session
session_start();

// $_SESSION['UserName'] 不能用$UserName变量代替
if(isset($_SESSION['Adm'])) {
	//重定向到借书页面
	header("Location:head.php");
	// 登录过的话，立即结束
   exit;
}
// 包含头文件
include('head.php');
?>
<script language="javascript"> 
    function checklogin()
    { 
      if ((login.username.value!="") && (login.password.value!=""))
        // 如果昵称和密码均不为空,则返回true
         return true
      else {
        // 如果昵称或密码为空,则显示警告信息
         alert("name and password can not be null!")
         return false
      } 	
    } 
</script>

<h1></h1>
<form action="checkadminlogin.php" method="post" name="login" onsubmit="return checklogin()">
<p align="center">admin login</p>
<table align="center" border="0">
 <tr>
  <th>
<body style="background-image:url('img/015.jpg');background-position:center; background-repeat:repeat-y">
adminname:
  </th>
  <th>
<input type="text" name="username">
  </th>
 </tr>
 <tr>
  <th>
password:
  </th>
  <th>
<input type="password" name="password">
  </th>
 </tr>
 <tr>
  <th colspan="2" align="right">
<input type="submit" value="login">
</form>
  </th>
 </tr>
</table>
