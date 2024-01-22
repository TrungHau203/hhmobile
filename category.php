<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./font/fontawesome-free-6.0.0-web/css/all.css">
	<link rel="stylesheet" href="./css/style.css">

</head>
<body>
	<div id="main" class="bc-color">
		<?php require'header.php';
			if(empty($_GET['id'])){
				$id =1;
			}
			else{
				$id = $_GET['id'];
			}
			//sắp xếp
			if(empty($_GET['order'])){
				$order ="";
			} elseif ($_GET['order'] =='asc') {
				$order = "ORDER by products.current_price";
			}
			else{
				$order = "ORDER by products.current_price DESC";
			}
			if(empty($_GET['price'])){
				$price ="";
			} else {
				switch ($_GET['price']) {
					case "under5m":
					  $price ="and products.current_price < 5000000";
					  break;
					case "bw510":
					  $price ="and products.current_price BETWEEN 5000000 and 10000000";
					  break;
					case "bw1020":
					  $price ="and products.current_price BETWEEN 1000000 and 20000000";
					  break;
					case "bw2030":
					  $price ="and products.current_price BETWEEN 20000000 and 30000000";
					  break;
					case "top30":
					  $price ="and products.current_price > 30000000";
					  break;
				}
			}
			require'admin/connect.php';
			$sql = "SELECT products.* ,manufacturer.name as manufacturer_name, category.name as category_name from products INNER JOIN manufacturer on products.id_manufacturer = manufacturer.id INNER join category on manufacturer.id_category = category.id where manufacturer.id_category = '$id' $price $order limit 20;";
			// die($sql);
			$result = mysqli_query($connect,$sql);
			$arr_result = mysqli_fetch_array($result);
		 ?>
		 <div class="container p__0 br__16">
		 	<a href="#"><img class="w-100" src="https://cdn.hoanghamobile.com/i/home/Uploads/2022/07/15/hotsale-tecno-pova-chuyen-muc.jpg" alt=""></a>
		 </div>
		 <div class="container">
		 	<div class="row row-cols-auto">
		 		<div class="col">
		 			<a href="product.php?id=1" class="category_type">
		 				<img src="https://cdn.hoanghamobile.com/i/cat/Uploads/2022/06/15/tem-authorized-reseller-hoangha.png" alt="">
		 			</a>
		 		</div>
		 		<div class="col">
		 			<a href="product.php?id=3" class="category_type">
		 				<img src="https://cdn.hoanghamobile.com/i/cat/Uploads/2020/11/30/samsung-logo-transparent.png" alt="">
		 			</a>
		 		</div>
		 		<div class="col">
		 			<a href="product.php?id=5" class="category_type">
		 				<img src="https://cdn.hoanghamobile.com/i/cat/Uploads/2021/05/27/xiaomi-global-logo-rgb-logo-moi.png" alt="">
		 			</a>
		 		</div>
		 		<div class="col">
		 			<a href="" class="category_type">
		 				<img src="https://cdn.hoanghamobile.com/i/cat/Uploads/2020/09/14/brand%20(3).png" alt="">
		 			</a>
		 		</div>
		 		<div class="col">
		 			<a href="" class="category_type">
		 				<img src="https://cdn.hoanghamobile.com/i/cat/Uploads/2020/09/14/brand%20(4).png" alt="">
		 			</a>
		 		</div>
		 		<div class="col">
		 			<a href="" class="category_type">
		 				<img src="https://cdn.hoanghamobile.com/i/cat/Uploads/2020/09/14/brand%20(6).png" alt="">
		 			</a>
		 		</div>
		 	</div>
		 </div>
		 <div class="container p__0">
			<ul class="directional__header d-flex">
				<li>
					<a href="index.php">
						<i class="fa-solid fa-house"></i>
						<span>Trang chủ</span>
					</a>
				</li>
				<li>
					<i class="fa-solid fa-angle-right"></i>
					<a href="category.php">
						<span><?php echo $arr_result['category_name']; ?></span>
					</a>
				</li>
			</ul>
    	</div>
    	<div class="container p__0 ">
			<div class="product-fillter">
				<div class="d-flex">
					<div class="facet">
						<strong>Lọc danh sách: </strong>
					</div>
					<div class="facet trademark-filter">
						<a href="">
							<span>Danh mục</span>
							<i class="fa-solid fa-angle-down"></i>
						</a>
						<div class="container p__0 w-color trademark-hover br__16">
							<ul class="p__0-16"> 
							<?php
								$sql_filter_trademark = "SELECT manufacturer.id, manufacturer.name as manufacturer_name, COUNT(manufacturer.name) as quantity from products INNER JOIN manufacturer on products.id_manufacturer = manufacturer.id INNER join category on manufacturer.id_category = category.id where manufacturer.id_category = '$id' GROUP BY manufacturer.name;";
								$result_filter_trademark = mysqli_query($connect,$sql_filter_trademark);
								$arr_result_filter_trademark = mysqli_fetch_array($result);
								foreach ($result_filter_trademark as $each):
									?>
								<li>
									
									<a href="product.php?id=<?php echo $each['id'] ?>"><?php echo $each['manufacturer_name'] ?></a>
								</li>
								<?php endforeach ?>
								
							</ul>
						</div>
					</div>
					
					<div class="facet category-filter">
						<a href="">
							<span>Thương hiệu</span>
							<i class="fa-solid fa-angle-down"></i>
						</a>
						<div class="container p__0 w-color category-hover br__16">
							<ul class="p__0-16"> 
							<?php
								$sql_filter_trademark = "SELECT manufacturer.name as manufacturer_name, COUNT(manufacturer.name) as quantity from products INNER JOIN manufacturer on products.id_manufacturer = manufacturer.id INNER join category on manufacturer.id_category = category.id where manufacturer.id_category = '$id' GROUP BY manufacturer.name;";
								$result_filter_trademark = mysqli_query($connect,$sql_filter_trademark);
								$arr_result_filter_trademark = mysqli_fetch_array($result);
								foreach ($result_filter_trademark as $each):
							?>
								<li>
									<a href="product.php?id=<?php echo $each['id'] ?>"><?php echo $each['manufacturer_name'] ?>(<?php echo $each['quantity'] ?>)</a>
								</li>
							<?php endforeach ?>
								
							</ul>
						</div>
					</div>
					<div class="facet price-filter">
						<a href="">
							<span>Giá</span>
							<i class="fa-solid fa-angle-down"></i>
						</a>
						<div class="container p__0 w-color price-hover br__16">
							<ul class="p__0-16"> 
								<li>
									<a href="category.php?id=1&price=under5m">Dưới 5 triệu</a>
								</li>
								<li>
									<a href="category.php?id=1&price=bw510">5 triệu - 10 triệu</a>
								</li>
								<li>
									<a href="category.php?id=1&price=bw1020">10 triệu - 20 triệu</a>
								</li>
								<li>
									<a href="category.php?id=1&price=bw2030">20 triệu - 30 triệu</a>
								</li>
								<li>
									<a href="category.php?id=1&price=top30">Trên 30 triệu</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="d-flex">
					<div class="facet sort-filter">
						<a href="">
							<span>Sắp xếp</span>
							<i class="fa-solid fa-angle-down"></i>
						</a>
						<div class="container p__0 w-color sort-hover br__16">
							<ul class="p__0-16">
								
								<li>
									<a href="category.php?id=1&order=asc">Thấp đến cao</a>
								</li>
								<li>
									<a href="category.php?id=1&order=desc">Cao đến Thấp</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
    	</div>
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
			<div class="btn-product viewmore mt__30">
				<a href="">Xem thêm sản phẩm</a>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 ">
					<p class="f-s13">
					
	Smartphone hay còn được biết tới là một loại điện thoại di động với hệ điều hành được tích hợp khiến cho 1 chiếc điện thoại trở nên đa công dụng hơn rất nhiều. Điện thoại di động từ trước đến nay phát triển theo 2 xu hướng. 1 là rất nhỏ, tiên lợi mang đi mọi nơi. 2 là to như chiếc tablet kết hợp giữa điện thoại và máy tính. Những chiếc điện thoại di động thường bỏ túi, thường được kết hợp các tính năng của một chiếc điện thoại thông thường như nghe và thực hiện các cuộc gọi thông thường, nhận tin nhắc văn bản và các tính năng phổ biến khác như là máy nghe nhạc, lịch, máy tính, trò chơi, máy ảnh và cả quáy quay video nữa, Hầu hết những chiếc điện thoại di động hiện nay đều có thể truy cập internet và cài đặt được nhiều ứng dụng từ bên thứ 3 trong CH play hay Appstore. 
	<br><br>
	Điện thoại di động chính thức ra mắt và được chấp nhận từ năm 1999 và được sử dụng phổ biến từ năm 2000. Hầu hết những chiếc điện thoại di động sản xuất từ năm 2012 trở đi đều có thể sử dụng 3G và 4G. Tính cho tới quý thứ 3 của năm 2012 thì đã có 1 tỷ chiếc điện thoại được bán ra trên toàn thế giới. TÍnh đến năm đã có 65% người sử dụng điện thoại di động là smartphone. Đến năm 2016, con số này đã chiếm tới 79% trong thị trường di động. Và hiện nay, điện thoại di động đa phần chạy hệ điều hành IOS và Androi. Vào đầu năm 2007, Apple giới thiệu iPhone và đây là 1 trong những chiếc điện thoại di động smartphone đầu tiên có sử dụng cảm ứng đa giao diện. và iOS là hệ điều hành độc quyèn được phát hành bởi Apple và chỉ dành cho những chiếc iPhone mà hãng sản xuất ra. Những fan nhà Táo cũng đã thoát ra khỏi sự bó buộc vào máy tính khi hãng này đã cung cấp chương trình đồng bộ hóa dữ liệu người dùng thông qua iCloud. Tuy nhiên, iPhone hay iOS vẫn chỉ đứng thứ 2 khi điện thoại di động sử dụng nhiều nhất vẫn là Android.
	<br>
				</p>
				<br>
				</div>
				<div class="col-lg-4">
					<img src="./img/mota.png" class="w-100" alt="">
				</div>
			</div>
			<div class="row">
				<div class="col">
					<p class="f-s13">
						Android là hệ điều hành điện thoại di động giá rẻ và phổ biến hơn cả do Tập đoàn Google phát triển. Cho đến năm 2015 thì đã có tới 325 triệu chiếc điện thoại di động giá rẻ sử dụng hệ điều hành Android, dẫn đầu trong số các nền tảng hệ điều hành. Và hãng Samsung cũng là một trong những nhà sản xuất các thiết bị điện thoại di động giá rẻ hàng đầu hiện nay. HIện nay ngành công nghệ điện thoại di động ngày càng phát triển, trong một năm có tới hàng chục chiếc điện thoại di động mới được nghiên cứu và phát hành ra ngoài thị trường. Ngoài ra, khi lựa chọn một chiếc điện thoại di động chúng ta còn quá nhiều vấn đề cần phải xem xét tới. Ví như thời lượng pin, chiếc điện thoại di động gí rẻ đó sử dụng loại chip gì, hay đơn giản là loại điện thoại di động đó có những màu nào và loại điện thoại đó có nhiều phụ kiện đi kèm hay không. Chọn được một chiếc điện thoại di động giá rẻ chất lượng tốt cho bạn hay những người thân trong gia đình là một quyết định quan trọng. Trước đó, Hoàng Hà Mobile đưa ra khẩu hiệu “Những gì chúng tôi không có, tức là bạn không cần”. Hoàng Hà đưa ra rất nhiều sự lựa chọn cho bạn. một chiếc điện thoại di động bền, đẹp, hay điện thoại di động giá rẻ lại có khả năng chống nước chống bụi, có thẻ nhớ mở rộng và pin rất khỏe.
<br><br>
Đưa ra quyết định mua một chiếc điện thoại di động giá rẻ không hề dễ dàng. Nhưng hãy để Hoàng Hà Mobile giúp bạn. Chúng tôi cung cấp mọi mặt hàng thiết bị di độ đủ loại hãng và phân khúc. Với sự lựa chọn là 1 chiếc điện thoại di động giá rẻ smartphone bền và tốt thì bạn có thể lựa chọn Xiaomi hoặc Samsung cũng có rất nhiều mẫu điện thoại thuộc phân khúc tầm trung chất lượng tốt. Hay nếu bạn tìm kiếm những chiếc điện thoại di động chính hãng và giá rẻ thì Hoàng Hà cũng có rất nhiều sự lựa chọn cho bạn. Đặc biệt là khi bạn có thể mua điện thoại với mức giá vô cùng phải chăng khi tham gia gói mua hàng trả góp tại Hoàng Hà. Hoàng Hà Mobile – Siêu thị điện thoại di động giá rẻ nhất, miễn phí vẫn chuyển toàn quốc, bảo hành 12 tháng, trả góp 0%.
					</p>
				</div>
			</div>
		</div>
	<?php require 'footer.php' ?>
	</div>
</body>
</html>