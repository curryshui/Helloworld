<?php

session_start();
require ('head.php');

// 如果没有登录，退出
if(isset($_SESSION['Adm'])) {
if($_SESSION['Adm']==null)
	{
	echo "<script language='javascript'>alert('you are not admin');window.location.href='head.php';</script>";
	
	}
	// 登录过的话，立即结束
   exit;
} 

?>

<?php
require ('dbconnect.php');
//header(”Content-Type: text/html; charset=UTF-8″)
// 获得上一页传递参数
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

// 检测是否已经存在该书
// 需要同时检测该书的书名，作者，出版社，年份
$checksql="select * from book where title='$title' ";
$checkresult=mysql_query($checksql,$conn);
$checkrow=mysql_fetch_array($checkresult);
if(!empty($checkrow)){
	// 该书已经入库，退出操作
  echo "<script language='javascript'>alert('the book exists already');history.back();</script>";
}
// 可以顺利入库
$sql="insert into book(title, author, publisher, publish_year, total, leave_number,other) values('$title','$author','$publisher','$publish_year','$total','$total','$other')";
mysql_query($sql,$conn) or die("操作失败：".mysql_error());

$checksql="select * from book where title='$title' ";
$checkresult=mysql_query($checksql,$conn);
$checkrow=mysql_fetch_array($checkresult);;
if(!empty($checkrow)){
	// 该书已经入库，退出操作
  echo "<script language='javascript'>alert('the book is added sucessfully');history.back();</script>";
}
?>