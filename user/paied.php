<?php
require_once '_main.php'; ?>

    <!-- =============================================== -->



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                支付完成
                <small>Pay finished</small>
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
                        if ($_POST['paied'] == 1) {
	                        $order->Create($oname, $oname, $pid, $pinfo->Price(), $number, $total, $U->uid, 0);
                        }
                    ?>
                    
                    <div class="box box-primary">
                        <div class="box-body">
                        	<?php
                        	if ($_POST['paied'] == 1) {
                        		echo "系统已经收到您的通知，客服会在核对后为您添加套餐";
                        	}else{
                        		echo "您的支付出了点小问题，如果已经支付，客服会在核对后为您添加套餐";
                        	}
                        	?>
                        </div><!-- /.box -->
                    </div>
                </div>
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
<?php
require_once '_footer.php'; ?>