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
				<h3>Thông tin tài khoản</h3>
				<form method="POST" enctype="multipart/form-data" action="/user/update_avatar">
					<div class="form-group">
						<center>
							<img src="/public/images/user/<?php echo $_SESSION['user']['avatar'] ? $_SESSION['user']['avatar'] : 'default-user.png' ?>" alt="" width="300px" height="300px">
						</center>
						<input type="file" accept="image/x-png,image/gif,image/jpeg" name="avatar_input">
					</div>
					<div class="form-group">
						<input type="submit" value="Update Avatar" name="user_update_avatar">
					</div>
				</form>
				<form method="GET" action="user/update_info">
					<h4>Tên người dùng</h4>
					<div class="form-group">
						<input type="text" name="name" value="<?php echo $_SESSION['user']['name'] ?>" class="form-control">
					</div>
					<h4>Tên đăng nhập</h4>
					<div class="form-group">
						<input type="text" name="username" value="<?php echo $_SESSION['user']['username'] ?>" class="form-control" disabled>
					</div>
					<h4>Email</h4>
					<div class="form-group">
						<input type="email" name="email" value="<?php echo $_SESSION['user']['email'] ?>" class="form-control" disabled>
					</div>

					<h4>Địa chỉ</h4>
					<div class="form-group">
						<input type="text" name="address" value="<?php echo $_SESSION['user']['address'] ?>" class="form-control">
					</div>
					<h4>Số điện thoại</h4>
					<div class="form-group">
						<input type="text" name="phone" value="<?php echo $_SESSION['user']['phone'] ?>" class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" name="user_update_info" value="Cập nhạt">
					</div>
				</form>
			</div>
		</center>







		<h2 class="cart-name">GIỎ HÀNG</h2>

			<?php if($cart && count($cart) >0){ ?>


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

						<?php $i=1; $total=0; ?>
						
	<?php foreach($cart as $item){  ?>
		
		<tr class="cart-item-<?php echo $i; ?>">
				<td><?php echo $i ?></td>
				<td><?php echo $item['name']; ?></td>

				<td class="price-item"><?php echo $item['price'] ?></td>
				<td class="number-item"><?php echo $item['number_product'] ?></td>
				<td class="total-item-price"><?php echo $item['price']*$item['number_product']; $total = $total + ($item['price']*$item['number_product'] ); ?></td>
				<?php $i++; ?>
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