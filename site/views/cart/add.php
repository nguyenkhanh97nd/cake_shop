<!-- Gọi header -->

	<?php require('site/views/commons/header.php'); ?>
	
<!-- Gọi Navbar -->
	
	<?php require('site/views/commons/navbar.php'); ?>
<!--Content -->



<div class="content">
	<!--Container content-->
	<div class="container">
		<!-- Row content -->
		<div class="row">



		<center style="width: 50%;margin:0 auto">
			<div class="form-info-user">
				<form method = "POST" action="cart/add">
					<h3>Thông tin đặt hàng</h3>
					<h4>Tên người dùng</h4>
					<div class="form-group">
						<input type="text" name="name" value="<?php  echo isset($_SESSION['user']['name']) ? $_SESSION['user']['name'] : '' ?>" class="form-control" >
					</div>
					<h4>Email</h4>
					<div class="form-group">
						<input type="email" name="email" value="<?php echo isset($_SESSION['user']['name']) ? $_SESSION['user']['email'] : '' ?>" class="form-control" >
					</div>

					<h4>Địa chỉ</h4>
					<div class="form-group">
						<input type="text" name="address" value="<?php echo isset($_SESSION['user']['name']) ? $_SESSION['user']['address'] : '' ?>" class="form-control" >
					</div>
					<h4>Số điện thoại</h4>
					<div class="form-group">
						<input type="text" name="phone" value="<?php echo isset($_SESSION['user']['name']) ? $_SESSION['user']['phone'] : '' ?>" class="form-control" >
					</div>
					<input type="submit" class="submit-buy" value="Gửi đơn hàng">
				</form>
			</div>
		</center>

<?php $cart = $_SESSION['cart'] ?>





<h2 class="cart-name">GIỎ HÀNG</h2>

			<?php if(count($cart) >0){ ?>


			<div class="form-cart">
					<table>
						<thead>
							<tr>
								<th>STT</th>
								<th>Tên sản phẩm</th>
								<th>Giá</th>
								<th>Số lượng</th>
								<th>Tổng</th>
							</tr>
						</thead>
						<tbody>

						<?php $total=0 ?>
						
	<?php for($i=1; $i<=count($cart['name']) ; $i++ ){  ?>
		
		<tr class="cart-item-<?php echo $i; ?>">
				<td><?php echo $i ?></td>
				<td><?php echo $cart['name'][$i]; ?></td>

				<td class="price-item"><?php echo $cart['price'][$i] ?></td>
				<td class="number-item"><?php echo $cart['number'][$i] ?></td>
				<td class="total-item-price"><?php echo $cart['price'][$i]*$cart['number'][$i]; $total = $total + ($cart['price'][$i]*$cart['number'][$i] ); ?></td>
		</tr>

	<?php } ?>
						
							
									
							
						</tbody>
					</table>
					<div style="padding-top:20px">
						<span class="cart-total" >Tổng đơn hàng: <?php echo $total; ?></span>
					</div>

			</div>

			<?php } else { echo 'Không có sản phẩm nào'; } ?>

		</div><!--End Row-->
	</div><!--End container -->
</div><!--End content-->
<!-- Gọi Footer -->
	<?php require('site/views/commons/footer.php'); ?>

</body>
</html>