<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="process_Delete.php" method="post">
		<?php
			if(empty($_GET['id'])){
				header('location:index.php?error=Phai truyền mã để Xóa');
			} 
			$id = $_GET['id'];
			require '../menu.php';
			require '../connect.php';
			$sql="select * from manufacturer where id ='$id'";
			$result = mysqli_query($connect,$sql);
			$each = mysqli_fetch_array($result);

		?>
		<input type="hidden" name="id" value="<?php echo $each['id'] ?>">
		Tên 
		<input type="text" name="name"value="<?php echo $each['name'] ?>">
		<br>
		
		<button>Xóa</button>
	</form>
</body>
</html>