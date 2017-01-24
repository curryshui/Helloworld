<?php
$conn=mysql_connect("localhost","root","") 
        or die("不能连接数据库服务器： ".mysql_error());
mysql_select_db("book",$conn) or die ("不能选择数据库: ".mysql_error());
mysql_query( 'set names gbk ',$conn);

?>