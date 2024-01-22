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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./font/fontawesome-free-6.0.0-web/css/all.css">
    <link rel="stylesheet" href="./css/style.css">
	<title>Hoàng Hà Mobile - Hệ thống bán lẻ thiết bị di động  và công nghệ chính hãng giá tốt</title>
</head>
<body>
<div id="main" class="bc-color">
<?php 
    $title = '';
    $title = $_GET['searchTitle'];
    require 'admin/connect.php';
    $sql = "SELECT products.* ,manufacturer.name as manufacturer_name, category.name as category_name from products INNER JOIN manufacturer on products.id_manufacturer = manufacturer.id
    INNER join category on manufacturer.id_category = category.id
    where products.name like '%$title%' or products.config like '%$title%'";
    $result = mysqli_query($connect,$sql);
    $arr_result = mysqli_fetch_array($result);
    require 'header.php';
?>
    <div class="container text-center mb__30 mt__30">
        <div class="row row-cols-sm-2 row-cols-md-4 row-cols-md-5">
        <?php foreach ($result as $each): ?>
        <div class="col m__8-2">
            <div class="p__20-10-40  bc-color_product br__16 m__4-8 h-428">
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
            </div>
        </div>
        <?php endforeach ?>
        </div>
    </div>
<?php require 'footer.php' ?>
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

  <!-- subiz -->
	<script>!function(s,u,b,i,z){var o,t,r,y;s[i]||(s._sbzaccid=z,s[i]=function(){s[i].q.push(arguments)},s[i].q=[],s[i]("setAccount",z),r=["widget.subiz.net","storage.googleapis"+(t=".com"),"app.sbz.workers.dev",i+"a"+(o=function(k,t){var n=t<=6?5:o(k,t-1)+o(k,t-3);return k!==t?n:n.toString(32)})(20,20)+t,i+"b"+o(30,30)+t,i+"c"+o(40,40)+t],(y=function(k){var t,n;s._subiz_init_2094850928430||r[k]&&(t=u.createElement(b),n=u.getElementsByTagName(b)[0],t.async=1,t.src="https://"+r[k]+"/sbz/app.js?accid="+z,n.parentNode.insertBefore(t,n),setTimeout(y,2e3,k+1))})(0))}(window,document,"script","subiz","acqqrmpwwuqeianonpxt")</script>
<!-- subiz -->

</body>
</html>