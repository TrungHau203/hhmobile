<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Đăng kí</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./font/fontawesome-free-6.0.0-web/css/all.css">
	<link rel="stylesheet" href="./css/form.css">
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
<div id="main" class="">	
	<?php
		require 'header.php';
	?>
	<div class="container text-center">
	  <div class="row row-cols-1">
	    <div class="col wrapper fadeInDown">
				<div id="formContent">
				<?php  if(isset($_SESSION['error'])){ ?>
					<p><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></p>
				<?php }?>
					<!-- Tabs Titles -->
					<h2 class="active"> Sign Up</h2>
					<h2 class="inactive underlineHover"><a href="signIn.php">Sign In</a></h2>
					<!-- Login Form -->
					<form method="POST" action="processSignUp.php">
						<input type="text" id="login" class="fadeIn second" name="name" placeholder="Tên đăng nhập">
						<input type="text" id="login" class="fadeIn second" name="email" placeholder="Email">
						<input type="text" id="password" class="fadeIn third" name="password" placeholder="Mật khẩu">
						<input type="text" id="login" class="fadeIn second" name="phone" placeholder="Số Điện Thoại">
						<input type="text" id="login" class="fadeIn second" name="address" placeholder="Địa chỉ">
						<input type="submit" class="fadeIn fourth" value="Sign Up">
					</form>
					<!-- Remind Passowrd -->
					<div id="formFooter">
						<a class="underlineHover" href="signIn.php">Đã có tài khoản? Đăng nhập</a>
					</div>
				</div>
			</div>
	  </div>
	</div>
	<?php 
		require 'footer.php';
	?>
<div/>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html>