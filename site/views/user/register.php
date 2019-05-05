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
			<div class="form-register">
				<form method="POST" action="user/register">
					<h3>Đăng ký</h3>
					<div class="form-group">
						<input type="text" name="username" placeholder="Tên đăng nhập" class="form-control">
					</div>
					<div class="form-group">
						<input type="password" name="password" placeholder="Mật khẩu" class="form-control">
					</div>
					<div class="form-group">
						<input type="text" name="name" placeholder="Tên" class="form-control">
					</div>
					<div class="form-group">
						<input type="email" name="email" placeholder="Email" class="form-control">
					</div>
					<div class="form-group">
						<input type="text" name="address" placeholder="Địa chỉ" class="form-control">
					</div>
					<div class="form-group">
						<input type="text" name="phone" placeholder="Số điện thoại" class="form-control">
					</div>
					<button type="submit" class="submit-register">Đăng ký</button>
				</form>
			</div>
		</center>
		</div><!--End Row-->
	</div><!--End container -->
</div><!--End content-->
<!-- Gọi Footer -->
	<?php require('site/views/commons/footer.php'); ?>

</body>
</html>