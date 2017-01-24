<?php
session_start();
$_SESSION['user']=null;
$_SESSION['Adm']=null;
//×¢Ïúsession
//session_unset();
//session_destroy();
include('head.php');
?>
<html>
<head>
<title>logout</title>
</head>
<body>
<p align="center">succesfull logout</p>
<p align="center">welcome your login next time </p>
<p align="center"><a href="login.php">relogin</a></p>
</body>
</html>
