<?
include ('head.php');
require ('dbconnect.php');
// 查询书不需要登录
?>
<script language="javascript"> 
	function checksearch(){
		if (form1.id.value=="" && form1.title.value=="" && form1.author.value=="" && form1.publisher.value=="" && form1.year.value==""){
			// 没有输入查询信息
			alert("没有输入查询信息!");
	         return false;	
		}
		return true;
	}
</script>
<h1></h1>
<form action="checklogin.php" method="post" name="login" onsubmit="return checklogin()">
<html>
<body>

<form name="form1" method="post" action="borrow_result.php" onsubmit="return checksearch()">
  <table width="60%" border="0" cellspacing="1" cellpadding="3" align="center">
    <tr> 
      <th colspan="2">borrow</th>
    </tr>
    <tr> 
      <td width="26%" align="right">bookid</td>
      <td width="74%"> 
        <input type="text" name="id" size="10">
      </td>
    </tr>
    <tr> 
      <td width="26%" align="right">bookname</td>
      <td height="25" width="74%"> 
        <input type="text" name="title" size="50">
      </td>
    </tr>
    <tr> 
      <td height="25" width="26%" align="right">author</td>
      <td width="74%"> 
        <input type="text" name="author" size="50" maxlength="100">
      </td>
    </tr>
    <tr> 
      <td width="26%" align="right">publisher</td>
      <td width="74%"> 
        <input type="text" name="publisher" size="50" maxlength="100">
      </td>
    </tr>
    <tr> 
      <td width="26%" align="right">year</td>
      <td width="74%"> 
        <input type="text" name="year" size="10">
      </td>
    </tr>
    <tr> 
      <td width="26%" align="right"> 
        <input type="submit" name="Submit" value="submit">
      </td>
      <td width="74%"> 
        <input type="reset" name="Submit2" value="reset">
      </td>
    </tr>
  </table>
</form>


</body>
</html>