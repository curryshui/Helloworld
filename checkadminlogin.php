
<?php
//��ʼ��session
session_start();
// $_SESSION['UserName'] ������$UserName��������
if(isset($_SESSION['Adm'])) {
	//�ض��򵽹�������
	header("Location:head.php");
	// ��¼���Ļ�����������
   exit;
}

// ��ò���
$nickname=$_POST['username'];
$password=$_POST['password'];
// ������Ա�ʺź������Ƿ���ȷ,
// �������ֱ�Ӽ�⣬����Ҫ�������ݿ�
    echo  $nickname;
if( $nickname=="admin" and $password=="123456") {
	//ע��session���������浱ǰ�Ự�û����ǳ�
	$_session['Adm']=$nickname;
    echo"hehe";
	// ��¼�ɹ��ض��򵽹���ҳ��
    include('head.php');
	header("Location:head.php");
}
else { 
	// ����ͷ�ļ�
	include('head.php');
    // ����Ա��¼ʧ��
	  echo "<script language='javascript'>alert('the name and password is wrong');history.back();</script>";

}

?>

