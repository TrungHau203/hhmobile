<?php session_start();
	if(empty($_SESSION['id'])){
		header("location:signIn.php?error=Đăng nhập đi bạn");
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	Đây là trang người dùng.  Xin chào bạn 
	<?php echo $_SESSION['name'] ?>
	<a href="signOut.php">Đăng xuất</a>
</body>
</html>