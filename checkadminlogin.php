
<?php
//初始化session
session_start();
// $_SESSION['UserName'] 不能用$UserName变量代替
if(isset($_SESSION['Adm'])) {
	//重定向到管理留言
	header("Location:head.php");
	// 登录过的话，立即结束
   exit;
}

// 获得参数
$nickname=$_POST['username'];
$password=$_POST['password'];
// 检查管理员帐号和密码是否正确,
// 这里采用直接检测，不需要连接数据库
    echo  $nickname;
if( $nickname=="admin" and $password=="123456") {
	//注册session变量，保存当前会话用户的昵称
	$_session['Adm']=$nickname;
    echo"hehe";
	// 登录成功重定向到管理页面
    include('head.php');
	header("Location:head.php");
}
else { 
	// 包含头文件
	include('head.php');
    // 管理员登录失败
	  echo "<script language='javascript'>alert('the name and password is wrong');history.back();</script>";

}

?>

