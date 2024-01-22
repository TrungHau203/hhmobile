<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="process_Update.php" method="post">
		<?php
			if(empty($_GET['id'])){
				header('location:index.php?error=Phai truyền mã để sửa');
			} 
			$id = $_GET['id'];
			require '../menu.php';
			require '../connect.php';
			$sql="select * from manufacturer where id ='$id'";
			$result = mysqli_query($connect,$sql);
			$each = mysqli_fetch_array($result);
			$sql="select * from category";
			$category_result = mysqli_query($connect,$sql);
		

		?>
		<input type="hidden" name="id" value="<?php echo $each['id'] ?>">
		Tên 
		<input type="text" name="name"value="<?php echo $each['name'] ?>">
		<br>
		Nhà sản xuất
	 	<select name="id_category">
	 		<?php foreach ($category_result as $category): ?>
	 			<option value="<?php echo $category['id'] ?>" 
	 				<?php if($each['id_category'] == $category['id']) { ?>
	 					selected
	 				<?php } ?>
	 				>
	 				<?php echo $category['name']; ?>
	 			</option>
	 		<?php endforeach ?>
	 	</select>
		<br>
		<button>Sửa</button>
	</form>
</body>
</html>