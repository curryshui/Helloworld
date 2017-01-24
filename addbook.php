<?php
	
	/*
		asjfsfjipajfiajfiajfiwef
	*/
?>
<script language="javascript"> 
    function checkadd()
    { 	
		if (form1.title.value=="")
		{
			// 如果书名名为空，则显示警告信息
	        alert("书名不能为空");
			form1.title.focus();
			return false;
	    }
		if (form1.author.value=="" )
		{
			// Èç¹û×÷ÕßÎª¿Õ£¬ÔòÏÔÊ¾¾¯¸æÐÅÏ¢
	        alert("作者不能为空！");
			form1.author.focus();
			return false;
	    }
		if (form1.publisher.value=="" )
		{
			// Èç¹û³ö°æÉçÎª¿Õ£¬ÔòÏÔÊ¾¾¯¸æÐÅÏ¢
	        alert("出版社不能为空！");
			form1.publisher.focus();
			return false;
	    }
		if (form1.publish_year.value=="")
		{
			// Èç¹û³ö°æÄê·ÝÎª¿Õ£¬ÔòÏÔÊ¾¾¯¸æÐÅÏ¢
	        alert("出版年份不能为空！");
			form1.publish_year.focus();
			return false;
	    }
		if (form1.publish_year.value <1000 || form1.publish_year.value >3000)
		{
			// Èç¹û³ö°æÄê·Ý²»ÕýÈ·£¬ÔòÏÔÊ¾¾¯¸æÐÅÏ¢
	        alert("出版年份不正确！");
			form1.publish_year.focus();
			return false;
	    }
		if (form1.total.value=="")
		{
			// Èç¹ûÈë¿âÊýÁ¿Îª¿Õ£¬ÔòÏÔÊ¾¾¯¸æÐÅÏ¢
	        alert("入库数量不能为空！");
			form1.total.focus();
			return false;
	    }
								
		return true;

    }	
</script>

<tr>
  <th>
<body style="background-image:url('img/015.jpg');background-position:center; background-repeat:repeat-y">
<form method="post" action="#" onclick="checkadd">
  <table width="50%" border="0" cellspacing="1" cellpadding="3" align="center">
    <tr> 
      <th colspan="2">新书入库</th>
    </tr>
    <tr> 
      <td width="26%" align="right">书名：</td>
      <td width="74%"> 
        <input type="text" name="title" size="50" maxlength="100">
      </td>
    </tr>
    <tr> 
      <td width="26%" align="right">作者：</td>
      <td width="74%"> 
        <input type="text" name="author" size="50" maxlength="100">
      </td>
    </tr>
    <tr> 

      <td width="26%" align="right">出版社：</td>
      <td width="74%"> 
        <input type="text" name="publisher" size="50" maxlength="50">
      </td>
    </tr>
    <tr> 
      <td width="26%" align="right">出版年份：</td>
      <td width="74%"> 
        <input type="text" name="publish_year" size="10" maxlength="10">
        年 </td>
    </tr>
    <tr> 
      <td width="26%" align="right">入库数量：</td>
      <td width="74%"> 
        <input type="text" name="total" size="10" maxlength="10">
        册</td>
    </tr>
    <tr> 
      <td width="26%" align="right">备注：</td>
      <td width="74%"> 
        <textarea name="other" cols="50"></textarea>
      </td>
    </tr>
    <tr> 
      <td width="26%" align="right"> 
        <input type="submit" name="Submit" value="提交">
      </td>
      <td width="74%"> 
        <input type="reset" name="Reset" value="重置">
      </td>
    </tr>
  </table>
</form>


