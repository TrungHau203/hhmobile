<?php 
  session_start();
 ?>
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
  <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="./font/fontawesome-free-6.0.0-web/css/all.css">
    <link rel="stylesheet" href="./css/style.css">
	<title>Hoàng Hà Mobile - Hệ thống bán lẻ thiết bị di động  và công nghệ chính hãng giá tốt</title>
</head>
<body>
<?php 

 ?>
<div id="main" class="bc-color">
	<?php
		require 'header.php';
	?>
  <section class="container p__0 m__tb15">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
      <div class="carousel-inner br__16">
        <div class="carousel-item active">
          <a href="#">
            <img src="img/hotsale-samsung-galaxy-s22-series-web.png" class="d-block w-100" alt="...">
          </a>
        </div>
        <div class="carousel-item">
          <a href="#">
            <img src="img/hotsale-tecno-pova-web.jpg" class="d-block w-100" alt="...">
          </a>
        </div>
        <div class="carousel-item">
          <a href="#">
            <img src="img/tuan-le-hotsale-ipad-gen9-web-1.png" class="d-block w-100" alt="...">
          </a>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
      </button>
      <div class="carousel-indicators carousel_pos-relative d-none d-md-block">
        <div class="container text-center">
          <div class="row pos__relative">
            <div class="col-md-auto">
              <a role="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active bc-color_product br__16" aria-current="true" aria-label="Slide 1" style="border:0; padding: 10px 6px;">Hotsale SamSung Galaxy S22 Series</a>
            </div>
            <div class="col-md-auto">
              <a role="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" class="bc-color_product br__16" style="border:0; padding: 10px 6px;">Hotsale Tecno Pova</a>
            </div>
            <div class="col-md-auto">
              <a role="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" class="bc-color_product br__16" style="border:0; padding: 10px 6px;">Tuần lễ Hotsale IpadGen9</a>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    <div class="container text-center commercial_product" data-bs-touch="true">
      <div class="row">
        <div class="col">
          <a href="#"><img src="img/chuyen-trang-samsung2.png" alt="" class="d-block w-100"></a>
        </div>
        <div class="col">
          <a href="#"><img src="img/oppo-gia-soc-a55-2.jpg" alt="" class="d-block w-100"></a>
        </div>
        <div class="col">
          <a href="#"><img src="img/san-pham-hot.png" alt="" class="d-block w-100"></a>
        </div>
        <div class="col">
          <a href="#"><img src="img/hotsale-airpod-2pro.jpg" alt="" class="d-block w-100"></a>
        </div>
      </div>
    </div>
    <div id="carouselControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-ride="true">
      <div class="carousel-indicators carousel_pos-relative">
        <div class="text-center">
          <div class="flash_sale">
            <span>F</span>
                <i class="fa-solid fa-bolt-lightning"></i>
            <span>sh Sale Online</span>
          </div>
          <div class="row type_product">
              <div class="col-md-auto">
              <a role="button" data-bs-target="#carouselControlsNoTouching" data-bs-slide-to="0" class="active bc-color_product br__16" aria-current="true" aria-label="Slide 1" style="border:0; padding: 10px 6px;">Điện Thoại</a>
            </div>
            <div class="col-md-auto">
              <a role="button" data-bs-target="#carouselControlsNoTouching" data-bs-slide-to="1" aria-label="Slide 2" class="bc-color_product br__16" style="border:0; padding: 10px 6px;">Máy Tính</a>
            </div>
            <div class="col-md-auto">
              <a role="button" data-bs-target="#carouselControlsNoTouching" data-bs-slide-to="2" aria-label="Slide 3" class="bc-color_product br__16" style="border:0; padding: 10px 6px;">Phụ kiện</a>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-inner">
        <!-- Điện thoại nè -->
        <div class="carousel-item active">
          <div class="d-flex bc-color_product br__16">
            <div class="product-item col p__20-10-40 product__item">
              <div class="image">
                <a href="#">
                  <img src="img/image-removebg-preview-19.png" class="" alt="...">
                  <a href="#" class="d-block">Xiaomi 11 Lite 5G NE - 8GB/128GB - Chính hãng </a>
                </a>
                <strong class="sale_price">9,490,000 ₫</strong>
                <strike>9,490,000 ₫</strike>
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
            <div class="product-item col p__20-10-40 product__item">
              <div class="image">
                <a href="#" class="d-block">
                  <img src="img/a57-1.png" class="" alt="...">
                  <a href="#" class="d-block">Oppo A57 4GB/128G - Chính hãng</a>
                </a>
                <strong class="sale_price">3,990,000 ₫</strong>
                <strike>4,490,000 ₫</strike>
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
            <div class="product-item col p__20-10-40 product__item">
              <div class="image">
                <a href="#" class="d-block">
                  <img src="img/image-removebg-preview.png" class="" alt="...">
                  <a href="#" class="d-block">Samsung Galaxy A73 5G - Chính hãng</a>
                </a>
                <strong class="sale_price">10,190,000 ₫</strong>
                <strike>11,990,000 ₫</strike>
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
            <div class="product-item col p__20-10-40 product__item">
              <div class="image">
                <a href="#" class="d-block">
                  <img src="img/bac2.png" class="" alt="...">
                  <a href="#" class="d-block">Samsung Galaxy A13 4GB/128GB - Chính hãng</a>
                </a>
                <strong class="sale_price">4,250,000 ₫</strong>
                <strike>4,690,000 ₫</strike>
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
            <div class="product-item col p__20-10-40 product__item">
              <div class="image">
                <a href="#" class="d-block">
                  <img src="img/image-removebg-preview-14.png" class="" alt="...">
                  <a href="#" class="d-block">Samsung Galaxy A53 5G - Chính hãng/a>
                </a>
                <strong class="sale_price">10,190,000 ₫</strong>
                <strike>11,990,000 ₫</strike>
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
        <!-- Máy tính nè -->
        <div class="carousel-item">
          <div class="d-flex bc-color_product br__16">
            <div class="product-item col p__20-10-40 product__item">
              <div class="image">
                <a href="#" class="d-block">
                  <img src="img/laptop-hp-envy-13-ba1537tu-4u6p0pa-2.png" class="" alt="...">
                  <a href="#" class="d-block">Laptop HP Envy 13-ba1537TU - 4U6P0PA (i5-1135G7/RAM 8Gb/256Gb/13.3'' FHD)</a>
                </a>
                <strong class="sale_price">17,990,000 ₫</strong>
                <strike>23,990,000 ₫</strike>
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
            <div class="product-item col p__20-10-40 product__item">
              <div class="image">
                <a href="#" class="d-block">
                  <img src="img/hp-15s-fq2602tu-4b6d3pa-2.png" class="" alt="...">
                  <a href="#" class="d-block">Laptop HP 15s-du3593TU - 63P89PA - (i5-1135G7/8GB RAM/256GB/15.6"HD/Win11)</a>
                </a>
                <strong class="sale_price">14,390,000 ₫</strong>
                <strike>16,990,000 ₫</strike>
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
            <div class="product-item col p__20-10-40 product__item">
              <div class="image">
                <a href="#" class="d-block">
                  <img src="img/ideapad-5-15itl05-ct1-06.png" class="" alt="...">
                  <a href="#" class="d-block">Laptop Lenovo IdeaPad 5 15ITL05 - 82FG01H8VN - (i5 1135G7/RAM 8GB/256GB)</a>
                </a>
                <strong class="sale_price">14,490,000 ₫</strong>
                <strike>17,990,000 ₫</strike>
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
            <div class="product-item col p__20-10-40 product__item">
              <div class="image">
                <a href="#" class="d-block">
                  <img src="img/ideapad-5-pro-16ach6-ct1-01.png" class="" alt="...">
                  <a href="#" class="d-block">Laptop Lenovo IdeaPad 5 Pro 16ACH6 - 82L500WMVN - (R5 5600H/RAM 16GB/512GB)</a>
                </a>
                <strong class="sale_price">14,490,000 ₫</strong>
                <strike>17,990,000 ₫</strike>
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
        <!-- Phụ Kiện nè -->
        <div class="carousel-item">
          <div class="d-flex bc-color_product br__16">
            <div class="product-item col p__20-10-40 product__item">
              <div class="image">
                <a href="#" class="d-block">
                  <img src="img/image-removebg-preview-1.png" class="" alt="...">
                  <a href="#" class="d-block">Redmi Buds 3 Lite-Chính hãng</a>
                </a>
                <strong class="sale_price">450,000 ₫</strong>
                <strike>590,000 ₫</strike>
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
            <div class="product-item col p__20-10-40 product__item">
              <div class="image">
                <a href="#" class="d-block">
                  <img src="img/tai-nghe-khong-day-xiaomi-buds-3-6.png" class="" alt="...">
                  <a href="#" class="d-block">Tai nghe Xiaomi Buds 3 - Chính hãng</a>
                </a>
                <strong class="sale_price">1,790,000 ₫</strong>
                <strike>2,690,000 ₫</strike>
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
            <div class="product-item col p__20-10-40 product__item">
              <div class="image">
                <a href="#" class="d-block">
                  <img src="img/mi-robot-vacuum-mop-2-pro-13.png" class="" alt="...">
                  <a href="#" class="d-block">Xiaomi Vacuum Mop 2 Pro - Chính hãng</a>
                </a>
                <strong class="sale_price">7,490,000 ₫</strong>
                <strike>9,990,000 ₫</strike>
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
            <div class="product-item col p__20-10-40 product__item">
              <div class="image">
                <a href="#" class="d-block">
                  <img src="img/image-removebg-preview-27.png" class="" alt="...">
                  <a href="#" class="d-block">Sạc nhanh xe hơi INNOSTYLE Poweron speed 2 cổng PD/QC3.0 38W</a>
                </a>
                <strong class="sale_price">290,000 ₫</strong>
                <strike>390,000 ₫</strike>
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
      <!-- Chỗ này sửa sau, k thì thôi  data-bs-target="#carouselExampleControlsNoTouching"-->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- hệ sinh thái apple -->
      <div class="container__product">
        <div class="corner__heading content p__0" >
            <h4 class="product_heading">
            <a href="#">APPLE AUTHORISED RESELLER</a>
          </h4>
        </div>
        <?php 
        require 'admin/connect.php';
        $sql = "SELECT products.* ,manufacturer.name as manufacturer_name, category.name as category_name from products INNER JOIN manufacturer on products.id_manufacturer = manufacturer.id
        INNER join category on manufacturer.id_category = category.id
        where products.id_manufacturer = 1 limit 10";
        $result = mysqli_query($connect,$sql);
        $arr_result = mysqli_fetch_array($result);
       ?>
        <div class="container text-center mb__30 mt__30">
          <div class="row row-cols-sm-2 row-cols-md-4 row-cols-md-5">
            <?php foreach ($result as $each): ?>
            <div class="col m__8-2">
              <div class="p__20-10-40  bc-color_product br__16 m__4-8 h-428 product__item">
                <div class="image">
                  <a href="product__detail.php?id=<?php echo $each['id']; ?>" target="_blank" class="d-block">
                    <img src="<?php echo $each['image'] ?>" class="w-100" alt="...">
                    <a href="product__detail.php?id=<?php echo $each['id']; ?>" target="_blank" class="d-block"><?php echo $each['name'] ?></a>
                  </a>
                  <strong class="sale_price"><?php echo $each['price'] ?></strong>
                  <strike><?php echo $each['old_price'] ?>"</strike>
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
            <?php endforeach ?>
          </div>
        </div>
      </div>
      <!-- có thể bạn sẽ thích -->
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
      <!-- QC3 -->
      <div class="container">
        <div class="ads">
          <a href="#">
            <img src="img/web-03.jpg" alt="" class="w-100">
          </a>
        </div>
      </div>
      <!-- hệ sinh thái XiaoMi -->
      <div class="container__product">
        <div class="corner__heading content p__0" >
            <h4 class="product_heading">
            <a href="#">XiaoMi</a>
          </h4>
        </div>
        <?php 
        require 'admin/connect.php';
        $sql = "SELECT products.* ,manufacturer.name as manufacturer_name, category.name as category_name from products INNER JOIN manufacturer on products.id_manufacturer = manufacturer.id
        INNER join category on manufacturer.id_category = category.id
        where products.id_manufacturer = 5 limit 10";
        $result = mysqli_query($connect,$sql);
        $arr_result = mysqli_fetch_array($result);
       ?>
        <div class="container text-center mb__30 mt__30">
          <div class="row row-cols-sm-2 row-cols-md-4 row-cols-md-5">
            <?php foreach ($result as $each): ?>
            <div class="col m__8-2">
              <div class="p__20-10-40  bc-color_product br__16 m__4-8 h-428 product__item">
                <div class="image">
                  <a href="product__detail.php?id=<?php echo $each['id']; ?>" target="_blank" class="d-block">
                    <img src="<?php echo $each['image'] ?>" class="w-100" alt="...">
                    <a href="product__detail.php?id=<?php echo $each['id']; ?>" target="_blank" class="d-block"><?php echo $each['name'] ?></a>
                  </a>
                  <strong class="sale_price"><?php echo $each['price'] ?></strong>
                  <strike><?php echo $each['old_price'] ?>"</strike>
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
            <?php endforeach ?>
          </div>
        </div>  
      </div>
      <!-- Đồng hồ thong minh -->
      <div class="container__product">
        <div class="corner__heading content p__0" >
            <h4 class="product_heading">
            <a href="#">Đồng hồ thông minh</a>
          </h4>
        </div>
        <div class="bc-color_product br__16 container">
          <div class="slide__product row">
            <div class="col p__20-10-40 product__item">
              <div class="image">
                <a href="#" class="d-block">
                  <img src="img/s7-thep-2.png" class="" alt="...">
                  <a href="#" class="d-block">Apple Watch Series 7 4G, 41mm  – Viền thép dây thép  - Chính hãng VN/A</a>
                </a>
                <strong class="sale_price">18,990,000 ₫</strong>
                <strike >20,990,000 ₫</strike>
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
                  <img src="img/image-removebg-preview-1 (1).png" class="" alt="...">
                  <a href="#" class="d-block">Đồng hồ thông minh myAlo  K84W- 4G - Chính hãng</a>
                </a>
                <strong class="sale_price">2,750,000 ₫</strong>
                <strike >2,990,000 ₫</strike>
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
                  <img src="img/masstel-smart-hero-4g-xanh.png" class="" alt="...">
                  <a href="#" class="d-block">Masstel Smart Hero 4G- Chính hãng</a>
                </a>
                <strong class="sale_price">1,190,000 ₫</strong>
                <strike >1,990,000 ₫</strike>
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
                  <img src="img/_Myalo KS72C.png" class="" alt="...">
                  <a href="#" class="d-block">Masstel Smart Hero 4G- Chính hãng</a>
                </a>
                <strong class="sale_price">1,550,000 ₫</strong>
                <strike >1,790,000 ₫</strike>
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
                  <img src="img/masstel-smart-hero-4g-xanh.png" class="" alt="...">
                  <a href="#" class="d-block">Masstel Smart Hero 4G- Chính hãng</a>
                </a>
                <strong class="sale_price">1,190,000 ₫</strong>
                <strike >1,990,000 ₫</strike>
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

      <!-- Laptop nổi bật -->
      <div class="container__product">
        <div class="corner__heading content p__0" >
            <h4 class="product_heading">
            <a href="#">Laptop nổi bật </a>
          </h4>
        </div>
        <div class="container text-center">
          <div class="row row-cols-sm-2 row-cols-md-4">
            <div class="col m__8-2">
              <div  class="p__20-10-40  bc-color_product br__16 m__4-8">
                <a href="#" class="d-block">
                  <img src="https://cdn.hoanghamobile.com/i/productlist/ts/Uploads/2021/11/17/laptop-dell-vostro-3510-v5i3305w-5.png" class="" alt="...">
                  <a href="#" class="d-block">Laptop Dell Vostro 3510 - V5I3305W (i3-1115G4/RAM 8GB/256 SSD/15.6" FHD)</a>
                </a>
                <strong>11,690,000 ₫</strong>
                <strike>15,990,000 ₫</strike>
              </div>
            </div> 
            <div class="col m__8-2">
              <div class="p__20-10-40  bc-color_product br__16 m__4-8">
                <a href="#" class="d-block">
                  <img src="https://cdn.hoanghamobile.com/i/productlist/ts/Uploads/2021/12/25/image-removebg-preview.png" class="" alt="...">
                  <a href="#" class="d-block">Laptop Dell Latitude 3420 - L3420I5SSD (i5-1135G7/8GB RAM/256GB/14" HD)</a>
                </a>
                <strong>14,890,000 ₫</strong>
                <strike>22,990,000 ₫</strike>
              </div>
            </div> 
            <div class="col m__8-2">
              <div class="p__20-10-40  bc-color_product br__16 m__4-8">
                <a href="#" class="d-block">
                  <img src="https://cdn.hoanghamobile.com/i/productlist/ts/Uploads/2022/06/24/asus-vivobook-a1503za-l1422w-6.png" class="" alt="...">
                  <a href="#" class="d-block">Laptop Asus Vivobook A1503ZA-L1422W- I5-12500H/8G/512GBSSD/15.6</a>
                </a>
                <strong>18,290,000 ₫</strong>
                <strike>19,990,000 ₫</strike>
              </div>
            </div> 
            <div class="col m__8-2">
              <div class="p__20-10-40  bc-color_product br__16 m__4-8">
                <a href="#" class="d-block">
                  <img src="https://cdn.hoanghamobile.com/i/productlist/ts/Uploads/2022/07/25/image-removebg-preview-7.png" class="" alt="...">
                  <a href="#" class="d-block">Laptop ASUS Gaming TUF FX506LH - HN188W - i5/10300H/8GB/512GB/VGA 4GB</a>
                </a>
                <strong>15,690,000 ₫</strong>
                <strike>21,990,000 ₫</strike>
              </div>
            </div> 
            <div class="col m__8-2">
              <div class="p__20-10-40  bc-color_product br__16 m__4-8">
                <a href="#" class="d-block">
                  <img src="https://cdn.hoanghamobile.com/i/productlist/ts/Uploads/2022/07/20/image-removebg-preview-5.png" class="" alt="...">
                  <a href="#" class="d-block">Laptop HP 245 G8 - 61C60PA-R3-3250U/4GB/256GB SSD/HHD/Win11/Bạc</a>
                </a>
                <strong>8,390,000 ₫</strong>
                <strike>11,690,000 ₫</strike>
              </div>
            </div> 
            <div class="col m__8-2">
              <div class="p__20-10-40  bc-color_product br__16 m__4-8">
                <a href="#" class="d-block">
                  <img src="https://cdn.hoanghamobile.com/i/productlist/ts/Uploads/2022/06/14/redmibook-1.png" class="" alt="...">
                  <a href="#" class="d-block">Xiaomi Redmibook 15 - JYU4505AP-  i3-1115G4 /8GB/256GB-SSD/15.6FHD</a>
                </a>
                <strong>11,890,000 ₫</strong>
                <strike>12,990,000 ₫</strike>
              </div>
            </div> 
            <div class="col m__8-2">
              <div class="p__20-10-40  bc-color_product br__16 m__4-8">
                <a href="#" class="d-block">
                  <img src="https://cdn.hoanghamobile.com/i/productlist/ts/Uploads/2022/04/29/ideapad-5-pro-14itl6-ct1-01.png" class="" alt="...">
                  <a href="#" class="d-block">Laptop Lenovo IdeaPad 5 Pro 14ITL6 - 82L300KSVN (i5 1155G7/RAM 8GB/512GB)</a>
                </a>
                <strong>17,490,000 ₫</strong>
                <strike>22,990,000 ₫</strike>
              </div>
            </div> 
            <div class="col m__8-2">
              <div class="p__20-10-40  bc-color_product br__16 m__4-8">
                <a href="#" class="d-block">
                  <img src="https://cdn.hoanghamobile.com/i/productlist/ts/Uploads/2022/06/07/msi-modern-14-b5m-203vn-7.png" class="" alt="...">
                  <a href="#" class="d-block">Laptop MSI Modern 14 B5M 203VN - R5 5500U/8GB DDR4/512GB/W11H/Xám</a>
                </a>
                <strong>13,190,000 ₫</strong>
                <strike>15,990,000 ₫</strike>
              </div>
            </div> 
          </div>
        </div>
      </div>
      <!-- SmartTV nổi bật -->
      <div class="container__product">
        <div class="corner__heading content p__0" >
            <h4 class="product_heading">
            <a href="#">SmartTV nổi bật</a>
          </h4>
        </div>
        <div class="bc-color_product br__16 container">
          <div class="slide__product row">
            <div class="col p__20-10-40 product__item">
              <div class="image">
                <a href="#" class="d-block">
                  <img src="https://cdn.hoanghamobile.com/i/productlist/ts/Uploads/2022/06/06/smart-tv-xiaomi-4k-p1-43-inch-chinh-hang-4.png" class="" alt="...">
                  <a href="#" class="d-block">Smart TV Xiaomi 4K P1 55  inch - Chính hãng</a>
                </a>
                <strong class="sale_price">9,990,000 ₫</strong>
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
                  <img src="https://cdn.hoanghamobile.com/i/productlist/ts/Uploads/2022/06/06/smart-tv-xiaomi-4k-p1-43-inch-chinh-hang-4.png" class="" alt="...">
                  <a href="#" class="d-block">Smart TV Xiaomi 4K P1 43  inch - Chính hãng</a>
                </a>
                <strong class="sale_price">7,990,000 ₫</strong>
                <strike >9,990,000 ₫</strike>
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
                  <img src="https://cdn.hoanghamobile.com/i/productlist/ts/Uploads/2022/06/01/tivi-1.png" class="" alt="...">
                  <a href="#" class="d-block">Smart Tivi Samsung UHD 4K 50  inch UA50AU7700KXXV  - Chính hãng</a>
                </a>
                <strong class="sale_price">11,990,000 ₫</strong>
                <strike >17,990,000 ₫</strike>
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
                  <img src="https://cdn.hoanghamobile.com/i/productlist/ts/Uploads/2022/05/27/tivi-1.png" class="" alt="...">
                  <a href="#" class="d-block">Smart Tivi Samsung Crystal UHD 4K 55  inch UA55AU8000KXXV  - Chính hãng</a>
                </a>
                <strong class="sale_price">14,790,000 ₫</strong>
                <strike >26,990,000 ₫</strike>
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
                  <img src="https://cdn.hoanghamobile.com/i/productlist/ts/Uploads/2022/06/06/smart-tv-xiaomi-4k-p1-43-inch-chinh-hang-4.png" class="" alt="...">
                  <a href="#" class="d-block">Smart TV Xiaomi 4K P1 52  inch - Chính hãng</a>
                </a>
                <strong class="sale_price">7,990,000 ₫</strong>
                <strike >9,990,000 ₫</strike>
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
      <!-- QCbanermuaban03 -->
      <div class="container">
        <div class="ads">
          <a href="#">
            <img src="img/web-banner-mo-ban-03.jpg" alt="" class="w-100">
          </a>
        </div>
      </div>
      <!-- Tablet -->
      <div class="container__product">
        <div class="corner__heading content p__0" >
            <h4 class="product_heading">
            <a href="#">Tablet</a>
          </h4>
        </div>
        <div class="bc-color_product br__16 container">
          <div class="slide__product row">
            <div class="col p__20-10-40 product__item">
              <div class="image">
                <a href="#" class="d-block">
                  <img src="https://cdn.hoanghamobile.com/i/productlist/ts/Uploads/2021/05/25/image-removebg-preview-8.png" class="" alt="...">
                  <a href="#" class="d-block">Samsung Galaxy Tab A7 Lite  (T225) - Chính hãng</a>
                </a>
                <strong class="sale_price">3,690,000 ₫</strong>
                <strike >4,490,000 ₫</strike>
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
                  <img src="https://cdn.hoanghamobile.com/i/productlist/ts/Uploads/2021/09/15/image-removebg-preview-26.png" class="" alt="...">
                  <a href="#" class="d-block">Apple iPad Gen 9 - 10.2" - (2021)  - Wifi - 64GB - Chính Hãng Apple Việt Nam</a>
                </a>
                <strong class="sale_price">8,490,000 ₫</strong>
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
                  <img src="https://cdn.hoanghamobile.com/i/productlist/ts/Uploads/2021/09/15/image-removebg-preview-32.png" class="" alt="...">
                  <a href="#" class="d-block">Xiaomi Pad 5 6GB/128GB- Chính hãng</a>
                </a>
                <strong class="sale_price">8,290,000 ₫</strong>
                <strike >8,990,000 ₫</strike>
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
                  <img src="https://cdn.hoanghamobile.com/i/productlist/ts/Uploads/2022/01/13/image-removebg-preview_637776891234147333.png" class="" alt="...">
                  <a href="#" class="d-block">Samsung Galaxy Tab A8 (2022) - Chính hãng</a>
                </a>
                <strong class="sale_price">6,890,000 </strong>
                <strike >8,490,000 </strike>
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
                <strong class="sale_price">10,190,000 ₫</strong>
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
      <!-- QCphukien02 -->
      <div class="container">
        <div class="ads">
          <a href="#">
            <img src="img/phu-kien-02.jpg" alt="" class="w-100">
          </a>
        </div>
      </div>
      <!-- QCsamsunggalaxytabs8-->
      <div class="container">
        <div class="ads">
          <a href="#">
            <img src="img/samsung-galaxy-tab-s8-1200x200.jpg" alt="" class="w-100">
          </a>
        </div>
      </div>
      <!-- mail -->
      <div class="email__HH">
        <div class="container text-center">
          <div class="row row-cols-sm-2 row-cols-md-3">
            <div class="col-sm-3">
              <img src="https://hoanghamobile.com/Content/web/img/sub-logo.png" alt="" class="width:40px">
            </div>
            <div class="col-sm-9 input-email">
              <strong>Đăng ký nhận tin khuyến mại</strong>
              
              <form action="">
                <input type="email" name="email" placeholder="Nhập E-mail của bạn">
                <button>
                  <i class="fa-solid fa-paper-plane"></i>
                </button>
              </form>
            </div>
            
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
<script type="text/javascript" src="./js/js.js"></script>

  <!-- subiz -->
	<script>!function(s,u,b,i,z){var o,t,r,y;s[i]||(s._sbzaccid=z,s[i]=function(){s[i].q.push(arguments)},s[i].q=[],s[i]("setAccount",z),r=["widget.subiz.net","storage.googleapis"+(t=".com"),"app.sbz.workers.dev",i+"a"+(o=function(k,t){var n=t<=6?5:o(k,t-1)+o(k,t-3);return k!==t?n:n.toString(32)})(20,20)+t,i+"b"+o(30,30)+t,i+"c"+o(40,40)+t],(y=function(k){var t,n;s._subiz_init_2094850928430||r[k]&&(t=u.createElement(b),n=u.getElementsByTagName(b)[0],t.async=1,t.src="https://"+r[k]+"/sbz/app.js?accid="+z,n.parentNode.insertBefore(t,n),setTimeout(y,2e3,k+1))})(0))}(window,document,"script","subiz","acqqrmpwwuqeianonpxt")</script>
<!-- subiz -->
<script
  type="text/javascript"
  src="https://code.jquery.com/jquery-1.11.0.min.js"
></script>
<script
  type="text/javascript"
  src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"
></script>
<script
  type="text/javascript"
  src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
></script>
</body>
</html>