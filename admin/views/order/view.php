<?php 


	require('admin/views/commons/header.php');
	require('admin/views/commons/sidebar_left.php');
	require('admin/views/commons/header_right.php');
?>

<h2>View Detail</h2>

<h4>Order_detail</h4>
<!-- /.col-lg-12 -->
    <table class="table table-bordered ">
        <thead>
            <tr align="center">
                <th>Id</th>
                <th>Order id</th>
                <th>Product id</th>
                <th>Number product</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        if(count($order_detail)>0){
            ?>
            <tr class="table-content" align="center">
                <td><?php echo $order_detail['id'] ?></td>
                <td><?php echo $order_detail['order_id'] ?></td>
                <td><?php echo $order_detail['product_id'] ?></td>
                <td><?php echo $order_detail['number_product'] ?></td>
                <?php if($order_detail['status'] ==1){ ?>
                    <td  class="center"><a style="color:blue" href="admin.php/order/postPending/<?php echo $order_detail['id']; ?>">Move to waiting</a></td>
                <?php } else{ ?>
                    <td  class="center"><a style="color:blue" href="admin.php/order/postSuccess/<?php echo $order_detail['id']; ?>">Move to success</a></td>
                <?php } ?>
            </tr>
         
        </tbody>
    </table>
<?php } else{ echo "<div class='col-md-12'><div class='row'><p>Not found.</p></div></div>"; } ?>

<h4>Product</h4>
<!-- /.col-lg-12 -->
    <table class="table table-bordered ">
        <thead>
            <tr align="center">
                <th>Product id</th>
                <th>Name</th>
                <th>Price</th>
                <th>Number Products</th>
                <th>Total</th>
                <th>View Product</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        if(count($product)>0){
            ?>
            <tr class="table-content" align="center">
                <td><?php echo $product['id'] ?></td>
                <td><?php echo $product['name'] ?></td>
                <td><?php echo $product['price'] ?></td>
                <td><?php echo $order_detail['number_product'] ?></td>
                <td><?php echo $product['price']*$order_detail['number_product'] ?></td>
                <td class="center"><a href="product/view/<?php echo $product['id'] ?>" target="_blank" style="color:green">View Product</a></td>
            </tr>
         
        </tbody>
    </table>
<?php } else{ echo "<div class='col-md-12'><div class='row'><p>Not found.</p></div></div>"; } ?>


<h4>Customer</h4>
<!-- /.col-lg-12 -->
    <table class="table table-bordered ">
        <thead>
            <tr align="center">
                <th>ID</th>
                <th>Customer Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        if(count($info)>0){
            ?>
            <tr class="table-content" align="center">
                <td><?php echo $info['id'] ?></td>
                <td><?php echo $info['name'] ?></td>
                <td><?php echo $info['email'] ?></td>
                <td><?php echo $info['address'] ?></td>
                <td><?php echo $info['phone'] ?></td>
                <td><?php echo date('d-m-Y H:i:s',strtotime($info['created_at'])) ?></td>
            </tr>
         
        </tbody>
    </table>
<?php } else{ echo "<div class='col-md-12'><div class='row'><p>Not found.</p></div></div>"; } ?>


<?php

	require('admin/views/commons/footer.php');

