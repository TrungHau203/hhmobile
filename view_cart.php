<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/form.css">
	<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://bbbootstrap.com/snippets/embed/bootstrap-comment-section-navbar-26188744">
	<link rel="stylesheet" href="./font/fontawesome-free-6.0.0-web/css/all.css">
	<link rel="stylesheet" href="./css/style.css">
	<title>Document</title>
</head>
<body>
<div id="main" class="bc-color">
	<?php 
		session_start();
		require 'header.php';
	 ?>
	 <div class="container">
	 		<?php
				$sum =0;
				if(!empty($_SESSION['cart'])){
					$cart =$_SESSION['cart'];
			foreach ($cart as $id => $each){ ?>
	 	<div class="row bc-color_product br__16 m__8-2 wrapper fadeInDown pos__relative mt__30">
			<div class="p__20-10-40  col">
				<div class="image">
					<p>Sản phẩm</p>
					<a href="product__detail.php?id=<?php echo $each['id']; ?>" target="_blank" class="d-block">
						<img src="<?php echo $each['image'] ?>" class="" alt="...">
						<a href="product__detail.php?id=<?php echo $each['id']; ?>" target="_blank" class="d-block"><?php echo $each['name'] ?></a>
					<strong><?php echo $each['price'] ?></strong>
					<strike><?php echo $each['old_price'] ?>"</strike>
					</a>
					<p>Số Lượng</p>
					<a href="update_quantity_in_cart.php?id=<?php echo $id ?>&type=decrea" class="btn-quantity">-</a>
						<?php echo $each['quantity'] ?>
					<a href="update_quantity_in_cart.php?id=<?php echo $id ?>&type=increa" class="btn-quantity">+</a>
				</div>
			</div>
			<a href="delete_product_cart.php?id=<?php echo $id; ?>" class="">
				<i class="fa-solid fa-xmark cancel_submit"></i>
			</a>
	  </div>
			<?php
				$total_money = $each['quantity'] * $each['current_price'];
				$sum+=$total_money; 
				// Kết thúc vòng lặp for
				}
			?>
			<h2 style="color: #000;" class="mt__30">Tổng tiền <?php echo $sum . "Đ"?></h2>	
	</div>
	<div class="container">
		<?php 
		if(empty($_SESSION['id'])){ ?>
		<span>Mời bạn</span>
		<a href="signUp.php" style="color: #00483d; font-weight: bold;">ĐĂNG KÍ</a>
		<span>Hoặc</span>
		<a href="signIn.php" style="color: #00483d; font-weight: bold;">ĐĂNG NHẬP</a>
		<span>Đề thanh toán</span>
		<?php } else{ 
		$id=$_SESSION['id'];
		require 'admin/connect.php';
		$sql="select * from user where id ='$id'";
		$result = mysqli_query($connect,$sql);
		$each = mysqli_fetch_array($result);
		?>
	</div>
	<div class="container text-center">
	  <div class="row row-cols-1">
	    <div class="col wrapper fadeInDown">
				<div id="formContent">
					<form method="POST" action="processCheckOut.php">
						<h2 class="active">Thông tin đặt hàng</h2>
						<br>
						Tên người nhận
						<input type="text" name="name_receiver" value="<?php echo $each['name'] ?>">
						<br>
						Số điện thoại người nhận
						<input type="text" name="phone_receiver" value="<?php echo $each['phone_number'] ?>">
						<br>
						Địa chỉ người nhận
						<input type="text" name="address_receiver" value="<?php echo $each['address'] ?>">
						<textarea placeholder="Ghi chú"></textarea>
						<input type="submit" class="fadeIn fourth" value="Xác nhận và đặt hàng">
					</form>
				</div>
			</div>
		</div>
	 </div>
		
	<?php } ?>
	<!-- có thể bạn sẽ thích -->
      <div class="container container__product">
        <div class="corner__heading content p__0" >
            <h4 class="product_heading">
            <a href="#">Có thể bạn sẽ thích</a>
          </h4>
        </div>
        <div class="bc-color_product br__16">
          <div class="slide__product row">
            <div class="col p__20-10-40">
              <div>
                <a href="#">
                  <img src="img/image-removebg-preview-19.png" class="" alt="...">
                  <a href="#" class="d-block">Xiaomi 11 Lite 5G NE - 8GB/128GB - Chính hãng </a>
                </a>
                <strong>9,490,000 ₫</strong>
                <strike>9,490,000 ₫</strike> 
              </div>
            </div>
            <div class="col p__20-10-40">
              <div>
                <a href="#" class="d-block">
                  <img src="img/laptop-hp-envy-13-ba1537tu-4u6p0pa-2.png" class="" alt="...">
                  <a href="#" class="d-block">Laptop HP Envy 13-ba1537TU - 4U6P0PA <br> (i5-1135G7/RAM 8Gb/256Gb/13.3'' FHD)</a>
                </a>
                <strong>17,990,000 ₫</strong>
                <strike>23,990,000 ₫</strike>
              </div>
            </div>
            <div class="col p__20-10-40">
              <div>
                <a href="#" class="d-block">
                  <img src="img/image-removebg-preview-1.png" class="" alt="...">
                  <a href="#" class="d-block">Redmi Buds 3 Lite-Chính hãng</a>
                </a>
                <strong>450,000 ₫</strong>
                <strike>590,000 ₫</strike>
              </div> 
            </div>
            <div class="col p__20-10-40">
              <div>
                <a href="#" class="d-block">
                  <img src="img/image-removebg-preview.png" class="" alt="...">
                  <a href="#" class="d-block">Samsung Galaxy A73 5G - Chính hãng</a>
                </a>
                <strong>10,190,000 ₫</strong>
                <strike>11,990,000 ₫</strike>
              </div>
            </div>
            <div class="col p__20-10-40">
              <div>
                <a href="#" class="d-block">
                  <img src="img/image-removebg-preview.png" class="" alt="...">
                  <a href="#" class="d-block">Samsung Galaxy A73 5G - Chính hãng</a>
                </a>
                <strong>10,190,000 ₫</strong>
                <strike>11,990,000 ₫</strike>
              </div>
            </div>
          </div>
        </div>
      </div>
	<?php	} else { ?>
			<h1>Bạn chưa thêm sản phẩm nào vào giỏ hàng</h1>
			<?php } ?>
	<?php require'footer.php'; ?>
</div>
</body>
<script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"
  ></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js" integrity="sha512-WNZwVebQjhSxEzwbettGuQgWxbpYdoLf7mH+25A7sfQbbxKeS5SQ9QBf97zOY4nOlwtksgDA/czSTmfj4DUEiQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="./js/js.js"></script>

</html>

