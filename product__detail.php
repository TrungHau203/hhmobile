<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	<link rel="stylesheet" href="./css/comment.css">
	<link rel="stylesheet" href="./css/style.css">
	<title>Hoàng Hà mobile</title>
</head>
<body>
<div id="main" class="bc-color">
	<?php  
		$id = $_GET['id'];
		require 'header.php';
		require 'admin/connect.php';
		$sql = "SELECT products.* ,manufacturer.name as manufacturer_name, category.name as category_name from products INNER JOIN manufacturer on products.id_manufacturer = manufacturer.id
			INNER join category on manufacturer.id_category = category.id
			where products.id = '$id'";
		$result = mysqli_query($connect,$sql);
		$arr_result = mysqli_fetch_array($result);
	 ?>
	 <div class="container p__0">
			<ul class="directional__header d-flex" style="flex-wrap:wrap;">
				<li>
					<a href="index.php">
						<i class="fa-solid fa-house"></i>
						<span>Trang chủ</span>
					</a>
				</li>
				<li>
					<i class="fa-solid fa-angle-right"></i>
					<a href="category.php?id=1">
						<span><?php echo $arr_result['category_name']; ?></span>
					</a>
				</li>
				<li>
					<i class="fa-solid fa-angle-right"></i>
					<a href="product.php?id=1">
						<span><?php echo $arr_result['manufacturer_name']; ?></span>
					</a>
				</li>
				<li>
					<i class="fa-solid fa-angle-right"></i>
					<a href="#">
						<span><?php echo $arr_result['name']; ?></span>
					</a>
				</li>
			</ul>
    </div>
		<div class="container text-center">
			<div class="top__product">
				<h1><?php echo $arr_result['name']; ?></h1>
			</div>
			<div class="row">
				<div class="col mb__30">
					<div class="img__detail-product">
						<a href="#">
							<img src="<?php echo $arr_result['image']; ?>" alt="">
						</a>
						<a href="" class="heart ">
							<i class="fa-regular fa-heart heart-box not_yet-liked"></i>
							<i class="fa-solid fa-heart heart-box liked"></i>
						</a>
					</div>
				</div>
				<div class="col-5 type__product text-left mb__30" >
					<div>
						<p>
							<strong class="price__current"><?php echo $arr_result['price']; ?></strong>
							<strike><?php echo $arr_result['old_price']; ?></strike>
							<span>| Giá đã bao gồm 10% VAT</span>
						</p>
						<p class="ship__everywhere">
							<i class="fa-solid fa-truck"></i>
							<span>MIỄN PHÍ VẬN CHUYỂN TOÀN QUỐC</span>
						</p>
						<p >Lựa chọn phiên bản</p>
						<div>
							<div class="text-center">
								<div class="row row-cols-sm-2 row-cols-md-4">
									<div class="col">
										<div class="choose__type">
											<input type="radio" name="type__size">
											<strong>64GB</strong><br>
											<strong><?php echo $arr_result['price']; ?></strong>
										</div>
									</div>
									<div class="col">
										<div class="choose__type">
											<input type="radio" name="type__size">
											<strong>128GB</strong><br>
											<strong><?php echo $arr_result['price']; ?></strong>
										</div>
									</div>
									<div class="col"></div>
									<div class="col"></div>
								</div>
							</div>
						</div>
						<p >Lựa chọn Màu</p>
						<div>
							<div class="text-center">
								<div class="row row-cols-sm-2 row-cols-md-4">
									<div class="col">
										<div class="choose__type">
											<input type="radio" name="type__color">
											<strong>Red</strong><br>
											<strong><?php echo $arr_result['price']; ?></strong>
										</div>
									</div>
									<div class="col">
										<div class="choose__type">
											<input type="radio" name="type__color">
											<strong>Yellow</strong><br>
											<strong><?php echo $arr_result['price']; ?></strong>
										</div>
									</div>
									<div class="col">
										<div class="choose__type">
											<input type="radio" name="type__color">
											<strong>Black</strong><br>
											<strong><?php echo $arr_result['price']; ?></strong>
										</div>
									</div>
									<div class="col">
										<div class="choose__type">
											<input type="radio" name="type__color">
											<strong>White</strong><br>
											<strong><?php echo $arr_result['price']; ?></strong>
										</div>
									</div>
									<div class="col">
										<div class="choose__type">
											<input type="radio" name="type__color">
											<strong>Green</strong><br>
											<strong><?php echo $arr_result['price']; ?></strong>
										</div>
									</div>
									<div class="col">
										<div class="choose__type">
											<input type="radio" name="type__color">
											<strong>Purple</strong><br>
											<strong><?php echo $arr_result['price']; ?></strong>
										</div>
									</div>
								</div>
							</div>
						</div>
						<p ><strong>Khuyến mãi</strong></p>
						<ul class="sale_detal">
							<li>
								<span class="bag">KM1</span>
							</li>
							<li>
								Giảm thêm tới 500.000đ khi thanh toán qua VNPAY - (
								<a href="#">Xem chi tiết</a> )
							</li>
							<li>
								<span class="bag">KM2</span>
							</li>
							<li>
								GIẢM THÊM TỚI 1.200.000đ khi Thu cũ - Lên đời iPhone Series - (
								<a href="#">Xem chi tiết</a> )
							</li>
							<li>
								<span class="bag">KM3</span>
							</li>
							<li>
								Tặng sim data Mobifone Hera 5G (2.5GB/ngày) (Chưa bao gồm tháng đầu tiên) - Lưu ý: chỉ áp dụng mua trực tiếp tại cửa hàng.  - (
								<a href="#">Xem chi tiết</a> )
							</li>
							<li>
								<span class="bag">KM4</span>
							</li>
							<li>
								Giảm thêm tới 600.000đ khi mở thẻ TP Bank EVO thành công - (
								<a href="#">Xem chi tiết</a> )
							</li>
						</ul>
						<div class="d-flex" >
							<div class="btn-product buy_now">
								<a href="">
									<strong>Mua Ngay</strong><br>
									<span> Giao tận nhà (COD) hoặc Nhận tại cửa hàng</span>
								</a>
							</div>
							<div class="btn-product buy_not_now">
								<a href="">
									<strong>Trả góp</strong><br>
									<span>C.ty Tài chính & 0% qua thẻ tín dụng</span>
								</a>
							</div>
							<div class="btn-product add__product-to-cart">
								<a href="add_to_cart.php?id=<?php echo $id; ?>" class="add_to_cart">
									<i class="fa-solid fa-cart-shopping"></i>
									<i class="fa-solid fa-plus"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col mb__30">
					<div class="protect_product">
						<h4>THÔNG TIN BẢO HÀNH</h4>
						<strong>
						<i class="fa-solid fa-shield"></i>
						<span>Bảo hành chính hãng 12 tháng tại trung tâm bảo hành uỷ quyền Apple Việt Nam</span>
						<br>
						<a href="#">
							<i class="fa-solid fa-shield"></i>
							<span>Bao xài lỗi 1 đổi 1 trong 30 ngày với lỗi phần cứng do nhà sản xuất.</span><br>
						</a>
						<b>CHỌN MÀU VÀ XEM ĐỊA CHỈ CÒN HÀNG</b>
						<div class="frame-box">
							<i class="fa-solid fa-location-dot"></i>
							<b>Hà Nội</b>
							<ul class="city">
								<li>
									<a href="#">
										Xem tất cả
									</a>
								</li>
								<li>
									<a href="#">
										Hà Nội
									</a>
								</li>
								<li>
									<a href="#">
										TP.Hồ Chí Minh
									</a>
								</li>
								<li>
									<a href="#">
										Thái Nguyên
									</a>
								</li>
								<li>
									<a href="#">
										Vĩnh Phúc
									</a>
								</li>
							</ul>
						</div>
						<div class="address_store">
							<ul >
								<li>
									<i class="fa-solid fa-right-long"></i>
									122 Thái Hà, Hà Nội
									<br>
									<a href="#">Bản đồ đường đi</a>
								</li>
							</ul>
						</div>
						<div class="frame-box insurance__product">
							<a href="#"><?php echo $arr_result['name']; ?> -TBH-122 Thái Hà - TBH</a><br>
							<i>Giá chỉ từ: </i> <b><?php echo $arr_result['price']; ?></b><br>
							<i>Rẻ hơn giá cũ:</i> <b><?php echo $arr_result['old_price']; ?></b>
							<p>Bảo hành chính hãng 12 tháng. Bao xài đổi lỗi trong 30 ngày</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container px-4">
			<div class="row">
				<div class="col infor__product container mb__30">
					<p></p>
					<hr>
					<p></p>
					<?php list($var1,$var2,$var3,$var4,$var5) = explode("|||",$arr_result['description']);?>
					<p><?php echo $var1 ?></p>
					<img src="<?php echo $var2; ?>" width="100%" alt="">
					<h3><?php echo $var3 ?></h3>
					<p><?php echo $var4 ?></p>
					<img src="<?php echo $var5; ?>" width=100% alt="">	
					<div class="viewmore text-center">
						<a href="#">Xem Thêm</a>
					</div>
				</div>
        <div class="col-md-auto infor__product mb__30">
        	<div>
        		<?php list($var1,$var2,$var3,$var4,$var5,$var6,$var7,$var8,$var9,$var10) = explode("|||",$arr_result['config']); ?>
        		<div>
        			<img src="<?php echo $var1; ?>" class="w-100" alt="">
        			<p class="config__detail">
        				<i class="fa-solid fa-gears"></i>
        				<span>Cấu hình chi tiết</span>
        			</p>
        		</div>
        		<div class="config__infor">
        			<strong>Công nghệ màn hình:</strong><span><?php echo $var2 ?></span><br>
        			<strong>Độ phân giải:</strong><span><?php echo $var3 ?></span><br>
        			<strong>Độ phân giải camera:</strong><span><?php echo $var4 ?></span><br>
        			<strong>Hệ điều hành:</strong><span><?php echo $var5 ?></span><br>
        			<strong>Chip xử lý (CPU): </strong><span><?php echo $var6 ?></span><br>
        			<strong>Bộ nhớ trong (ROM): </strong><span><?php echo $var7 ?></span><br>
        			<strong>RAM:</strong><span><?php echo $var8 ?></span><br>
        			<strong>Mạng di động:</strong><span><?php echo $var9 ?></span><br>
        			<strong>Số khe sim:</strong><span><?php echo $var10 ?></span><br>
        		</div>
        	</div>
        </div>
			</div>
		</div>
		<div class="container__product">
        <div class="corner__heading content p__0" >
            <h4 class="product_heading">
            <a href="#">Có thể bạn sẽ thích</a>
          </h4>
        </div>
        <div class="bc-color_product br__16 container">
          <div class="slide__product row row">
            <div class="col p__20-10-40 product__item">
              <div class="image">
                <a href="#">
                  <img src="img/image-removebg-preview-19.png" class="" alt="...">
                  <a href="#" class="d-block">Xiaomi 11 Lite 5G NE - 8GB/128GB - Chính hãng </a>
                </a>
                <strong class="sale_price" class="sale_price">9,490,000 ₫</strong>
                <strike >9,490,000 ₫</strike> 
              </div>
              <div class="coupon">
                <span class="bag">KM</span>
                <span>Giảm thêm tới 500.000đ khi thanh toá...</span>
                <span class="color_coupon">Và 3 KM Khác</span>
              </div>
              <div class="promote">
                <a href="product__detail.php?id=<?php echo $each['id']; ?>">
                  <ul>
                    <li>
                      <span class="bag">KM</span>KM Giảm thêm 400.000đ khi tham gia Thu cũ - Lên đời điện thoại Android
                    </li>
                    <li>
                      <span class="bag">KM</span>KM Giảm thêm tới 700.000đ khi thanh toán qua VNPAY (Áp dụng từ ngày 07/10-31/12)
                    </li>
                    <li>
                      <span class="bag">KM</span>KM Giảm thêm tới 600.000đ khi mở thẻ TP Bank EVO thành công
                    </li>
                    <li>
                      <span class="bag">KM</span>KM Tặng sim Reddi 055 chưa bao gồm gói cước (Trừ shop SiS) Hoặc sim data Mobifone Hera 5G (2GB/ngày) (Chưa bao gồm tháng đầu tiên) - Lưu ý: chỉ áp dụng mua trực tiếp tại cửa hàng.
                    </li>
                  </ul>
                </a>
              </div>
            </div>
               <div class="col p__20-10-40 product__item">
              <div class="image">
                <a href="#">
                  <img src="img/image-removebg-preview-19.png" class="" alt="...">
                  <a href="#" class="d-block">Xiaomi 11 Lite 5G NE - 8GB/128GB - Chính hãng </a>
                </a>
                <strong class="sale_price" class="sale_price">9,490,000 ₫</strong>
                <strike >9,490,000 ₫</strike> 
              </div>
              <div class="coupon">
                <span class="bag">KM</span>
                <span>Giảm thêm tới 500.000đ khi thanh toá...</span>
                <span class="color_coupon">Và 3 KM Khác</span>
              </div>
              <div class="promote">
                <a href="product__detail.php?id=<?php echo $each['id']; ?>">
                  <ul>
                    <li>
                      <span class="bag">KM</span>KM Giảm thêm 400.000đ khi tham gia Thu cũ - Lên đời điện thoại Android
                    </li>
                    <li>
                      <span class="bag">KM</span>KM Giảm thêm tới 700.000đ khi thanh toán qua VNPAY (Áp dụng từ ngày 07/10-31/12)
                    </li>
                    <li>
                      <span class="bag">KM</span>KM Giảm thêm tới 600.000đ khi mở thẻ TP Bank EVO thành công
                    </li>
                    <li>
                      <span class="bag">KM</span>KM Tặng sim Reddi 055 chưa bao gồm gói cước (Trừ shop SiS) Hoặc sim data Mobifone Hera 5G (2GB/ngày) (Chưa bao gồm tháng đầu tiên) - Lưu ý: chỉ áp dụng mua trực tiếp tại cửa hàng.
                    </li>
                  </ul>
                </a>
              </div>
            </div>
            <div class="col p__20-10-40 product__item">
              <div class="image">
                <a href="#" class="d-block">
                  <img src="img/laptop-hp-envy-13-ba1537tu-4u6p0pa-2.png" class="" alt="...">
                  <a href="#" class="d-block">Laptop HP Envy 13-ba1537TU - 4U6P0PA  (i5-1135G7/RAM 8Gb/256Gb/13.3'' FHD)</a>
                </a>
                <strong class="sale_price" class="sale_price">17,990,000 ₫</strong>
                <strike >23,990,000 ₫</strike>
              </div>
              <div class="coupon">
                <span class="bag">KM</span>
                <span>Giảm thêm tới 500.000đ khi thanh toá...</span>
                <span class="color_coupon">Và 3 KM Khác</span>
              </div>
              <div class="promote">
                <a href="product__detail.php?id=<?php echo $each['id']; ?>">
                  <ul>
                    <li>
                      <span class="bag">KM</span>KM Giảm thêm 400.000đ khi tham gia Thu cũ - Lên đời điện thoại Android
                    </li>
                    <li>
                      <span class="bag">KM</span>KM Giảm thêm tới 700.000đ khi thanh toán qua VNPAY (Áp dụng từ ngày 07/10-31/12)
                    </li>
                    <li>
                      <span class="bag">KM</span>KM Giảm thêm tới 600.000đ khi mở thẻ TP Bank EVO thành công
                    </li>
                    <li>
                      <span class="bag">KM</span>KM Tặng sim Reddi 055 chưa bao gồm gói cước (Trừ shop SiS) Hoặc sim data Mobifone Hera 5G (2GB/ngày) (Chưa bao gồm tháng đầu tiên) - Lưu ý: chỉ áp dụng mua trực tiếp tại cửa hàng.
                    </li>
                  </ul>
                </a>
              </div>
            </div>
            <div class="col p__20-10-40 product__item">
              <div class="image">
                <a href="#" class="d-block">
                  <img src="img/image-removebg-preview-1.png" class="" alt="...">
                  <a href="#" class="d-block">Redmi Buds 3 Lite-Chính hãng</a>
                </a>
                <strong class="sale_price" class="sale_price">450,000 ₫</strong>
                <strike >590,000 ₫</strike>
              </div> 
              <div class="coupon">
                <span class="bag">KM</span>
                <span>Giảm thêm tới 500.000đ khi thanh toá...</span>
                <span class="color_coupon">Và 3 KM Khác</span>
              </div>
              <div class="promote">
                <a href="product__detail.php?id=<?php echo $each['id']; ?>">
                  <ul>
                    <li>
                      <span class="bag">KM</span>KM Giảm thêm 400.000đ khi tham gia Thu cũ - Lên đời điện thoại Android
                    </li>
                    <li>
                      <span class="bag">KM</span>KM Giảm thêm tới 700.000đ khi thanh toán qua VNPAY (Áp dụng từ ngày 07/10-31/12)
                    </li>
                    <li>
                      <span class="bag">KM</span>KM Giảm thêm tới 600.000đ khi mở thẻ TP Bank EVO thành công
                    </li>
                    <li>
                      <span class="bag">KM</span>KM Tặng sim Reddi 055 chưa bao gồm gói cước (Trừ shop SiS) Hoặc sim data Mobifone Hera 5G (2GB/ngày) (Chưa bao gồm tháng đầu tiên) - Lưu ý: chỉ áp dụng mua trực tiếp tại cửa hàng.
                    </li>
                  </ul>
                </a>
              </div>
            </div>
            <div class="col p__20-10-40 product__item">
              <div class="image">
                <a href="#" class="d-block">
                  <img src="img/image-removebg-preview.png" class="" alt="...">
                  <a href="#" class="d-block">Samsung Galaxy A73 5G - Chính hãng</a>
                </a>
                <strong class="sale_price" class="sale_price">10,190,000 ₫</strong>
                <strike >11,990,000 ₫</strike>
              </div>
              <div class="coupon">
                <span class="bag">KM</span>
                <span>Giảm thêm tới 500.000đ khi thanh toá...</span>
                <span class="color_coupon">Và 3 KM Khác</span>
              </div>
              <div class="promote">
                <a href="product__detail.php?id=<?php echo $each['id']; ?>">
                  <ul>
                    <li>
                      <span class="bag">KM</span>KM Giảm thêm 400.000đ khi tham gia Thu cũ - Lên đời điện thoại Android
                    </li>
                    <li>
                      <span class="bag">KM</span>KM Giảm thêm tới 700.000đ khi thanh toán qua VNPAY (Áp dụng từ ngày 07/10-31/12)
                    </li>
                    <li>
                      <span class="bag">KM</span>KM Giảm thêm tới 600.000đ khi mở thẻ TP Bank EVO thành công
                    </li>
                    <li>
                      <span class="bag">KM</span>KM Tặng sim Reddi 055 chưa bao gồm gói cước (Trừ shop SiS) Hoặc sim data Mobifone Hera 5G (2GB/ngày) (Chưa bao gồm tháng đầu tiên) - Lưu ý: chỉ áp dụng mua trực tiếp tại cửa hàng.
                    </li>
                  </ul>
                </a>
              </div>
            </div>
            <div class="col p__20-10-40 product__item">
              <div class="image">
                <a href="#" class="d-block">
                  <img src="img/image-removebg-preview.png" class="" alt="...">
                  <a href="#" class="d-block">Samsung Galaxy A73 5G - Chính hãng</a>
                </a>
                <strong class="sale_price" class="sale_price">10,190,000 ₫</strong>
                <strike >11,990,000 ₫</strike>
              </div>
              <div class="coupon">
                <span class="bag">KM</span>
                <span>Giảm thêm tới 500.000đ khi thanh toá...</span>
                <span class="color_coupon">Và 3 KM Khác</span>
              </div>
              <div class="promote">
                <a href="product__detail.php?id=<?php echo $each['id']; ?>">
                  <ul>
                    <li>
                      <span class="bag">KM</span>KM Giảm thêm 400.000đ khi tham gia Thu cũ - Lên đời điện thoại Android
                    </li>
                    <li>
                      <span class="bag">KM</span>KM Giảm thêm tới 700.000đ khi thanh toán qua VNPAY (Áp dụng từ ngày 07/10-31/12)
                    </li>
                    <li>
                      <span class="bag">KM</span>KM Giảm thêm tới 600.000đ khi mở thẻ TP Bank EVO thành công
                    </li>
                    <li>
                      <span class="bag">KM</span>KM Tặng sim Reddi 055 chưa bao gồm gói cước (Trừ shop SiS) Hoặc sim data Mobifone Hera 5G (2GB/ngày) (Chưa bao gồm tháng đầu tiên) - Lưu ý: chỉ áp dụng mua trực tiếp tại cửa hàng.
                    </li>
                  </ul>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
	<!-- Main Body -->
		<section style="background-color:#ccc">
			<div class="container">
				<div class="row">
					<div class="col-sm-5 col-md-6 col-12 pb-4">
						<h1>Comments</h1>
						<div class="comment mt-4 text-justify float-left">
							<img src="https://i.imgur.com/yTFUilP.jpg" alt="" class="rounded-circle" width="40" height="40">
							<h4>Nguyễn Văn A</h4>
							<span>- 20 May, 2022</span>
							<br>
							<p>Sản phẩm tốt</p>
						</div>
						<div class="text-justify darker mt-4 float-right">
							<img src="https://i.imgur.com/CFpa3nK.jpg" alt="" class="rounded-circle" width="40" height="40">
							<h4>Lê Văn B</h4>
							<span>- 22 October, 2021</span>
							<br>
							<p>Ừ, tốt thật</p>
						</div>
						<div class="comment mt-4 text-justify">
							<img src="https://i.imgur.com/yTFUilP.jpg" alt="" class="rounded-circle" width="40" height="40">
							<h4>Trần Công C</h4>
							<span>- 17 May, 2021</span>
							<br>
							<p>Ship nhanh thế</p>
						</div>
						<div class="darker mt-4 text-justify">
							<img src="https://i.imgur.com/CFpa3nK.jpg" alt="" class="rounded-circle" width="40" height="40">
							<h4>Lê Đình D</h4>
							<span>- 20 March, 2021</span>
							<br>
							<p >Ông nói phét it thôi, mất 2 giờ mà</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-5 col-sm-4 offset-md-1 offset-sm-1 col-12 mt-4">
						<form id="algin-form" class="form_here">
							<div class="form-group">
								<h4>Leave a comment</h4>
								<label for="message">Message</label>
								<textarea name="msg" id=""msg cols="30" rows="5" class="form-control" style="background-color: black;"></textarea>
							</div>
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" name="name" id="fullname" class="form-control">
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="text" name="email" id="email" class="form-control">
							</div>
							<div class="form-group">
								<p class="text-secondary">If you have a <a href="#" class="alert-link">gravatar account</a> your address will be used to display your profile picture.</p>
							</div>
							<div class="form-inline">
								<input type="checkbox" name="check" id="checkbx" class="mr-1">
								<label for="subscribe">Subscribe me to the newlettter</label>
							</div>
							<div class="form-group">
								<button type="button" id="post" class="btn">Post Comment</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
	<?php  
		require 'footer.php';
	?>
</div>
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

</body>
</html>