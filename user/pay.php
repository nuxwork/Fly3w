<?php
require_once '_main.php'; ?>

    <!-- =============================================== -->



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                支付
                <small>Pay</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-5">
                    <?php
                        $pid = $_POST['pid'];
                        $number = $_POST['number'];
                        $pinfo = new \Ss\Product\ProductInfo($pid);
                        $total = $number * $pinfo->Price();
                        $order = new \Ss\Product\Order();
                        $oname = $pinfo->Name() . 'x' . $number;
                        //$order->delAllNotPaied($U->uid);
                        //$order->Create($oname, $oname, $pid, $pinfo->Price(), $number, $total, $U->uid, 0);
                    ?>
                    
                    <div class="box box-primary">
                        <div class="box-body">
                        <p>套餐名称：<?php echo $pinfo->Name(); ?></p>
                        <p>需要支付：<strong><?php echo $total; ?></strong>￥</p><br>
                        <p><strong>请使用微信扫描二维码支付，支付成功后，点击“我已支付”通知客服，客服人员会在核对后为您添加套餐。</strong></p>
                        <div class="row" align="center">
                            <div class="col-md-6" >
                            <form action="paied.php" method="post" name="from_pay">
                                <p><img width="100%" height="100%" src="../asset/img/product/product@x<?php echo $pinfo->Price(); ?>.png">
                                </p><br>
                                <input name="pid" type="text" value="<?php echo $pid; ?>" hidden="true">
                                <input name="paied" type="number" value="1" hidden="true">
                                <input name="number" type="number" value="<?php echo $number; ?>" hidden="true">
                                <input name="order_time" type="text" value="<?php echo (new \DateTime())->format('Y-m-d H:i:s'); ?>" hidden="true">
                                <input class="btn btn-danger btn-sm" type="submit" value="我已支付" />
                            </form>
                            </div>
                        </div>
                        </div><!-- /.box -->
                    </div>
                </div>
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
<?php
require_once '_footer.php'; ?>