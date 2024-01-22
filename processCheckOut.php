<?php
$name_receiver = $_POST['name_receiver'];
$phone_receiver = $_POST['phone_receiver'];
$address_receiver = $_POST['address_receiver'];


require 'admin/connect.php';
session_start();

$cart = $_SESSION['cart'];
$total_price = 0;
foreach ($cart as $each) {
    echo $each['current_price'];
	$total_price += $each['quantity'] * $each['current_price'];
}

$user_id = $_SESSION['id'];
$status =0;//mới đặt
$sql = "insert into orders(user_id,name_receiver,phone_receiver,address_receiver,status,created_at,total_price)  values ('$user_id','$name_receiver','$phone_receiver','$address_receiver','$status', default,'$total_price')";
mysqli_query($connect,$sql);
echo $sql;

$sql = "select max(id) from  orders where  user_id = '$user_id'";
$result = mysqli_query($connect,$sql);
$order_id = mysqli_fetch_array($result)['max(id)'];
echo $sql;
foreach ($cart as $product_id => $each) {
	$quantity = $each['quantity'];
	$sql ="insert into order_product(order_id,product_id,quantity) values('$order_id','$product_id','$quantity')";
    echo $sql;
	mysqli_query($connect,$sql);
}


mysqli_close($connect);
unset($_SESSION['cart']);

header('location:index.php');

