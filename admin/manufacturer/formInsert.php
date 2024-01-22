<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="process_insert.php" method="post">
		<?php 

			require '../connect.php';
			$sql="select * from category";
			$result = mysqli_query($connect,$sql);

			if (isset($_GET['error'])) {
		?>
			<span style="color:red;">
				<?php echo $_GET['error']; ?>
				<br>	
			</span>
		<?php
			}
		 ?>
		Tên 
		<input type="text" name="name">
		<br>
		Loại sản phẩm
	 	<select name="id_category">
	 		<?php foreach ($result as $each): ?>
	 			<option value="<?php echo $each['id'] ?>">
	 				<?php echo $each['name']; ?>
	 			</option>
	 		<?php endforeach ?>
	 	</select>

		<button>Thêm</button>
	</form>
</body>
</html>