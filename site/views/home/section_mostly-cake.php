<section id="mostly-cake">
			<div class="container">
				<div class="row">

					<div class="mostly-cake-header">
						<h2>MẪU MỚI NHẤT</h2>
						<h6 class="mostly-cake-description">
							Những mẫu mới nhất được cửa hàng cập nhật.
						</h6>
					</div>


				
					<div class="mostly-cake-content wow fadeInLeft">

				<?php foreach($homeProdutsMostly as $item){ ?>

						<div class="mostly-wrapper">
							<div class="mostly-content">
								<div class="mostly-image">
									<a href="product/view/<?php echo $item['id']; ?>"><img src="public/images/product/<?php echo $item['image']; ?>"/></a>
								</div>
								<div class="info">
									<span class="name"><?php echo $item['name']; ?></span>
									<span class="price"><?php echo $item['price']; ?></span>
								</div>
							</div>
						</div>

				<?php } ?>

						
					
					</div>

				</div><!--End Row-->
			</div><!--End Container-->
		</section>