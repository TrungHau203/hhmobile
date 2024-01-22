<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./font/fontawesome-free-6.0.0-web/css/all.css">
	<link rel="stylesheet" href="./css/style.css">
	<title>Chi tiết</title>
</head>
<body>
	<div id="main" class="bc-color">
		<?php 
		require 'header.php';
			if(empty($_GET['id'])){
				$id =1;
			} else {
				$id = $_GET['id'];
			}
			//sắp xếp
			if(empty($_GET['order'])){
				$order ="";
			} elseif ($_GET['order'] =='asc') {
				$order = "ORDER by products.current_price";
			} else {
				$order = "ORDER by products.current_price DESC";
			}
			if(empty($_GET['price'])){
				$price ="";
			} else {
				switch ($_GET['price']) {
					case "under10m":
					  $price ="and products.current_price < 10000000";
					  break;
					case "bw1020":
					  $price ="and products.current_price BETWEEN 10000000 and 20000000";
					  break;
					case "bw2030":
					  $price ="and products.current_price BETWEEN 20000000 and 30000000";
					  break;
					case "top30":
					  $price ="and products.current_price > 30000000";
					  break;
				}
			}
			if(empty($_GET['ram'])){
				$ram ="";
			} else {
				switch ($_GET['ram']) {
					case "3gb":
					  $ram ="and products.config like '%3%GB%'";
					  break;
					case "4gb":
					  $ram ="and products.config like '%4%GB%'";
					  break;
					case "6gb":
					  $ram ="and products.config like '%6%GB%'";
					  break;
					case "8gb":
						
					  $ram ="and products.config like '%8%GB%'";
					  break;
					
				}
			}
			require 'admin/connect.php';
			$sql = "SELECT products.* ,manufacturer.name as manufacturer_name, category.name as category_name from products INNER JOIN manufacturer on products.id_manufacturer = manufacturer.id
			INNER join category on manufacturer.id_category = category.id
			where products.id_manufacturer = '$id' $price $ram $order limit 20";
			$result = mysqli_query($connect,$sql);
			$arr_result = mysqli_fetch_array($result);
		 ?>

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
					<a href="category.php?id=1">
						<span><?php echo $arr_result['category_name']; ?></span>
					</a>
				</li>
				<li>
					<i class="fa-solid fa-angle-right"></i>
					<a href="#">
						<span><?php echo $arr_result['manufacturer_name']; ?></span>
					</a>
				</li>
			</ul>
    </div>
    <div class="container p__0">
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
							$sql_filter_trademark = "SELECT manufacturer.id as manufacturer_id, manufacturer.name as manufacturer_name, COUNT(manufacturer.name) as quantity from products INNER JOIN manufacturer on products.id_manufacturer = manufacturer.id INNER join category on manufacturer.id_category = category.id where manufacturer.id_category = '$id' GROUP BY manufacturer.name;";
							$result_filter_trademark = mysqli_query($connect,$sql_filter_trademark);
							$arr_result_filter_trademark = mysqli_fetch_array($result);
							foreach ($result_filter_trademark as $each):
						?>
							<li>
								<a href="product.php?id=<?php echo $each['manufacturer_id	'] ?>"><?php echo $each['manufacturer_name'] ?>(<?php echo $each['quantity'] ?>)</a>
							</li>
						<?php endforeach ?>
							
						</ul>
					</div>
    			</div>
    			<div class="facet category-filter">
    				<a href="">
	    				<span>Giá</span>
	    				<i class="fa-solid fa-angle-down"></i>
    				</a>
					<div class="container p__0 w-color category-hover br__16">
						<ul class="p__0-16"> 
							<li>
								<a href="product.php?id=<?php echo $id ?>&price=under10m">Dưới 10 triệu</a>
							</li>
							<li>
								<a href="product.php?id=<?php echo $id ?>&price=bw1020">10 triệu - 20 triệu</a>
							</li>
							<li>
								<a href="product.php?id=<?php echo $id ?>&price=bw2030">20 triệu - 30 triệu</a>
							</li>
							<li>
								<a href="product.php?id=<?php echo $id ?>&price=top30">Trên 30 triệu</a>
							</li>
						</ul>
					</div>
    			</div>
    			<div class="facet price-filter">
    				<a href="">
	    				<span>Ram</span>
	    				<i class="fa-solid fa-angle-down"></i>
    				</a>
					<div class="container p__0 w-color price-hover br__16">
						<ul class="p__0-16"> 
							<li>
								<a href="product.php?id=1&ram=3gb">3GB</a>
							</li>
							<li>
								<a href="product.php?id=1&ram=4gb">4GB</a>
							</li>
							<li>
								<a href="product.php?id=1&ram=6gb">6GB</a>
							</li>
							<li>
								<a href="product.php?id=1&ram=8gb">8GB</a>
							</li>
							<li>
								<a href="product.php?id=1&ram=12gb">12GB</a>
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
								<a href="product.php?id=1&price=under5m">Dưới 5 triệu</a>
							</li>
							<li>
								<a href="product.php?id=1&price=bw510">5 triệu - 10 triệu</a>
							</li>
							<li>
								<a href="product.php?id=1&price=bw1020">10 triệu - 20 triệu</a>
							</li>
							<li>
								<a href="product.php?id=1&price=bw2030">20 triệu - 30 triệu</a>
							</li>
							<li>
								<a href="category.php?id=1&price=top30">Trên 30 triệu</a>
							</li>
						</ul>
					</div>
    			</div>
    		</div>
    	</div>
    </div>
		<div class="container text-center mb__30 mt__30">
			<div class="row row-cols-sm-2 row-cols-md-4 row-cols-md-5 gx-4">
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
		<?php 
			if($id==1){ 
		 ?>
		 <div class="container f-s13 preview_phone">
			 	<h3>
			 	Điện thoại iPhone chính hãng
			 </h3>
			 <p>
			 	Sự ra đời của những chiếc điện thoại iPhone không nghi ngờ gì khi đã thay đổi bộ mặt của giới công nghệ. Bằng vào sự thành công của hãng Apple trong suốt những năm qua đã là một mình chứng rõ nét nhất cho chuyện đó. điện thoại iPhone xuất hiện và bùng nổ tại Việt Nam chính xác vào khoảng năm 2008 khi chiếc điện thoại iPhone 3g ra mắt. Với kiểu dáng vô cùng mới lạ, điện thoại iPhone đã khuấy đảo cả thế giới công nghệ - cũng là 1 bước tiến không nhỏ cho Apple. Cắt cạnh, bo viền, đen bóng sang trọng, hệ điều hành là độc nhất vô nhị, tôi ưu và đơn giản để sử dụng với mọi đối tượng người tiêu dùng. Và kể từ khi những chiếc điện thoại iPhone được đưa ra thị trường, có khá nhiều ý kiến trái chiều được đưa ra, quá nhiều cuộc tranh cãi về những chiếc điện thoại iPhone. Nhưng dù sao, Apple vẫn thành công trên con đường của mình, theo chiến lược “Luôn là kẻ dẫn đầu, nếu không thể dẫn đầu, hãy là kẻ giỏi nhất”
			 </p>
			 <br>
			 <h4>
			 	Cấu hình và thiết kế điện thoại iPhone
			 </h4>
			 <p>
			 	Apple là một công ty chuyên phát triển các sản phẩm khoa học và công nghệ, và điện thoại iPhone là một ví dụ điển hình và hoàn hảo. Theo cương lĩnh là tạo ra chiếc điện thoại được trang bị tính năng phong phú, điện thoại iPhone đã đánh trúng tâm lý và nhu cầu của người tiêu dùng và đã rất nhanh xây dựng được lượng fan hâm mộ mạnh mẽ. Chiếc điện thoại iPhone thay đổi thế giới -iPhone 3g là một tỏng những chiếc điện thoại di động thông minh – smartphone nhỏ nhất. điện thoại iPhone có phong cách thiết kế nhỏ gọn tiện không giống bất cứ chiếc điện thoại nào khác. Với phần kính che mặt chống trầy xướt – 1 trong những yếu tố vô cùng cần thiết. Điện thoại iPhone sở hữu màn hình với độ hiển thị ban đầu là 16 triệu điểm màu với độ phân giải 480 x 320 pixel, cảm biến định hướng cùng giao diện người dùng dựa trên cảm ứng, hệ điều hành mang lại cảm giác lướt web và chơi game vô cùng mượt mà. Về ngoại hình, trên thực tế hầu như toàn bộ phần mặt trước là phần màn hình hiển thị , phần loa nghe phía trên và nút Home phía dưới.
			 </p>
			 <br>
			 <h4>
			 	Điện thoại iPhone giá rẻ
			 </h4>
			 <p>
			 	Do nhu cầu của người tiêu dùng Việt nam càng ngày càng tăng cao nên số lượng điện thoại iPhone đổ về thị trường Việt rất nhiều. Điều này khiến rất nhiều người tiêu dùng không biết nên chọn cơ sở nào để mua hàng chất lượng tốt giá cả hợp lý. Trong đó, Hoàng Hà Mobile là một trong những công ty kinh doanh và phân phối điện thoại iPhone chất lượng từ rất sớm. Và điện thoại iPhone cũng phân chia ra thành rất nhiều loại mặt hàng khác nhau. Một loại iPhone 5 nhưng có tới hơn 10 loại điện thoại iPhone 5 khác nhau: chia ra thành các loại như bộ nhớ 16 gb, 32gb, 64gb,…. Hay là hàng nhập khẩu, hàng công ty FPT Trading phân phối,… thậm chí, các phiên bản iPhone 6 còn khác nhau ở kích thước màn hình. Người tiêu dùng có thể có cho mình nhiều sự lựa chọn. Việc xuất xứ của những chiếc điện thoại iPhone cũng là một tỏng những vấn đề được quan tâm nhất. Những chiếc điện thoại iPhone được bán ra tại Hoàng Hà đề là hàng chính hãng nhập khẩu từ Apple của các thị trường uy tín như Mỹ hay Singapore, HongKong và Nhật.
			 </p>
			 <br>
			 <p>
			 	Nếu bạn đang quan tâm tới một chiếc điện thoại iPhone thì đừng ngần ngại, bởi có một khảo sát cho ra kết luận rằng 90% những người sử dụng điện thoại iPhone sẽ không đổi sang một hãng điện thoại nào khác. Đây là một mình chứng thuyết phục cho chất lượng của những chiếc điện thoại iPhone. Hệ điều hành tối ưu và khác biệt cũng là 1 trong những yếu tố níu chân người tiêu dùng. Hiện nay, sản phẩm điện thoại iPhone 7 và 7 plus với khả năng chống nước đang dấy lên những cơn sốt trong giới công nghệ. Và cũng không dừng lại tại đó, cả thế giới đặt rất nhiều kỳ vọng vào hãng Apple với điện thoại iPhone 8 được cho là sẽ ra mắt trong năm sau. Chống nước, chông bụi, kháng va đạp, nút Home cảm ứng… Apple sẽ còn cho ra những sản phẩm bất ngờ tới mức nào! Hãy cùng Hoàng Hà khám phá thế giới công nghệ trong hệ sinh thái IOS nhé.
			 </p>
		 </div>
		<?php } else{ ?>
			<div class="container f-s13 preview_phone">
				<h3>
					Điện thoại Xiaomi giá rẻ tại Hoàng Hà Mobile
				</h3>
				<p>
					Từ những dòng smartphone xiaomi redmi note 2, note 3 cho đến những Mipad hay Mi TV box, tất cả đang tạo nên một cơn sốt về thiết bị công nghệ tầm trung mà khởi nguồn của nó là một cái tên cũng chỉ mới xuất hiện trong thị trường Việt Nam: XIAOMI. Liệu bạn có chắc chắn rằng mình biết rõ toàn bộ về Xiaomi? Hay chỉ hiểu đơn giản nó là một hãng điện thoại “Tàu”?. Đúng! Điện thoại Xiaomi là một hãng điện thoại “Tàu”! Nhưng không chỉ đơn giản vậy, đây còn là một loại “Tàu” chiến, được “trang bị tận răng” cả về tiềm lực tài chính lẫn chính sách phát triển cực kỳ rõ ràng và ổn định với vốn huy động vào khoảng 45 tỷ USD – một trong những công ty start up có giá trị lớn nhất thế giới.
				</p>
				<br>
				<h4>
					Điện thoại Xiaomi chính hãng đang được người dùng yêu thích
				</h4>
				<p>
					Không phải nhiễm nhiên mà hiện tại, điện thoại Xiaomi đang trở nên quá quen thuộc với mọi tầng lớp từ già – trẻ, trai – gái, doanh nhân thành đạt hay dù là doanh nhân chưa thành đạt. Đương nhiên những chiếc iPhone của Apple hay các siêu phẩm Galaxy tới từ Samsung vẫn rất được ưa chuộng. Nhưng điều chúng ta đang nói ở đây là ở phân khúc tầm trung với mức giá chỉ khoảng 3-5 triệu đồng, bạn sẽ chọn cho mình một chiếc smartphone như thế nào? Chụp ảnh đẹp? Cấu hình tốt? Thiết kế tinh tế? Màu sắc hài hòa? Tôi dám khẳng định với bạn, ở một mức giá như vậy, hiện tại Xiaomi đang chiếm vị thế độc tôn! Vì sao ư? Liệu với 4 triệu trong tay, bạn có thể sở hữu một smartphone với cấu hình khủng bao gồm ram 3Gb, camera 13MP cùng bộ nhớ trong lên đến 32Gb? Đó chính là thông số của Xiaomi Redmi Note 3 – con quái vật nhỏ đang giúp Xiaomi chiếm lĩnh thị trường điện thoại giá rẻ tại Việt Nam.
				</p>
				<br>
				<h4>
					 Tham vọng bành trướng của Xiaomi
				</h4>
				<p>
					Nhưng khoan nói đến cụ thể một chiếc điện thoại, chúng ta cùng xem Xiaomi LÀ AI và họ mạnh ra sao. Xiaomi trước kia vốn rất quen thuộc với việc hỗ trợ phần mềm tạo giao diện tuyệt đẹp cho các sản phẩm Android khi họ được thành lập từ ngày 6/4/2010, tức là chỉ mới 6 năm tuổi đời cho một doanh nghiệp đang thuộc top 5 nhà sản xuất lớn nhất Trung Quốc. Chỉ sau vài năm, từ một cái tên “vô danh tiểu tốt” Xiaomi hiện đang là một tay chơi sừng sỏ trong giới công nghệ với tham vọng rõ ràng về việc vươn xa ra khỏi thị trường châu Á. Với những bước đi hợp lý và khôn ngoan của mình, người ta mệnh danh cho Xiaomi với một cái tên cực kêu “Kẻ thách thức Apple” trong bối cảnh hãng sản xuất này tung ra thị trường sản phẩm điện thoại Xiaomi Mi Note như một câu trả lời cho iPhone 6. Cùng với đó, dòng điện thoại Xiaomi giá rẻ cũng được tung ra thị trường với sự xuất hiện của Xiaomi redmi note 2 với mức giá chỉ khoảng 2 triệu đồng tại Việt Nam.
				</p>
				<br>
				<h4>
					 Điện thoại Xiaomi đang đứng vứng trên thị trường
				</h4>
				<p>
					Theo các số liệu thống kê của Bloomberg, doanh thu của Xiaomi trong năm 2014 đã đạt mốc 12 tỷ USD cùng với 5,6% thị phần smartphone thế giới. Cho dù thật khập khiễng khi so sánh con số đó với doanh thu của Apple với 183 tỷ USD hay 200 tỷ USD doanh thu của Samsung. Nhưng nhìn vào vị thế thị trường cùng thời gian hoạt động, tiềm năng năng phát triển và cạnh tranh của Xiaomi cũng như dòng Xiaomi giá rẻ là cực kỳ triển vọng. Có thể nói nếu giữ vững đà tăng trưởng ở Châu Á, đặc biệt là Việt Nam, và lan rộng sang các sân chơi quốc tế như Châu Âu, Xiaomi sẽ thực sự là một đối thủ đáng gờm sánh ngang với các đại gia như Apple và Samsung. Điện thoại Xiaomi cũng sẽ có sức canh tranh cực lớn khi có khả năng đáp ứng công nghệ cao nhưng giá thành lại vô cùng hợp lý.
				</p>
				<br>
			</div>
		<?php } ?>
		<?php require 'footer.php' ?>
	</div>
</body>
</html>