<section id="exp-cake">
			<div class="container">
				<div class="row">

					<div class="exp-cake-header">
						<h2>TIN TỨC CỬA HÀNG</h2>
						<h6 class="exp-cake-description">
							Những tin tức mới nhất của cửa hàng hướng dẫn cách làm bánh, các loại bánh mới, các chương trình khuyến mại.
						</h6>
					</div>
	
					<div class="exp-cake-content wow fadeInLeft">

<?php foreach($homeNewNews as $item){  ?>

						<div class="wrapper-content">
							<div class="feature-content">
								<div class="feature-image">
									<a href="news/view/<?php echo $item['id']; ?>"><img src="public/images/news/<?php echo $item['image']; ?>"/></a>
								</div>
								<h3><a href="news/view/<?php echo $item['id']; ?>"><?php echo $item['name']; ?></a></h3>
								<div class="feature-info">
									Đăng bởi <a><?php echo $item['author'] ?></a> | <?php echo date("d/m/Y",strtotime($item['date'])) ?>
								</div>
								<p><?php echo $item['brief']; ?></p>
							</div>
						</div>

<?php } ?>

						

					</div>

				</div><!--End Row-->
			</div><!--End Container-->
		</section>