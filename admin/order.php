<?php
require_once '_main.php';
?>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                订单列表
                <small>Order List</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <p> <a class="btn btn-success btn-sm" href="node_add.php">添加</a> </p>
                    <div class="box">
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tr>
                                    <th>ID</th>
                                    <th>套餐名称</th>
                                    <th>产品ID</th>
                                    <th>数量</th>
                                    <th>单价</th>
                                    <th>总价</th>
                                    <th>用户名</th>
                                    <th>支付状态</th>
                                    <th>操作</th>
                                </tr>
                                <?php
                                $o = new \Ss\Product\Order();
                                $orders = $o->AllOrder();
                                foreach($orders as $os){ ?>
                                    <tr>
                                        <td>#<?php echo $os['id']; ?></td>
                                        <td> <?php echo $os['name']; ?></td>
                                        <td><?php echo $os['p_id']; ?></td>
                                        <td><?php echo $os['p_number']; ?></td>
                                        <td><?php echo $os['p_price']; ?></td>
                                        <td><?php echo $os['total']; ?></td>
                                        <td><?php echo (new \Ss\User\UserInfo($os['user_id']))->GetEmail(); ?></td>
                                        <td><?php echo $os['status']; ?></td>
                                        <td>
                                            <a class="btn btn-info btn-sm" href="order_finished.php?id=<?php echo $os['id']; ?>">核对</a>
                                            <a class="btn btn-danger btn-sm" href="order_del.php?id=<?php echo $os['id']; ?>">删除</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
            </div>

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
<?php
require_once '_footer.php'; ?>
