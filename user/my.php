<?php
require_once '_main.php'; ?>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                用户中心
                <small>User Center</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-body">
                            <p>用户名：<?php echo $U->GetUserName(); ?></p>
                            <p>邮箱：<?php echo $user_email; ?></p>
                            <p>套餐：<span class="label label-info"> <?php echo $oo->get_plan();?> </span> </p>
                            <p>账户余额：<?php echo $oo->get_money();?>元 </p>
                            <p>套餐剩余：<?php echo $oo->get_money();?>元 </p>
                            <!-- <p><a class="btn btn-danger btn-sm" href="kill.php">删除我的账户</a></p> -->
                        </div><!-- /.box -->
                    </div>
                </div>
            </div>
        </section><!-- /.content -->

<section class="content-header">
            <h1>
                套餐购买
                <small>Package Purchase</small>
            </h1>
        </section>

        <?php 
            $product = new \Ss\Product\Product();
            $products = $product->AllProduct();
        ?>

        <!-- Main content -->
        <section class="content">
            <div class="row">
            <?php foreach ( $products as $p ){ ?>
                <!-- left column -->
                <div class="col-md-2">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-body">
                            <form action="pay.php" method="post">
                                <p>套餐名称：<?php echo $p['name'] ?></p>
                                <p>价格：<strong><?php echo $p['price'] ?></strong>￥</p>
                                <input name="pid" type="text" value="<?php echo $p['id'] ?>" hidden="true">
                                <input name="number" type="number" value="1" hidden="true">
                                <input name="order_time" type="text" value="<?php echo (new \DateTime())->format('Y-m-d H:i:s') ?>" hidden="true">
                                <input class="btn btn-danger btn-sm" type="submit" value="购买" />
                            </form>
                        </div><!-- /.box -->
                    </div>
                </div>

            <?php } ?>
        </section><!-- /.content -->
        
    </div><!-- /.content-wrapper -->
<?php
require_once '_footer.php'; ?>
