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
		<br>
		<button>Thêm</button>
	</form>
</body>
</html>