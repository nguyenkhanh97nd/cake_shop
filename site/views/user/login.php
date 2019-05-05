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
		<center style="width: 80%;margin:0 auto">
			<div class="form-login">
				<form method="POST" action="user/login">
					<h3>Đăng nhập</h3>
					
					<div class="form-group">
						<input type="text" class="form-control" placeholder="username" name="username">
					</div>

					<div class="form-group">
						<input type="password" name="password" placeholder="password" class="form-control">
					</div>
					<div class="pull-right">
						<button type="submit" class="submit-login">Đăng nhập</button>
					</div>
				</form>
			</div>
			<div class="login-info">
				<h3>Bạn chưa có tài khoản?</h3>
				<p>Nếu bạn chưa có tài khoản hãy đăng lý tài khoản ngay với chúng tôi để nhận được nhưng thông tin hấp dẫn cũng như những ưu đãi khi bạn mua sắm tại cửa hàng chúng tôi.</p>
				<a class="login-link-register" href="user/register">Đăng ký</a>
			</div>
			</center>
		</div><!--End Row-->
	</div><!--End container -->
</div><!--End content-->
<!-- Gọi Footer -->
	<?php require('site/views/commons/footer.php'); ?>

</body>
</html>