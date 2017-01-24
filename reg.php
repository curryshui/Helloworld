<?
include("head.php");
?>
<script language="javascript"> 
    function checkreg()
    { 			
		if (form1.name.value=="")
		{
			// 如果真实姓名为空，则显示警告信息
	        alert("真实姓名不能为空！");
			form1.name.focus();
			return false;
	    }
		if (form1.password.value=="" )
		{
			// 如果密码为空，则显示警告信息
	        alert("密码不能为空！");
			form1.password.focus();
			return false;
	    }
		if (form1.pwd.value=="" )
		{
			// 如果密码为空，则显示警告信息
	        alert("确认密码不能为空！");
			form1.pwd.focus();
			return false;
	    }
		// 两次密码应一样
		if (form1.password.value!=form1.pwd.value && form1.password.value!="")
		{
			alert("两次密码不一样，请确认！");
			form1.password.focus();
			return false;
		}
		if (form1.email.value=="")
		{
			// 如果Email为空，则显示警告信息
	        alert("Email不能为空！");
			form1.email.focus();
			return false;
	    }
			// 检查email格式是否正确
		else if (form1.email.value.charAt(0)=="." ||
			form1.email.value.charAt(0)=="@"||
			form1.email.value.indexOf('@', 0) == -1 ||
			form1.email.value.indexOf('.', 0) == -1 ||
			form1.email.value.lastIndexOf("@")==form1.email.value.length-1 ||
			form1.email.value.lastIndexOf(".")==form1.email.value.length-1)
		{
			alert("Email的格式不正确！");
			form1.email.select();
			return false;
		}
		return true;

    }	
</script>

<html>
<body>

<form name="form1" method="post" action="regok.php" enctype='multipart/form-data' onsubmit="return checkreg()" >
  <table border="0" cellspacing="1" cellpadding="3" align="center">
    <tr> 
      <th colspan="2"><font size="5">user register</font></th>
    </tr>    
    <tr> 
      <td>name:</td>
      <td> 
        <input type="text" name="name">
    </tr>
    <tr> 
      <td>password:</td>
      <td> 
        <input type="password" name="password">        
    </tr>
	<tr> 
      <td>reinput:</td>
      <td> 
        <input type="password" name="pwd">        
    </tr>
	<tr> 
      <td>email:</td>
      <td> 
        <input type="text" name="email">        
    </tr>
	 <tr> 
      <td>phone num:</td>
      <td> 
        <input type="text" name="tel">
    </tr>
	<tr> 
      <td>address:</td>
      <td> 
        <input type="text" name="address">
    </tr>    
    <tr> 
      <td  align=right > 
        <input type="submit" name="Submit" value="register">
      </td>
      <td align=center> 
        <input type="reset" name="Submit2" value="rewrite">
      </td>
    </tr>
  </table>
</form>

</body>
</html>