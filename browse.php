<?
//��ʼ��session
session_start();
include ('head.php');
require ('dbconnect.php');
// ���û�е�¼������ʾ�û���¼
if(!isset($_SESSION['user'])) {?>
   <p align=center>
   <font color=#FF0000 size=5><strong><big>
   ����û�е�¼,��<a href='login.php'>��¼</a>!
   </big></strong></font></p>
   <? exit();
}

?>
<?
$user_id=$_SESSION['user'];
$sql="select * from lend where user_id='$user_id'";
$result=mysql_query($sql,$conn);
$num=mysql_num_rows($result);

// ����û�û�н��飬��ʾ�û�
if ($num==0){
?>
	<p align=center>���Ľ�������Ϊ<font color=red>0</font>��</p>
	<?
	exit();
} 
	else {
?>
<p align=center>���Ľ�������Ϊ<font color=red>$num</font>���ѽ���Ŀ���£�</p>
<p align='center'>&nbsp;</p>
<table border=1 width='80%' align=center>
<th >���</th>
<th >����</th>
<th >����</th>
<th >������</th>
<th >���</th>
<th >����ʱ��</th>
<?
	}
while($row=mysql_fetch_array($result)){
	// ��ø�����ϸ��Ϣ
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
