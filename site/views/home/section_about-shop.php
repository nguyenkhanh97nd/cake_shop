<section id="about-shop">
			<div class="container">
				<div class="row">

					<div class="about-header">
						<h2>SWEET CAKE</h2>
						<h6 class="about-description">
							Mang đến những chiếc bánh ngọt ngào là hạnh phúc của chúng tôi
						</h6>
					</div>

					<div class="about-content">
						<div class="about-logo">
							<img src="public/images/home/tiembanh.png" class="wow fadeInLeft" />
						</div>
						<div class="about-slogan wow fadeInUp" >
							<img src="public/images/home/typo-about.png"/>
							<p>Được tận hưởng cảm xúc thi vị của phố cổ, mà còn được thưởng thức hương vị Pháp ngay trong lòng Thủ Đô. Nằm trên con phố đông đúc và cổ kính, Bánh Ngọt Pháp Anh Hòa từ lâu đã trở thành điểm đến của những người yêu thích Bánh Ngọt Pháp</p>
						</div>
						


						<div class="about-list wow fadeInRight">
							<ul>
								<li class="skill">
									<div class="skill-count">
										<span class="icon">
											<img src="public/images/home/tick-icon.png">
										</span>
									</div>
									<h6>
										<a href="">BÁNH KEM</a>
									</h6>
									<p>
										Những mẫu bánh mới nhất trong năm nay do chính chúng tôi thiết kế.
									</p>
								</li>
								<li class="skill">
									<div class="skill-count">
										<span class="icon">
											<img src="public/images/home/tick-icon.png">
										</span>
									</div>
									<h6>
										<a href="">BÁNH NGỌT</a>
									</h6>
									<p>
										Những mẫu bánh mới nhất trong năm nay do chính chúng tôi thiết kế.
									</p>
								</li>
								<li class="skill">
									<div class="skill-count">
										<span class="icon">
											<img src="public/images/home/tick-icon.png">
										</span>
									</div>
									<h6>
										<a href="">BÁNH GATO</a>
									</h6>
									<p>
										Những mẫu bánh mới nhất trong năm nay do chính chúng tôi thiết kế.
									</p>
								</li>
								<li class="skill">
									<div class="skill-count">
										<span class="icon">
											<img src="public/images/home/tick-icon.png">
										</span>
									</div>
									<h6>
										<a href="">KINH NGHIỆM LÀM BÁNH</a>
									</h6>
									<p>
										Hướng dẫn và chia sẻ kinh nghiệm để tạo ra những sản phẩm tốt nhất.
									</p>
								</li>
							</ul>
						</div><!--End about list-->

						<div class="images-shop">
							<h5>
								<span>HÌNH ẢNH TIỆM BÁNH NGỌT NGÀO</span>
							</h5>
						</div>

					</div><!--End about-content-->

					<!--Slider hiển thị hình ảnh của shop-->
					<script type="text/javascript">
						$(document).ready(function(){
							function startSlider(){

								/*Cứ mỗi 3 giây thì margin left 500px (là chiều rộng của slide). càng margin thì càng lùi */
								interval = setInterval(function(){
									/*Mất 1 giây để kéo. người dùng có 2 giây để xem*/
									$('#slider ul').animate({ 'margin-left':"-=220"},1000,function(){
										/*Chuyên slide 1 ra ngay sau slide cuối*/
										$('#slider ul li:first').appendTo('#slider ul');
										/*Đặt lại margin để trừ */
										$('#slider ul').css('margin-left',0);
									});
								},3000);
							}
							function pauseSlider(){
								clearInterval(interval);
							}
							$('#slider ul').on('mouseenter',pauseSlider).on('mouseleave',startSlider);
							startSlider();
						});
					</script>

					<div id="slider" class="wow fadeInRight">
						<ul>
							<li><img src="public/images/home/anhtiembanh_1.png"></li>
							<li><img src="public/images/home/anhtiembanh_2.png"></li>
							<li><img src="public/images/home/anhtiembanh_3.png"></li>
							<li><img src="public/images/home/anhtiembanh_4.png"></li>
							<li><img src="public/images/home/anhtiembanh_5.png"></li>
							<li><img src="public/images/home/anhtiembanh_6.png"></li>
						</ul>
					</div>

				</div><!--End Row-->
			</div><!--End Container-->
		</section>