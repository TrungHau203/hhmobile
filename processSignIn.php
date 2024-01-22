<?php 
$email = $_POST['email'];
$password = $_POST['password'];
echo $password;
echo $email;
require 'admin/connect.php';
$sql ="select * from user where email='$email' and password='$password'";
echo $sql;
$result = mysqli_query($connect,$sql);
$rows_number = mysqli_num_rows($result);
echo $rows_number;

if($rows_number ==1){
	echo "Đăng nhập thành công";
	session_start();
	$each = mysqli_fetch_array($result);
	$_SESSION['id']=$each['id'];
	$_SESSION['name']=$each['name'];
	header("location:index.php");
	exit;
}
else{
	session_start();
	$_SESSION['error']="Đăng nhập thất bại, vui lòng kiểm tra tài khoản và mật khẩu hoặc ";
	header("location:signIn.php");
}
