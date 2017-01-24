
<script language="javascript"> 
    function checklogin()
    { 
      if ((login.username.value!="") && (login.password.value!=""))
        // 如果昵称和密码均不为空,则返回true
         return true
      else {
        // 如果昵称或密码为空,则显示警告信息
         alert("password and username can not be null!")
         return false
      } 	
    } 
</script>


<h1></h1>
<form action="checklogin.php" method="post" name="login" onsubmit="return checklogin()">
<p align="center">login</p>
<body style="background-image:url('img/015.jpg');background-position:center; background-repeat:repeat-y">
<table align="center" border="0">
 <tr>
  <th>
user id:
  </th>
  <th>
<input type="username" name="username">
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
 <tr><td colspan=2><a href="reg.php">register</a></td></tr>
 <tr>
  <th colspan="2" align="right">
<input type="submit" value="login">
 </th>
 </tr></form>
 
</table>