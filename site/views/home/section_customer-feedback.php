<section id="customer-feedback">
			<div class="container">
				<div class="row">

					<div class="feedback-header">
						<h2>Ý KIẾN KHÁCH HÀNG</h2>
						<h6 class="feedback-description">
							Chúng tôi luôn tôn trọng mọi ý kiến của khách hàng. Chúng tôi luôn luôn phát triển để mang lại dịch vụ tốt nhất cho khách hàng
						</h6>
					</div>

				</div><!--End Row-->
			</div><!--End Container-->
		</section>
		
		<!--Form gửi ý kiến phản hồi , FEEDBACK-->
		<section id="feedback">
			<div class="container">
				<div class="row">

					<div class="feedback-header">
						<h2>GỬI Ý KIẾN PHẢN HỒI CHO CHÚNG TÔI</h2>
						<h6 class="feedback-description">
							Để nhận được dịch vụ chăm sóc tốt nhất, bạn nên điền đầy đủ thông tin bên dưới và gửi cho chúng tôi.
						</h6>
					</div>
					<div class="feedback-form">
						<form action="feedback" method="POST">
							<div class="feedback-row wow fadeInLeft">
								<div class="feedback-name">
									<input type="text" name="name" placeholder="Họ tên" value="<?php if(isset($_SESSION['user'])){ echo $_SESSION['user']['name']; } ?>">
								</div>
								<div class="feedback-email">
									<input type="email" name="email" placeholder="Email" value="<?php if(isset($_SESSION['user'])){ echo $_SESSION['user']['email']; } ?>">
								</div>
								<div class="feedback-title">
									<input type="text" name="title" placeholder="Tiêu đề">
								</div>
							</div>

							<div class="feedback-content wow fadeInRight">
								<textarea class="feedback-write" name="content" placeholder="Lời nhắn"></textarea>
							</div>
							<button type="submit" name="feedback" class="feedback-submit wow fadeInLeft">Gửi phản hồi</button>
						</form>
					</div>
				</div><!--End row-->
			</div><!--End container -->
		</section><!--End Section Contact -->