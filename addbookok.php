<?php

session_start();
require ('head.php');

// ���û�е�¼���˳�
if(isset($_SESSION['Adm'])) {
if($_SESSION['Adm']==null)
	{
	echo "<script language='javascript'>alert('you are not admin');window.location.href='head.php';</script>";
	
	}
	// ��¼���Ļ�����������
   exit;
} 

?>

<?php
require ('dbconnect.php');
//header(��Content-Type: text/html; charset=UTF-8��)
// �����һҳ���ݲ���
$title=$_POST['title'];
$author=$_POST['author'];
$publisher=$_POST['publisher'];
$publish_year=$_POST['publish_year'];
$total=$_POST['total'];
$other=$_POST['other'];
print_r ($title);
print_r ($author);
print_r ($publisher);
print_r ($publish_year);
print_r ($total);

//$mysqli = mysqli_connect("localhost","root","","book",3306);
//if(mysqli_connect_errno()){
//	printf("Connect Failed: %s/n",mysqli_connect_error());
//	exit();
//}

// ����Ƿ��Ѿ����ڸ���
// ��Ҫͬʱ����������������ߣ������磬���
$checksql="select * from book where title='$title' ";
$checkresult=mysql_query($checksql,$conn);
$checkrow=mysql_fetch_array($checkresult);
if(!empty($checkrow)){
	// �����Ѿ���⣬�˳�����
  echo "<script language='javascript'>alert('the book exists already');history.back();</script>";
}
// ����˳�����
$sql="insert into book(title, author, publisher, publish_year, total, leave_number,other) values('$title','$author','$publisher','$publish_year','$total','$total','$other')";
mysql_query($sql,$conn) or die("����ʧ�ܣ�".mysql_error());

$checksql="select * from book where title='$title' ";
$checkresult=mysql_query($checksql,$conn);
$checkrow=mysql_fetch_array($checkresult);;
if(!empty($checkrow)){
	// �����Ѿ���⣬�˳�����
  echo "<script language='javascript'>alert('the book is added sucessfully');history.back();</script>";
}
?>