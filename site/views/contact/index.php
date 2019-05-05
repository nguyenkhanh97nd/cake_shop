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
			<h1 class="contact-page-title">LIÊN HỆ</h1>
			<div class="contact-col-1 wow fadeInLeft">
				<form action="feedback" method="post">
					<div class="contact-page-feedback-name"><input type="text" name="name" placeholder="Tên" value="<?php if(isset($_SESSION['user'])){ echo $_SESSION['user']['name']; } ?>"></div>
					<div class="contact-page-feedback-email"><input name="email" type="email" placeholder="Email" value="<?php if(isset($_SESSION['user'])){ echo $_SESSION['user']['email']; } ?>"></div>
					<div class="contact-page-feedback-title"><input name="title" type="text" placeholder="Tiêu đề"></div>
					<div class="contact-page-feedback-content"><input name="content" type="text" placeholder="Lời nhắn"></div>
					<button type="submit" name="feedback" class="contact-page-feedback-submit">Gửi</button>
				</form>
			</div>
			<div class="contact-col-2 wow fadeInLeft">
				<h3 class="contact-info-title">Thông tin liên hệ</h3>
				<p>Học viện Công nghệ Bưu chính Viễn Thông</p>
				<p>Số điện thoại: 01649.616.425</p>
				<p>Email:nguyenkhanh97nd@gmail.com</p>
			</div>
			<div class="contact-col-3 wow fadeInLeft">
				<h3 class="contact-about-title wow fadeInLeft">Về chúng tôi</h3>
				<p>
					Đắm mình trong không gian cổ kính của Hà Nội, bạn không những được tận hưởng cảm xúc thi vị của phố cổ, mà còn được thưởng thức hương vị Pháp ngay trong lòng Thủ Đô.
					Nằm trên con phố đông đúc và cổ kính, Bánh Ngọt Pháp Anh Hòa từ lâu đã trở thành điểm đến của những người yêu thích Bánh Ngọt Pháp. Với niềm đam mê về chất Pháp, Bánh Ngọt Pháp Anh Hòa đã mang hương vị pháp “nguyên chất” đến với những thực khách Việt Nam.
					Bánh Ngọt Pháp Anh Hòa là một thương hiệu nổi tiếng cho những ai yêu thích văn hóa ẩm thực Pháp. Nằm trên cái “chất” của Hà Nội, chất phố cổ, chất của người tìm về cội nguồn văn hóa, du khách sẽ bắt gặp Bánh Ngọt Pháp Anh Hòa tại Số 8 Ngõ Trạm, Hà Nội...       
				</p>
			</div>
		</div><!--End Row-->
	</div><!--End container -->
</div><!--End content-->
<!-- Gọi Footer -->
	<?php require('site/views/commons/footer.php'); ?>

</body>
</html>