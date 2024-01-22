<?php 
     $contentProduct = '';
     $contentProduct = $_GET['contentProduct'];
     require '../connect.php';
     require '../menu.php';
     $sql = "SELECT products.*, manufacturer.name as manufacturer_name from products INNER join manufacturer on products.id_manufacturer = manufacturer.id 
     where products.name like '%$contentProduct%' 
     or products.config like '%$contentProduct%' or products.description like '%$contentProduct%'";
     $result = mysqli_query($connect,$sql);
     $arr_result = mysqli_fetch_array($result);
?>
<h1>Quản lí Sản phẩm</h1>
<a href="formInsert.php">
     Thêm
</a>
<form action="processSearch.php">
     Tìm kiếm <input type="search" name="contentProduct" id="">
     <input type="submit">
</form>



<table border="1" width="100%">
		<tr>
			<th>Mã</th>
			<th>Tên</th>
			<th>Ảnh</th>
			<th>Giá mới</th>
			<th>Giá cũ</th>
			<th>Mô tả</th>
			<th>Cấu hình</th>
			<th>Nhà sản xuất</th>
		</tr>
     <?php foreach ($result as $each): ?>
		<tr>
			<td><?php echo $each['id']; ?></td>
			<td><?php echo $each['name']; ?></td>
			<td>
				<img width="200" src="<?php echo $each['image']; ?>" width=200px alt="">
			</td>
			<td><?php echo $each['price']; ?></td>
			<td><?php echo $each['old_price']; ?></td>
			<td>
		<?php 
			if($each['id_manufacturer'] == 1){
		 ?>
				<?php list($var1,$var2,$var3,$var4,$var5) = explode("|||",$each['description']);?>
				<p><?php echo $var1 ?></p>
				<img src="<?php echo $var2; ?>" width=200px alt="">
				<h3><?php echo $var3 ?></h3>
				<p><?php echo $var4 ?></p>
				<img src="<?php echo $var5; ?>" width=200px alt="">	
		<?php } else { ?>
				<?php list($var1,$var2,$var3,$var4,$var5) = explode("|||",$each['description']);?>
				<h3><?php echo $var1 ?></h3>
				<p><?php echo $var2 ?></p>
				<h3><?php echo $var3 ?></p>
				<p><?php echo $var4 ?></p>
				<img src="<?php echo $var5; ?>" width=200px alt="">	
		<?php } ?>
			</td>
			<td>
				<?php list($var1,$var2,$var3,$var4,$var5,$var6,$var7,$var8,$var9,$var10) = explode("|||",$each['config']);
				?>
				<img src="<?php echo $var1; ?>" alt="">
				<p><?php echo $var2 ?></p>
				<p><?php echo $var3 ?></p>
				<p><?php echo $var4 ?></p>
				<p><?php echo $var5 ?></p>
				<p><?php echo $var6 ?></p>
				<p><?php echo $var7 ?></p>
				<p><?php echo $var8 ?></p>
				<p><?php echo $var9 ?></p>
				<p><?php echo $var10 ?></p>
			</td>
			<td><?php echo $each['manufacturer_name']; ?></td>
			<td>
				<a href="formUpdate.php?id=<?php echo $each['id']; ?>">Sửa</a>
			</td>
			<td>
				<a href="Delete.php?id=<?php echo $each['id']; ?>">Xóa</a>
			</td>
		</tr>
	<?php endforeach ?>
</table>

