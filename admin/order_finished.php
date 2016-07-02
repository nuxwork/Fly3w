<?php
//引入配置文件
require_once '../lib/config.php';
require_once '_check.php';

$id = $_GET['id'];
$order = new \Ss\Product\OrderInfo($id);
$pid = $order->GetPID();
$product = new Ss\Product\ProductInfo($pid);
$oo->add_expired($uid, $product->Duration());
$order->UpdateStatus(1);

echo ' <script>alert("核对成功!")</script> ';
echo " <script>window.location='order.php';</script> " ;