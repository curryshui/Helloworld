<?php
$conn=mysql_connect("localhost","root","") 
        or die("�����������ݿ�������� ".mysql_error());
mysql_select_db("book",$conn) or die ("����ѡ�����ݿ�: ".mysql_error());
mysql_query( 'set names gbk ',$conn);

?>