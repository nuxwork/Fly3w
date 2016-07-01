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
                            <p> 套餐：<span class="label label-info"> <?php echo $oo->get_plan();?> </span> </p>
                            <p> 账户余额：<?php echo $oo->get_money();?>元 </p>
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
                <div class="col-md-3">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-body">
                            <form action="pay.php" method="post">
                                <p>套餐名称：<?php echo $p['name'] ?></p>
                                <p>价格：<?php echo $p['price'] ?>￥</p>
                                <p>说明：<?php echo $p['description'] ?></p>
                                <p>数量：<input type="number" value="1" name="n"> </p>
                                <input type="number" value="1" name="p" hidden="true">
                                <input type="text" value="<?php (new \DateTime())->format('Y-m-d H:i:s') ?>" name="order_time" hidden="true">
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
