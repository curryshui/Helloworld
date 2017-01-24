<?
//初始化session
session_start();
include ('head.php');
require ('dbconnect.php');
// 如果没有登录过，提示用户登录
if(!isset($_SESSION['user'])) {?>
   <p align=center>
   <font color=#FF0000 size=5><strong><big>
   您还没有登录,请<a href='login.php'>登录</a>!
   </big></strong></font></p>
   <? exit();
}

?>
<?
$user_id=$_SESSION['user'];
$sql="select * from lend where user_id='$user_id'";
$result=mysql_query($sql,$conn);
$num=mysql_num_rows($result);

// 如果用户没有借书，提示用户
if ($num==0){
?>
	<p align=center>您的借书数量为<font color=red>0</font>！</p>
	<?
	exit();
} 
	else {
?>
<p align=center>您的借书数量为<font color=red>$num</font>！已借书目如下：</p>
<p align='center'>&nbsp;</p>
<table border=1 width='80%' align=center>
<th >书号</th>
<th >书名</th>
<th >作者</th>
<th >出版社</th>
<th >年份</th>
<th >借阅时间</th>
<?
	}
while($row=mysql_fetch_array($result)){
	// 获得该书详细信息
	$bsql="select * from book where id='$row[book_id]'";
	$bresult=mysql_query($bsql,$conn);
	$binfo=mysql_fetch_array($bresult);
	?>
	<tr><td>$row[book_id]</td>
	<td>$binfo[title]</td>
	<td>$binfo[author]</td>
	<td>$binfo[publisher]</td>
	<td>$binfo[publish_year]</td>
	<td>$row[lend_time]</td>
	</tr>
	<?
}
?> 	</table>
