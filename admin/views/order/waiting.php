<?php 


	require('admin/views/commons/header.php');
	require('admin/views/commons/sidebar_left.php');
	require('admin/views/commons/header_right.php');
?>

<h2>Order Waiting</h2>


<!-- /.col-lg-12 -->
    <table class="table table-bordered ">
        <thead>
            <tr align="center">
                <th>Count</th>
                <th>Id</th>
                <th>Order id</th>
                <th>Product id</th>
                <th>Number product</th>
                <th>Status</th>
                <th>View</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        if(count($order_detail)>0){

        $stt=0;
            foreach($order_detail as $item){ 
            $stt++;  ?>
            <tr class="table-content" align="center">
                <td><?php echo $stt; ?></td>
                <td><?php echo $item['id'] ?></td>
                <td><?php echo $item['order_id'] ?></td>
                <td><?php echo $item['product_id'] ?></td>
                <td><?php echo $item['number_product'] ?></td>
                <td  class="center"><a style="color:blue" href="admin.php/order/postSuccess/<?php echo $item['id']; ?>">Move to success</a></td>
                <td class="center"><a href="admin.php/order/view/<?php echo $item['id'] ?>" target="_blank" style="color:green">View</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <?php $pageList = $paginate->getList($_GET['page'], $pages); ?>

                    <div class="pagination_admin" style="clear:both">
                        <ul class="paginate_admin">
                            <?php echo $pageList;  ?>
                        </ul>
                    </div>
               

<?php } else{ echo 'Not found'; } ?>

<?php

	require('admin/views/commons/footer.php');

