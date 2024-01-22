<ul>
	<li>
		<a href="../manufacturer">Quản lí Nhà sản xuất</a>
	</li>
	<li>
		<a href="../products">Quản lí sản phẩm</a>
	</li>
	<li>
		<a href="../category">Quản lí loại sản phẩm</a>
	</li>
</ul>
<?php if (isset($_GET['error'])){ ?>
	<span style="color:red;">
		<?php echo $_GET['error']; ?>
		<br>
	</span>
<?php } ?>

<?php if (isset($_GET['success'])){ ?>
	<span style="color:green;">
		<?php echo $_GET['success']; ?>
		<br>
	</span>
<?php } ?>