<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$address = $_POST['address'];
require 'admin/connect.php';
$sql ="select count(*) from user where email='$email'";
$result = mysqli_query($connect,$sql);
$rows_number = mysqli_fetch_array($result)['count(*)'];
if($rows_number >0){
	session_start();
	$_SESSION['error']="Email đã tồn tại, vui lòng chọn email khác ";
	header("location:signUp.php");
	exit;
}
$sql = "insert into user(name,email,password,address,phone_number) values('$name','$email','$password','$address','$phone')";
echo $sql;
mysqli_query($connect,$sql);

$sql ="select id from user where email='$email'";
echo $sql;
$result = mysqli_query($connect,$sql);
$array =mysqli_fetch_array($result);
$id = $array['id'];
session_start();
$_SESSION['id']=$id;
$_SESSION['name']=$name;
header("location:signIn.php");
mysqli_close($connect);

